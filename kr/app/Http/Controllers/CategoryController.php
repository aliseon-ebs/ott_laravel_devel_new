<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\DB;
use Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {

        return view('pages.category.index');

    }

    public function detail(Request $request)
    {

        return view('pages.category.category_detail');

    }

    public function detail_product(Request $request)
    {

        return view('pages.category.category_detail_product');

    }

}