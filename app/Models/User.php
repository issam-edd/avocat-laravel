<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Mail;
use App\Models\LawyerDetail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'profile_image',
        'last_name',
        'email',
        'password','otp'
    ];

    public function lawyerBlog()
    {
        return $this->hasMany(LawyerBlog::class, 'lawyer_id');
    }

    public function lawyernavbarlink()
    {
        return $this->hasOne(LawyerNavbarLink::class, 'lawyer_id');
    }

    public function lawyerDetail()
    {
        return $this->hasOne(LawyerDetail::class, 'lawyer_id');
    }

    // Pour Lawyer
    public function lawyerMail()
    {
        return $this->hasOne(LawyerMail::class, 'lawyer_id');
    }
    // Pour L Admin
    public function mail()
    {
        return $this->hasOne(Mail::class, 'lawyer_id');
    }

    // Pour Lawyer
    public function lawyerQuestion()
    {
        return $this->hasOne(MailQuestion::class, 'lawyer_id');
    }

    public function lawyerfaq()
    {
        return $this->hasMany(Faq::class, 'lawyer_id');
    }


    public function models()
    {
        return $this->hasMany(Model::class, 'lawyer_id');
    }

    public function lawyerOneSections()
    {
        return $this->hasMany(OneSection::class, 'lawyer_id');
    }












    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



}
