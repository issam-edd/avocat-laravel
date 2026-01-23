<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Models\LawyerBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\View\Components\Main\Default\Rtl\Pages\Home\Blogs;

class LawyerBlogController extends Controller
{
    //

    function index() {
        // $blogs = DB::table('lawyer_blogs')->orderBy('created_at', 'desc')->get()->paginate(8);
        $blogs = LawyerBlog::orderBy('created_at', 'desc')->paginate(8);

        return view("dashboard.admin.managments.blogs.index")->with([
            "blogs" => $blogs
        ]);
    }

    function desactive($id) {
        // dd($id);
        $blog = LawyerBlog::find($id);
        $blog->is_approved = 0;
        $blog->save();
        return redirect()->route("admin.blogs")->with([
            "success" => "Blog est desactivés avec succès"
        ]);
    }

    function active($id) {
        // dd($id);
        $blog = LawyerBlog::find($id);
        $blog->is_approved = 1;
        $blog->save();
        return redirect()->route("admin.blogs")->with([
            "success" => "Blog est activés avec succès"
        ]);
    }
    public function find($search){
        // $search = $request->input('search');

        $blogs = LawyerBlog::Join('users', 'users.id', '=', 'lawyer_blogs.lawyer_id')
                        ->where('users.first_name', 'like', "%$search%")
                        ->orWhere('users.last_name', 'like', "%$search%")
                        ->orWhere('lawyer_blogs.title', 'like', "%$search%")
                        ->orWhere('lawyer_blogs.body', 'like', "%$search%")
                        ->orderBy('lawyer_blogs.created_at', 'desc')->paginate(8);

        return view("dashboard.admin.managments.blogs.index")->with([
            "blogs" => $blogs,
            "search" => $search
        ]);
    }
}
