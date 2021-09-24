<?php

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use Illuminate\Support\Facades\DB;

    function check_access_token($access_token)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $access_query = DB::table('certi')->select('access_token')->where('access_token', '=', $access_token)->doesntExist();

        if(strcmp($access_query, '1')){

            return 0;

        } else {

            return -1;

        }
    }

    function front_main_header($front_main_header)
    {
        date_default_timezone_set('Asia/Seoul');

        if(strpos($front_main_header, 'kr.aliseon.com')){

            $general_setting_query = DB::table('general_settings')->select()
            ->where([
                ['region_id','3'],
                ['title','like', 'main.header.%']
            ])->get();

        } else if(strpos($front_main_header, 'mena.aliseon.com')){

                $general_setting_query = DB::table('general_settings')->select()
                ->where([
                    ['region_id','1'],
                    ['title','like', 'main.header.%']
                ])->get();

        } else if(strpos($front_main_header, 'en.aliseon.com')){

            $general_setting_query = DB::table('general_settings')->select()
            ->where([
                ['region_id','233'],
                ['title','like', 'main.header.%']
            ])->get();

        }

        $general_setting = array();

        foreach($general_setting_query as $g => $ge){
            if(strcmp($ge->title, 'main_header_region')){
                $general_setting[$ge->title] = $ge->text;
            }
        }

        $region = DB::table('regions')->select(['regions.link','countries.country_name','countries.country_img'])
        ->join('aliseon.countries', 'regions.region_id','=', 'countries.id')->get();

        $language = DB::table('languages')->select()->get();

        $currency = DB::table('currencies')->select()->get();
        
        return (['general_setting_main_header' => $general_setting,
        'main_header_region' => $region,
        'main_header_language' => $language,
        'main_header_currency' => $currency,
            ]
        );
    }

    function front_main_footer($front_main_footer){

        date_default_timezone_set('Asia/Seoul');

        if(strpos($front_main_footer, 'kr.aliseon.com')){

            $general_setting_query = DB::table('general_settings')->select()
            ->where([
                ['region_id','3'],
                ['title','like', 'main.footer.%']
            ])->get();

        } else if(strpos($front_main_footer, 'mena.aliseon.com')){

                $general_setting_query = DB::table('general_settings')->select()
                ->where([
                    ['region_id','1'],
                    ['title','like', 'main.footer.%']
                ])->get();

        } else if(strpos($front_main_footer, 'en.aliseon.com')){

            $general_setting_query = DB::table('general_settings')->select()
            ->where([
                ['region_id','233'],
                ['title','like', 'main.footer.%']
            ])->get();

        }

        $general_setting = array();

        foreach($general_setting_query as $g => $ge){
                $general_setting[$ge->title] = $ge->text;
        }

        return ($general_setting);

    }
