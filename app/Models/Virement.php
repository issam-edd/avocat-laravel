<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Virement extends Model
{
    use HasFactory;

    protected $fillable = ["file_fees_id","image"];

    function filefees(){
        $this->belongsTo(FileFees::class,"file_fees_id");
    }
}
