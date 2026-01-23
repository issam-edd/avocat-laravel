<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Models\Option;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Input\Input;

class OptionController extends Controller
{
    //


    function getOptionValue($id){
        $option = Option::findOrFail($id);
        return $option->option_value;
    }

    function updateOptionValue($id, $value){
        $option = Option::findOrFail($id);
        $option->option_value = $value;
        $option->save();
    }

    function index() {
        return view("dashboard.admin.managments.settings.index")->with([
            "siteweb_name_fr" => $this->getOptionValue(1),
            "siteweb_name_ar" => $this->getOptionValue(2),
            "image_logo" => $this->getOptionValue(3),
            "image_logo_big" => $this->getOptionValue(4),
            "image_favicon" => $this->getOptionValue(5),
            "addresse1" => $this->getOptionValue(6),
            "addresse2" => $this->getOptionValue(7),
            "tel1" => $this->getOptionValue(8),
            "tel2" => $this->getOptionValue(9),
            "ville" => $this->getOptionValue(10),
            "localisation" => $this->getOptionValue(11),
            "keywords_ar" => $this->getOptionValue(12),
            "keywords_fr" => $this->getOptionValue(13),
            "desciption_ar" => $this->getOptionValue(14),
            "desciption_fr" => $this->getOptionValue(15),
            "scripts" => $this->getOptionValue(16),
        ]);
    }

    function updateOptionImageValue($id, $file){
        $option = Option::findOrFail($id);

        $image_path = public_path($option->option_value);
        // Delete image in folder
        if (File::exists($image_path)) {
            unlink($image_path);
        }
        // Name Image
        $imageName = "images/dashboard/website/" . time() . "_" . $file->getClientOriginalName();
        $file->move(public_path("images/dashboard/website/"), $imageName);
        // Update in database
        $option->option_value = $imageName;
        $option->save();
    }

    function update(Request $request)
    {
        // dd($request);
        $this->validate($request,[
            "siteweb_name_fr" => "required",
            "siteweb_name_ar" => "required",
            "addresse1" => "required",
            "addresse2" => "required",
            "tel1" => "required",
            "tel2" => "required",
            "ville" => "required",
            "localisation" => "required",
            "keywords_ar" => "required",
            "keywords_fr" => "required",
            "desciption_ar" => "required",
            "desciption_fr" => "required",
            "scripts" => "required"
        ]);
        $this->updateOptionValue(1,$request->siteweb_name_fr);
        $this->updateOptionValue(2,$request->siteweb_name_ar);
        $this->updateOptionValue(6,$request->addresse1);
        $this->updateOptionValue(7,$request->addresse2);
        $this->updateOptionValue(8,$request->tel1);
        $this->updateOptionValue(9,$request->tel2);
        $this->updateOptionValue(10,$request->ville);
        $this->updateOptionValue(11,$request->localisation);
        $this->updateOptionValue(12,$request->keywords_ar);
        $this->updateOptionValue(13,$request->keywords_fr);
        $this->updateOptionValue(14,$request->desciption_ar);
        $this->updateOptionValue(15,$request->desciption_fr);
        $this->updateOptionValue(16,$request->scripts);

        // Check Image
        if ($request->has("image_logo")) {
            $this->validate($request,[
                "image_logo" => "required|image|mimes:png,jpg,jpeg|max:2048"
            ]);
            $option = Option::findOrFail(3);

            $image_path = public_path($option->option_value);
            // Delete image in folder
            if (File::exists($image_path)) {
                unlink($image_path);
            }
            // Name Image
            $imageName = "images/dashboard/website/" . time() . "_" . $request->image_logo->getClientOriginalName();
            $request->image_logo->move(public_path("images/dashboard/website/"), $imageName);
            // Update in database
            $option->option_value = $imageName;
            $option->save();
        }
        if ($request->has("image_logo_big")) {
            $this->validate($request,[
                "image_logo_big" => "required|image|mimes:png,jpg,jpeg|max:2048"
            ]);
            $option = Option::findOrFail(4);

            $image_path = public_path($option->option_value);
            // Delete image in folder
            if (File::exists($image_path)) {
                unlink($image_path);
            }
            // Name Image
            $imageName = "images/dashboard/website/" . time() . "_" . $request->image_logo_big->getClientOriginalName();
            $request->image_logo_big->move(public_path("images/dashboard/website/"), $imageName);
            // Update in database
            $option->option_value = $imageName;
            $option->save();
        }
        if ($request->has("image_favicon")) {
            $this->validate($request,[
                "image_favicon" => "required|image|mimes:png,jpg,jpeg|max:2048"
            ]);
            $option = Option::findOrFail(5);

            $image_path = public_path($option->option_value);
            // Delete image in folder
            if (File::exists($image_path)) {
                unlink($image_path);
            }
            // Name Image
            $imageName = "images/dashboard/website/" . time() . "_" . $request->image_favicon->getClientOriginalName();
            $request->image_favicon->move(public_path("images/dashboard/website/"), $imageName);
            // Update in database
            $option->option_value = $imageName;
            $option->save();
        }

        return redirect()->route("admin.settings")->with([
            "success" => "Settings modifier avec succès"
        ]);
    }


    // function store(Request $request) {
    //     if($request->has("image")) {
    //         $file = $request->image_logo;
    //         $imageName = "images/dashboard/website/" . time() . "_" . $file->getClientOriginalName();
    //         // $imageName  -> time() . "_" . $file->getClientOriginalName()
    //         $file->move(public_path("images/dashboard/website"), $imageName);
    //         $option->option_value = $imageName;
    //         $option->save();
    //         return redirect()->route('admin.settings')->with([
    //             'success' => "Settings est modifier avec success"
    //         ]);
    //     }
    // }


}
