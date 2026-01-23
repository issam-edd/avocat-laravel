<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LawyerMail extends Model
{
    use HasFactory;

    protected $fillable = [ 'lawyer_id','first_name','last_name','email','phone_number','body','is_read'];

    public function user()
    {
        return $this->belongsTo(User::class,'lawyer_id');
    }
}
