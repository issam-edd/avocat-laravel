<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    use HasFactory;
    protected $fillable = [ "file_id",
                            "date_debut","date_fin",
                            "title","description","result"];

    function file(){
        return $this->belongsTo(File::class, 'file_id');
    }
}
