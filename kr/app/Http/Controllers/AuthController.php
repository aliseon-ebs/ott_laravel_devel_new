<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\DB;
use Validator;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function register()
    {

        return view('pages.atrend.index');

    }

    public function register_result()
    {

        return view('pages.atrend.index');

    }

    public function login()
    {

        return view('pages.atrend.detail', ['request' => $atrend_id]);

    }

}