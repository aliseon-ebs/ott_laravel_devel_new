<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\DB;
use Validator;

class SubscriptionController extends Controller
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

        if(strpos($request_url, 'kr.aliseon.com')){

            $general_setting_query = DB::table('general_settings')->select()
            ->where([
                ['region_id','3'],
                ['title','like', 'subscribe.body.%']
            ])->get();

            $hot_trend = DB::table('hot_trend')->select(['hot_trend.id','hot_trend.region_id',
            'hot_trend.category_id','hot_trend.category_dept','hot_trend.sub_category_id','hot_trend.keyword',
            'categories.id as categories_id', 'categories.parent','categories.language','categories.name',
            'categories.product_notice','categories.ai_keyword','categories.thumbnail','categories.icon',
            'categories.activation_status'])->join('categories', 'hot_trend.category_id','categories.id')
            ->where([
                ['region_id','3'],
                ['type','subscription']
                ])->get();

        } else if(strpos($request_url, 'mena.aliseon.com')){

            $general_setting_query = DB::table('general_settings')->select()
            ->where([
                ['region_id','1'],
                ['title','like', 'subscribe.body.%']
            ])->get();

            $hot_trend = DB::table('hot_trend')->select(['hot_trend.id','hot_trend.region_id',
            'hot_trend.category_id','hot_trend.category_dept','hot_trend.sub_category_id','hot_trend.keyword',
            'categories.id as categories_id', 'categories.parent','categories.language','categories.name',
            'categories.product_notice','categories.ai_keyword','categories.thumbnail','categories.icon',
            'categories.activation_status'])->join('categories', 'hot_trend.category_id','categories.id')
            ->where([
                ['region_id','1'],
                ['type','subscription']
                ])->get();

        } else if(strpos($request_url, 'en.aliseon.com')){

            $general_setting_query = DB::table('general_settings')->select()
            ->where([
                ['region_id','233'],
                ['title','like', 'subscribe.body.%']
            ])->get();

            $hot_trend = DB::table('hot_trend')->select(['hot_trend.id','hot_trend.region_id',
            'hot_trend.category_id','hot_trend.category_dept','hot_trend.sub_category_id','hot_trend.keyword',
            'categories.id as categories_id', 'categories.parent','categories.language','categories.name',
            'categories.product_notice','categories.ai_keyword','categories.thumbnail','categories.icon',
            'categories.activation_status'])->join('categories', 'hot_trend.category_id','categories.id')
            ->where([
                ['region_id','233'],
                ['type','subscription']
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

        $hot_trend_sub_category_title = array();
        $hot_trend_sub_category_value = array();
        $hot_trend_sub_category_keyword = array();

        foreach($hot_trend as $h => $ho){

            $hot_trend_sub = array();
            $hot_trend_keyword = array();

            $hot_trend_sub = explode(',',$ho->sub_category_id);
            $hot_trend_keyword = explode(',',$ho->keyword);

            $hot_trend_sub_query = DB::table('categories')->select('name')->whereIn('id', $hot_trend_sub)->get();

            array_push($hot_trend_sub_category_title, $ho->name);
            array_push($hot_trend_sub_category_keyword, $hot_trend_keyword);
            $hot_trend_sub_category_value[$h] = $hot_trend_sub_query;

        }
        
        $general_setting['general_setting_subscribe_body'] = $general_setting_body;

        return view('pages.subscription.index', ['data' => ['general_setting' => $general_setting,
                                                    'main_header_region' => $region,
                                                    'main_header_language' => $language,
                                                    'main_header_currency' => $currency,
                                                    'hot_trend_title' =>$hot_trend_sub_category_title,
                                                    'hot_trend_keyword' =>$hot_trend_sub_category_keyword,
                                                    'hot_trend_value' =>$hot_trend_sub_category_value,
                                                    ]]
                                                );

    }

}