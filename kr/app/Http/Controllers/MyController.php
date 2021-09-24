<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\DB;
use Validator;

class MyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {

        return view('pages.my.index');

    }

    public function voyage_index(Request $request)
    {

        return view('pages.my.voyage_index');

    }

    public function my_shop(Request $request)
    {

        return view('pages.my.shop_index');

    }

}