<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventProcedure extends Model
{
    use HasFactory;
    protected $fillable = ["lawyer_id", "slug",
                            "avocacy_division", "color",
                            "file_id","exist",
                            "file_reference","client_name","phone_number",
                            "title","date_debut","date_fin","procedure_id",
                            "procedure_description","procedure_result"
                        ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    function file(){
        return $this->belongsTo(File::class, 'file_id');
    }

    function procedure(){
        return $this->belongsTo(Procedure::class, 'procedure_id');
    }


}
