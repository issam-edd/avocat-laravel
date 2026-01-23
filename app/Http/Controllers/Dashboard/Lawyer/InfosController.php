<?php

namespace App\Http\Controllers\Dashboard\Lawyer;

use App\Models\File;
use App\Models\Client;
use App\Models\FileInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File as F;


class InfosController extends Controller
{
    function index()
    {
        $lawyer = Auth::user()->id;

        $clients_id = Client::where("lawyer_id",$lawyer)->pluck("id");

        $files = File::whereIn("client_id", $clients_id)->orderBy("created_at", "DESC")->get();

        return view("dashboard.lawyer.managments.files.infos.index",[
            "files" => $files
        ]);
    }


    function create(File $file) {
        return view("dashboard.lawyer.managments.files.infos.create-info",compact('file'));
    }
    function cleanString($text)
    {
        $utf8 = array(
            '/[áàâãªä]/u'   =>   'a',
            '/[ÁÀÂÃÄ]/u'    =>   'A',
            '/[ÍÌÎÏ]/u'     =>   'I',
            '/[íìîï]/u'     =>   'i',
            '/[éèêë]/u'     =>   'e',
            '/[ÉÈÊË]/u'     =>   'E',
            '/[óòôõºö]/u'   =>   'o',
            '/[ÓÒÔÕÖ]/u'    =>   'O',
            '/[úùûü]/u'     =>   'u',
            '/[ÚÙÛÜ]/u'     =>   'U',
            '/ç/'           =>   'c',
            '/Ç/'           =>   'C',
            '/ñ/'           =>   'n',
            '/Ñ/'           =>   'N',
            '/–/'           =>   '-', // UTF-8 hyphen to "normal" hyphen
            '/[’‘‹›‚]/u'    =>   '', // Literally a single quote
            '/[“”«»„]/u'    =>   '', // Double quote
            '/_/'           =>   '-', // nonbreaking space (equiv. to 0x160)
            '/ /'           =>   '', // nonbreaking space (equiv. to 0x160)
        );
        return preg_replace(array_keys($utf8), array_values($utf8), $text);
    }

    function store(Request $request, File $file)
    {
        $this->validate($request, [
            'file_array' => 'required',
            'file_array.*' => 'mimes:doc,pdf,docx,zip,png,jpg,jpeg'

        ]);
        foreach($request->file('file_array') as $fileA)
        {
            if($request->hasfile('file_array'))
            {
                $fileName = "/files/infos/". $file->id . "/" . time() . "_" . $this->cleanString($fileA->getClientOriginalName());

                $fileA->move(public_path()."/files/infos/". $file->id . "/", $fileName);

                FileInfo::create([
                    "file_id" => $file->id,
                    "name_file" => $fileA->getClientOriginalName(),
                    "path_file" => $fileName
                ]);
            }
        }

        return to_route("lawyer.infos.index", compact("file"))
        ->with('success','info file ajouter avec succés');
    }

    function allInfos(File $file) {
        return view("dashboard.lawyer.managments.files.infos.all-infos",compact('file'));
    }

    function downloadFile(FileInfo $FileInfo, File $file)
    {
        $filepath = public_path($FileInfo->path_file);
        return Response::download($filepath);
    }

    function destroy(FileInfo $FileInfo) {
        $filepath = public_path($FileInfo->path_file);
        if (F::exists($filepath)) {
            unlink($filepath);
        }
        $FileInfo->delete();
        $file = $FileInfo->file;
        return to_route('lawyer.infos.all',compact('file'))->with([
            'success' => "Fichier supprimer avec succés"
        ]);
    }
}
