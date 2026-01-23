<?php

namespace App\Http\Controllers\Dashboard\Client;

use App\Models\File;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class AdminClientController extends Controller
{
    //
    function index() {
        // // Nombre file
        // // Nombre expence
        // // Nombre Fees
        $id_client = Session::get('id_client');
        $client = Client::where('id', $id_client)->first();

        // $files_id = File::where('client_id', $id_client)->pluck('id');

        // $arrayFees = [];
        // $arrayExpenses = [];

        // for($i=0;$i<count($files_id);$i++) {
        //     $nbrExpenses = DB::select('CALL count_expense_by_file('.$files_id[$i].')' );
        //     $nbrFees = DB::select('CALL count_fees_by_file('.$files_id[$i].')' );
        //     $arrayExpenses[] = $nbrExpenses[0];
        //     $arrayFees[] = $nbrFees[0];
        // }
        // // ----------
        // $object_encoded_expense = json_encode( $arrayExpenses );
        // $object_decoded_exp = json_decode( $object_encoded_expense, true );

        // $AExp = array_values($object_decoded_exp);
        // $sumAExp = 0;
        // for($i = 0; $i < count($AExp); $i++) {
        //     $sumAExp += array_values(array_values($AExp[$i]))[0] ;
        // }
        // // -----------
        // $object_encoded_fees = json_encode( $arrayFees );
        // $object_decoded_fes = json_decode( $object_encoded_fees, true );

        // $AFees = array_values($object_decoded_fes);
        // $sumAFees = 0;
        // for($i = 0; $i < count($AFees); $i++) {
        //     $sumAFees += array_values(array_values($AFees[$i]))[0] ;
        // }
        // print_r( extract(get_object_vars($arrayExpenses[0])));
        // echo "Nombre Fees : ". (string)$sumAFees ."<hr/>" . "Nombre Exp : ". (string)$sumAExp;
        // dd($files_id);

        return view("dashboard.client.index",[
            "files" => File::where("client_id",$id_client)->latest(),
            // "sumFees" => $sumAFees,
            // "sumExpenses" => $sumAExp,
        ]);
    }
}
