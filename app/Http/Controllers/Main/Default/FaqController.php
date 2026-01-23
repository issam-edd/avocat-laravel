<?php

namespace App\Http\Controllers\Main\Default;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\LawyerDetail;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class FaqController extends Controller
{
    public function index() {

        $dir = app()->getLocale() === 'ar' ? 'rtl' : 'ltr';

        // $lawyers = LawyerDetail::paginate(8);
        $data = LawyerDetail::withCount('faqs')->where('is_premium', 1)->get()->where('faqs_count', '>', 0);

        $lawyers =  $this->paginate($data, 8);

        // return response()->json($lawyers);

        return view('main.default.' . $dir . '.pages.faq', ['lawyers' => $lawyers]);
    }


    public function paginate($items, $perPage = 5, $page = null, $options = []) {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        $paginator = new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);

        $paginator->setPath(route('faq'));
        return $paginator;
    }
}
