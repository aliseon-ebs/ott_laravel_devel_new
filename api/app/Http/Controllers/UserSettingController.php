<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use Illuminate\Support\Facades\DB;
use Validator;


class UserSettingController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function set_user_setting(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'user_id' => 'required',
            'lang' => 'required',
            'country' => 'required',
            'currency' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            if(strcasecmp($request->lang, "ar") != 0 and strcasecmp($request->lang, "ko") != 0 and strcasecmp($request->lang, "en") != 0){

                return $this->sendError('language is not correct', $validator->errors());

            } else if (strcasecmp($request->country, "AE") != 0 and strcasecmp($request->country, "SA") != 0 and 
            strcasecmp($request->country, "KR") != 0 and strcasecmp($request->country, "VN") != 0 and
             strcasecmp($request->country, "ID") != 0){

                return $this->sendError('country is not correct', $validator->errors());

            } else if (strcasecmp($request->currency, "aed") != 0 and strcasecmp($request->currency, "usd") != 0 and strcasecmp($request->currency, "krw") != 0 and 
            strcasecmp($request->currency, "bdt") != 0 and strcasecmp($request->currency, "eur") != 0 and strcasecmp($request->currency, "inr") != 0 and 
            strcasecmp($request->currency, "ngn") != 0 and strcasecmp($request->currency, "brl") != 0){

                return $this->sendError('currency is not correct', $validator->errors());

            } else {

                $query1 = DB::table('countries')->select('country_name')->where('country_code','=', $request->country)->get();

                    $query2 = DB::table('users')->where('id','=', $request->user_id)
                    ->update(['language' => $request->lang,
                    'country' => $query1[0]->country_name,
                    'currency' => $request->currency,
                    ]);

                    return $this->sendResponse('UserSetting Update Successfully.', 'Successfully.');

            }

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
            }

    }

    
    
    public function set_user_language(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'user_id' => 'required',
            'lang' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            if(strcasecmp($request->lang, "ar") != 0 and strcasecmp($request->lang, "ko") != 0 and strcasecmp($request->lang, "en") != 0){

                return $this->sendError('language is not correct', $validator->errors());

            }  else {

                    $query1 = DB::table('users')->where('id','=', $request->user_id)
                    ->update([
                        'language' => $request->lang,
                    ]);
        
                    return $this->sendResponse('Language Update Successfully.', 'Successfully.');

            }

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }


    public function set_user_country(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'user_id' => 'required',
            'country' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            if (strcasecmp($request->country, "AE") != 0 and strcasecmp($request->country, "SA") != 0 and 
            strcasecmp($request->country, "KR") != 0 and strcasecmp($request->country, "VN") != 0 and
             strcasecmp($request->country, "ID") != 0){

                return $this->sendError('country is not correct', $validator->errors());

            } else {

                $query1 = DB::table('countries')->select('country_name')->where('country_code','=', $request->country)->get();

                    $query2 = DB::table('users')->where('id','=', $request->user_id)
                    ->update([
                    'country' => $query1[0]->country_name,
                    ]);
        
                    return $this->sendResponse('Country Successfully.', 'Successfully.');

            }

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }


    public function set_user_currency(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'user_id' => 'required',
            'currency' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            if (strcasecmp($request->currency, "aed") != 0 and strcasecmp($request->currency, "usd") != 0 and strcasecmp($request->currency, "krw") != 0 and 
            strcasecmp($request->currency, "bdt") != 0 and strcasecmp($request->currency, "eur") != 0 and strcasecmp($request->currency, "inr") != 0 and 
            strcasecmp($request->currency, "ngn") != 0 and strcasecmp($request->currency, "brl") != 0){

                return $this->sendError('currency is not correct', $validator->errors());

            } else {

                    $query1 = DB::table('users')->where('id','=', $request->user_id)
                    ->update([
                    'currency' => $request->currency,
                    ]);
        
                    return $this->sendResponse('Currency Update Successfully.', 'Successfully.');

            }

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function get_user_phone(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'calling_code' => 'required',
            'phone' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

                    $query1 = DB::table('users')->select('country')->where('phone','=', $request->phone)->Exists();

                    if($query1 == 1){

                        $query2 = DB::table('users')->select('country')->where('phone','=', $request->phone)->get();
        
                        if($query2[0]->country == null){
        
                            $query2[0]->country = "United Arab Emirates";
        
                        }
        
                        $query3 = DB::table('countries')->select('country_code')->where('country_name','=',$query2[0]->country)->get();
        
                        if(strcasecmp($query3[0]->country_code, $request->calling_code) == 0){
        
                            $query4 = DB::table('users')->select('id')->where('phone','=', $request->phone)->get();
        
                            return $this->sendResponse($query4,'Successfully.');
        
                        } else {
        
                            return $this->sendError('calling_code is not correct', $validator->errors());
        
                        }
    
                    } else {
        
                        return $this->sendError('phonenumber does not exist', $validator->errors());
        
                    }

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function set_user_profile_update(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'user_id' => 'required',
            'photo',
            'nickname' => 'required',
            'name',
            'desc',
            'phone' => 'required',
            'address' => 'required',
            'address_detail' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('users')->select(['id', 'email','nickname','name','profile_photo',
            'subscribe_to_cnt','country','zip','city','state','address','phone_number'])
            ->where('id','=',$request->user_id)->get();
            $query3 = DB::table('users')->select('nickname')->where('nickname','=',$request->nickname)->doesntExist();
            $query4 = DB::table('users')->select('phone_number')->where('phone_number','=',$request->phone)->doesntExist();

            if(strcmp($query3, '1') && strcmp($query1[0]->nickname, $request->nickname) != 0 ) {

                return $this->sendError('NickName already exists.', $validator->errors());

            } else if(strcmp($query4, '1') && strcmp($query1[0]->phone_number, $request->phone) != 0) {

                return $this->sendError('Phone already exists.', $validator->errors());

            }  else {

            $query2 = DB::table('users')->where('id', '=', $request->user_id)->update(
                ['profile_photo' => $request->photo, 'nickname' => $request->nickname,'desc' => $request->desc, 
                'phone_number' => $request->phone,'address' => $request->address,'zip' => $request->zip,'city' => $request->city,]
                );

            return $this->sendResponse($query1,'Successfully.');

            }

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function user_allowme(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'user_id' => 'required',
            'is_allowme' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

                $query1 = DB::table('users')->select('is_allowme')->where('id','=',$request->user_id)->get();

                if($query1[0]->is_allowme == 0 && $request->is_allowme == 1){

                    $query2 = DB::table('users')->where('id', '=', $request->user_id)
                    ->update(['is_allowme' => 1], ['updated_at' => date("Y-m-d H:i:s")]);

                    return $this->sendResponse('is_allow Successfully.' , 'Successfully.');

                } else if($query1[0]->is_allowme == 1 && $request->is_allowme == 0){

                    $query2 = DB::table('users')->where('id', '=', $request->user_id)
                    ->update(['is_allowme' => 0], ['updated_at' => date("Y-m-d H:i:s")]);

                    return $this->sendResponse('un is_allow Successfully.' , 'Successfully.');

                } else {

                    return $this->sendResponse('is_allow value is Different.' , 'Successfully.');

                }

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function user_hide(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'user_id' => 'required',
            'is_hide' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

                $query1 = DB::table('users')->select('is_hide')->where('id','=',$request->user_id)->get();

                if($query1[0]->is_hide == 0 && $request->is_hide == 1){

                    $query2 = DB::table('users')->where('id', '=', $request->user_id)
                    ->update(['is_hide' => 1], ['updated_at' => date("Y-m-d H:i:s")]);

                    return $this->sendResponse('is_hide Successfully.' , 'Successfully.');

                } else if($query1[0]->is_hide == 1 && $request->is_hide == 0){

                    $query2 = DB::table('users')->where('id', '=', $request->user_id)
                    ->update(['is_hide' => 0], ['updated_at' => date("Y-m-d H:i:s")]);

                    return $this->sendResponse('un is_hide Successfully.' , 'Successfully.');

                } else {

                    return $this->sendResponse('is_hide value is Different.' , 'Successfully.');

                }

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function user_noti_subscribe(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'user_id' => 'required',
            'is_noti_subscribe' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

                $query1 = DB::table('users')->select('is_noti_subscribe')->where('id','=',$request->user_id)->get();

                if($query1[0]->is_noti_subscribe == 0 && $request->is_noti_subscribe == 1){

                    $query2 = DB::table('users')->where('id', '=', $request->user_id)
                    ->update(['is_noti_subscribe' => 1], ['updated_at' => date("Y-m-d H:i:s")]);

                    return $this->sendResponse('is_noti_subscribe Successfully.' , 'Successfully.');

                } else if($query1[0]->is_noti_subscribe == 1 && $request->is_noti_subscribe == 0){

                    $query2 = DB::table('users')->where('id', '=', $request->user_id)
                    ->update(['is_noti_subscribe' => 0], ['updated_at' => date("Y-m-d H:i:s")]);

                    return $this->sendResponse('un is_noti_subscribe Successfully.' , 'Successfully.');

                } else {

                    return $this->sendResponse('is_noti_subscribe value is Different.' , 'Successfully.');

                }

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function user_noti_upload_contents(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'user_id' => 'required',
            'is_noti_upload_contents' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

                $query1 = DB::table('users')->select('is_noti_upload_contents')->where('id','=',$request->user_id)->get();

                if($query1[0]->is_noti_upload_contents == 0 && $request->is_noti_upload_contents == 1){

                    $query2 = DB::table('users')->where('id', '=', $request->user_id)
                    ->update(['is_noti_upload_contents' => 1], ['updated_at' => date("Y-m-d H:i:s")]);

                    return $this->sendResponse('is_noti_upload_contents Successfully.' , 'Successfully.');

                } else if($query1[0]->is_noti_upload_contents == 1 && $request->is_noti_upload_contents == 0){

                    $query2 = DB::table('users')->where('id', '=', $request->user_id)
                    ->update(['is_noti_upload_contents' => 0], ['updated_at' => date("Y-m-d H:i:s")]);

                    return $this->sendResponse('un is_noti_upload_contents Successfully.' , 'Successfully.');

                } else {

                    return $this->sendResponse('is_noti_upload_contents value is Different.' , 'Successfully.');

                }

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function user_noti_shipping_product(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'user_id' => 'required',
            'is_noti_shipping_product' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

                $query1 = DB::table('users')->select('is_noti_shipping_product')->where('id','=',$request->user_id)->get();

                if($query1[0]->is_noti_shipping_product == 0 && $request->is_noti_shipping_product == 1){

                    $query2 = DB::table('users')->where('id', '=', $request->user_id)
                    ->update(['is_noti_shipping_product' => 1], ['updated_at' => date("Y-m-d H:i:s")]);

                    return $this->sendResponse('is_noti_shipping_product Successfully.' , 'Successfully.');

                } else if($query1[0]->is_noti_shipping_product == 1 && $request->is_noti_shipping_product == 0){

                    $query2 = DB::table('users')->where('id', '=', $request->user_id)
                    ->update(['is_noti_shipping_product' => 0], ['updated_at' => date("Y-m-d H:i:s")]);

                    return $this->sendResponse('un is_noti_shipping_product Successfully.' , 'Successfully.');

                } else {

                    return $this->sendResponse('is_noti_shipping_product value is Different.' , 'Successfully.');

                }

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function user_noti_event(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'user_id' => 'required',
            'is_noti_event' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

                $query1 = DB::table('users')->select('is_noti_event')->where('id','=',$request->user_id)->get();

                if($query1[0]->is_noti_event == 0 && $request->is_noti_event == 1){

                    $query2 = DB::table('users')->where('id', '=', $request->user_id)
                    ->update(['is_noti_event' => 1], ['updated_at' => date("Y-m-d H:i:s")]);

                    return $this->sendResponse('is_noti_event Successfully.' , 'Successfully.');

                } else if($query1[0]->is_noti_event == 1 && $request->is_noti_event == 0){

                    $query2 = DB::table('users')->where('id', '=', $request->user_id)
                    ->update(['is_noti_event' => 0], ['updated_at' => date("Y-m-d H:i:s")]);

                    return $this->sendResponse('un is_noti_event Successfully.' , 'Successfully.');

                } else {

                    return $this->sendResponse('is_noti_event value is Different.' , 'Successfully.');

                }

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function set_user_favcategory(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'user_id' => 'required',
            'fav_category' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('users')->where('id', '=', $request->user_id)
            ->update(['fav_category' => $request->fav_category], ['updated_at' => date("Y-m-d H:i:s")]);

            return $this->sendResponse('fav_category update Successfully.' , 'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function set_user_change_password(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'user_id'   => 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
            'new_password' => 'required',
            'new_password_confirmation' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('users')->select('password')->where('id','=',$request->user_id)->get();
            $password = $query1[0]->password;

            if(strcmp($request->password, $request->password_confirmation) != 0 || !password_verify($request->password ,$password)
             || strcmp($request->new_password, $request->new_password_confirmation)){

                return $this->sendError('Password is not match. Please enter the password again.', $validator->errors());
            
            } else if(password_verify($request->password ,$password)){

                $password = bcrypt($request->new_password);

                $query2 = DB::table('users')->where('id','=',$request->user_id)->update(['password' => $password]);

                return $this->sendResponse('Password update Successfully.','Successfully.');

            }

        } else {

            return $this->sendError('Access_token is not correct', $validator->errors());   
    
        }

    }

    public function set_user_change_phone(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'user_id'   => 'required',
            'phone' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('users')->select('phone')->where('phone','=',$request->phone)->doesntExist();

            if(strcmp($query1, '1')){

                return $this->sendError('Phone Number is always exists. Please enter another Phone Number.', $validator->errors());

            } else {

                $query2 = DB::table('users')->where('id','=',$request->user_id)->update(['phone' => $request->phone]);

                return $this->sendResponse('Phone Number update Successfully.','Successfully.');

            }

        } else {

            return $this->sendError('Access_token is not correct', $validator->errors());   
    
        }

    }

    public function user_list(Request $request)
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

            $query1 = DB::table('languages')->select(['language_code', 'language_name'])->get();
            $query2 = DB::table('countries')->select(['country_img', 'country_name', 'country_num','country_code'])->get();
            $query3 = DB::table('currencies')->select(['currency_code', 'currency_symbol'])->get();

            $totalresultuserlist = array();
            $totalresultuserlist = [
                'language' => $query1,
                'country' => $query2,
                'currency' => $query3,
            ];

            return $this->sendResponse($totalresultuserlist ,'Successfully.');

        } else {

            return $this->sendError('Access_token is not correct', $validator->errors());   
    
        }

    }

    public function user_country_list(Request $request)
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

            $query1 = DB::table('countries')->select(['country_img', 'country_name', 'country_num','country_code'])->get();

            return $this->sendResponse($query1 ,'Successfully.');

        } else {

            return $this->sendError('Access_token is not correct', $validator->errors());   
    
        }

    }

    public function user_currency_list(Request $request)
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

            $query1 = DB::table('currencies')->select(['currency_sign', 'currency_name'])->get();

            return $this->sendResponse($query1 ,'Successfully.');

        } else {

            return $this->sendError('Access_token is not correct', $validator->errors());   
    
        }

    }

    public function user_language_list(Request $request)
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

            $query1 = DB::table('languages')->select(['language_code', 'language_name'])->get();

            return $this->sendResponse($query1 ,'Successfully.');

        } else {

            return $this->sendError('Access_token is not correct', $validator->errors());   
    
        }

    }

}