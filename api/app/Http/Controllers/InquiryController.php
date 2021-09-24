<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Validator;


class InquiryController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function get_product_inquiry_list(Request $request)
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

            $query1 = DB::table('product_inquiry')->select()->where('user_id', '=', $request->user_id)->orderby('updated_at', 'DESC')->get();

            return $this->sendResponse($query1,'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function product_inquiry_post(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'product_id' => 'required',
            'vendor_id' => 'required',
            'user_id' => 'required',
            'title' => 'required',
            'desc' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $inquiry_number = "IP".Str::random(4).date("Ymd").rand(100000, 999999);

            $query1 = DB::table('product_inquiry')->insertGetId(
                ['product_id' => $request->product_id, 'vendor_id' => $request->vendor_id, 'inquiry_number' => $inquiry_number, 
                'user_id' => $request->user_id, 'title' => $request->title, 'desc' => $request->desc, 
                'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'status' => 0, 'is_delete' => 0,
                ]
            );

            $query2 = DB::table('product_inquiry_message')->insert(
                ['inquiry_id' => $query1, 'user_id' => $request->user_id, 'text' => $request->desc,
                'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'is_delete' => 0,
                ]
                );

                return $this->sendResponse('product_inquiry post successfully', 'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function product_inquiry_message(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'inquiry_id' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('product_inquiry_message')->select(['user_id','text','created_at','updated_at','is_delete'])
            ->where('inquiry_id','=',$request->inquiry_id)->get();

                return $this->sendResponse($query1, 'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function product_inquiry_message_post(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'inquiry_id' => 'required',
            'user_id' => 'required',
            'text' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('product_inquiry_message')->insert(
                ['inquiry_id' => $request->inquiry_id, 'user_id' => $request->user_id, 'text' => $request->text, 
                'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'is_delete' => 0,
                ]
                );  

            $query2 = DB::table('product_inquiry_message')->select(['user_id','text','created_at','updated_at','is_delete'])
            ->where('inquiry_id','=',$request->inquiry_id)->get();

                return $this->sendResponse($query2, 'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function product_inquiry_close(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'inquiry_id' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('product_inquiry')->where('id', '=', $request->inquiry_id)->update(
                ['status' => 1, ]
            );

            $query2 = DB::table('product_inquiry')->select()->where('id', '=', $request->inquiry_id)->orderby('updated_at', 'DESC')->get();

            return $this->sendResponse($query2,'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function get_order_inquiry_list(Request $request)
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

            $query1 = DB::table('order_inquiry')->select()->where('user_id', '=', $request->user_id)->orderby('updated_at', 'DESC')->get();

            return $this->sendResponse($query1,'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function order_inquiry_post(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'order_id' => 'required',
            'vendor_id' => 'required',
            'user_id' => 'required',
            'title' => 'required',
            'desc' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $inquiry_number = "IO".Str::random(4).date("Ymd").rand(100000, 999999);

            $query1 = DB::table('order_inquiry')->insertGetId(
                ['order_id' => $request->order_id, 'vendor_id' => $request->vendor_id, 'inquiry_number' => $inquiry_number, 
                'user_id' => $request->user_id, 'title' => $request->title, 'desc' => $request->desc, 
                'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'status' => 0, 'is_delete' => 0,
                ]
            );

            $query2 = DB::table('order_inquiry_message')->insert(
                ['inquiry_id' => $query1, 'user_id' => $request->user_id, 'text' => $request->desc,
                'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'is_delete' => 0,
                ]
                );

                return $this->sendResponse('order_inquiry post successfully', 'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function order_inquiry_message(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'inquiry_id' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('order_inquiry_message')->select(['user_id','text','created_at','updated_at','is_delete'])
            ->where('inquiry_id','=',$request->inquiry_id)->get();

                return $this->sendResponse($query1, 'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function order_inquiry_message_post(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'inquiry_id' => 'required',
            'user_id' => 'required',
            'text' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('order_inquiry_message')->insert(
                ['inquiry_id' => $request->inquiry_id, 'user_id' => $request->user_id, 'text' => $request->text, 
                'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'is_delete' => 0,
                ]
                );  

            $query2 = DB::table('order_inquiry_message')->select(['user_id','text','created_at','updated_at','is_delete'])
            ->where('inquiry_id','=',$request->inquiry_id)->get();

                return $this->sendResponse($query2, 'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function order_inquiry_close(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'inquiry_id' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('order_inquiry')->where('id', '=', $request->inquiry_id)->update(
                ['status' => 1, ]
            );

            $query2 = DB::table('order_inquiry')->select()->where('id', '=', $request->inquiry_id)->orderby('updated_at', 'DESC')->get();

            return $this->sendResponse($query2,'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

}