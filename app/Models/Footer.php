<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    protected $fillable = ["lawyer_id",
                        "phone_number_one",
                        "phone_number_two",
                        "email_address_one",
                        "email_address_two",
                        "address"
                        ];
}
