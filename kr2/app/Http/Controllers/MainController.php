<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Model\Region;
use App\Model\User;
use stdClass;

class MainController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {

        date_default_timezone_set('Asia/Seoul');

        //     $ipaddress = '';
        
        //     if (getenv('HTTP_CLIENT_IP')) {
        
        //         $ipaddress = getenv('HTTP_CLIENT_IP');
        
        //     } else if(getenv('HTTP_X_FORWARDED_FOR')) {
        
        //         $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        
        //     } else if(getenv('HTTP_X_FORWARDED')) {
        
        //         $ipaddress = getenv('HTTP_X_FORWARDED');
        
        //     } else if(getenv('HTTP_FORWARDED_FOR')) {
        
        //         $ipaddress = getenv('HTTP_FORWARDED_FOR');
        
        //     } else if(getenv('HTTP_FORWARDED')) {
        
        //         $ipaddress = getenv('HTTP_FORWARDED');
        
        //     } else if(getenv('REMOTE_ADDR')) {
        
        //         $ipaddress = getenv('REMOTE_ADDR');
        
        //     } else {
        
        //         $ipaddress = '알수없음';
        
        //     } 

        // $query = DB::table('log')->insert(
        //     ['ip' => $ipaddress , 'created_at' => date("Y-m-d H:i:s")
        //      ]
        //     );

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
                ['title','like', 'main.body.%']
            ])->get();

            $hot_trend = DB::table('hot_trend')->select(['hot_trend.id','hot_trend.region_id',
            'hot_trend.category_id','hot_trend.category_dept','hot_trend.sub_category_id','hot_trend.keyword',
            'categories.id as categories_id', 'categories.parent','categories.language','categories.name',
            'categories.product_notice','categories.ai_keyword','categories.thumbnail','categories.icon',
            'categories.activation_status'])->join('categories', 'hot_trend.category_id','categories.id')
            ->where([
                ['region_id','3'],
                ['type','main']
                ])->get();

        } else if(strpos($request_url, 'mena.aliseon.com')){

                $general_setting_query = DB::table('general_settings')->select()
                ->where([
                    ['region_id','1'],
                    ['title','like', 'main.body.%']
                ])->get();

                $hot_trend = DB::table('hot_trend')->select(['hot_trend.id','hot_trend.region_id',
                'hot_trend.category_id','hot_trend.category_dept','hot_trend.sub_category_id','hot_trend.keyword',
                'categories.id as categories_id', 'categories.parent','categories.language','categories.name',
                'categories.product_notice','categories.ai_keyword','categories.thumbnail','categories.icon',
                'categories.activation_status'])->join('categories', 'hot_trend.category_id','categories.id')
                ->where([
                    ['region_id','1'],
                    ['type','main']
                    ])->get();

        } else if(strpos($request_url, 'en.aliseon.com')){

            $general_setting_query = DB::table('general_settings')->select()
            ->where([
                ['region_id','233'],
                ['title','like', 'main.body.%']
            ])->get();

            $hot_trend = DB::table('hot_trend')->select(['hot_trend.id','hot_trend.region_id',
            'hot_trend.category_id','hot_trend.category_dept','hot_trend.sub_category_id','hot_trend.keyword',
            'categories.id as categories_id', 'categories.parent','categories.language','categories.name',
            'categories.product_notice','categories.ai_keyword','categories.thumbnail','categories.icon',
            'categories.activation_status'])->join('categories', 'hot_trend.category_id','categories.id')
            ->where([
                ['region_id','233'],
                ['type','main']
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

        $general_setting['general_setting_main_body'] = $general_setting_body;

        // Top Banner

        $query1 = DB::table('banner_web_main')->select()->where('type','=','top')->inRandomOrder()->first();


        // Main Banner

        $query11 = DB::table('banner_web_main')->select()->where('type','=','middle')->inRandomOrder()->limit(3)->get();


        // A-Trend

        $item = array();
        $itemresult = array();

        $query21 = DB::table('a_trend')->select(['a_trend.id','a_trend.user_id','a_trend.type','a_trend.product_id', 'a_trend.contents_id',
        'a_trend.title','a_trend.sub_title','a_trend.description','a_trend.summary','a_trend.view','a_trend.like','a_trend.color',
        'a_trend.start_at','a_trend.create_at','a_trend.update_at','a_trend.opacity','a_trend.status','a_trend.background','users.profile_photo','users.nickname'])
        ->join('users','a_trend.user_id','=','users.id')->orderby('id', 'DESC')->get();

        $atrend_count = DB::table('a_trend')->select(['id','user_id','type','product_id', 'contents_id',
            'title','sub_title','description','summary','view','like','color','start_at','create_at','update_at',
            'opacity','status','background'])->orderby('id', 'DESC')->count();

        for($i = 0; $i < count($query21); $i++){
            $item[$i] = explode(",", $query21[$i]->product_id);
        }

        foreach($item as $items => $itemss){
            $query22 = DB::table('products')->select(['id','name','brand','thumbnail','price','previous_price'])->whereIn('id', $itemss)->get();
            array_push($itemresult, $query22);
        }

        $query23= DB::table('a_trend')->selectRaw("(case aliseon.a_trend.type
        when 'default' then (select `thumbnail` from aliseon.s3_image_atrend where a_trend.contents_id = s3_image_atrend.id)
        when 'recomm' then (select `thumbnail` from aliseon.s3_image_atrend where a_trend.contents_id = s3_image_atrend.id)
        when 'video' then (select `thumbnail` from aliseon.s3_video_atrend where a_trend.contents_id = s3_video_atrend.id)
        when 'item' then null end) as thumbnail")->orderby('id', 'DESC')->get();

        $atrend_resultarray = array();

        for($i = 0; $i < count($query21); $i++){

                $query21[$i]->thumbnail =  $query23[$i]->thumbnail;
                $query21[$i]->items = $itemresult[$i];
                array_push($atrend_resultarray, $query21[$i]);

        }

        $atrend_block = ceil($atrend_count/10);
        $atrend_max_page = 3;
        $atrend_mod = $atrend_count % 10;


        // Influencer

        $query31 = DB::table('users')->select(['users.id','users.nickname','users.profile_photo as profile', 'users.seller_id','users.subscribe_to_cnt'])
        ->where([
            ['users.seller_status', '=', "2"],
            ['users.mega_status', '=', "2"]
        ])->inRandomOrder()->get();

        $influencer_count = DB::table('users')->select()->where([
            ['users.seller_status', '=', "2"],
            ['users.mega_status', '=', "2"]
        ])->count();

        foreach($query31 as $q => $q3){

            $query32 = DB::table('seller')->select()->where([
                ['seller.id', '=', $query31[$q]->seller_id]
            ])->first();

            $query31[$q]->store_name =  $query32->store_name;
            $query31[$q]->store_image =  $query32->store_image;

        }

        foreach($query31 as $q => $q3){

            $query33 = DB::table('products')->select()->where([
                ['products.user_id', '=', $query31[$q]->id]
            ])->inRandomOrder()->first();

            $query31[$q]->product_name =  $query33->name;
            $query31[$q]->product_price =  $query33->price;
            $query31[$q]->product_thumbnail =  $query33->photo;

        }

        //FlashDeal

        $query41 = DB::table('products')->select()->inRandomOrder()->limit(6)->get();
        $flashdeal_count = count($query41);

        $query51 = DB::table('categories')->select()->whereNotNull('thumbnail')->get();
        $category_thumbnail_count = count($query51);

        $query71 = DB::table('banner_web_main')->select()->where('type','=','section1')->inRandomOrder()->first();

        $query81 = DB::table('products')->select()->inRandomOrder()->limit(16)->get();
        $query82 = DB::table('products')->select()->inRandomOrder()->limit(16)->get();

        return view('pages.main.index', ['data' => ['general_setting' => $general_setting,
                                                    'main_header_region' => $region,
                                                    'main_header_language' => $language,
                                                    'main_header_currency' => $currency,
                                                    'top_banner' => $query1,
                                                    'middle_banner' => $query11,
                                                    'middle_banner_count' => count($query11),
                                                    'atrend' => $atrend_resultarray,
                                                    'atrend_max_page' => $atrend_max_page,
                                                    'atrend_mod' => $atrend_mod,
                                                    'atrend_block' => $atrend_block,
                                                    'influencer' => $query31,
                                                    'flashdeal' => $query41,
                                                    'category' => $query51,
                                                    'hot_trend_keyword' =>$hot_trend_sub_category_keyword,
                                                    'hot_trend_title' =>$hot_trend_sub_category_title,
                                                    'hot_trend_value' =>$hot_trend_sub_category_value,
                                                    'section1' => $query71,
                                                    'woman' => $query81,
                                                    'man' => $query82,
                                                        ]],
                                        ['count' => [ 'atrend' => $atrend_count,
                                                    'influencer' => $influencer_count,
                                                    'flashdeal' => $flashdeal_count,
                                                    'category' => $category_thumbnail_count
                                                        ]],
                                        );

    }

}