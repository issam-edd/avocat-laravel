<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelList extends Model
{

    use HasFactory;
    protected $casts = [ // json convert array
        'options' => 'array'
    ];
    protected $fillable = [
        "lawyer_id", "model_file_id",
        "name" ,"path", "options"
    ] ;

    function modelFile(){
        return $this->belongsTo(ModelFile::class, 'model_file_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'lawyer_id');
    }
}
