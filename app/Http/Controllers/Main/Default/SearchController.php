<?php

namespace App\Http\Controllers\Main\Default;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\LawyerBlog;
use App\Models\LawyerDetail;
use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request, $items = null)
    { // Blogs - FAQ - lawyer

        $term = strip_tags($request->term);

        $dir = session()->get('locale', 'ar') == 'ar' ? 'rtl' : 'ltr';

        // if (!$term) {
        //     return $this->index();
        // }
        // $validator = Validator::make(['term' => $term], [
        //     'id' => [ 'required', 'regex:/^[a-zA-Z\s]+$/i']
        // ]);

        // if ($validator->fails()) {
        //     return $this->index();
        // }

        // ----------- lawyer ---------------
        // Search on lawyers by name in french
        $users = User::where([
                    ['role', 0],
                    ['first_name', 'LIKE', "%{$term}%"],
                ])->orWhere([
                    ['role', 0],
                    ['last_name', 'LIKE', "%{$term}%"],
                ])->orWhereRaw("CONCAT(`first_name`, ' ', `last_name`) LIKE ?", ['%'.$term.'%'])
                ->orWhereRaw("CONCAT(`last_name`, ' ', `first_name`) LIKE ?", ['%'.$term.'%'])
                ->get();
        $search_in_users = $users->pluck('id');

        // Search on lawyers by their arabic name
        $lawyers = LawyerDetail::where([
                        ['first_name_ar', 'LIKE', "%{$term}%"],
                    ])->orWhere([
                        ['last_name_ar', 'LIKE', "%{$term}%"],
                    ])->orWhereRaw("CONCAT(`first_name_ar`, ' ', `last_name_ar`) LIKE ?", ['%'.$term.'%'])
                    ->orWhereRaw("CONCAT(`last_name_ar`, ' ', `first_name_ar`) LIKE ?", ['%'.$term.'%'])
                    ->get();
        $search_in_lawyers = $lawyers->pluck('lawyer_id') ;

        $all_users = User::select('users.*')
                    ->join('lawyer_details', 'lawyer_details.lawyer_id', 'users.id')
                    ->orderBy('is_premium', 'DESC')
                    ->whereIn('users.id', [...$search_in_lawyers, ...$search_in_users])
                    ->where('role', 0);
        // $lawyers = DB::table('lawyer_details')->whereIn('lawyer_id', [...$search_in_users, ...$search_in_lawyers])->paginate(8);

        // --------- Blogs --------------
        $search_in_blogs = LawyerBlog::where([
            ['title', 'LIKE', "%{$term}%"],
        ])->orWhere([
            ['body', 'LIKE', "%{$term}%"],
        ])->pluck('id');

        $blogs = LawyerBlog::whereIn('id', [...$search_in_blogs]);

        $users_from_blogs = $blogs->get()->pluck('lawyer_id');

        // $all_users = DB::table('')
        //             ->distinct()
        //             ->whereIn('users.id', [...$search_in_lawyers, ...$search_in_users])
        //             ->get();

        // ---------- FAQ ---------------
        $search_in_faqs = Faq::where([
            ['question_fr', 'LIKE', "%{$term}%"],
        ])->orWhere([
            ['question_ar', 'LIKE', "%{$term}%"],
        ])->orWhere([
            ['answer_fr', 'LIKE', "%{$term}%"],
        ])->orWhere([
            ['answer_ar', 'LIKE', "%{$term}%"],
        ])->pluck('id');

        $faqs = Faq::whereIn('id', [...$search_in_faqs]);
        $users_from_faqs = $faqs->get()->pluck('lawyer_id');

        //------------- LawyerDetail --------------
        $lawyer = User::select('users.*')->whereIn('users.id', [...$users_from_faqs, ...$search_in_blogs, ...$search_in_users, ...$search_in_lawyers])
                ->join('lawyer_details', 'lawyer_details.lawyer_id', 'users.id')
                ->orderBy('is_premium', 'DESC')
                ->get();

        // return view('main.default.rtl.pages.search-lawyers',[
        //             'lawyers' => $lawyers,
        //             'blogs' => $blogs,
        //             'faqs' => $faqs,
        //             'term' => $term
        // ]);

        switch ($items) {
            case 'avocats':

                return view('main.default.' . $dir . '.pages.search.lawyers', [
                    'term' => $term,
                    'users' => $all_users->paginate(8),
                ]);
                break;
            case 'faqs':
                return view('main.default.' . $dir . '.pages.search.faqs', [
                    'term' => $term,
                    'faqs' => $faqs->paginate(8),
                ]);
                break;
            case 'blogs':
                return view('main.default.' . $dir . '.pages.search.blogs', [
                    'term' => $term,
                    'blogs' => $blogs->paginate(8),
                ]);
                break;
            default:
                return view('main.default.' . $dir . '.pages.search.global', [
                    'term' => $term,
                    'blogs' => $blogs->get(),
                    'users' => $all_users->get(),
                    'faqs' => $faqs->get()
                ]);
                break;
        }


    }
}
