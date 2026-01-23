<?php

namespace App\Http\Controllers\Dashboard\Client;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\ClientFilesInfo;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Response;

class InfoFilesController extends Controller
{
    function index()
    {
        $id_client = Session::get('id_client');
        $client = Client::where('id', $id_client)->first();

        $files = ClientFilesInfo::where("client_id", $id_client)->orderBy("created_at", "DESC")->get();

        return view("dashboard.client.managments.infos.index",[
            "files" => $files
        ]);
    }


    function create() {
        return view("dashboard.client.managments.infos.create");
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

    function store(Request $request)
    {
        $this->validate($request, [
            'file_array' => 'required',
            'file_array.*' => 'mimes:doc,pdf,docx,zip,png,jpg,jpeg'

        ]);
        $id_client = Session::get('id_client');

        foreach($request->file('file_array') as $fileA)
        {
            if($request->hasfile('file_array'))
            {
                $fileName = "/files/infos/client/". $id_client . "/" . time() . "_" . $this->cleanString($fileA->getClientOriginalName());

                $fileA->move(public_path()."/files/infos/client/". $id_client . "/", $fileName);

                ClientFilesInfo::create([
                    "path_file" => $fileName,
                    "client_id" => $id_client,
                    "name_file" => $fileA->getClientOriginalName()
                ]);
            }
        }
        return to_route("client.infos.index")
        ->with('success','info file ajouter avec succés');
    }



    // function allInfos(File $file) {
    //     return view("dashboard.lawyer.managments.files.infos.all-infos",compact('file'));
    // }

    function downloadFile($id)
    {
        $id_client = Session::get('id_client');

        $fileInfo = ClientFilesInfo::where([["client_id",$id_client],["id",$id]])->first();
        $filepath = public_path($fileInfo->path_file);
        return Response::download($filepath);
    }

    function destroy($id)
    {
        $id_client = Session::get('id_client');

        $fileInfo = ClientFilesInfo::where([["client_id",$id_client],["id",$id]])->first();

        $filepath = public_path($fileInfo->path_file);
        if (File::exists($filepath)) {
            unlink($filepath);
        }
        $fileInfo->delete();
        return to_route('client.infos.index')->with([
            'success' => "Fichier supprimer avec succés"
        ]);
    }
}
