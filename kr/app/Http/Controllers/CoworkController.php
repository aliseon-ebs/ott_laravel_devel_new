<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\DB;
use Validator;

class CoworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {

        return view('pages.cowork.index');

    }

    public function corporation_posting(Request $request)
    {

        return view('pages.cowork.corporation_posting');

    }

    public function corporation_find(Request $request)
    {

        return view('pages.cowork.corporation_find');

    }

    public function corporation_find_detail(Request $request, $corporation_id)
    {

        return view('pages.cowork.corporation_find_detail', ['request' => $corporation_id]);

    }

    public function lookforpartners(Request $request)
    {

        return view('pages.cowork.lookforpartners');

    }

    public function lookforpartners_detail(Request $request, $partner_id)
    {

        return view('pages.cowork.lookforpartners_detail', ['request' => $partner_id]);

    }

    public function howtouse(Request $request)
    {

        return view('pages.cowork.howtouse');

    }

    public function review(Request $request)
    {

        return view('pages.cowork.review');

    }

    public function review_detail(Request $request, $review_id)
    {

        return view('pages.cowork.review', ['request' => $review_id]);

    }

}