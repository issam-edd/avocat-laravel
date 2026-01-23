<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCategory extends Model
{
    use HasFactory;
    
    protected $fillable = ["id","name"];

    function modelFiles(){
        return $this->hasMany(ModelFile::class, 'model_category_id');
    }

}
