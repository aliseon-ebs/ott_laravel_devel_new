<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use Illuminate\Support\Facades\DB;
use Validator;


class SubscribeController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_subscribeto_list(Request $request)
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

        $query1 = DB::table('to_fav_channel')->select('to')->where('from', '=', $request->user_id)->get();

        $toid = array();
        $subscribeto = array();

            if(isset($query1[0])){

                $toid = explode(",", $query1[0]->to);

                foreach($toid as $t => $to){

                    $query2 = DB::table('users')->select(['id','nickname','profile_photo','subscribe_to_cnt','contents_cnt'])->where('id', '=', $toid[$t])->get();

                    if(!empty($query2[0])){

                        array_push($subscribeto, $query2[0]);

                    }
                
                }

                if(count($subscribeto) != 0){
                    $query3 = DB::table('users')->where('id','=', $request->user_id)->update(['subscribe_from_cnt' => count($subscribeto)]);
                }

                return $this->sendResponse($subscribeto, 'Successfully.');

            } else {

                return $this->sendResponse($query1, 'Successfully.');
                
            }

        } else {

        return $this->sendError('access_token is not correct', $validator->errors());   

        }

    }

    public function get_subscribefrom_list(Request $request)
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

        $query1 = DB::table('from_fav_channel')->select('to')->where('from', '=', $request->user_id)->get();     

        $fromid = array();
        $subscribefrom = array();

            if(isset($query1[0])){

                $fromid = explode(",", $query1[0]->to);

                foreach($fromid as $f => $fr){

                    $query2 = DB::table('users')->select(['id','nickname','profile_photo','subscribe_to_cnt','contents_cnt'])->where('id', '=', $fromid[$f])->get();

                    if(!empty($query2[0])){

                        array_push($subscribefrom, $query2[0]);

                    }
                
                }

                if(count($subscribefrom) != 0){
                    $query3 = DB::table('users')->where('id','=', $request->user_id)->update(['subscribe_to_cnt' => count($subscribefrom)]);
                }

                return $this->sendResponse($subscribefrom, 'Successfully.');

            } else {

                return $this->sendResponse($query1, 'Successfully.');
                
            }

        } else {

        return $this->sendError('access_token is not correct', $validator->errors());   

        }

    }

    public function subscribe_post(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'from_id' => 'required',
            'to_id' => 'required',
            'type' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('from_fav_channel')->select('to')->where('from','=',$request->from_id)->get();
            $query2 = DB::table('to_fav_channel')->select('to')->where('from','=',$request->to_id)->get();

            $query1_count = 0;
            $query2_count = 0;

            $query1_arr = array();
            $query2_arr = array();

            if(!empty($query1[0])){

                $query1_arr = explode(",", $query1[0]->to);

            }

            if(!empty($query2[0])){

                $query2_arr = explode(",", $query2[0]->to);

            }
            
            if(strcmp($request->type, 'delete') == 0){

                if(!empty($query1_arr)){

                    foreach($query1_arr as $q1 => $q11){

                        if($q11 == $request->to_id){

                            unset($query1_arr[$q1]);
                            $query1_count = 1;

                        }

                    }

                }

                if(!empty($query2_arr)){

                    foreach($query2_arr as $q2 => $q22){

                        if($q22 == $request->from_id){

                            unset($query2_arr[$q2]);
                            $query2_count = 1;

                        }

                    }

                }

                if($query1_count == 1 && $query2_count == 1){

                    $query1_arr_result = implode(',', $query1_arr);
                    $query2_arr_result = implode(',', $query2_arr);

                    if(!empty($query1_arr_result)){

                        $query3 = DB::table('from_fav_channel')->where('from','=',$request->from_id)->update(
                            ['to' => $query1_arr_result],
                            );

                    } else {

                        $query3 = DB::table('from_fav_channel')->where('from','=',$request->from_id)->delete();

                    }

                    if(!empty($query2_arr_result)){

                        $query4 = DB::table('to_fav_channel')->where('from','=',$request->to_id)->update(
                            ['to' => $query2_arr_result],
                            );

                    } else {

                        $query4 = DB::table('to_fav_channel')->where('from','=',$request->to_id)->delete();

                    }

                    subscribe_post_update($request->from_id, $request->to_id);

                    return $this->sendResponse('Unsubscribe Successful', 'Successfully.');

                } else {

                    return $this->sendError('from_id or to_id is not correct or values empty', $validator->errors());       
    
                }
    
            
            } else if(strcmp($request->type, 'add') == 0 ){
                
                if(!empty($query1_arr)){

                    foreach($query1_arr as $q1 => $q11){

                        if($q11 == $request->to_id){

                            $query1_count = $query1_count + 1;

                        }

                    }

                }

                if(!empty($query2_arr)){

                    foreach($query2_arr as $q2 => $q22){

                        if($q22 == $request->from_id){

                            $query2_count = $query2_count + 1;

                        }

                    }

                }

                if($query1_count == 0 && $query2_count == 0){

                    $query1_arr_result = implode(',', $query1_arr);
                    $query2_arr_result = implode(',', $query2_arr);

                    if(!empty($query1_arr_result)){

                        $query1_arr_result = $query1_arr_result.",".$request->to_id;

                        $query3 = DB::table('from_fav_channel')->where('from','=',$request->from_id)->update(
                            ['to' => $query1_arr_result],
                            );

                    } else {

                        $query3 = DB::table('from_fav_channel')->insert(
                            ['from' => $request->from_id , 'to' => $request->to_id,
                            ]
                           );

                    }

                    if(!empty($query2_arr_result)){

                        $query2_arr_result = $query2_arr_result.",".$request->from_id;

                        $query4 = DB::table('to_fav_channel')->where('from','=',$request->to_id)->update(
                            ['to' => $query2_arr_result],
                            );

                    } else {

                        $query4 = DB::table('to_fav_channel')->insert(
                            ['from' => $request->to_id , 'to' => $request->from_id,
                            ]
                           );

                    }

                    subscribe_post_update($request->from_id, $request->to_id);

                    return $this->sendResponse('Subscribe Successful', 'Successfully.');

                } else {

                    return $this->sendError('from_id or to_id is not correct or values empty', $validator->errors());       
    
                }
            
            } else {

                return $this->sendError('from_id or to_id is not correct or values empty', $validator->errors());       

            }

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

}