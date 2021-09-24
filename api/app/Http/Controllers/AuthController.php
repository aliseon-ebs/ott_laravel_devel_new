<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use App\check_access_token;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth; 
use Validator;
use stdClass;
use MustVerifyEmail;


class AuthController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function auth(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'device_id' => 'required',
            'region' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $query1 = DB::table('auth')->where('device_id','=',$request->device_id)->doesntExist();

        if(strcmp($query1, '1')){

            if(strcasecmp($request->region, "uae") == 0 or strcasecmp($request->region, "kor") == 0){

                $query5 = DB::table('auth')->select('id')->where('device_id', '=', $request->device_id)->get();

                $query6 = DB::table('certi')->select('access_token')->where('auth_id', '=', $query5[0]->id)->get();

                return $this->sendResponse($query6,'Successfully.');

            } else {

                return $this->sendError('region  is not correct.', $validator->errors());   

            }

        } else {

            if(strcasecmp($request->region, "uae") == 0 or strcasecmp($request->region, "kor") == 0){
                $query2 = DB::table('auth')->insertGetId(
                ['device_id' => $request->device_id, 
                'region' => $request->region,]
                );

                $query3 = DB::table('certi')->insertGetId(
                    ['auth_id' => $query2, 
                    'access_token' => exec('uuidgen'),
                    'create_at' => date("Y-m-d h:i:s"),]
                    );

                $query4 = DB::table('certi')->select('access_token')->where('id', '=', $query3)->get();

                return $this->sendResponse($query4,'Successfully.');

            } else {

                return $this->sendError('region is required.', $validator->errors());   

            }

        }

    }

    public function register_create(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'email' => 'required',
            'password' => 'required',
            'nickname' => 'required',
            'language' => 'required',
            'country' => 'required',
            'currency' => 'required',
            'gender' => 'required',
            'photo',
            'fav_category',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('users')->select('email')->where('email','=',$request->email)->doesntExist();
            $query2 = DB::table('users')->select('nickname')->where('nickname','=',$request->nickname)->doesntExist();

            $query3 = DB::table('countries')->select('country_name')->where('country_code','=', $request->country)->get();

            if(strcmp($query1, '1')){

                return $this->sendError('Email already exists.', $validator->errors());   

            } else if(strcmp($query2, '1')) {

                return $this->sendError('NickName already exists.', $validator->errors());

            } else {

            $input['email'] = $request->email;
            $input['password'] = bcrypt($request->password);
            $input['nickname'] = $request->nickname;
            if(!empty($request->fav_category)){
                $input['fav_category'] = $request->fav_category;
            }
            $input['language'] = $request->language;
            $input['country'] = $query3[0]->country_name;
            $input['currency'] = $request->currency;
            $input['gender'] = $request->gender;

            if(!empty($request->photo)){
                $input['photo'] = $request->photo;
            } 

            $query4 = DB::table('users')->insertGetId($input);

            return $this->sendResponse($query4,'Successfully.');

            }

        } else {

            return $this->sendError('Access_token is not correct', $validator->errors());   
    
        }

    }

    public function login(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'email'   => 'required|email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $id = 0;

            $query1 = DB::table('users')->select('email')->where('email','=',$request->email)->Exists();
            $query2 = DB::table('users')->select(['id', 'password'])->where('email','=',$request->email)->get();

            if(empty($query2[0])){

                $id = 0;
                $password = "";

            } else {

                $id = $query2[0]->id;
                $password = $query2[0]->password;

            }
            
            if(password_verify($request->password ,$password)){

                $query3 = DB::table('users')->select(['id','email','name','nickname','profile_photo','ban','subscribe_to_cnt','subscribe_from_cnt','contents_cnt',
                'country','zip','city','state','address','is_allowme','is_hide','is_noti_subscribe','is_noti_upload_contents',
                'is_noti_shipping_product','is_noti_event','fav_category','seller_id','seller_status','mega_id','mega_status'])->where('id','=',$id)->get();
                $query3[0]->status = $query3[0]->ban;
                $query3[0]->creator_type = 1;
                unset($query3[0]->ban);

                return $this->sendResponse($query3,'Successfully.');

            } else {

                return $this->sendError('Password is not match. Please enter the password again.', $validator->errors());

            }

        } else {

            return $this->sendError('Access_token is not correct', $validator->errors());   
    
        }

        return $this->sendResponse("Successfully.",'Successfully.');

    }

    public function register_exist(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'type'   => 'required',
            'value'   => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){
            
            if(strcasecmp($request->type, "email") == 0){

                $query1 = DB::table('users')->where('email', $request->value)->exists();

                if($query1 == 1){

                    return $this->sendError('Email Always Exists', $validator->errors());   

                } else {

                    return $this->sendResponse("You can sign up for this Email.",'Successfully.');

                }

            } else if(strcasecmp($request->type, "phone") == 0){

                $query1 = DB::table('users')->where('phone', $request->value)->exists();

                if($query1 == 1){

                    return $this->sendError('Phone Always Exists', $validator->errors());   

                } else {

                    return $this->sendResponse("You can sign up for this PhoneNumber.",'Successfully.');

                }

            } else if(strcasecmp($request->type, "nickname") == 0){

                $query1 = DB::table('users')->where('nickname', $request->value)->exists();

                if($query1 == 1){

                    return $this->sendError('Nickname Always Exists', $validator->errors());   

                } else {

                    return $this->sendResponse("You can sign up for this Nickname.",'Successfully.');

                }

            }

        } else {

            return $this->sendError('Access_token is not correct', $validator->errors());   
    
        }

    }

    public function register_check(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'type'   => 'required',
            'check_id'   => 'required',
            'value'   => 'required',
            'certi_num'   => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){
            
            if(strcasecmp($request->type, "email") == 0){

                $query1 = DB::table('email_auth')->select()->where('id', $request->check_id)->get();

                if($query1[0]->email == $request->value && $query1[0]->certi_num == $request->certi_num){

                    $query2 = DB::table('users')->where('email', '=', $query1[0]->email)->update(['is_certi_email' => 1]);

                    return $this->sendResponse('Email Certi Successfully', 'Successfully.');

                } else {

                    return $this->sendError('The certi number is not correct.', $validator->errors());   

                }

            } else if(strcasecmp($request->type, "phone") == 0){

                $query1 = DB::table('email_auth')->select()->where('id', $request->check_id)->get();

                if(strcasecmp($query1[0]->email, $request->value) && strcasecmp($query1[0]->certi_num, $request->certi_num)){

                    return $this->sendResponse('Phone Certi Successfully', 'Successfully.');

                } else {

                    return $this->sendError('The certi number is not correct.', $validator->errors());   

                }

            }

        } else {

            return $this->sendError('Access_token is not correct', $validator->errors());   
    
        }

    }

    public function register_recommend(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('users')->select(['id','photo','nickname','contents_cnt','subscribeto_cnt'])
            ->where('mega_status','=', 2)->orderby('subscribeto_cnt', 'DESC')->limit(3)->get();

            $query2 = DB::table('users')->select(['id','photo','nickname','contents_cnt','subscribeto_cnt'])
            ->where('mega_status','=', 0)->orderby('subscribeto_cnt', 'DESC')->limit(10)->get();

            $regi_recomm = array();
            $regi_recomm = [
                'mega' => $query1,
                'recommend_creator' => $query2,
            ];

            return $this->sendResponse($regi_recomm,'Successfully.');

        } else {

            return $this->sendError('Access_token is not correct', $validator->errors());   
    
        }

    }

}