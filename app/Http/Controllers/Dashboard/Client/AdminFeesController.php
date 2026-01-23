<?php

namespace App\Http\Controllers\Dashboard\Client;

use App\Models\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class AdminFeesController extends Controller
{
    //
    function index($id_file) {
        $id_client = Session::get('id_client');

        $files = File::where([['client_id', $id_client],['id',$id_file]]);
        if($files->exists()){
            // dd($files->get());
            return view("dashboard.client.managments.files.fees",["file" => $files->first()]);
        }else{
            return redirect('/404');
        }
    }

    function show($id_file,$id_fileFees) {
        $id_client = Session::get('id_client');

        $file = File::where([['client_id', $id_client],['id',$id_file]])->first();

        $fees = $file->fileFees()->where('id', $id_fileFees);
        if($fees->exists()){
            // dd($expenses->first());
            return view("dashboard.client.managments.files.show-fees",["fileFees" => $fees->first()]);
        }else{
            return redirect('/404');
        }
        // dd($expenses);
    }
}
