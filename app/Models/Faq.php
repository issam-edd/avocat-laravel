<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Faq extends Model
{
    use HasFactory;

    protected $fillable = ["lawyer_id","question_fr","question_ar","answer_fr","answer_ar","is_published"];

    public function user()
    {
        return $this->belongsTo(User::class,'lawyer_id');
    }
}
