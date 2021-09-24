<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\API\BaseController as BaseController;
use Aws\Rekognition\RekognitionClient;
use Illuminate\Support\Facades\DB;
use Validator;
use Storage;
use Illuminate\Support\Str;

class MyShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
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

        return view('pages.myshop.index', ['data' => ['general_setting' => $general_setting,
                                                'seller_header_region' => $region,
                                                'seller_header_language' => $language,
                                                'seller_header_currency' => $currency,
                                            ]]);

    }

    public function store_management(Request $request){

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

        return view('pages.myshop.store_management', ['data' => ['general_setting' => $general_setting,
                                                'seller_header_region' => $region,
                                                'seller_header_language' => $language,
                                                'seller_header_currency' => $currency,
                                            ]]);

    }

    public function product(Request $request){

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

        return view('pages.myshop.product', ['data' => ['general_setting' => $general_setting,
                                                'seller_header_region' => $region,
                                                'seller_header_language' => $language,
                                                'seller_header_currency' => $currency,
                                            ]]);

    }

    public function product_upload(Request $request){

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
            $category = DB::table('categories')->where([
                // ['parent','not like','%.%'],
                ['language','ko']
                ])->get();
        } else if(strpos($request_url, 'seller.mena.aliseon.com')) {
            $general_setting_query = DB::table('general_settings')->select()
            ->where([
                ['region_id','1'],
                ['title','like','seller.body.%']
            ])->get();
            $category = DB::table('categories')->where([
                // ['parent','not like','%.%'],
                ['language','ar']
                ])->get();
        } else if(strpos($request_url, 'seller.en.aliseon.com')) {
            $general_setting_query = DB::table('general_settings')->select()
            ->where([
                ['region_id','233'],
                ['title','like','seller.body.%']
            ])->get();
            $category = DB::table('categories')->where([
                // ['parent','not like','%.%'],
                ['language','ko']
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

        $product_seq = "PR".Str::random(4).date("Ymd").rand(100000, 999999);

        $general_setting['general_setting_seller_body'] = $general_setting_body;

        return view('pages.myshop.product_upload', ['data' => ['general_setting' => $general_setting,
                                                    'seller_header_region' => $region,
                                                    'seller_header_language' => $language,
                                                    'seller_header_currency' => $currency,
                                                    'category' => $category,
                                                    'seq' => $product_seq,
                                                ]]);

    }

    public function product_upload_submitForm(Request $request){

        $general_setting = array();
        $s3 = array();

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
            $category = DB::table('categories')->where([
                // ['parent','not like','%.%'],
                ['language','ko']
                ])->get();
        } else if(strpos($request_url, 'seller.mena.aliseon.com')) {
            $general_setting_query = DB::table('general_settings')->select()
            ->where([
                ['region_id','1'],
                ['title','like','seller.body.%']
            ])->get();
            $category = DB::table('categories')->where([
                // ['parent','not like','%.%'],
                ['language','ar']
                ])->get();
        } else if(strpos($request_url, 'seller.en.aliseon.com')) {
            $general_setting_query = DB::table('general_settings')->select()
            ->where([
                ['region_id','233'],
                ['title','like','seller.body.%']
            ])->get();
            $category = DB::table('categories')->where([
                // ['parent','not like','%.%'],
                ['language','ko']
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

        $nowtime = date("His");
        $nowtime_y = date("Y");
        $nowtime_m = date("m");
        $nowtime_d = date("d");

		$client = new RekognitionClient([
		   'region'    => 'ap-northeast-2',
		   'version'   => 'latest'
		]);

		$validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $file = $request->file('photo');

        foreach($file as $f => $fi){
            $image = fopen($fi->getPathName(), 'r');
            $bytes = fread($image, $fi->getSize());

            array_push($s3, Storage::disk('s3')->put('images/product/'.$nowtime_y.'/'.$nowtime_m.'/'.$nowtime_d, $fi, 'public'));

        }

		$results = $client->DetectLabels([
			'Image' => 
			['Bytes' => $bytes],
			'MinConfidence' => intval($request->input('confidence'))
		])
		['Labels'];

		if(in_array('Explicit Nudity', array_column($results, 'Name')))
		{
			$message = 'Esta imagen puede contener desnudez';
			$alert = 'warning';
		}
		else
		{
			$message = 'Esta imagen NO contiene desnudez';
			$alert = 'success';
		}

		$ai_keyword = array();
		$result_keyword = array();
		$user_keyword = explode(",", $request->user_keyword);

		compact('results');

		$result_keyword = array();
		$keyword1 = explode(',', $request->keyword1);
		$keyword2 = explode(',', $request->keyword2);

		foreach($results as $re => $res){

			$ai_keyword[$re] = $res['Name'];

				foreach($user_keyword as $u => $us){

					if(stripos($ai_keyword[$re], $us) !== false) {  
	
						array_push($result_keyword, $ai_keyword[$re]);
	
					}
	
				}
		}

        foreach($s3 as $s => $ss){

            $input['product_seq'] = $request->seq;
            $input['path'] = $ss;
            $input['created_at'] = date("Y-m-d H:i:s"); 
			$input['updated_at'] = date("Y-m-d H:i:s");

            $query = DB::table('s3_image_product')->insertGetId($input);

        }

		$result_keyword = array_unique($result_keyword);

		$total_ai_keyword = implode(",", $ai_keyword);
		$total_result_keyword = implode(",", $result_keyword);
        $total_result_keyword = implode(",", $result_keyword);

			$input2['brand'] = $request->brand;
			$input2['option_id'] = $request->option_id; 
			$input2['user_id'] = Auth::user()->id;
			$input2['category_id'] = $request->category_id; 
			$input2['name'] = $request->product_name; 
			$input2['sub_name'] = $request->product_sub_name; 
			$input2['photo'] = "/".$s3[0]; 
			$input2['thumbnail'] = "/".$s3[0]; 
			$input2['price'] = $request->price; 
			$input2['previous_price'] = $request->previous_price; 
			$input2['details'] = $request->details;
			$input2['stock'] = $request->stock; 
			$input2['policy'] = $request->policy; 
			$input2['status'] = 0; 
			$input2['views'] = 0; 
			$input2['user_keyword'] = $request->user_keyword;
			$input2['ai_keyword'] = $total_ai_keyword;
			$input2['result_keyword'] = $total_result_keyword;
			$input2['link'] = null; 
			$input2['platform'] = null;  
			$input2['region'] = "ko";  
			$input2['sale'] = 0; 
			$input2['is_discount'] = 0; 
			$input2['discount_date'] = null; 
			$input2['created_at'] = date("Y-m-d H:i:s"); 
			$input2['updated_at'] = date("Y-m-d H:i:s");

		$query2 = DB::table('products')->insertGetId($input2);

		request()->session()->flash('info', [$alert, $message]);

        return view('pages.myshop.product_upload', ['data' => ['general_setting' => $general_setting,
                                                'seller_header_region' => $region,
                                                'seller_header_language' => $language,
                                                'seller_header_currency' => $currency,
                                                'category' => $category,
                                            ]]);

    }

    public function product_upload2(Request $request){

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
            $category = DB::table('categories')->where([
                // ['parent','not like','%.%'],
                ['language','ko']
                ])->get();
        } else if(strpos($request_url, 'seller.mena.aliseon.com')) {
            $general_setting_query = DB::table('general_settings')->select()
            ->where([
                ['region_id','1'],
                ['title','like','seller.body.%']
            ])->get();
            $category = DB::table('categories')->where([
                // ['parent','not like','%.%'],
                ['language','ar']
                ])->get();
        } else if(strpos($request_url, 'seller.en.aliseon.com')) {
            $general_setting_query = DB::table('general_settings')->select()
            ->where([
                ['region_id','233'],
                ['title','like','seller.body.%']
            ])->get();
            $category = DB::table('categories')->where([
                // ['parent','not like','%.%'],
                ['language','ko']
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

        $product_seq = "PR".Str::random(4).date("Ymd").rand(100000, 999999);

        $general_setting['general_setting_seller_body'] = $general_setting_body;

        return view('pages.myshop.product_upload2', ['data' => ['general_setting' => $general_setting,
                                                    'seller_header_region' => $region,
                                                    'seller_header_language' => $language,
                                                    'seller_header_currency' => $currency,
                                                    'category' => $category,
                                                    'seq' => $product_seq,
                                                ]]);

    }

    public function product_upload_submitForm2(Request $request){

        $general_setting = array();
        $s3 = array();

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
            $category = DB::table('categories')->where([
                // ['parent','not like','%.%'],
                ['language','ko']
                ])->get();
        } else if(strpos($request_url, 'seller.mena.aliseon.com')) {
            $general_setting_query = DB::table('general_settings')->select()
            ->where([
                ['region_id','1'],
                ['title','like','seller.body.%']
            ])->get();
            $category = DB::table('categories')->where([
                // ['parent','not like','%.%'],
                ['language','ar']
                ])->get();
        } else if(strpos($request_url, 'seller.en.aliseon.com')) {
            $general_setting_query = DB::table('general_settings')->select()
            ->where([
                ['region_id','233'],
                ['title','like','seller.body.%']
            ])->get();
            $category = DB::table('categories')->where([
                // ['parent','not like','%.%'],
                ['language','ko']
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

        $nowtime = date("His");
        $nowtime_y = date("Y");
        $nowtime_m = date("m");
        $nowtime_d = date("d");

		$client = new RekognitionClient([
		   'region'    => 'ap-northeast-2',
		   'version'   => 'latest'
		]);

		$validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $file = $request->file('photo');

        foreach($file as $f => $fi){
            $image = fopen($fi->getPathName(), 'r');
            $bytes = fread($image, $fi->getSize());

            array_push($s3, Storage::disk('s3')->put('images/product/'.$nowtime_y.'/'.$nowtime_m.'/'.$nowtime_d, $fi, 'public'));

        }

		$results = $client->DetectLabels([
			'Image' => 
			['Bytes' => $bytes],
			'MinConfidence' => intval($request->input('confidence'))
		])
		['Labels'];

		if(in_array('Explicit Nudity', array_column($results, 'Name')))
		{
			$message = 'Esta imagen puede contener desnudez';
			$alert = 'warning';
		}
		else
		{
			$message = 'Esta imagen NO contiene desnudez';
			$alert = 'success';
		}

		$ai_keyword = array();
		$result_keyword = array();
		$user_keyword = explode(",", $request->user_keyword);

		compact('results');

		$result_keyword = array();
		$keyword1 = explode(',', $request->keyword1);
		$keyword2 = explode(',', $request->keyword2);

		foreach($results as $re => $res){

			$ai_keyword[$re] = $res['Name'];

				foreach($user_keyword as $u => $us){

					if(stripos($ai_keyword[$re], $us) !== false) {  
	
						array_push($result_keyword, $ai_keyword[$re]);
	
					}
	
				}
		}

		$result_keyword = array_unique($result_keyword);

		$total_ai_keyword = implode(",", $ai_keyword);
		$total_result_keyword = implode(",", $result_keyword);
        $total_result_keyword = implode(",", $result_keyword);
        
        foreach($s3 as $s => $ss){

            $input['product_seq'] = $request->seq;
            $input['path'] = $ss;
            $input['created_at'] = date("Y-m-d H:i:s"); 
			$input['updated_at'] = date("Y-m-d H:i:s");

            $query = DB::table('s3_image_product')->insertGetId($input);

        }

		$result_keyword = array_unique($result_keyword);

		$total_ai_keyword = implode(",", $ai_keyword);
		$total_result_keyword = implode(",", $result_keyword);
        $total_result_keyword = implode(",", $result_keyword);

            $input2['seq'] = $request->seq;
			$input2['brand'] = $request->brand;
			$input2['option_id'] = $request->option_id; 
			$input2['user_id'] = Auth::user()->id;
			$input2['category_id'] = $request->category_id; 
			$input2['name'] = $request->title; 
			$input2['sub_name'] = $request->sub_title; 
			$input2['price'] = $request->price; 
			$input2['type_of_discount'] = $request->type_of_discount; 
            $input2['discount_price'] = $request->discount_price; 
			$input2['description'] = $request->description;
			$input2['stock'] = $request->stock; 
            $input2['notification_stock'] = $request->notification_stock; 
			$input2['policy'] = $request->policy; 
			$input2['status'] = 0; 
			$input2['views'] = 0; 
			$input2['user_keyword'] = $request->user_keyword;
			$input2['ai_keyword'] = $total_ai_keyword;
			$input2['result_keyword'] = $total_result_keyword;
			$input2['region'] = "ko";  
			$input2['is_cooperation'] = $request->is_cooperation; 
			$input2['delivery_cost'] = $request->delivery_cost; 
            $input2['free_delivery_cost'] = $request->free_delivery_cost;
			$input2['created_at'] = date("Y-m-d H:i:s"); 
			$input2['updated_at'] = date("Y-m-d H:i:s");
            $input2['started_sales_period'] = $request->started_sales_period;
            $input2['ended_sales_period'] = $request->ended_sales_period;

		$query2 = DB::table('products')->insertGetId($input2);

		request()->session()->flash('info', [$alert, $message]);

        return view('pages.myshop.product_upload2', ['data' => ['general_setting' => $general_setting,
                                                'seller_header_region' => $region,
                                                'seller_header_language' => $language,
                                                'seller_header_currency' => $currency,
                                                'category' => $category,
                                            ]]);

    }

    public function product_detail(Request $request){

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
            $category = DB::table('categories')->where([
                // ['parent','not like','%.%'],
                ['language','ko']
                ])->get();
        } else if(strpos($request_url, 'seller.mena.aliseon.com')) {
            $general_setting_query = DB::table('general_settings')->select()
            ->where([
                ['region_id','1'],
                ['title','like','seller.body.%']
            ])->get();
            $category = DB::table('categories')->where([
                // ['parent','not like','%.%'],
                ['language','ar']
                ])->get();
        } else if(strpos($request_url, 'seller.en.aliseon.com')) {
            $general_setting_query = DB::table('general_settings')->select()
            ->where([
                ['region_id','233'],
                ['title','like','seller.body.%']
            ])->get();
            $category = DB::table('categories')->where([
                // ['parent','not like','%.%'],
                ['language','ko']
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

        return view('pages.myshop.product_detail', ['data' => ['general_setting' => $general_setting,
                                                    'seller_header_region' => $region,
                                                    'seller_header_language' => $language,
                                                    'seller_header_currency' => $currency,
                                                    'category' => $category,
                                                ]]);

    }

    public function product_bulkupload(Request $request){

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

        return view('pages.myshop.product_bulkupload', ['data' => ['general_setting' => $general_setting,
                                                'seller_header_region' => $region,
                                                'seller_header_language' => $language,
                                                'seller_header_currency' => $currency,
                                            ]]);

    }

    public function order(Request $request){

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

        return view('pages.myshop.order', ['data' => ['general_setting' => $general_setting,
                                                'seller_header_region' => $region,
                                                'seller_header_language' => $language,
                                                'seller_header_currency' => $currency,
                                            ]]);

    }

    public function order_detail(Request $request){

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

        return view('pages.myshop.order_detail', ['data' => ['general_setting' => $general_setting,
                                                'seller_header_region' => $region,
                                                'seller_header_language' => $language,
                                                'seller_header_currency' => $currency,
                                            ]]);

    }

    public function notice(Request $request){

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

        return view('pages.myshop.notice', ['data' => ['general_setting' => $general_setting,
                                                'seller_header_region' => $region,
                                                'seller_header_language' => $language,
                                                'seller_header_currency' => $currency,
                                            ]]);

    }

    public function cancel_refund_exchange(Request $request){

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

        return view('pages.myshop.cancel_refund_exchange', ['data' => ['general_setting' => $general_setting,
                                                'seller_header_region' => $region,
                                                'seller_header_language' => $language,
                                                'seller_header_currency' => $currency,
                                            ]]);

    }

    public function cancel_refund_exchange_detail(Request $request){

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

        return view('pages.myshop.cancel_refund_exchange_detail', ['data' => ['general_setting' => $general_setting,
                                                'seller_header_region' => $region,
                                                'seller_header_language' => $language,
                                                'seller_header_currency' => $currency,
                                            ]]);

    }

    public function cooperation(Request $request){

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

        return view('pages.myshop.cooperation', ['data' => ['general_setting' => $general_setting,
                                                'seller_header_region' => $region,
                                                'seller_header_language' => $language,
                                                'seller_header_currency' => $currency,
                                            ]]);

    }

    public function cooperation_list(Request $request){

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

        return view('pages.myshop.cooperation_list', ['data' => ['general_setting' => $general_setting,
                                                'seller_header_region' => $region,
                                                'seller_header_language' => $language,
                                                'seller_header_currency' => $currency,
                                            ]]);

    }

    public function account_calculate(Request $request){

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

        return view('pages.myshop.account.calculate', ['data' => ['general_setting' => $general_setting,
                                                'seller_header_region' => $region,
                                                'seller_header_language' => $language,
                                                'seller_header_currency' => $currency,
                                            ]]);

    }

    public function account_payment_detail(Request $request){

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

        return view('pages.myshop.account.payment_detail', ['data' => ['general_setting' => $general_setting,
                                                'seller_header_region' => $region,
                                                'seller_header_language' => $language,
                                                'seller_header_currency' => $currency,
                                            ]]);

    }

    public function account_penalty(Request $request){

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

        return view('pages.myshop.account.penalty', ['data' => ['general_setting' => $general_setting,
                                                'seller_header_region' => $region,
                                                'seller_header_language' => $language,
                                                'seller_header_currency' => $currency,
                                            ]]);

    }

    public function tax_bill(Request $request){

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

        return view('pages.myshop.tax_bill', ['data' => ['general_setting' => $general_setting,
                                                'seller_header_region' => $region,
                                                'seller_header_language' => $language,
                                                'seller_header_currency' => $currency,
                                            ]]);

    }

    public function customer_service_product_inquiry(Request $request){

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

        return view('pages.myshop.customer_service.product_inquiry', ['data' => ['general_setting' => $general_setting,
                                                'seller_header_region' => $region,
                                                'seller_header_language' => $language,
                                                'seller_header_currency' => $currency,
                                            ]]);

    }

    public function customer_service_product_review(Request $request){

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

        return view('pages.myshop.customer_service.product_review', ['data' => ['general_setting' => $general_setting,
                                                'seller_header_region' => $region,
                                                'seller_header_language' => $language,
                                                'seller_header_currency' => $currency,
                                            ]]);

    }

    public function customer_service_product_report(Request $request){

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

        return view('pages.myshop.customer_service.product_report', ['data' => ['general_setting' => $general_setting,
                                                'seller_header_region' => $region,
                                                'seller_header_language' => $language,
                                                'seller_header_currency' => $currency,
                                            ]]);

    }

    public function aliseon_service_inquiry_ticket(Request $request){

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

        return view('pages.myshop.aliseon_service.inquiry_ticket', ['data' => ['general_setting' => $general_setting,
                                                'seller_header_region' => $region,
                                                'seller_header_language' => $language,
                                                'seller_header_currency' => $currency,
                                            ]]);

    }

    public function aliseon_service_event_ticket(Request $request){

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

        return view('pages.myshop.aliseon_service.event_ticket', ['data' => ['general_setting' => $general_setting,
                                                'seller_header_region' => $region,
                                                'seller_header_language' => $language,
                                                'seller_header_currency' => $currency,
                                            ]]);

    }

    public function statistics(Request $request){

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

        return view('pages.myshop.statistics', ['data' => ['general_setting' => $general_setting,
                                                'seller_header_region' => $region,
                                                'seller_header_language' => $language,
                                                'seller_header_currency' => $currency,
                                            ]]);

    }

}