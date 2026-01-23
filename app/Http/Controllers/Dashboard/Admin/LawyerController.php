<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Models\Faq;
use App\Models\User;
use App\Models\Footer;
use App\Models\OneSection;
use App\Models\LandingPage;
use App\Models\UsersPeople;
use Illuminate\Support\Str;
use App\Models\LawyerDetail;
use Illuminate\Http\Request;
use App\Models\LawyerExpertise;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request as FacadesRequest;

class LawyerController extends Controller
{
    //

    function index()
    {
        return view("dashboard.admin.managments.avocats.index")->with([
            "avocats" => User::has('lawyerDetail')->where("role", 0)->orderBy("created_at", "DESC")->get()
        ]);
    }
    function avocatPremium()
    {
        $lawyer_id = LawyerDetail::where("is_premium", 1)->pluck('lawyer_id');

        return view("dashboard.admin.managments.avocats.index")->with([
            "avocats" => User::has('lawyerDetail')->where("role", 0)->whereIn("id", $lawyer_id)->orderBy("created_at", "DESC")->get()
        ]);
    }

    function show($id)
    {
        // dd($id);
        $avocat = User::findorFail($id);
        return view("dashboard.admin.managments.avocats.show", compact("avocat"));
    }


    function create()
    {
        return view("dashboard.admin.managments.avocats.create");
    }

    function login($id) {
        User::findOrFail($id);
        Auth::loginUsingId($id);

        return redirect()->route('lawyer.index');
    }

    function store(Request $request)
    {
        // dd($request->post());
        // echo $request->first_name_ar;
        $this->validate($request, [
            "first_name" => "required",
            "last_name" => "required",
            "email" => "required|unique:users",
            "password" => "required",
            "first_name_ar" => "required",
            "last_name_ar" => "required",
        ]);

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'remember_token' => Str::random(10),
            'password' => Hash::make($request->password)
        ]);
        $lastId = $user->id;

        $is_premium = $request->is_premium === "on" ? 1 : 0;
        $first_name = Str::replace(' ', '-', $request->first_name);
        $last_name = Str::replace(' ', '-', $request->last_name);

        $slug = $first_name . '-' . $last_name . '-' . time();
        // echo $slug;
        LawyerDetail::create([
            "lawyer_id" => $lastId,
            "slug" => $slug,
            "full_name_ar" => $request->first_name_ar . ' ' . $request->last_name_ar,
            "full_name_fr" => $request->first_name . ' ' . $request->last_name,

            'first_name_ar' => $request->first_name_ar,
            'last_name_ar' => $request->last_name_ar,

            "phone_number" => $request->phone_number,
            "is_premium" => $is_premium,
            "bio_ar" => $request->bio_ar,
            "bio_fr" => $request->bio_fr,
            "address" => $request->address,
            "google_maps_link" => $request->google_maps_link,
            "whatsapp_link" => $request->whatsapp_link,
            "linkedin_link" => $request->linkedin_link
        ]);
        $Lawyer_detail_lastId = LawyerDetail::latest()->first()->id;
        LawyerExpertise::create([
            "lawyer_id" => $Lawyer_detail_lastId
        ]);
        Footer::create([
            "lawyer_id" => $Lawyer_detail_lastId
        ]);
        $faqs = [
            [
            "lawyer_id" => $lastId,
            "question_fr" => 'Quels sont les services juridiques de l\'entreprise ?',
            "question_ar" => 'ما هي خدمات الشركة القانونية؟',
            "answer_fr" => 'Notre cabinet d\'avocats propose une large gamme de services juridiques, notamment des conseils juridiques, la préparation de documents juridiques, la documentation, l\'arbitrage, la médiation, la défense des clients devant les tribunaux, etc. Veuillez nous contacter pour plus de détails sur nos services.',
            "answer_ar" => 'توفر شركتنا القانونية مجموعة واسعة من الخدمات القانونية، بما في ذلك استشارات قانونية وإعداد الوثائق القانونية والتوثيق والتحكيم والوساطة والدفاع عن العملاء في المحاكم والمزيد. يرجى الاتصال بنا للحصول على مزيد من التفاصيل حول الخدمات التي نقدمها.',
            ],
            [
                "lawyer_id" => $lastId,
                "answer_fr" => 'Nous offrons des conseils juridiques initiaux gratuits aux nouveaux clients. Veuillez nous contacter pour planifier une consultation juridique gratuite.',
                "question_ar" => 'هل يمكنني الحصول على استشارة قانونية مجانية؟',
                "question_fr" => 'Puis-je bénéficier de conseils juridiques gratuits ?',
                "answer_ar" => 'نحن نقدم استشارات قانونية أولية مجانية للعملاء الجدد. يرجى الاتصال بنا لتحديد موعد استشارة قانونية مجانية.',
            ],
            [
                "lawyer_id" => $lastId,
                "question_fr" => 'Quelles mesures dois-je prendre si j\'ai un accident ou une blessure personnelle?',
                "question_ar" => 'ما هي الخطوات التي يجب اتخاذها إذا تعرضت لحادثة أو إصابة شخصية؟',
                "answer_fr" => 'Si vous subissez un accident ou une blessure corporelle, vous devez obtenir immédiatement les soins médicaux nécessaires, puis contacter notre cabinet d\'avocats pour obtenir des conseils juridiques sur vos droits et les actions en justice qui peuvent être prises. Vous devez également conserver tous les documents et rapports médicaux pertinents et rassembler toute preuve à l\'appui de votre demande d\'indemnisation.',
                "answer_ar" => 'إذا تعرضت لحادثة أو إصابة شخصية، يجب عليك الحصول على الرعاية الطبية اللازمة في الحال، ثم الاتصال بشركتنا القانونية للحصول على استشارة قانونية حول حقوقك والإجراءات القانونية التي يمكن اتخاذها. يجب عليك أيضًا الحفاظ على جميع الوثائق والتقارير الطبية ذات الصلة وجمع أي أدلة تدعم مطالبتك بالتعويض.',
            ]
        ];

        $faq1 = Faq::create($faqs[0]);
        $faq2 = Faq::create($faqs[1]);
        $faq3 = Faq::create($faqs[2]);

        LandingPage::create([
            "lawyer_id" => $Lawyer_detail_lastId,
            "faq_id_one" => $faq1->id,
            "faq_id_two" => $faq2->id,
            "faq_id_three" => $faq3->id,
        ]);
        // LandingPage::create([
        //     "lawyer_id" => $Lawyer_detail_lastId
        // ]);

        UsersPeople::create([
            "user_id" => $lastId ,
            "type" => "lawyer"
        ]);
        // OneSection::create([
        //     "lawyer_id" => $Lawyer_detail_lastId
        // ]);
        return redirect()->route('admin.avocats')->with([
            'success' => "Avocat est ajouter avec success"
        ]);
    }

    function edit($id)
    {
        // dd($id);
        $avocat = User::findorFail($id);
        return view("dashboard.admin.managments.avocats.edit", compact("avocat"));
    }

    function update(Request $request, $id)
    {
        $this->validate($request, [
            "first_name" => "required",
            "last_name" => "required",
            "first_name_ar" => "required",
            "last_name_ar" => "required",
        ]);
        // dd($request->post());
        //--------- Users Table --------------
        $user = User::findorFail($id);
        if ($user->email !== $request->email) {
            $this->validate($request, [
                "email" => "required|unique:users"
            ]);
        }
        if ($request->password === "") {
            $password = $user->password;
        } else {
            $password = Hash::make($request->password);
        }
        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => $password
        ]);
        $LawyerDetail = LawyerDetail::findorFail($user->lawyerDetail->id);

        // ---------- Lawyer_details table -----------
        $is_premium = $request->is_premium === "on" ? 1 : 0;
        $first_name = Str::replace(' ', '-', $request->first_name);
        $last_name = Str::replace(' ', '-', $request->last_name);
        $slug = $first_name . '-' . $last_name . '-' . time();

        $LawyerDetail->update([
            "slug" => $slug,
            "full_name_ar" => $request->first_name_ar . ' ' . $request->last_name_ar,
            "full_name_fr" => $request->first_name . ' ' . $request->last_name,

            'first_name_ar' => $request->first_name_ar,
            'last_name_ar' => $request->last_name_ar,

            "phone_number" => $request->phone_number,
            "is_premium" => $is_premium,
            "bio_ar" => $request->bio_ar,
            "bio_fr" => $request->bio_fr,
            "address" => $request->address,
            "google_maps_link" => $request->google_maps_link,
            "whatsapp_link" => $request->whatsapp_link,
            "linkedin_link" => $request->linkedin_link
        ]);
        return redirect()->route('admin.avocats')->with([
            'success' => "Avocat est modifier avec success"
        ]);
    }

    function destroy($id)
    {
        $user = User::findorFail($id);
        $user->delete($id);

        return redirect()->route('admin.avocats')->with([
            'success' => "Avocat est supprimer avec success"
        ]);
    }
}
