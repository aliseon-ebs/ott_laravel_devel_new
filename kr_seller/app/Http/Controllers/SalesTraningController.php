<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\DB;
use Validator;

class SalesTraningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function sales_traning_index(Request $request)
    {

       $general_setting = array();

        // header

        $request_url = $request->fullUrl();

        // $seller_header = front_seller_header($request_url);
        $seller_header = front_seller_header($request_url);

        $general_setting['general_setting_seller_header'] = $seller_header['general_setting_seller_header'];
        $region =  $seller_header['seller_header_region'];
        $language = $seller_header['seller_header_language'];
        $currency = $seller_header['seller_header_currency'];

        // footer
        $seller_footer = front_seller_footer($request_url);
        $general_setting['general_setting_seller_footer'] = $seller_footer;

        // middle
        $seller_middle = front_seller_middle($request_url);
        $general_setting['general_setting_seller_middle'] = $seller_middle;


        // body
        // general setting

        if(strpos($request_url, 'seller.kr.aliseon.com')) {
            $general_setting_query = DB::table('general_settings')->select()
            ->where([
                ['region_id','3'],
                ['title','like','seller.body.%']
            ])->get();
        } else if(strpos($request_url, 'seller.mena.aliseon.com')) {
            $general_setting_query = DB::table('general_settings')->select()
            ->where([
                ['region_id','1'],
                ['title','like','seller.body.%']
            ])->get();
        } else if(strpos($request_url, 'seller.en.aliseon.com')) {
            $general_setting_query = DB::table('general_settings')->select()
            ->where([
                ['region_id','233'],
                ['title','like','seller.body.%']
            ])->get();
        }

        $general_setting_body = array();

        foreach($general_setting_query as $g => $ge){
            if(!empty($ge->text)){
                $general_setting_body[$ge->title] = $ge->text;
            }
            if(!empty($ge->image)){
                $general_setting_body[$ge->title] = $ge->image;
            }
                
        }

        $general_setting['general_setting_seller_body'] = $general_setting_body;
        

        return view('pages.salestraning.index', ['data' => ['general_setting' => $general_setting,
                                        'seller_header_region' => $region,
                                        'seller_header_language' => $language,
                                        'seller_header_currency' => $currency,
                                    ]]);

    }

    public function sales_traning_detail(Request $request, $atrend_id)
    {

        return view('pages.salestraning.detail', ['request' => $atrend_id]);

    }

}