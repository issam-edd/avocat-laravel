<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpensesFile extends Model
{
    use HasFactory;

    protected $fillable = ["file_id",
            "expense","description" ,
            "date","type","amount",
            "image_expense"];

    function file(){
        return $this->belongsTo(File::class, 'file_id');
    }

    function check(){
        return $this->hasOne(ExpenseCheck::class, 'expenses_file_id');
    }

    function virement(){
        return $this->hasOne(ExpenseVirement::class, 'expenses_file_id');
    }
}
