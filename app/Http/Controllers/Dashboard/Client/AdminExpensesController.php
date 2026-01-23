<?php

namespace App\Http\Controllers\Dashboard\Client;

use App\Models\File;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AdminExpensesController extends Controller
{
    //
    function index($id_file) {
        $id_client = Session::get('id_client');

        $files = File::where([['client_id', $id_client],['id',$id_file]]);
        if($files->exists()){
            // dd($files->get());
            return view("dashboard.client.managments.files.expenses",["file" => $files->first()]);
        }else{
            return redirect('/404');
        }
    }


    function show($id_file,$id_expense) {
        $id_client = Session::get('id_client');

        $file = File::where([['client_id', $id_client],['id',$id_file]])->first();

        $expenses = $file->expensesFiles()->where('id', $id_expense);
        if($expenses->exists()){
            // dd($expenses->first());
            return view("dashboard.client.managments.files.show-expenses",["expenseFile" => $expenses->first()]);
        }else{
            return redirect('/404');
        }
        // dd($expenses);
    }
}
