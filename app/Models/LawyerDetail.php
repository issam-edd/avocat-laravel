<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LawyerDetail extends Model
{
    use HasFactory;

    protected $fillable = [
            "lawyer_id",
            "slug",
            "full_name_ar",
            "full_name_fr",
            "first_name_ar",
            "last_name_ar",
            "phone_number",
            "is_premium",
            "bio_ar",
            "bio_fr",
            "address",
            "google_maps_link",
            "whatsapp_link",
            "linkedin_link"
    ];
    public function user()
    {
        return $this->belongsTo(User::class,'lawyer_id');
    }

    public function lawyerExpertise()
    {
        return $this->hasMany(LawyerExpertise::class, 'lawyer_id', 'id');
    }

    public function blogs()
    {
        return $this->hasMany(LawyerBlog::class, 'lawyer_id');
    }

    function lawyerLandingPage()
    {
        return $this->hasOne(LandingPage::class,'lawyer_id');
    }

    function faqs() {
        return $this->hasMany(Faq::class, 'lawyer_id', 'lawyer_id');
    }

    function slides() {
        return $this->hasMany(OneSection::class, 'lawyer_id');
    }

    function page() {
        return $this->hasOne(LandingPage::class,'lawyer_id');
    }

}
