<?php

namespace App\Http\Controllers\Dashboard\Client;

use App\Models\File;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class AdminFileController extends Controller
{
    //
    function index() {
        $id_client = Session::get('id_client');

        // $client = Client::where('id', $id_client)->first();

        $files = File::where('client_id', $id_client)->get();

        return view("dashboard.client.managments.files.index",[
            "files" => $files
        ]);
    }
}
