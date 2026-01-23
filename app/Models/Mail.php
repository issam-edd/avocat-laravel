<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    use HasFactory;
    protected $fillable = [ 'lawyer_id','first_name','last_name','email','phone_number','body','is_read'];

    public function user()
    {
        return $this->belongsTo(User::class,'lawyer_id');
    }
}
