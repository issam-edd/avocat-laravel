<?php

namespace App\Http\Controllers\Dashboard\Lawyer;

use App\Models\File;
use App\Models\Check;
use App\Models\FileFees;
use App\Models\Virement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File as Path;

class FeesController extends Controller
{

    function index(File $file) {

        return view("dashboard.lawyer.managments.files.fees.all-fees", ["file" => $file ]);
    }

    function show(FileFees $fileFees) {
        return view("dashboard.lawyer.managments.files.fees.show-fees", ["fileFees" => $fileFees ]);
    }

    function editFees(FileFees $fileFees) {
        // dump($fileFees);
        return view("dashboard.lawyer.managments.files.fees.edit-fees", ["fileFees" => $fileFees ]);
    }


    function create(File $file) {
        return view("dashboard.lawyer.managments.files.fees.create-fees",compact('file'));
    }

    function type($type)
    {
        switch ($type) {
            case 1 :
                return 'Check';
                break;
            case 2 :
                return 'Virement';
                break;
            case 3 :
                return 'Cash';
                break;
            default:
                return 'Error';
                break;
        }
    }

    function updateFees(Request $request ,FileFees $fileFees)
    {
        Validator::extend('without_spaces', function($attr, $value){
            return preg_match('/^\S*$/u', $value);
        });

        $formFieldsExpense = $request->validate([
            "date" => "required",
            "advance" => "required|numeric|min:1|max:999999999999999.99|regex:/^\d+(\.\d{1,2})?$/|without_spaces",
            // "amount" => "required|numeric|min:1|max:999999999999999.99|regex:/^\d+(\.\d{1,2})?$/",
            "type" => "required|numeric|min:1|max:999999999999999.99|regex:/^\d+(\.\d{1,2})?$/",
            "description" => "required"
        ]);

        unset($formFieldsExpense['type']);
        $type = $request->type;

        $formFieldsExpense["type"] = $this->type($type) ;

        // $formFieldsImageExpense = [];
        // if($request->has("image_expense")) {
        //     $formFieldsImageExpense = $request->validate([
        //         "image_expense" => "required|image|mimes:png,jpg,jpeg"
        //     ]);
        //     $this->uploadImageExpense($request,$formFieldsImageExpense);
        // }


        $formFieldPayment = [];
        if((int)$type != 3) {

            $id_check = "";
            $id_virement = "";
            $exp = "" ;
            if($fileFees->check != null) {
                $exp = $fileFees->check;
                $id_check = $fileFees->check->id;
            }elseif($fileFees->virement != null) {
                $exp = $fileFees->virement;
                $id_virement = $fileFees->virement->id;
            }

            if((int)$type == 1){
                if($request->has("image")) {
                    $formFieldPayment = $request->validate([
                        "numero" => "required|numeric|min:1|max:999999999999999.99|regex:/^\d+(\.\d{1,2})?$/",
                        "image" => "required|image|mimes:png,jpg,jpeg"
                    ]);
                }else{
                    $formFieldPayment = $request->validate([
                        "numero" => "required|numeric|min:1|max:999999999999999.99|regex:/^\d+(\.\d{1,2})?$/",
                    ]);
                }
                $formFieldPayment["file_fees_id"] = $fileFees->id;

                if(!!$exp) {
                    $this->uploadImageUpdate($request,$formFieldPayment, $exp  );
                }else{
                    $this->uploadImage($request,$formFieldPayment);
                }
                Check::create($formFieldPayment);
            }elseif((int)$type == 2){

                if($request->has("image")) {
                    $formFieldPayment = $request->validate([
                        "image" => "required|image|mimes:png,jpg,jpeg"
                    ]);
                }
                $formFieldPayment["file_fees_id"] = $fileFees->id;

                if(!!$exp) {
                    $this->uploadImageUpdate($request,$formFieldPayment, $exp);
                }else{
                    $this->uploadImage($request,$formFieldPayment);
                }
                Virement::create($formFieldPayment);
            }
            // delete Old Check And virement
            if(!!$id_check) {
                $check = Check::findOrFail($id_check);

                if(Storage::disk('public')->exists($check->image) && $formFieldPayment['image'] != $check->image) {
                    Storage::disk('public')->delete($check->image);
                }
                $check->delete();
            }
            if(!!$id_virement) {
                $virement = Virement::findOrFail($id_virement);

                if(Storage::disk('public')->exists($virement->image) && $formFieldPayment['image'] != $virement->image) {
                    Storage::disk('public')->delete($virement->image);
                }
                $virement->delete();
            }
        }else {
            if($fileFees->check != null) {
                // $check = ExpenseCheck::findOrFail($id_check);

                if(Storage::disk('public')->exists($fileFees->check->image)) {
                    Storage::disk('public')->delete($fileFees->check->image);
                }
                $fileFees->check->delete();
            }elseif($fileFees->virement != null) {
                if(Storage::disk('public')->exists($fileFees->virement->image)) {
                    Storage::disk('public')->delete($fileFees->virement->image);
                }
                $fileFees->virement->delete();
            }
        }

        $fileFees->fill([...$formFieldsExpense])->save();
        // return to_route("lawyer.expenses.index")->with([
        //     "success" => "expense modifier avec succés"
        // ]);
        $file = $fileFees->file;
        return to_route("lawyer.fees.index", compact('file'))->with([
            'success' => "Expense est modifier avec succés"
        ]);
    }
    // {
    //     dd($request->post());
    // }
    private function uploadImageUpdate(Request $request,array &$formFields, object &$fees)
    {
        unset($formFields['image']);
        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('fees','public');
            if(!is_null($fees->image)) {
                Storage::disk('public')->delete($fees->image);
            }
        }else {
            if(!!$fees) {
                $formFields['image'] = $fees->image;
            }
        }
    }

    function store(Request $request ,File $file)
    {
        $formFieldsfees = $request->validate([
            "advance" => "required|numeric|min:1|max:9999999999999999|regex:/^\d+(\.\d{1,2})?$/",
            "date" => "required",
            "type" => "required|numeric|min:1|max:9999999999999999|regex:/^\d+(\.\d{1,2})?$/",
            "description" => "required"
        ]);
        $formFieldsfees["file_id"] = $file->id ;
        unset($formFieldsfees['type']);



        $type = $request->type;
        $formFieldsfees["type"] = $this->type($type) ;

        FileFees::create($formFieldsfees);

        if(!!$type && $type != 3) {
            // $formFieldPayment = $request->validate([
            //     "numero" => "required|numeric|min:1|max:9999999999999999|regex:/^\d+(\.\d{1,2})?$/",
            //     "image" => "required"
            // ]);

            if($type == 1){
                $formFieldPayment = $request->validate([
                    "numero" => "required|numeric|min:1|max:999999999999999.99|regex:/^\d+(\.\d{1,2})?$/",
                    "image" => "required"
                ]);
            }elseif( $type == 2){
                $formFieldPayment = $request->validate([
                    "image" => "required"
                ]);
            }

            $last_id_file_fees = FileFees::latest('id')->first()->id;

            $formFieldPayment["file_fees_id"] = $last_id_file_fees;

            switch ($type) {
                case 1:
                    $this->uploadImage($request,$formFieldPayment);
                    Check::create($formFieldPayment);
                    break;
                case 2:

                    $this->uploadImage($request,$formFieldPayment);
                    Virement::create($formFieldPayment);
                    break;
                default:
                    back();
                    break;
            }
        }
        return to_route("lawyer.fees.index",compact("file"))->with([
            "success" => "fees ajouter avec succés"
        ]);
    }


    private function uploadImage(Request $request,array &$formFields)
    {
        unset($formFields['image']);
        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('fees','public');
        }
    }


    function delete(FileFees $fileFees)
    {
        if(!!$fileFees->check){
            Storage::disk('public')->delete($fileFees->check->image);

            $fileFees->check->delete();
            $fileFees->delete();
        }elseif(!!$fileFees->virement){
            Storage::disk('public')->delete($fileFees->virement->image);

            $fileFees->virement->delete();
            $fileFees->delete();
        }

        $file = $fileFees->file;
        return to_route("lawyer.fees.index", compact('file'))->with([
            'success' => "Fees supprimer avec succés"
        ]);
    }


}
