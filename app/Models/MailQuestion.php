<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MailQuestion extends Model
{
    use HasFactory;

    protected $fillable = [ 'lawyer_id','fullname','email', 'question','is_read'];

    public function user()
    {
        return $this->belongsTo(User::class,'lawyer_id');
    }
}
