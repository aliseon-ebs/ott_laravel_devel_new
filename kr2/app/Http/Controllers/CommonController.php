<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\DB;
use Validator;

class CommonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function cart()
    {

        return view('pages.common.index');

    }

    public function download()
    {

        return view('pages.common.download');

    }

    public function help()
    {

        return view('pages.common.help');

    }

    public function product_detail($product_id)
    {

        return view('pages.common.detail', ['request' => $product_id]);

    }

    public function product_billing_detail($product_id)
    {

        return view('pages.common.product_bliling_detail', ['request' => $product_id]);

    }

    public function search_result($keyword)
    {

        return view('pages.common.search_result', ['request' => $keyword]);

    }

    public function track_your_order()
    {

        return view('pages.common.trackyourorder');

    }

    public function careers()
    {

        return view('pages.careers.index');

    }

    public function notice()
    {

        return view('pages.common.notice');

    }

    public function notice_detail($notice_id)
    {

        return view('pages.common.notice', ['request' => $notice_id]);

    }

    public function customer_right()
    {

        return view('pages.common.index');

    }

    public function terms_of_use()
    {

        return view('pages.common.index');

    }

    public function privacy_policy()
    {

        return view('pages.common.index');

    }

    public function adversting_policy()
    {

        return view('pages.common.index');

    }

}