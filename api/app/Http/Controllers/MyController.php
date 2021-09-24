<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use Illuminate\Support\Facades\DB;
use Validator;


class MyController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function get_my_info(Request $request)
    // public function index()
    {

        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'user_id' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

        $query = DB::table('users')->select(['id','email','name','nickname','profile_photo','ban','subscribe_to_cnt','subscribe_from_cnt','contents_cnt',
        'country','zip','city','state','address','is_allowme','is_hide','is_noti_subscribe','is_noti_upload_contents','desc',
        'is_noti_shipping_product','is_noti_event','fav_category','seller_id','seller_status','mega_id','mega_status'])
        ->where('id','=',$request->user_id)->first();

        return $this->sendResponse($query, 'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function get_my_list(Request $request)
    // public function index()
    {

        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'user_id' => 'required',
            'category' => 'required',
            'start' => 'required',
            'limit' => 'required',
            'is_ott' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

        if($request->is_ott == 0){
            $query = DB::table('voyage')->select(['id', 'user_id', 'status', 'description', 'create_at' ,'update_at','like_count' ,
            'view_count' ,'comment_count'])->where('user_id','=',$request->user_id)->orderby('create_at', 'DESC')->offset($request->start)->limit($request->limit)->get();
        } else {
            $query = DB::table('voyage')->select(['id', 'user_id', 'status', 'description', 'create_at' ,'update_at','like_count' ,
            'view_count' ,'comment_count'])->where([
                ['user_id','=',$request->user_id],
                ['contents_type','like', '%1%'],
                ])->orderby('create_at', 'DESC')->offset($request->start)->limit($request->limit)->get();
        }

        if($request->is_ott == 0){

            $query1 = DB::table('voyage')->select()->where('user_id','=',$request->user_id)->orderby('create_at', 'DESC')->offset($request->start)->limit($request->limit)->get();

        } else {

            $query1 = DB::table('voyage')->select()->where([
                ['user_id','=',$request->user_id],
                ['contents_type','like', '%1%'],
                ])->orderby('create_at', 'DESC')->offset($request->start)->limit($request->limit)->get();

        }

        $thumbnail = array();
        $profile = array();
        $type = array();

        $thumbnailresult = array();
        $profileresult = array();
        $nameresult = array();

        for($i = 0; $i < count($query1); $i++){
            $thumbnail[$i] = explode(",", $query1[$i]->contents_id);
            $type[$i] = explode(",", $query1[$i]->contents_type);
            $profile[$i] = $query1[$i]->user_id;
        }

        foreach($query1 as $q1 => $q11){
            $query2 = DB::table('users')->select('nickname')->where('id', '=', $q11->user_id)->get();
    
            if(!empty($query2[0]->nickname)){
                array_push($nameresult, $query2[0]->nickname);
            } else {
                array_push($nameresult, '');
            }
    
        }

        for($ii = 0; $ii < count($thumbnail); $ii++){

            for($iii = 0; $iii < count($thumbnail[$ii]); $iii++){

                if($type[$ii][$iii] == '0'){
                $query3 = DB::table('s3_image_voyage')->select('thumbnail')->where('id', '=', $thumbnail[$ii][$iii])->get();
                } else {
                $query3 = DB::table('s3_video_voyage')->select('thumbnail')->where('id', '=', $thumbnail[$ii][$iii])->get();
                }

                if(!empty($query3[0])){

                    $thumbnailresult[$ii][$iii] = $query3[0]->thumbnail; 

                }
            }

        }

            for($ii = 0; $ii < count($profile); $ii++){

                $query5 = DB::table('users')->select('profile_photo')->where('id', '=', $profile[$ii])->first();
                array_push($profileresult, $query5->profile_photo);

            }

        for($i = 0; $i < count($query1); $i++){

                $query[$i]->thumbnail =  $thumbnailresult[$i];
                $query[$i]->nickname =  $nameresult[$i];
                $query[$i]->profile = $profileresult[$i];
                // $query1[$i]->contents =  $contentsresult[$i];

            }

        if(count($query) != 0){
            $query6 = DB::table('users')->where('id','=', $request->user_id)->update(['contents_cnt' => count($query)]);
        }

        return $this->sendResponse($query, 'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }
    } 


}