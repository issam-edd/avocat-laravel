<?php

namespace App\Http\Controllers\Dashboard\Lawyer;

use Mpdf\Mpdf;
use App\Models\Model;
use App\Models\ModelFile;
use App\Models\LawyerDetail;
use Illuminate\Http\Request;
// use PhpOffice\PhpWord\Writer\PDF;
use Mpdf\Output\Destination;

use App\Models\ModelCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use PhpOffice\PhpWord\TemplateProcessor;
// require_once APPPATH.'/third_party/mpdf/src/Mpdf.php';


class AdminModelController extends Controller
{

    function index()
    {
        return view("dashboard.lawyer.managments.models.index")->with([
            "categories" => ModelCategory::has("modelFiles")
                ->get()
        ]);
    }
    function indexUploaded()
    {
        $modelFiles = ModelFile::where("lawyer_id",Auth::user()->id)->pluck('model_category_id');

        return view("dashboard.lawyer.managments.models.uploaded.index")->with([
            "categories" => ModelCategory::has("modelFiles")
                            ->whereIn('id',[...$modelFiles])
                            ->get()
        ]);
    }

    function getFormUpload() {
        return view('dashboard.lawyer.managments.models.upload',[
            "categories" => ModelCategory::all()
        ]);
    }

    function showFiles($id)
    {
        // $modelFiles = ModelFile::where([["model_category_id", $id],['lawyer_id', auth()->user()->id]])->get();
        $modelFiles = ModelFile::where([["model_category_id", $id],["lawyer_id",NULL]])->get();

        if ($modelFiles) {
            return view("dashboard.lawyer.managments.models.show-model-files", [
                "modelFiles" => $modelFiles
            ]);
        }
        return redirect()->back();
    }

    function showFilesUploaded($id)
    {
        // $modelFiles = ModelFile::where([["model_category_id", $id],['lawyer_id', auth()->user()->id]])->get();
        $modelFiles = ModelFile::where([["model_category_id", $id],["lawyer_id",auth()->user()->id]])->get();

        if ($modelFiles) {
            return view("dashboard.lawyer.managments.models.uploaded.show-model-files", [
                "modelFiles" => $modelFiles
            ]);
        }
        return redirect()->back();
    }

    function downloadFile($file_name = null)
    {
        $filepath = public_path('/storage/models/generated/' . $file_name);
        return Response::download($filepath);
    }

    function downloadFileUploaded($file_name = null)
    {
        $user = Auth::user();
        $filepath = public_path("/storage/models/lawyers/$user->id/generated/" . $file_name);
        return Response::download($filepath);
    }



    function create($id)
    {
        $model = ModelFile::FindOrFail($id);
        return view("dashboard.lawyer.managments.models.create", compact('model'));
    }

    function createUploaded($id)
    {
        $model = ModelFile::FindOrFail($id);
        return view("dashboard.lawyer.managments.models.uploaded.create", compact('model'));
    }

    public function downloadPDF($id_models)
    {
        $model = Model::find($id_models);
        $user = Auth::user();

        $data = $model->options;

        $array = json_decode($data, true);
        $array_key = array_keys($array);
        $array_value = array_values($array);

        $data = [];
        for ($i = 0; $i < count($array_key); $i++) {
            $data[$array_key[$i]] = $array_value[$i];
        }
        $lawyer = $user->lawyerDetail;
        $lawyer_name = $lawyer->nom_ar . ' ' . $lawyer->prenom_ar;
        $data["lawyerName"] = $lawyer_name;

        //create PDF
        $mpdf = new Mpdf();
        $pathView = $model->modelFile->view_path;

        // return $data;
        $mpdf->WriteHTML(view("$pathView", ['data' => $data]));

        //return the PDF for download
        return $mpdf->Output('invoice.pdf', Destination::DOWNLOAD);
    }


    function store(Request $request)
    {
        $user = Auth::user();
        $model = ModelFile::findOrFail($request->model_file_id);

        $t = [];
        $m = $model->options;
        $opts = array_keys($m);
        for ($i = 0; $i < count($opts); $i++) {
            $t[$m[$i]["option_variable"]] = $request[$m[$i]["option_variable"]];
        }

        //-------- generate docx ---------------------
        $file = $model->file_path;
        $document = new TemplateProcessor($file);

        $lawyer = $user->lawyerDetail;
        $lawyer_name = $lawyer->nom_ar . ' ' . $lawyer->prenom_ar;

        $document->setValues($request->all());
        $document->setValue('lawyerName', $lawyer_name);

        $path = time() . '.docx';

        Storage::disk('public')->putFileAs('models/generated', $file, $path);
        $pathToSave = public_path('/storage/models/generated/' . $path);

        $document->saveAs($pathToSave);

        // ________________________________________________________________________

        $model_options = json_encode($t);

        Model::create([
            "lawyer_id" => auth()->user()->id,
            "model_file_id" => $request->model_file_id,
            "name" => $request->name,
            "path" => $path,
            "options" => $model_options
        ]);

        return redirect()->route("lawyer.models.files.all")->with([
            "success" => "Model est ajouter avec succès"
        ]);
    }

    function storeModelUploded(Request $request)
    {
        $user = Auth::user();
        $model = ModelFile::findOrFail($request->model_file_id);

        // return $model;

        $t = [];
        $m = $model->options;
        $opts = array_keys($m);
        for ($i = 0; $i < count($opts); $i++) {
            $t[$m[$i]["option_variable"]] = $request[$m[$i]["option_variable"]];
        }

        //-------- generate docx ---------------------
        $file = $model->file_path;
        $document = new TemplateProcessor($file);

        $lawyer = $user->lawyerDetail;
        $lawyer_name = $lawyer->nom_ar . ' ' . $lawyer->prenom_ar;

        $document->setValues($request->all());
        $document->setValue('lawyerName', $lawyer_name);

        $directory = "models/lawyers/$user->id/generated/";

        if (!Storage::exists($directory)) {
            Storage::disk('public')->makeDirectory($directory, $mode = 0777, true, true);
        }
        $path = time().'_'. date('Y_m_d') . '.docx';
        Storage::disk('public')->putFileAs($directory, $file, $path);

        $pathToSave = public_path('/storage'.'/' . $directory . $path);

        $document->saveAs($pathToSave);
        // ________________________________________________________________________

        $model_options = json_encode($t);

        Model::create([
            "lawyer_id" => auth()->user()->id,
            "model_file_id" => $request->model_file_id,
            "name" => $request->name,
            "path" => $path,
            "options" => $model_options
        ]);

        return redirect()->route("lawyer.models.files.all.uploaded")->with([
            "success" => "Model est ajouter avec succès"
        ]);
    }

    function storeCreateNewModelFile(Request $request)
    {
        $data = [];

        foreach($request->options as $option) {
            $data[] = $option;
        }
        $this->validate($request,[
            'word' => 'required|mimes:doc,docx'
        ]);
        // ---------- test ----------
        // category 1
        // $data = [
        //     [
        //         'id' => 1,
        //         'option_name' => 'حرر في (تاريخ)',
        //         'option_variable' => 'date',
        //         'type' => 'date'
        //     ],
        //     [
        //         'id' => 2,
        //         'option_name' => 'حرر في (مكان)',
        //         'option_variable' => 'place',
        //         'type' => 'text'
        //     ],
        //     [
        //         'id' => 3,
        //         'option_name' => 'السيد',
        //         'option_variable' => 'fullname',
        //         'type' => 'text'
        //     ],
        //     [
        //         'id' => 4,
        //         'option_name' => 'الساكن',
        //         'option_variable' => 'address',
        //         'type' => 'text'
        //     ],
        //     [
        //         'id' => 5,
        //         'option_name' => 'شركة ',
        //         'option_variable' => 'company',
        //         'type' => 'text'
        //     ],
        //     [
        //         'id' => 6,
        //         'option_name' => 'الحادثة وقعت بتاريخ ',
        //         'option_variable' => 'accedentDate',
        //         'type' => 'date'
        //     ],
        //     [
        //         'id' => 7,
        //         'option_name' => 'شركة التأمين',
        //         'option_variable' => 'assurance',
        //         'type' => 'text'
        //     ],
        //     [
        //         'id' => 8,
        //         'option_name' => 'ممثل القانوني للشركة',
        //         'option_variable' => 'companyRepresenter',
        //         'type' => 'text'
        //     ],
        //     [
        //         'id' => 9,
        //         'option_name' => 'مقر شركةالتامين ',
        //         'option_variable' => 'assuranceAddress',
        //         'type' => 'text'
        //     ],
        //     [
        //         'id' => 10,
        //         'option_name' => 'المرفقــات',
        //         'option_variable' => 'attachements',
        //         'type' => 'text'
        //     ]
        // ];

        $category = $request->model_category_id;
        $user = Auth::user();
        $directory = "models/lawyers/$user->id/categories/$category/";
        if (!Storage::exists($directory)) {
            Storage::disk('public')->makeDirectory($directory, $mode = 0777, true, true);
        }
        // create model file
        $model = ModelFile::create([
            'model_category_id' => $category, // catgorie 1
            'name' => $request->name,
            'file_path' => '..',
            'options' => $data,
            'lawyer_id' => $user->id
        ]);
        Storage::disk('public')->putFileAs($directory, $request->word, "$model->id.docx");
        // // file path (model_files) // catgorie 1
        $filepath = storage_path("app/public/models/lawyers/$user->id/categories/$category/$model->id.docx");

        $model->update([
            'file_path' => $filepath
        ]);
        return redirect()->route("lawyer.models.uploaded")->with([
            "success" => "Model est ajouter avec succès"
        ]);
    }
    function destroyModelFileUploaded($id)
    {
        $modelEdit = ModelFile::findOrFail($id);
        $user = Auth::user();

        Storage::disk('public')->delete("models/lawyers/$user->id/generated/{$modelEdit->path}");
        $modelEdit->delete();
        return redirect()->route("lawyer.models.files.all.uploaded")->with([
            "success" => "Model est supprimer avec succès"
        ]);
    }
    function storeCreateNewModel(Request $request)
    {
        $user = Auth::user();
        $model = ModelFile::findOrFail($request->model_file_id);

        $t = [];
        $m = $model->options;
        $opts = array_keys($m);
        for ($i = 0; $i < count($opts); $i++) {
            $t[$m[$i]["option_variable"]] = $request[$m[$i]["option_variable"]];
        }

        //-------- generate docx ---------------------
        $file = $model->file_path;
        $document = new TemplateProcessor($file);

        $lawyer = $user->lawyerDetail;
        $lawyer_name = $lawyer->nom_ar . ' ' . $lawyer->prenom_ar;

        $document->setValues($request->all());
        $document->setValue('lawyerName', $lawyer_name);

        $path = time() . '_' . date('Y_m_d') . '.docx'; // name

        Storage::disk('public')->putFileAs("app/public/models/lawyers/$user->id/generated/", $file, $path);
        $pathToSave = public_path("app/public/models/lawyers/$user->id/generated/" . $path);

        $document->saveAs($pathToSave);

        // ________________________________________________________________________

        $model_options = json_encode($t);

        Model::create([
            "lawyer_id" => auth()->user()->id,
            "model_file_id" => $request->model_file_id,
            "name" => $request->name,
            "path" => $path,
            "options" => $model_options
        ]);

        return redirect()->route("lawyer.models.files.all.uploaded")->with([
            "success" => "Model est ajouter avec succès"
        ]);
    }

    function edit($id)
    {
        $model = Model::findOrFail($id);
        $modelFiles = ModelFile::FindOrFail($model->model_file_id);

        return view("dashboard.lawyer.managments.models.edit", [
            "model" => $model,
            "modelFiles" => $modelFiles
        ]);
    }
    function editUploaded($id)
    {
        $model = Model::findOrFail($id);
        $modelFiles = ModelFile::findOrFail($model->model_file_id);

        return view("dashboard.lawyer.managments.models.uploaded.edit", [
            "model" => $model,
            "modelFiles" => $modelFiles
        ]);
    }

    function update(Request $request, $id)
    {
        $modelEdit = Model::findOrFail($id);
        // dd($request->post());

        $user = auth()->user();
        $model = ModelFile::findOrFail($request->model_file_id);

        $file = $model->file_path;
        $document = new TemplateProcessor($file);

        $lawyer = $user->lawyerDetail;
        $lawyer_name = $lawyer->nom_ar . ' ' . $lawyer->prenom_ar;

        // -------
        $t = [];
        $m = $model->options;
        $opts = array_keys($m);
        for ($i = 0; $i < count($opts); $i++) {
            $t[$m[$i]["option_variable"]] = $request[$m[$i]["option_variable"]];
        }
        //--------
        $document->setValues($request->all());
        $document->setValue('lawyerName', $lawyer_name);

        // DELETE OLD word
        Storage::disk('public')->delete("models/generated/{$modelEdit->path}");

        $path = time() . '.docx';

        Storage::disk('public')->putFileAs('models/generated', $file, $path);
        $pathToSave = public_path('/storage/models/generated/' . $path);

        $document->saveAs($pathToSave);

        $model_options = json_encode($t);

        $modelEdit->update([
            "lawyer_id" => auth()->user()->id,
            "model_file_id" => $request->model_file_id,
            "name" => $request->name,
            "path" => $path,
            "options" => $model_options
        ]);

        return redirect()->route("lawyer.models.files.all")->with([
            "success" => "Model est modifier avec succès"
        ]);
    }
    function updateUploaded(Request $request, $id)
    {
        $modelEdit = Model::findOrFail($id);
        // dd($request->post());

        $user = auth()->user();
        $model = ModelFile::findOrFail($request->model_file_id);

        $file = $model->file_path;
        $document = new TemplateProcessor($file);

        $lawyer = $user->lawyerDetail;
        $lawyer_name = $lawyer->nom_ar . ' ' . $lawyer->prenom_ar;

        // -------
        $t = [];
        $m = $model->options;
        $opts = array_keys($m);
        for ($i = 0; $i < count($opts); $i++) {
            $t[$m[$i]["option_variable"]] = $request[$m[$i]["option_variable"]];
        }
        //--------
        $document->setValues($request->all());
        $document->setValue('lawyerName', $lawyer_name);

        // DELETE OLD word
        $directory = "models/lawyers/$user->id/generated";

        Storage::disk('public')->delete($directory."/{$modelEdit->path}");

        $path = time() . '.docx';

        Storage::disk('public')->putFileAs($directory . '/', $file, $path);

        $pathToSave = public_path('/storage'.'/'. $directory .'/' . $path);

        $document->saveAs($pathToSave);

        $model_options = json_encode($t);

        $modelEdit->update([
            "lawyer_id" => auth()->user()->id,
            "model_file_id" => $request->model_file_id,
            "name" => $request->name,
            "path" => $path,
            "options" => $model_options
        ]);

        return redirect()->route("lawyer.models.files.all.uploaded")->with([
            "success" => "Model est modifier avec succès"
        ]);
    }


    function destroy($id)
    {
        $modelEdit = Model::findOrFail($id);
        Storage::disk('public')->delete("models/generated/{$modelEdit->path}");
        $modelEdit->delete();
        return redirect()->route("lawyer.models.files.all")->with([
            "success" => "Model est supprimer avec succès"
        ]);
    }

    function destroyUploaded($id)
    {
        $modelEdit = Model::findOrFail($id);
        $user = Auth::user();

        Storage::disk('public')->delete("models/lawyers/$user->id/generated/{$modelEdit->path}");
        $modelEdit->delete();
        return redirect()->route("lawyer.models.files.all.uploaded")->with([
            "success" => "Model est supprimer avec succès"
        ]);
    }
    function destroyModel($category, $modelFile)
    {
        $user = Auth::user();
        $modelFile = ModelFile::findOrFail($modelFile);

        // if(Storage::disk('public')->delete("models/lawyers/$user->id/categories/$category/$modelFile.docx")) {
            Storage::disk('public')->delete("models/lawyers/$user->id/categories/$category/$modelFile->id.docx");
        // }
        $modelFile->delete();
        return redirect()->route("lawyer.models.uploaded");
    }

    function getModelFiles()
    {
        return view("dashboard.lawyer.managments.models.show-all")->with([
            "models" => Model::where('lawyer_id', auth()->user()->id)->get()
        ]);
    }

    function getModelFilesUploaded()
    {
        $modelFiles = ModelFile::where("lawyer_id",Auth::user()->id)->pluck('id');
        return view("dashboard.lawyer.managments.models.uploaded.show-all")->with([
                        "models" => Model::whereIn('model_file_id',[...$modelFiles])
                                ->get()
        ]);
    }
}
