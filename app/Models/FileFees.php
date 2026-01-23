<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileFees extends Model
{
    use HasFactory;


    protected $fillable = ["file_id","advance","date","type","description"];

    function file(){
        return $this->belongsTo(File::class, 'file_id');
    }

    function check(){
        return $this->hasOne(Check::class, 'file_fees_id');
    }

    function virement(){
        return $this->hasOne(Virement::class, 'file_fees_id');
    }
}
