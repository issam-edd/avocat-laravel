<?php

namespace App\Http\Controllers\Mail;

use App\Models\User;
use App\Mail\WelcomeMail;
use App\Models\AdminMail;
use App\Models\LawyerMail;
use App\Mail\SendAdminMail;
use Illuminate\Support\Str;
use App\Mail\AttachmentMail;
use App\Models\LawyerDetail;
use App\Models\MailQuestion;
use Illuminate\Http\Request;
use App\Mail\ContactLawyerMail;
use App\Mail\ContactAllLawyerMail;
use App\Models\Mail as ModelsMail;
use App\Http\Controllers\Controller;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class EmailsController extends Controller
{
    //

    // function verifyEmail()
    // {

    //     $mailData = [
    //         'title' => 'Mail from ismail',
    //         'body' => 'testing email'
    //     ];

    //     Mail::to('laineis294@gmail.com')->send(new WelcomeMail($mailData));

    //     dd("Email is sent successfully.");
    // }


    function contactSendtest()
    {
        $mailData = [
            "title" => "Avocats Marrakech",
            "email" => "ismail@gmail.com",
            "first_name" => "Rhrraf",
            "last_name" => "Ismail",
            "phone_number" => "0694332279",
            "address" => "IBN TACHFINE Azli",
            "body" => "Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.",
        ];
        // lawyer mail
        Mail::to("laineis294@gmail.com")->send(new ContactLawyerMail($mailData));

        dd("Email is sent successfully.");
    }

    function contactSend(Request $request, $id)
    {
        $lawyer = LawyerDetail::where("lawyer_id",$id)->first();
        // $lawyer = LawyerDetail::where("slug",$id)->first();
        $mailData = [
            "title" => "Avocats Marrakech",
            "email" => $request->email,
            "first_name" => $request->first_name ,
            "last_name" => $request->last_name,
            "phone_number" => $request->first_name,
            "address" => 'fake address',
            "body" => $request->body
        ];
        // lawyer mail
        Mail::to($lawyer->user->email)->send(new ContactLawyerMail($mailData));

        ModelsMail::create([
            // "lawyer_id" => $lawyer->id,
            "lawyer_id" => $id,
            "first_name" => $request->first_name ,
            "last_name" => $request->last_name ,
            "email" => $request->email ,
            "phone_number" => $request->phone_number ,
            "address" => 'fake address' ,
            "body" => $request->body ,
        ]);
        LawyerMail::create([
            "lawyer_id" => $id,
            "first_name" => $request->first_name ,
            "last_name" => $request->last_name ,
            "email" => $request->email ,
            "phone_number" => $request->phone_number ,
            "address" => 'fake adresse' ,
            "body" => $request->body ,
        ]);
        return redirect()->back()->with([
            "success" => "تم إرسال البريد الإلكتروني بنجاح"
        ]);
    }

    function contactSendAllLawyerPremium(Request $request)
    {
        $user_id_premium = LawyerDetail::where('is_premium', 1)->pluck("lawyer_id") ;

        $user_email_premium = User::whereIn("id", $user_id_premium)->get();

        $mailData = [
            "title" => "Avocats Marrakech",
            "email" => $request->email,
            "fullname" => $request->fullname ,
            "phone" => $request->phone ,
            "question" => $request->question,
        ];

        // lawyer mail
        foreach($user_email_premium as $user):
            $mailData['user'] = $user;
            Mail::to($user->email)->send(new ContactAllLawyerMail($mailData));
        endforeach;

        foreach($user_email_premium as $user):
            MailQuestion::create([
                "lawyer_id" => $user->id,
                "fullname" => $request->fullname ,
                "question" => $request->question ,
                "phone" => $request->phone ,
                "email" => $request->email ,
            ]);
        endforeach;

        return redirect()->route('send.success');
    }

    function contactAdminSend(Request $request)
    {
        // $admin = User::where("role",1)->first();
        $admin = 'icfmarrakech@gmail.com';
        $mailData = [
            "email" => $request->email,
            "first_name" => $request->first_name ,
            "last_name" => $request->last_name,
            "phone_number" => $request->first_name,
            "body" => $request->body
        ];
        // admin mail
        Mail::to($admin)->send(new SendAdminMail($mailData));

        AdminMail::create([
            "first_name" => $request->first_name ,
            "last_name" => $request->last_name ,
            "email" => $request->email ,
            "phone_number" => $request->phone_number ,
            "body" => $request->body ,
        ]);
        return redirect()->back()->with([
            "success" => "تم إرسال البريد الإلكتروني بنجاح"
        ]);
    }

    function showReponseMail($id){
        $mail = LawyerMail::findOrFail($id);

        return view("lawyer.reponse.mail.show", compact("mail"));
    }

    function reponseMail(Request $request, $id) {
        $mail = LawyerMail::findOrFail($id);

        return view("dashboard.lawyer.managements.mail",$mail);
    }

    function testConsultation() {


        $user = User::create(
            [
                'first_name'=> "Yassine" ,
                'last_name'=> "El Aatmani" ,
                'email'=> "devyassine@gmail.com" ,
                'email_verified_at' => NULL,
                'password' => Hash::make("12345"),
                'remember_token' => Str::random(10),
                'profile_image' => 'images/users/lawyer_6.jpg',
                'role' => 0
            ]
        );

        $mailData = [
            "title" => "Avocats Marrakech",
            "email" => "",
            "fullname" => "Yassine" ,
            "phone" => "0606060606" ,
            "question" => "J'ai eu un accident et je ne sais pas quoi faire, dois-je prendre un avocat ?",
        ];

        $lawyer = LawyerDetail::create([
            "lawyer_id" => $user->id ,
            "slug" => "-",
            "full_name_ar" => "-",
            "full_name_fr" => "Yassine El Aatmani",
            "phone_number" => "-",
            "is_premium" => 1,
            "bio_ar" => "-",
            "bio_fr" => "-",
            "address" => "-",
            "google_maps_link" => "-",
            "whatsapp_link" => "-",
            "linkedin_link" => "-"
    ]);

        // lawyer mail
        $mailData['user'] = $user;
        Mail::to("devyassine47@gmail.com")->send(new TestMail($mailData));

        $lawyer->delete();
        $user->delete();


        return "Sent !";
    }
}
