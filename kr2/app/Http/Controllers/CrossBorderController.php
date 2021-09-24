<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\DB;
use Validator;

class CrossBorderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {

        $general_setting = array();

        //header

        $request_url = $request->fullUrl();

        $main_header = front_main_header($request_url);

        $general_setting['general_setting_main_header'] =  $main_header['general_setting_main_header'];
        $region =  $main_header['main_header_region'];
        $language = $main_header['main_header_language'];
        $currency = $main_header['main_header_currency'];

        // footer

        $main_footer = front_main_footer($request_url);

        $general_setting['general_setting_main_footer'] =  $main_footer;

        // body

        // general setting

        if(strpos($request_url, 'ko.aliseon.com')){

            $general_setting_query = DB::table('general_settings')->select()
            ->where([
                ['region_id','3'],
                ['title','like', 'cross.body.%']
            ])->get();
        
        } else if(strpos($request_url, 'mena.aliseon.com')){
        
                $general_setting_query = DB::table('general_settings')->select()
                ->where([
                    ['region_id','1'],
                    ['title','like', 'cross.body.%']
                ])->get();
        
        } else if(strpos($request_url, 'en.aliseon.com')){
        
            $general_setting_query = DB::table('general_settings')->select()
            ->where([
                ['region_id','233'],
                ['title','like', 'cross.body.%']
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
        
        $general_setting['general_setting_cross_body'] = $general_setting_body;

        return view('pages.crossborder.index', ['data' => ['general_setting' => $general_setting,
                                                    'main_header_region' => $region,
                                                    'main_header_language' => $language,
                                                    'main_header_currency' => $currency,
                                                    ]]
                                                );

    }

    public function how_to_purchase(Request $request)
    {

        return view('pages.crossborder.how_to_purchase');

    }

}