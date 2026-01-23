<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileInfo extends Model
{
    use HasFactory;

    protected $fillable = ["file_id","path_file","name_file"];

    function file(){
        return $this->belongsTo(File::class, 'file_id');
    }
}
