<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LawyerExpertise extends Model
{
    use HasFactory;
    protected $fillable = [
                    "lawyer_id","car_accident",
                    "business_law","civil_litigation",
                    "insurance_defence","employment_law",
                    "business_litigation","workers_law",
                    "family_law"
                        ];


    public function user()
    {
        return $this->belongsTo(LawyerDetail::class,'lawyer_id');
    }
}
