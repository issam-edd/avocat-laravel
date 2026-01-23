<?php

namespace App\Http\Controllers\Main\Default;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\LawyerBlog;
use App\Models\LawyerDetail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Validator;

class LawyerController extends Controller
{
    public function index()
    {
        $dir = app()->getLocale() === 'ar' ? 'rtl' : 'ltr';

        // $lawyers = Db::table('lawyer_details')->orderBy('is_premium', 'DESC')->paginate(8);
        $premium_lawyers = LawyerDetail::where('is_premium', 1)->get()->shuffle();
        $normal_lawyers = LawyerDetail::where('is_premium', 0)->get()->shuffle();



        $result = $premium_lawyers->merge($normal_lawyers);

        $lawyers = $this->paginate($result, 8);

        return view('main.default.' . $dir . '.pages.lawyers', ['lawyers' => $lawyers]);
    }


    public function paginate($items, $perPage = 5, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        $paginator = new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);

        $paginator->setPath(route('lawyers'));
        return $paginator;
    }
}
