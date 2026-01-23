<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OneSection extends Model
{
    use HasFactory;
    protected $fillable = ["lawyer_id",
                            "sub_title", "title",
                            "description", "button_text",

                            "sub_title_ar", "title_ar",
                            "description_ar", "button_text_ar",

                            "button_link","image","is_published", "background"
                        ];
    public function user()
    {
        return $this->belongsTo(User::class, 'lawyer_id');
    }
}
