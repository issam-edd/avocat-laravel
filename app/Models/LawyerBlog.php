<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LawyerBlog extends Model
{
    use HasFactory;

    protected $fillable = ["lawyer_id","title","body"
                            ,"title_ar","body_ar"
                            , "title_ar","body_ar",
                            "image_link","is_published"];

    public function user()
    {
        return $this->belongsTo(User::class,'lawyer_id');
    }

    public function lawyer()
    {
        return $this->belongsTo(LawyerDetail::class,'lawyer_id');
    }
}
