<?php

namespace App\Http\Controllers\Dashboard\Lawyer;

use App\Models\LawyerBlog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AdminLawyerBlogController extends Controller
{
    //
    function index() {
        $lawyer = Auth::user()->id;
        return view("dashboard.lawyer.managments.blogs.index",[
            "blogs" => LawyerBlog::where("lawyer_id",$lawyer)
                        ->orderBy('created_at', 'desc')->latest()->paginate(6)
        ]);
    }

    function create() {
        return view("dashboard.lawyer.managments.blogs.create");
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

    function store(Request $request) {
        // dd($request->post());
        $this->validate($request,[
            "image_link" => "required|image|mimes:png,jpg,jpeg|max:2048",
        ]);
        if($request->has("image_link")) {
            $file = $request->image_link;
            $imageName = "images/blogs/" . time() . "_" . $this->cleanString($file->getClientOriginalName());
            // $imageName = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path("images/blogs"), $imageName);
            $status = $request->is_published ? 1 : 0;
            LawyerBlog::create([
                "lawyer_id"=> Auth::user()->id,
                'title'=>$request->title,
                'body'=>$request->body,
                'title_ar'=>$request->title_ar,
                'body_ar'=>$request->body_ar,
                'image_link'=>$imageName,
                "is_published" => $status,
            ]);
            return redirect()->route('lawyer.blogs')->with([
                'success' => "تمت إضافة المدونة بنجاح"
            ]);
        }
    }

    function edit($id) {
        $lawyer = Auth::user()->id;

        $blog = LawyerBlog::where([["lawyer_id", $lawyer],["id", $id]])->first();
        // $blog = LawyerBlog::findOrFail($id);
        return view("dashboard.lawyer.managments.blogs.edit", [
            "blog" => $blog
        ]);
    }


    function update(Request $request, $id) {
        // dd($request->post());
        $lawyer = Auth::user()->id;

        $blog = LawyerBlog::where("lawyer_id", $lawyer)->where("id",$id)->first();

        // $this->validate($request,[
        //     "title" => "required",
        //     "body" => "required",
        //     "title_ar" => "required",
        //     "body_ar" => "required",
        // ]);
        if($request->has("image_link")) {
            $this->validate($request, [
                "image_link" => "required|image|mimes:png,jpg,jpeg|max:2048"
            ]);

            $image_path = public_path($blog->image_link);
            if(File::exists($image_path)) {
                unlink($image_path);
            }
            $file = $request->image_link;
            $imageName = "images/blogs/" . time() . "_" . $this->cleanString($file->getClientOriginalName());
            // $imageName = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path("images/blogs"), $imageName);
            $blog->image_link = $imageName;
        }
        $status = $request->is_published ? 1 : 0;
        $blog->update([
            'title'=>$request->title,
            'body'=>$request->body,
            'title_ar'=>$request->title_ar,
            'body_ar'=>$request->body_ar,
            'image_link'=>$blog->image_link,
            "is_published" => $status,
        ]);
        return redirect()->route('lawyer.blogs')->with([
            'success' => "تمت إضافة المدونة بنجاح"
        ]);
    }




    function destroy($id) {
        $blog = LawyerBlog::findOrFail($id);
        $image_path = public_path($blog->image_link);
        if (File::exists($image_path)) {
            unlink($image_path);
        }
        $blog->delete($id);
        return redirect()->route('lawyer.blogs')->with([
            'success' => "تمت حذف المدونة بنجاح"
        ]);
    }





    function desactive($id) {
        // dd($id);
        $blog = LawyerBlog::find($id);
        $blog->is_published = 0;
        $blog->save();
        return redirect()->route("lawyer.blogs")->with([
            "success" => "Blog est desactivés avec succès"
        ]);
    }

    function active($id) {
        // dd($id);
        $blog = LawyerBlog::find($id);
        $blog->is_published = 1;
        $blog->save();
        return redirect()->route("lawyer.blogs")->with([
            "success" => "Blog est activés avec succès"
        ]);
    }


    public function find($search){
        // $search = $request->input('search');
        if($search != ""){
            $lawyer = Auth::user()->id;

            $blogs = LawyerBlog::Join('users', 'users.id', '=', 'lawyer_blogs.lawyer_id')
                    ->where('lawyer_blogs.lawyer_id', $lawyer)
                    ->where(function($query) use ($search) { // Where ... AND ( ... OR ... OR ...)
                        $query->Where('lawyer_blogs.title', 'like', "%$search%")
                                ->orWhere('lawyer_blogs.body', 'like', "%$search%")
                                ->orWhere('lawyer_blogs.title_ar', 'like', "%$search%")
                                ->orWhere('lawyer_blogs.body_ar', 'like', "%$search%")
                                ;
                    })->orderBy('lawyer_blogs.created_at', 'desc')->paginate(6);

            return view("dashboard.lawyer.managments.blogs.index",[
                "blogs" => $blogs,
                "search" => $search
            ]);
        }else {
            return to_route("lawyer.blogs");
        }

    }
}
