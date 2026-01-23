<?php

namespace App\Http\Controllers\Dashboard\Lawyer;

use App\Models\Faq;
use App\Models\User;
use App\Models\Footer;
use App\Models\OneSection;
use App\Models\LandingPage;
use Illuminate\Support\Str;
use App\Models\LawyerDetail;
use Illuminate\Http\Request;
use App\Models\LawyerExpertise;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class AdminLawyerSettingController extends Controller
{
    //
    function index()
    {
        $user = Auth::user()->id;
        $lawyer = LawyerDetail::where("lawyer_id",$user)->first();
        return view("dashboard.lawyer.managments.settings.index", compact("lawyer"));
    }

    function cleanString($text)
    {
        $utf8 = array(
            '/[áàâãªä]/u'   =>   'a',
            '/[ÁÀÂÃÄ]/u'    =>   'A',
            '/[ÍÌÎÏ]/u'     =>   'I',
            '/[íìîï]/u'     =>   'i',
            '/[éèêë]/u'     =>   'e',
            '/[ÉÈÊË]/u'     =>   'E',
            '/[óòôõºö]/u'   =>   'o',
            '/[ÓÒÔÕÖ]/u'    =>   'O',
            '/[úùûü]/u'     =>   'u',
            '/[ÚÙÛÜ]/u'     =>   'U',
            '/ç/'           =>   'c',
            '/Ç/'           =>   'C',
            '/ñ/'           =>   'n',
            '/Ñ/'           =>   'N',
            '/–/'           =>   '-', // UTF-8 hyphen to "normal" hyphen
            '/[’‘‹›‚]/u'    =>   '', // Literally a single quote
            '/[“”«»„]/u'    =>   '', // Double quote
            '/_/'           =>   '-', // nonbreaking space (equiv. to 0x160)
            '/ /'           =>   '', // nonbreaking space (equiv. to 0x160)
        );
        return preg_replace(array_keys($utf8), array_values($utf8), $text);
    }


    // Verification de password
    // if (!(Hash::check($request->old_password, Auth::user()->password))) {
    //     return response()->json(['errors' => ['Your current password can't be with new password']], 400);
    // }
    function show()
    {
        $user = Auth::user()->id;
        $lawyer = LawyerDetail::where("lawyer_id",$user)->first();
        return view("dashboard.lawyer.managments.settings.edit", compact("lawyer"));
    }

    function update(Request $request)
    {
        // dd($request->post());
        $user = Auth::user();

        $lawyer_user = User::where("id",$user->id)->first();

        $this->validate($request,[
            "last_name" => "required",
            "first_name" => "required",
            "first_name_ar" => "required",
            "last_name_ar" => "required",
            "bio_fr" => "required",
            "bio_ar" => "required",
            "phone_number" => "required",
            "address" => "required",
        ]);

        $Lawyer_detail = LawyerDetail::findorFail($user->lawyerDetail->id);
        // $first_name = Str::replace(' ', '-',$request->first_name);
        // $last_name = Str::replace(' ', '-',$request->last_name);

        // check if slug changed
        if($request->slug != $Lawyer_detail->slug) {
            $this->validate($request, [
                'slug' => "required|unique:lawyer_details,slug"
            ]);
            $slug = $request->slug;
        }
        else {
            $slug = $Lawyer_detail->slug;
        }

        if($request->has("profile_image"))
        {
            $this->validate($request,[
                "profile_image" => "required|image|mimes:png,jpg,jpeg|max:2048"
            ]);

            $image_path = public_path($user->profile_image);
            if(File::exists($image_path) && $user->profile_image !== "images/dashboard/users/profile_default.jpg") {
                unlink($image_path);
            }

            $file = $request->profile_image;
            $imageName = "images/dashboard/users/".time()."-". $slug.".jpg";
            $file->move(public_path("images/dashboard/users"), $imageName);
            $user->profile_image = $imageName;
        }
        if(!empty($request->old_password))
        {
            if (!(Hash::check($request->old_password, $user->password))) {
                return redirect()->route("lawyer.settings.show")->with(['danger' => 'Votre mot de passe ancienne n\'est pas valid']);
            }elseif( !empty($request->new_password) && !empty($request->c_password)
            ) {
                if($request->new_password === $request->c_password) {
                    $password =  Hash::make($request->new_password);
                }else {
                    return redirect()->route("lawyer.settings.show")->with(['danger' => 'Confirmation de mot de passe n\'est pas valid']);
                }
            }else {
                return redirect()->route("lawyer.settings.show")->with(['danger' => 'Entrer nouveau mot de passe et confirmation de mot de passe']);
            }
        }else {
            $password = $user->password;
        }
        $lawyer_user->update([
            'first_name'=>$request->first_name ,
            'last_name'=>$request->last_name ,
            'profile_image'=> $user->profile_image,
            'password' => $password
        ]);



        $Lawyer_detail->update([
            "slug" => $slug,

            "full_name_ar" => $request->first_name_ar . ' ' . $request->last_name_ar ,
            "full_name_fr" => $request->first_name . ' ' . $request->last_name,

            'first_name_ar' => $request->first_name_ar,
            'last_name_ar' => $request->last_name_ar,

            "phone_number" => $request->phone_number,
            "bio_ar" => $request->bio_ar,
            "bio_fr" => $request->bio_fr,
            "address" => $request->address,
            "google_maps_link" => $request->google_maps_link,
            "whatsapp_link" => $request->whatsapp_link,
            "linkedin_link" => $request->linkedin_link
        ]);

        return redirect()->route("lawyer.settings.show")->with([
            "success" => "Profile est modifier avec succés"
        ]);

    }

    function showExpertise() {
        $user = Auth::user()->lawyerDetail->id;
        $expertise = LawyerExpertise::where("lawyer_id", $user)->first();
        return view("dashboard.lawyer.managments.settings.edit_expertise_page", compact("expertise"));
    }

    function updateExpertise(Request $request, $id)
    {
        // dd($request->post());
        $expertise = LawyerExpertise::findOrFail($id);

        $car_accident = $request->car_accident === "on" ? 1 : 0;
        $business_law = $request->business_law === "on" ? 1 : 0;
        $civil_litigation = $request->civil_litigation === "on" ? 1 : 0;
        $insurance_defence = $request->insurance_defence === "on" ? 1 : 0;
        $employment_law = $request->employment_law === "on" ? 1 : 0;
        $business_litigation = $request->business_litigation === "on" ? 1 : 0;
        $workers_law = $request->workers_law === "on" ? 1 : 0;
        $family_law = $request->family_law === "on" ? 1 : 0;

        $expertise->update([
            "car_accident" => $car_accident,
            "business_law" => $business_law,
            "civil_litigation" => $civil_litigation,
            "insurance_defence" => $insurance_defence,
            "employment_law" => $employment_law,
            "business_litigation" => $business_litigation,
            "workers_law" => $workers_law,
            "family_law" => $family_law,
        ]);

        return redirect()->route("lawyer.settings.show.expertise")->with([
            "success" => "Compétence est modifier avec succés"
        ]);
    }



    // function getLandingPage()
    // {
    //     $user = Auth::user()->lawyerDetail->id;
    //     $landing = LandingPage::where("lawyer_id", $user)->first();
    //     $faqs = Faq::where("lawyer_id",$user)->orderBy('created_at', 'desc')->get();

    //     return view("dashboard.lawyer.managments.settings.edit_landing_page", [ "landing" => $landing, "faqs" => $faqs ]);
    // }
    function getLandingPage($id)
    {
        $user = Auth::user();
        $landing = LandingPage::where("lawyer_id", $user->lawyerDetail->id )->first();
        $faqs = Faq::where("lawyer_id",$user->id)->orderBy('created_at', 'desc')->get();

        if($id == 2) {
            return view("dashboard.lawyer.managments.settings.section.section2", [ "landing" => $landing]);
        }else if($id == 3) {
            return view("dashboard.lawyer.managments.settings.section.section3", [ "landing" => $landing]);
        }else if($id == 4){
            return view("dashboard.lawyer.managments.settings.section.section4", [ "landing" => $landing]);
        }else if($id == 5){
            return view("dashboard.lawyer.managments.settings.section.section5", [ "landing" => $landing, "faqs" => $faqs ]);
        }else {
            return redirect()->back();
        }
    }
    function getOneSection($id = null) {
        $user = Auth::user();
        $allSectionOne = OneSection::where("lawyer_id",$user->lawyerDetail->id)->orderBy('created_at', 'desc')->get();

        if($id) {
            $sectionOne = OneSection::findOrFail($id);
            return view("dashboard.lawyer.managments.settings.section.section1", ["sectionOne" => $sectionOne, "allSectionOne" => $allSectionOne]);
        }else{
            return view("dashboard.lawyer.managments.settings.section.section1", [ "allSectionOne" => $allSectionOne]);
        }
        // return $sectionOne;
    }

    function storeOneSection(Request $request) {
        $this->validate($request,[
            "sub_title" => "required",
            "title" => "required",
            "description" => "required",
            "button_text" => "required",

            "sub_title_ar" => "required",
            "title_ar" => "required",
            "description_ar" => "required",
            "button_text_ar" => "required",

            "button_link" => "required",
            "image" => "required|image|mimes:png,jpg,jpeg|max:2048",
            "background" => "required|image|mimes:png,jpg,jpeg|max:2048",
        ]);

        if($request->has("image") && $request->has("background")) {
            $file = $request->image;
            $bg = $request->background;
            $imageName = "images/dashboard/sections/" . time() . "_" . $this->cleanString($file->getClientOriginalName());
            $backgroundName = "images/dashboard/sections/bg_" . time() . "_" . $this->cleanString($bg->getClientOriginalName());
            // $imageName = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path("images/dashboard/sections"), $imageName);
            $bg->move(public_path("images/dashboard/sections"), $backgroundName);
            $status = $request->is_published === "on" ? 1 : 0;
            OneSection::create([
                "lawyer_id"=> Auth::user()->lawyerDetail->id,
                'sub_title'=>$request->sub_title,
                'title'=>$request->title,
                'description'=>$request->description,
                'button_text' => $request->button_text,

                'sub_title_ar'=>$request->sub_title_ar,
                'title_ar'=>$request->title_ar,
                'description_ar'=>$request->description_ar,
                'button_text_ar' => $request->button_text_ar,

                'button_link' => $request->button_link,
                'image'=>$imageName,
                'background' => $backgroundName,
                "is_published" => $status,
            ]);
            return redirect()->route("lawyer.settings.landing.page.section.one.show")->with([
                'success' => "تمت إضافة القسم بنجاح"
            ]);
        }
    }

    function updateOneSection(Request $request, $id) {
        $section = OneSection::findOrFail($id);
        $this->validate($request,[
            "sub_title" => "required",
            "title" => "required",
            "description" => "required",
            "button_text" => "required",

            "sub_title_ar" => "required",
            "title_ar" => "required",
            "description_ar" => "required",
            "button_text_ar" => "required",

            "button_link" => "required",
        ]);

        if($request->has("image")) {
            $this->validate($request, [
                "image" => "required|image|mimes:png,jpg,jpeg"
            ]);

            $image_path = public_path($section->image);

            if(File::exists($image_path)) {
                unlink($image_path);
            }
            $file = $request->image;
            $imageName = "images/dashboard/sections/" . time() . "_" . $this->cleanString($file->getClientOriginalName());
            // $imageName = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path("images/dashboard/sections"), $imageName);
            $section->image = $imageName;
        }

        if($request->has("background")) {
            $this->validate($request, [
                "background" => "required|image|mimes:png,jpg,jpeg",
            ]);

            $bg_path = public_path($section->background);


            if(!!$bg_path && File::exists($bg_path)) {
                unlink($bg_path);
            }

            $bg = $request->background;
            $backgroundName = "images/dashboard/sections/bg_" . time() . "_" . $this->cleanString($bg->getClientOriginalName());
            $bg->move(public_path("images/dashboard/sections"), $backgroundName);
            $section->background = $backgroundName;
        }

        $status = $request->is_published === "on" ? 1 : 0;
        $section->update([
            'sub_title'=>$request->sub_title,
            'title'=>$request->title,
            'description'=>$request->description,
            'button_text' => $request->button_text,
            'button_link' => $request->button_link,

            'sub_title_ar'=>$request->sub_title_ar,
            'title_ar'=>$request->title_ar,
            'description_ar'=>$request->description_ar,
            'button_text_ar' => $request->button_text_ar,

            'image'=> $section->image,
            'background'=> $section->background,
            "is_published" => $status,
        ]);
        return redirect()->route("lawyer.settings.landing.page.section.one.show")->with([
            'success' => "تمت تعديل القسم بنجاح"
        ]);
    }
    function changeStatus($id) {
        $section = OneSection::findOrFail($id);
        $status = $section->is_published == 1 ? 0 : 1;
        // return $status;
        $section->update([
            'is_published' => $status,
        ]);
        return redirect()->route("lawyer.settings.landing.page.section.one.show")->with([
            'success' => "تمت تعديل القسم بنجاح"
        ]);
    }

    function deleteOneSection($id) {
        $section = OneSection::findOrFail($id);

        if(!is_null($section->background)) {
            $background_path = public_path($section->background);
            if(File::exists($background_path)) {
                unlink($background_path);
            }
        }
        if(!is_null($section->image)) {
            $image_path = public_path($section->image);
            if(File::exists($image_path)) {
                unlink($image_path);
            }
        }

        $section->delete();
        return redirect()->route("lawyer.settings.landing.page.section.one.show")->with([
            'success' => "تمت مسح القسم بنجاح"
        ]);
    }

    function updateLandingPage(Request $request, $id)
    {
        $landing = LandingPage::findOrFail($id);

        if($request->has("about_me_image"))
        {
            // $user = Auth::user()->$id;
            $this->validate($request,[
                "about_me_image" => "required|image|mimes:png,jpg,jpeg|max:2048"
            ]);

            $image_path = public_path($landing->about_me_image);

            if(File::exists($image_path) && $landing->about_me_image != NULL && $landing->about_me_image !== "images/dashboard/website/default_about_me_image.jpg") {
                unlink($image_path);
            }

            $file = $request->about_me_image;
            $imageName = "images/dashboard/website/".time()."_". $this->cleanString($file->getClientOriginalName());
            $file->move(public_path("images/dashboard/website"), $imageName);
            $landing->about_me_image = $imageName;
        }

        // if($request->has("hero_background"))
        // {
        //     // $user = Auth::user()->$id;
        //     $this->validate($request,[
        //         "hero_background" => "required|image|mimes:png,jpg,jpeg|max:2048"
        //     ]);

        //     $image_path = public_path($landing->hero_background);
        //     if(File::exists($image_path) && $landing->hero_background !== "images/dashboard/website/default_hero_background.jpg") {
        //         unlink($image_path);
        //     }

        //     $file = $request->hero_background;
        //     $imageName = "images/dashboard/website/".time()."_". $this->cleanString($file->getClientOriginalName());
        //     $file->move(public_path("images/dashboard/website"), $imageName);
        //     $landing->hero_background = $imageName;
        // }

        $landing->update([
            // "hero_description" => $request->hero_description,
            // "hero_button_text" => $request->hero_button_text,
            // "hero_background" => $landing->hero_background,

            "service_one_title" => $request->service_one_title,
            "service_one_description" => $request->service_one_description,
            "service_two_title" => $request->service_two_title,
            "service_two_description"=> $request->service_two_description,
            "service_three_title" => $request->service_three_title,
            "service_three_description"=> $request->service_three_description,
            "service_four_title"=> $request->service_four_title,
            "service_four_description" => $request->service_four_description,

            "service_one_title_ar" => $request->service_one_title_ar,
            "service_one_description_ar" => $request->service_one_description_ar,
            "service_two_title_ar" => $request->service_two_title_ar,
            "service_two_description_ar"=> $request->service_two_description_ar,
            "service_three_title_ar" => $request->service_three_title_ar,
            "service_three_description_ar"=> $request->service_three_description_ar,
            "service_four_title_ar"=> $request->service_four_title_ar,
            "service_four_description_ar" => $request->service_four_description_ar,

            "about_me_text" => $request->about_me_text,

            "about_me_text_ar" => $request->about_me_text_ar,

            "counter_years_experience" => $request->counter_years_experience,
            "counter_clients" => $request->counter_clients,
            "counter_cases" => $request->counter_cases,
            "counter_partners" => $request->counter_partners,

            "faq_id_one" => $request->faq_id_one,
            "faq_id_two" => $request->faq_id_two,
            "faq_id_three" => $request->faq_id_three,

            "about_me_image" => $landing->about_me_image,
        ]);


        return redirect()->back()->with([
            "success" => "Landing page est modifier avec succés"
        ]);
    }

    function getFooterPage() {
        $user = Auth::user()->lawyerDetail->id;

        $footer = Footer::where("lawyer_id", $user)->first();

        return view("dashboard.lawyer.managments.settings.edit_footer", [ "footer" => $footer]);
    }

    function updateFooterPage(Request $request, $id) {
        // dd($request->post());
        // $user = Auth::user()->lawyerDetail->id;
        // $this->validate($request,[
        //     "phone_number_one" => "required",
        //     "phone_number_two" => "required",
        //     "email_address_one" => "required",
        //     "email_address_two" => "required",
        //     "address" => "required",
        // ]);

        $footer = Footer::findOrFail($id);
        $footer->update([
            "phone_number_one" => $request->phone_number_one ,
            "phone_number_two" => $request->phone_number_two ,
            "email_address_one" => $request->email_address_one ,
            "email_address_two" => $request->email_address_two ,
            "address" => $request->address
        ]);

        return redirect()->route("lawyer.settings.footer.page")->with([
            "success" => "Footer page est modifier avec succés"
        ]);
    }
}
