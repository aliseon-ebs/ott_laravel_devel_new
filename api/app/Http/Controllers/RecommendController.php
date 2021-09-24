<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use Illuminate\Support\Facades\DB;
use Validator;


class RecommendController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_recommend_creator(Request $request)
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

        if($request->user_id == 0){

            $query = DB::table('users')->select(['subscribe_to_cnt','contents_cnt','id','nickname','profile_photo'])->orderby('subscribe_to_cnt', 'DESC')->limit(5)->get();

            return $this->sendResponse($query, 'Successfully.');

        } else {

            $query1 = DB::table('from_fav_channel')->select('to')->where('from', '=', $request->user_id)->get();
            $userresult = array();

            foreach($query1 as $q1 => $q11){
                array_push($userresult, $q11->to);
            }

            $query2 = DB::table('users')->select(['subscribe_to_cnt','contents_cnt','id','nickname','profile_photo'])->orderby('subscribe_to_cnt', 'DESC')->where('id', '!=', $request->user_id)
            ->whereNotIn('id', $userresult)->limit(5)->get();

            return $this->sendResponse($query2, 'Successfully.');

            }

        } else {

        return $this->sendError('access_token is not correct', $validator->errors());   

    }

    }

    public function get_recommend_contents(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'user_id' => 'required',
            'category' => 'required',
            'start' => 'required',
            'limit' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

        if($request->user_id == 0){

            $query = DB::table('voyage')->select(['id', 'user_id', 'status', 'description', 'create_at' ,'update_at','like_count' ,'view_count' ,'comment_count'])->orderby('create_at', 'DESC')->limit(6)->get();
    
            $query1 = DB::table('voyage')->select()->orderby('create_at', 'DESC')->limit(6)->get();
    
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
    
                    $query5 = DB::table('users')->select('photo')->where('id', '=', $profile[$ii])->get();
                    array_push($profileresult, $query5[0]->photo);
    
                }
    
            for($i = 0; $i < count($query1); $i++){
    
                    $query[$i]->thumbnail =  $thumbnailresult[$i];
                    $query[$i]->name =  $nameresult[$i];
                    $query[$i]->profile = $profileresult[$i];
                    // $query1[$i]->contents =  $contentsresult[$i];
    
                }
    
            return $this->sendResponse($query, 'Products retrieved successfully.');

        } else {

            $query1 = DB::table('from_fav_channel')->select('to')->where('from', '=', $request->user_id)->get();
        
            $myrecommcontents = array();
            $myrecommcontentsresult = array();
    
            $thumbnail = array();
            $profile = array();
            $type = array();
    
            $thumbnailresult = array();
            $profileresult = array();
            $nameresult = array();

            if(!empty($query1[0])){
    
                $myrecommcontents = explode(",", $query1[0]->to);

                $query2 = DB::table('voyage')->select()->wherenotin('user_id', $myrecommcontents)->orderby('create_at', 'DESC')->limit(6)->get();

            } else {

                $query2 = DB::table('voyage')->select()->inRandomOrder()->limit(6)->get();
            
            }

            foreach($query2 as $q2 => $q22){

                    array_push($thumbnail, explode(",", $q22->contents_id));
                    array_push($type, explode(",", $q22->contents_type));
                    array_push($profile, $q22->user_id);

                    $query3 = DB::table('users')->select('nickname')->where('id', '=', $q22->user_id)->get();

                    if(!empty($query3[0]->nickname)){
                        array_push($nameresult, $query3[0]->nickname);
                    } else {
                        array_push($nameresult, '');
                    }

            }

            foreach($thumbnail as $t => $th){

                foreach($thumbnail[$t] as $thumb => $thumbn){
    
                    if($type[$t][$thumb] == '0'){
                    $query4 = DB::table('s3_image_voyage')->select('thumbnail')->where('id', '=', $thumbnail[$t][$thumb])->get();
                    } else {
                    $query4 = DB::table('s3_video_voyage')->select('thumbnail')->where('id', '=', $thumbnail[$t][$thumb])->get();
                    }
    
                    if(!empty($query4[0])){
    
                        $thumbnailresult[$t][$thumb] = $query4[0]->thumbnail; 
    
                    }
                }
    
            }
    
            foreach($profile as $p => $pr){
    
                $query6 = DB::table('users')->select('photo')->where('id', '=', $profile[$p])->get();
                array_push($profileresult, $query6[0]->photo);
    
            }

            foreach($query2 as $q2 => $q22){

                unset($q22->product_id);
                unset($q22->user_id);
                unset($q22->contents_id);
                unset($q22->contents_type);
                $q22->nickname = $nameresult[$q2];
                $q22->thumbnail = $thumbnailresult[$q2];
                $q22->profile = $profileresult[$q2];

            }

            return $this->sendResponse($query2, 'Products retrieved successfully.');
    
            }

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

        

}