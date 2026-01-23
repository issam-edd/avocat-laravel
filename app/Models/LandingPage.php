<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandingPage extends Model
{
    use HasFactory;
    protected $fillable = [     "lawyer_id",
                                "hero_description","hero_button_text"
                                ,"service_one_title","service_one_description","service_two_title","service_two_description",
                                "service_three_title","service_three_description",
                                "service_four_title","service_four_description",

                                "service_one_title_ar","service_one_description_ar",
                                "service_two_title_ar","service_two_description_ar",
                                "service_three_title_ar","service_three_description_ar",
                                "service_four_title_ar","service_four_description_ar",

                                "about_me_text","about_me_text_ar",

                                "counter_years_experience","counter_clients","counter_cases","counter_partners",
                                "faq_id_one","faq_id_two","faq_id_three",
                                "about_me_image","hero_background"
                            ];

    public function lawyerOneFaq()
    {
        return $this->hasOne(Faq::class, 'faq_id_one');
    }

    public function lawyerTwoFaq()
    {
        return $this->hasOne(Faq::class, 'faq_id_two');
    }

    public function lawyerThreeFaq()
    {
        return $this->hasOne(Faq::class, 'faq_id_three');
    }

    public function lawyerDetail(){
        return $this->belongsTo(LawyerDetail::class,'lawyer_id');
    }
}
