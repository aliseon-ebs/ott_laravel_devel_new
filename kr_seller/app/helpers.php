<?php

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use Illuminate\Support\Facades\DB;

    function front_seller_header($front_seller_header)
    {
        date_default_timezone_set('Asia/Seoul');

        if(strpos($front_seller_header, 'seller.kr.aliseon.com')){

            $general_setting_query = DB::table('general_settings')->select()
            ->where([
                ['region_id','3'],
                ['title','like', 'seller.header.%']
            ])->get();

        } else if(strpos($seller_main_header, 'seller.mena.aliseon.com')){

                $general_setting_query = DB::table('general_settings')->select()
                ->where([
                    ['region_id','1'],
                    ['title','like', 'seller.header.%']
                ])->get();

        } else if(strpos($front_main_header, 'seller.en.aliseon.com')){

            $general_setting_query = DB::table('general_settings')->select()
            ->where([
                ['region_id','233'],
                ['title','like', 'seller.header.%']
            ])->get();

        }

        $general_setting = array();

        foreach($general_setting_query as $g => $ge){
            if(strcmp($ge->title, 'seller_header_region')){
                $general_setting[$ge->title] = $ge->text;
            }
        }

        $region = DB::table('regions')->select(['regions.link','countries.country_name','countries.country_img'])
        ->join('aliseon.countries', 'regions.region_id','=', 'countries.id')->get();

        $language = DB::table('languages')->select()->get();

        $currency = DB::table('currencies')->select()->get();
        
        return (['general_setting_seller_header' => $general_setting,
        'seller_header_region' => $region,
        'seller_header_language' => $language,
        'seller_header_currency' => $currency,
            ]
        );
    }

    function front_seller_footer($front_seller_footer){

        date_default_timezone_set('Asia/Seoul');

        if(strpos($front_seller_footer, 'seller.kr.aliseon.com')){

            $general_setting_query = DB::table('general_settings')->select()
            ->where([
                ['region_id','3'],
                ['title','like', 'seller.footer.%']
            ])->get();

        } else if(strpos($front_seller_footer, 'seller.mena.aliseon.com')){

                $general_setting_query = DB::table('general_settings')->select()
                ->where([
                    ['region_id','1'],
                    ['title','like', 'seller.footer.%']
                ])->get();

        } else if(strpos($front_seller_footer, 'seller.en.aliseon.com')){

            $general_setting_query = DB::table('general_settings')->select()
            ->where([
                ['region_id','233'],
                ['title','like', 'seller.footer.%']
            ])->get();

        }

        $general_setting = array();

        foreach($general_setting_query as $g => $ge){
                $general_setting[$ge->title] = $ge->text;
        }

        return ($general_setting);

    }

    function front_seller_middle($front_seller_middle) {
        date_default_timezone_set('Asia/Seoul');

        if(strpos($front_seller_middle, 'seller.kr.aliseon.com')){

            $general_setting_query = DB::table('general_settings')->select()
            ->where([
                ['region_id','3'],
                ['title','like', 'seller.middle.%']
            ])->get();

        } else if(strpos($front_seller_middle, 'seller.mena.aliseon.com')){

                $general_setting_query = DB::table('general_settings')->select()
                ->where([
                    ['region_id','1'],
                    ['title','like', 'seller.middle.%']
                ])->get();

        } else if(strpos($front_seller_middle, 'seller.en.aliseon.com')){

            $general_setting_query = DB::table('general_settings')->select()
            ->where([
                ['region_id','233'],
                ['title','like', 'seller.middle.%']
            ])->get();

        }

        $general_setting = array();

        foreach($general_setting_query as $g => $ge){
                $general_setting[$ge->title] = $ge->text;
        }

        return ($general_setting);
    }
