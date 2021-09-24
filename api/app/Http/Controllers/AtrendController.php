<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use App\Atrend;
use Illuminate\Support\Facades\DB;
use Validator;
use stdClass;


class AtrendController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function get_atrend_list(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'lang' => 'required',
            'currency' => 'required',
            'start' => 'required',
            'limit' => 'required',
            'is_ott' => 'required',
        ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            if($request->is_ott == '1'){

                $item = array();
                $itemresult = array();

                $query1 = DB::table('a_trend')->select(['a_trend.id','a_trend.user_id','a_trend.type','a_trend.product_id', 
                'a_trend.contents_id', 'a_trend.title','a_trend.sub_title','a_trend.description','a_trend.summary','a_trend.view',
                'a_trend.like','a_trend.color','a_trend.start_at','a_trend.create_at','a_trend.update_at','a_trend.opacity','a_trend.status',
                'a_trend.background','users.nickname','users.profile_photo'])->join('aliseon.users','a_trend.user_id','=','users.id')
                    ->where('type', '=', 'video')->orderby('id', 'DESC')->get();

                for($i = 0; $i < count($query1); $i++){
                    $item[$i] = explode(",", $query1[$i]->product_id);
                }

                foreach($item as $items => $itemss){

                    $query2 = DB::table('products')->select(['id','name','brand','thumbnail','price','type_of_discount','discount_price'])
                    ->whereIn('id', $itemss)->get();
                    array_push($itemresult, $query2);
                }

                $query3= DB::table('a_trend')->selectRaw("(case aliseon.a_trend.type
                when 'default' then (select `thumbnail` from aliseon.s3_image_atrend where a_trend.contents_id = s3_image_atrend.id)
                when 'recomm' then (select `thumbnail` from aliseon.s3_image_atrend where a_trend.contents_id = s3_image_atrend.id)
                when 'video' then (select `thumbnail` from aliseon.s3_video_atrend where a_trend.contents_id = s3_video_atrend.id)
                when 'item' then null end) as thumbnail")->orderby('id', 'DESC')->get();

                $nowtime = date("Y-m-d");

                $todayarray = array();
                $lastarray = array();

                for($i = 0; $i < count($query1); $i++){

                    if(date("Y-m-d" ,strtotime($query1[$i]->create_at)) == $nowtime){

                        $query1[$i]->thumbnail =  $query3[$i]->thumbnail;
                        $query1[$i]->items = $itemresult[$i];
                        array_push($todayarray, $query1[$i]);

                    } else {

                        $query1[$i]->thumbnail =  $query3[$i]->thumbnail;
                        $query1[$i]->items = $itemresult[$i];
                        array_push($lastarray, $query1[$i]);

                    }

                    }

                    $totalatrend = array();
                    $totalatrend = [
                        'today' => $todayarray,
                        'last' => $lastarray,
                    ];

                return $this->sendResponse($totalatrend,'Successfully.');

            } else {

                $item = array();
                $itemresult = array();

                $query1 = DB::table('a_trend')->select(['a_trend.id','a_trend.user_id','a_trend.type','a_trend.product_id', 
                'a_trend.contents_id', 'a_trend.title','a_trend.sub_title','a_trend.description','a_trend.summary','a_trend.view',
                'a_trend.like','a_trend.color','a_trend.start_at','a_trend.create_at','a_trend.update_at','a_trend.opacity','a_trend.status',
                'a_trend.background','users.nickname','users.profile_photo'])->join('aliseon.users','a_trend.user_id','=','users.id')
                    ->orderby('id', 'DESC')->get();

                for($i = 0; $i < count($query1); $i++){
                    $item[$i] = explode(",", $query1[$i]->product_id);
                }

                foreach($item as $items => $itemss){
                    $query2 = DB::table('products')->select(['id','name','brand','thumbnail','price','type_of_discount','discount_price'])->whereIn('id', $itemss)->get();
                    array_push($itemresult, $query2);
                }

                $query3= DB::table('a_trend')->selectRaw("(case aliseon.a_trend.type
                when 'default' then (select `thumbnail` from aliseon.s3_image_atrend where a_trend.contents_id = s3_image_atrend.id)
                when 'recomm' then (select `thumbnail` from aliseon.s3_image_atrend where a_trend.contents_id = s3_image_atrend.id)
                when 'video' then (select `thumbnail` from aliseon.s3_video_atrend where a_trend.contents_id = s3_video_atrend.id)
                when 'item' then null end) as thumbnail")->orderby('id', 'DESC')->get();

                $nowtime = date("Y-m-d");

                $todayarray = array();
                $lastarray = array();

                for($i = 0; $i < count($query1); $i++){

                    if(date("Y-m-d" ,strtotime($query1[$i]->create_at)) == $nowtime){

                        $query1[$i]->thumbnail =  $query3[$i]->thumbnail;
                        $query1[$i]->items = $itemresult[$i];
                        array_push($todayarray, $query1[$i]);

                    } else {

                        $query1[$i]->thumbnail =  $query3[$i]->thumbnail;
                        $query1[$i]->items = $itemresult[$i];
                        array_push($lastarray, $query1[$i]);

                    }

                    }

                    $totalatrend = array();
                    $totalatrend = [
                        'today' => $todayarray,
                        'last' => $lastarray,
                    ];

                return $this->sendResponse($totalatrend,'Successfully.');

            }

        } else {

        return $this->sendError('access_token is not correct', $validator->errors());

        }

    }

    public function get_atrend_detail(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'user_id' => 'required',
            'atrend_id' => 'required',
            'lang' => 'required',
            'currency' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

        $item = array();
        $itemresult1 = array();
        $itemresult2 = array();
        $itemresult3 = array();
        $itemresult4 = array();
        $itemtype = array();

        $query1 = DB::table('a_trend')->select(['title','dept1_html','dept2_html','dept3_html','dept4_html'])
        ->where('id', '=', $request->atrend_id)->get();

        $query2 = DB::table('a_trend')->select(['id','user_id','type','product_id','contents_id',
        'title','sub_title','description','summary','view','like','color','start_at','create_at','update_at',
        'opacity','status','background'])->where('id', '!=', $request->atrend_id)->inRandomOrder()->limit(5)->get();

        $query3 = DB::table('a_trend')->selectRaw("(case aliseon.a_trend.type
        when 'default' then (select `path` from aliseon.s3_image_atrend where a_trend.contents_id = s3_image_atrend.id)
        when 'recomm' then (select `path` from aliseon.s3_image_atrend where a_trend.contents_id = s3_image_atrend.id)
        when 'video' then (select `p480` from aliseon.s3_video_atrend where a_trend.contents_id = s3_video_atrend.id)
        when 'item' then null end) as maincontents")->where('id', '=', $request->atrend_id)->get();

        $query4 = DB::table('a_trend')->select(['product_id','product_type'])
        ->where('id', '=', $request->atrend_id)->get();

        for($i = 0; $i < count($query4); $i++){
            $item[$i] = explode(",", $query4[$i]->product_id);
            $itemtype[$i] = explode(",", $query4[$i]->product_type);
        }

        for($ii = 0; $ii < count($item[0]); $ii++){

            if($itemtype[0][$ii]== 0){
            $query5 = DB::table('products')->select(['id','name','brand','thumbnail','price','type_of_discount','discount_price'])->where('id', '=', $item[0][$ii])->get();
                if(!empty($query5[0])){
                    array_push($itemresult1, $query5[0]);
                }
            } else if($itemtype[0][$ii]== 1){
                if(!empty($query5[0])){
                    $query5 = DB::table('products')->select(['id','name','brand','thumbnail','price','type_of_discount','discount_price'])->where('id', '=', $item[0][$ii])->get();
                    array_push($itemresult2, $query5[0]);
                }
            } else if($itemtype[0][$ii]== 2){
                if(!empty($query5[0])){
                    $query5 = DB::table('products')->select(['id','name','brand','thumbnail','price','type_of_discount','discount_price'])->where('id', '=', $item[0][$ii])->get();
                    array_push($itemresult3, $query5[0]);
                }
            } else if($itemtype[0][$ii]== 3){
                if(!empty($query5[0])){
                    $query5 = DB::table('products')->select(['id','name','brand','thumbnail','price','type_of_discount','discount_price'])->where('id', '=', $item[0][$ii])->get();
                    array_push($itemresult4, $query5[0]);
                }
            }

        }

        $totalitemresult = [
            'dept1_product' => $itemresult1,
            'dept2_product' => $itemresult2,
            'dept3_product' => $itemresult3,
            'dept4_product' => $itemresult4,
        ];

        $query1[0]->maincontent = $query3[0]->maincontents;
        $query1[0]->items[0] = $totalitemresult;

        for($iii = 0; $iii < count($query2); $iii++){

            $query4 = DB::table('s3_image_atrend')->select('thumbnail')->where('s3_image_atrend.id', '=', $query2[$iii]->contents_id)->get();
            $query2[$iii]->thumbnail =  $query4[0]->thumbnail;

        }

        $totalresultatrend = array();
        $totalresultatrend = [
            'detail' => $query1,
            'related' => $query2,
        ];

        return $this->sendResponse($totalresultatrend,'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());

        }

    }

}
