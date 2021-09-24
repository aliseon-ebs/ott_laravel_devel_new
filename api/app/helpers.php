<?php

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use Illuminate\Support\Facades\DB;

    function check_access_token($access_token)
    {
        date_default_timezone_set('Asia/Seoul');

        $access_query = DB::table('certi')->select('access_token')->where('access_token', '=', $access_token)->doesntExist();

        if(strcmp($access_query, '1')){

            return 0;

        } else {

            return -1;

        }
    }