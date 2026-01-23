<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as m;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ModelFile extends m
{
    use HasFactory;


    protected $fillable = ["id","model_category_id","name","file_path","options","lawyer_id"];

    protected $casts = [ // json convert array
        'options' => 'array'
    ];

    function modelCategorie(){
        return $this->belongsTo(ModelCategory::class, 'model_category_id');
    }

    function models(){
        return $this->hasMany(Model::class, 'model_file_id');
    }
}
