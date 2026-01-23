<?php

namespace App\Http\Controllers\Dashboard\Lawyer;

use App\Models\File;
use App\Models\Client;
use App\Models\ExpenseCheck;
use App\Models\ExpensesFile;
use Illuminate\Http\Request;
use App\Models\ExpenseVirement;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File as Path;

class ExpensesController extends Controller
{
    //
    function index()
    {
        $lawyer = Auth::user()->id;

        $clients_id = Client::where("lawyer_id",$lawyer)->pluck("id");

        $files = File::whereIn("client_id", $clients_id)->orderBy("created_at", "DESC")->get();

        return view("dashboard.lawyer.managments.files.expenses.index",[
            "files" => $files
        ]);
    }

    function editExpenses(ExpensesFile $expenseFile) {
        return view("dashboard.lawyer.managments.files.expenses.edit-expense", ["expenseFile" => $expenseFile ]);
    }

    function allExpenses(File $file) {
        return view("dashboard.lawyer.managments.files.expenses.all-expenses", ["file" => $file ]);
    }

    function create(File $file) {
        return view("dashboard.lawyer.managments.files.expenses.create-expense",compact('file'));
    }

    function show(ExpensesFile $expenseFile) {
        // dd($expenseFile);
        return view("dashboard.lawyer.managments.files.expenses.show-expense", ["expenseFile" => $expenseFile ]);
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

    function store(Request $request ,File $file)
    {
        $formFieldsExpense = $request->validate([
            "date" => "required",
            "expense" => "required|numeric|min:1|max:999999999999999.99|regex:/^\d+(\.\d{1,2})?$/",
            "amount" => "required|numeric|min:1|max:999999999999999.99|regex:/^\d+(\.\d{1,2})?$/",
            "type" => "required|numeric|min:1|max:999999999999999.99|regex:/^\d+(\.\d{1,2})?$/",
            "description" => "required"
        ]);
        $formFieldsExpense["file_id"] = $file->id ;

        unset($formFieldsExpense['type']);
        $type = $request->type;

        $formFieldsExpense["type"] = $this->type($type) ;

        $formFieldsImageExpense = [];
        if($request->has("image_expense")) {
            $formFieldsImageExpense = $request->validate([
                "image_expense" => "required|image|mimes:png,jpg,jpeg"
            ]);
            $this->uploadImageExpense($request,$formFieldsImageExpense);
        }


        ExpensesFile::create([...$formFieldsExpense, ...$formFieldsImageExpense]);

        if(!!$type && $type != 3) {
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

            $last_id_file_expense = ExpensesFile::latest('id')->first()->id;

            $formFieldPayment["expenses_file_id"] = $last_id_file_expense;

            switch ($type) {
                case 1:
                    $this->uploadImage($request,$formFieldPayment);
                    ExpenseCheck::create($formFieldPayment);
                    break;
                case 2:
                    $this->uploadImage($request,$formFieldPayment);
                    ExpenseVirement::create($formFieldPayment);
                    break;
                default:
                    back();
                    break;
            }
        }
        return to_route("lawyer.expenses.index")->with([
            "success" => "fees ajouter avec succés"
        ]);
    }

    // function updateExpenses(Request $request ,ExpensesFile $expenseFile)
    // {
    //     // dd($request->post());
    //     Validator::extend('without_spaces', function($attr, $value){
    //         return preg_match('/^\S*$/u', $value);
    //     });

    //     $formFieldsExpense = $request->validate([
    //         "date" => "required",
    //         "expense" => "required|numeric|min:1|max:999999999999999.99|regex:/^\d+(\.\d{1,2})?$/|without_spaces",
    //         "amount" => "required|numeric|min:1|max:999999999999999.99|regex:/^\d+(\.\d{1,2})?$/",
    //         "type" => "required|numeric|min:1|max:999999999999999.99|regex:/^\d+(\.\d{1,2})?$/",
    //         "description" => "required"
    //     ]);
    //     // $formFieldsExpense["file_id"] = $file->id ;

    //     unset($formFieldsExpense['type']);
    //     $type = $request->type;

    //     $formFieldsExpense["type"] = $this->type($type) ;

    //     $formFieldsImageExpense = [];
    //     if($request->has("image_expense")) {
    //         $formFieldsImageExpense = $request->validate([
    //             "image_expense" => "required|image|mimes:png,jpg,jpeg"
    //         ]);
    //         $this->uploadImageExpense($request,$formFieldsImageExpense);
    //     }

    //     $expenseFile->fill([...$formFieldsExpense, ...$formFieldsImageExpense])->save();

    //     $formFieldPayment = [];
    //     if($type != 3) {
    //         if($type == 1){
    //             if($request->has("image")) {
    //                 $formFieldPayment = $request->validate([
    //                     "numero" => "required|numeric|min:1|max:999999999999999.99|regex:/^\d+(\.\d{1,2})?$/",
    //                     "image" => "required"
    //                 ]);
    //             }else{
    //                 $formFieldPayment = $request->validate([
    //                     "numero" => "required|numeric|min:1|max:999999999999999.99|regex:/^\d+(\.\d{1,2})?$/",
    //                 ]);
    //             }
    //         }elseif( $type == 2){
    //             if($request->has("image")) {
    //                 $formFieldPayment = $request->validate([
    //                     "image" => "required"
    //                 ]);
    //             }
    //         }

    //         // $last_id_file_expense = ExpensesFile::latest('id')->first()->id;
    //         $formFieldPayment["expenses_file_id"] = $expenseFile->id;

    //         if($expenseFile->check != null) {
    //             $exp = $expenseFile->check;
    //         }else if($expenseFile->virement != null) {
    //             $exp = $expenseFile->virement;
    //         }
    //         switch ($type) {
    //             case 1:
    //                 $this->uploadImageUpdate($request,$formFieldPayment, $exp  );

    //                 ExpenseCheck::create($formFieldPayment);
    //                 break;
    //             case 2:
    //                 $this->uploadImageUpdate($request,$formFieldPayment, $exp);

    //                 ExpenseVirement::create($formFieldPayment);
    //                 break;
    //             default:
    //                 back();
    //                 break;
    //         }
    //         if($expenseFile->virement != null) {
    //             $expenseFile->virement->delete();
    //         }
    //         if($expenseFile->check != null) {
    //             $expenseFile->check->delete();
    //         }
    //     }
    //     return to_route("lawyer.expenses.index")->with([
    //         "success" => "expense modifier avec succés"
    //     ]);
    // }

    // function updateExpenses(Request $request ,ExpensesFile $expenseFile){
    //     dd($request->post());
    // }

    function updateExpenses(Request $request ,ExpensesFile $expenseFile)
    {
        Validator::extend('without_spaces', function($attr, $value){
            return preg_match('/^\S*$/u', $value);
        });

        $formFieldsExpense = $request->validate([
            "date" => "required",
            "expense" => "required|numeric|min:1|max:999999999999999.99|regex:/^\d+(\.\d{1,2})?$/|without_spaces",
            "amount" => "required|numeric|min:1|max:999999999999999.99|regex:/^\d+(\.\d{1,2})?$/",
            "type" => "required|numeric|min:1|max:999999999999999.99|regex:/^\d+(\.\d{1,2})?$/",
            "description" => "required"
        ]);

        unset($formFieldsExpense['type']);
        $type = $request->type;

        $formFieldsExpense["type"] = $this->type($type) ;

        $formFieldsImageExpense = [];
        if($request->has("image_expense")) {
            $formFieldsImageExpense = $request->validate([
                "image_expense" => "required|image|mimes:png,jpg,jpeg"
            ]);
            $this->uploadImageExpense($request,$formFieldsImageExpense);
        }


        $formFieldPayment = [];
        if((int)$type != 3) {

            $id_check = "";
            $id_virement = "";
            $exp = "" ;
            if($expenseFile->check != null) {
                $exp = $expenseFile->check;
                $id_check = $expenseFile->check->id;
            }elseif($expenseFile->virement != null) {
                $exp = $expenseFile->virement;
                $id_virement = $expenseFile->virement->id;
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
                $formFieldPayment["expenses_file_id"] = $expenseFile->id;

                if(!!$exp) {
                    $this->uploadImageUpdate($request,$formFieldPayment, $exp  );
                }else{
                    $this->uploadImage($request,$formFieldPayment);
                }
                ExpenseCheck::create($formFieldPayment);
            }elseif((int)$type == 2){

                if($request->has("image")) {
                    $formFieldPayment = $request->validate([
                        "image" => "required|image|mimes:png,jpg,jpeg"
                    ]);
                }
                $formFieldPayment["expenses_file_id"] = $expenseFile->id;

                if(!!$exp) {
                    $this->uploadImageUpdate($request,$formFieldPayment, $exp);
                }else{
                    $this->uploadImage($request,$formFieldPayment);
                }
                ExpenseVirement::create($formFieldPayment);
            }
            // delete Old Check And virement
            if(!!$id_check) {
                $check = ExpenseCheck::findOrFail($id_check);

                if(Storage::disk('public')->exists($check->image) && $formFieldPayment['image'] != $check->image) {
                    Storage::disk('public')->delete($check->image);
                }
                $check->delete();
            }
            if(!!$id_virement) {
                $virement = ExpenseVirement::findOrFail($id_virement);

                if(Storage::disk('public')->exists($virement->image) && $formFieldPayment['image'] != $virement->image) {
                    Storage::disk('public')->delete($virement->image);
                }
                $virement->delete();
            }
        }else {
            if($expenseFile->check != null) {
                // $check = ExpenseCheck::findOrFail($id_check);

                if(Storage::disk('public')->exists($expenseFile->check->image)) {
                    Storage::disk('public')->delete($expenseFile->check->image);
                }
                $expenseFile->check->delete();
            }elseif($expenseFile->virement != null) {
                if(Storage::disk('public')->exists($expenseFile->virement->image)) {
                    Storage::disk('public')->delete($expenseFile->virement->image);
                }
                $expenseFile->virement->delete();
            }
        }
        $expenseFile->fill([...$formFieldsExpense, ...$formFieldsImageExpense])->save();


        // return to_route("lawyer.expenses.index")->with([
        //     "success" => "expense modifier avec succés"
        // ]);
        $file = $expenseFile->file;
        return to_route("lawyer.expenses.all", compact('file'))->with([
            'success' => "Expense est modifier avec succés"
        ]);
    }

    private function uploadImage(Request $request,array &$formFields)
    {
        unset($formFields['image']);
        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('expenses','public');
        }
    }

    private function uploadImageUpdate(Request $request,array &$formFields, object &$expense)
    {
        unset($formFields['image']);
        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('expenses','public');
            if(!is_null($expense->image)) {
                Storage::disk('public')->delete($expense->image);
            }
        }else {
            if(!!$expense) {
                $formFields['image'] = $expense->image;
            }
        }
    }

    private function uploadImageExpense(Request $request,array &$formFields)
    {
        unset($formFields['image_expense']);
        if($request->hasFile('image_expense')){
            $formFields['image_expense'] = $request->file('image_expense')->store('expenses','public');
        }
    }

    // function edit(ExpensesFile $expenseFile) {
    //     dd($expenseFile);
    //     // return view("dashboard.lawyer.managments.files.expenses.edit-expense", ["expenseFile" => $expenseFile ]);
    // }

    function delete(ExpensesFile $expenseFile)
    {
        if(!is_null($expenseFile->image_expense)) {
            Storage::disk('public')->delete($expenseFile->image_expense);
        }

        if(!!$expenseFile->check){
            Storage::disk('public')->delete($expenseFile->check->image);
            $expenseFile->check->delete();

        }elseif(!!$expenseFile->virement){
            Storage::disk('public')->delete($expenseFile->virement->image);
            $expenseFile->virement->delete();

        }
        $file = $expenseFile->file;
        $expenseFile->delete();
        return to_route("lawyer.expenses.all", compact('file'))->with([
            'success' => "Expense supprimer avec succés"
        ]);
    }


    function createIncrementAmount(ExpensesFile $expenseFile){
        // echo($expenseFile->file->paid);
        $file = $expenseFile->file;
        return view("dashboard.lawyer.managments.files.expenses.add-paid", compact('file'));
    }

    function storeIncrementAmount(File $file, Request $request) {
        Validator::extend('without_spaces', function($attr, $value){
            return preg_match('/^\S*$/u', $value);
        });

        if(!!$request->paid) {

            $request->validate([
                "paid" => "required|numeric|min:1|max:999999999999999.99|regex:/^\d+(\.\d{1,2})?$/|without_spaces",
            ]);

            $price = $file->paid;
            $total = (int)$price + (int)$request->paid;

            $file->update([
                "paid" => $total
            ]);
            return to_route("lawyer.expenses.index")->with([
                "success" => "prix modifier"
            ]);
        }
        return to_route("lawyer.expenses.index");

        // return view("dashboard.lawyer.managments.files.expenses.add-paid", compact('file'));
    }
}
