<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseCheck extends Model
{
    use HasFactory;

    protected $fillable = ["expenses_file_id","numero","image"];

    function expenseFile(){
        $this->belongsTo(ExpensesFile::class,"expenses_file_id");
    }
}
