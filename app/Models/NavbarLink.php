<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NavbarLink extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class,'lawyer_id');
    }
}
