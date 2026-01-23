<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ["lawyer_id","client_name","phone_number"];

    public function user()
    {
        return $this->belongsTo(User::class, 'lawyer_id');
    }

    function files(){
        return $this->hasMany(File::class, 'client_id');
    }


    function fileInfos(){
        return $this->hasMany(ClientFilesInfo::class, 'client_id');
    }
}
