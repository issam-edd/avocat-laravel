<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    protected $fillable = ["avocacy_division","amount"
    ,"file_reference","parties", "parties_involved","client_id"
    ,"paid"
    ];

    function client(){
        return $this->belongsTo(Client::class, 'client_id');
    }

    function expensesFiles(){
        return $this->hasMany(ExpensesFile::class, 'file_id');
    }

    function procedures(){
        return $this->hasMany(Procedure::class, 'file_id');
    }

    function fileFees(){
        return $this->hasMany(FileFees::class, 'file_id');
    }

    function fileInfo(){
        return $this->hasMany(FileInfo::class, 'file_id');
    }

}
