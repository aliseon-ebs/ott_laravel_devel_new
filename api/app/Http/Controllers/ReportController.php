<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Validator;


class ReportController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function get_product_report_list(Request $request)
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

            $query1 = DB::table('product_report')->select()->where('user_id', '=', $request->user_id)->orderby('updated_at', 'DESC')->get();

            return $this->sendResponse($query1,'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function product_report_post(Request $request)
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

            $report_number = "RP".Str::random(4).date("Ymd").rand(100000, 999999);

            $query1 = DB::table('product_report')->insertGetId(
                ['product_id' => $request->product_id, 'vendor_id' => $request->vendor_id, 'report_number' => $report_number, 
                'user_id' => $request->user_id, 'title' => $request->title, 'desc' => $request->desc, 
                'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'status' => 0, 'is_delete' => 0,
                ]
            );

            $query2 = DB::table('product_report_message')->insert(
                ['report_id' => $query1, 'user_id' => $request->user_id, 'text' => $request->desc,
                'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'is_delete' => 0,
                ]
                );

                return $this->sendResponse('product_report post successfully', 'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function product_report_message(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'report_id' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('product_report_message')->select(['user_id','text','created_at','updated_at','is_delete'])
            ->where('report_id','=',$request->report_id)->get();

                return $this->sendResponse($query1, 'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function product_report_message_post(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'report_id' => 'required',
            'user_id' => 'required',
            'text' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('product_report_message')->insert(
                ['report_id' => $request->report_id, 'user_id' => $request->user_id, 'text' => $request->text, 
                'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'is_delete' => 0,
                ]
                );  

            $query2 = DB::table('product_report_message')->select(['user_id','text','created_at','updated_at','is_delete'])
            ->where('report_id','=',$request->report_id)->get();

                return $this->sendResponse($query2, 'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function product_report_close(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'report_id' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('product_report')->where('id', '=', $request->report_id)->update(
                ['status' => 1, ]
            );

            $query2 = DB::table('product_report')->select()->where('id', '=', $request->report_id)->orderby('updated_at', 'DESC')->get();

            return $this->sendResponse($query2,'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function get_product_comment_report_list(Request $request)
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

            $query1 = DB::table('product_comment_report')->select()->where('user_id', '=', $request->user_id)->orderby('updated_at', 'DESC')->get();

            return $this->sendResponse($query1,'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function product_comment_report_post(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'product_id' => 'required',
            'product_comment_id' => 'required',
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

            $report_number = "RPC".Str::random(4).date("Ymd").rand(100000, 999999);

            $query1 = DB::table('product_comment_report')->insertGetId(
                ['product_id' => $request->product_id, 'vendor_id' => $request->vendor_id, 'report_number' => $report_number, 
                'product_comment_id' => $request->product_comment_id, 'user_id' => $request->user_id, 'title' => $request->title,
                'desc' => $request->desc, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'status' => 0, 'is_delete' => 0,
                ]
            );

            $query2 = DB::table('product_comment_report_message')->insert(
                ['comment_id' => $query1, 'user_id' => $request->user_id, 'text' => $request->desc,
                'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'is_delete' => 0,
                ]
                );

                return $this->sendResponse('product_comment_report post successfully', 'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function product_comment_report_message(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'comment_id' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('product_comment_report_message')->select(['user_id','text','created_at','updated_at','is_delete'])
            ->where('comment_id','=',$request->comment_id)->get();

                return $this->sendResponse($query1, 'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function product_comment_report_message_post(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'comment_id' => 'required',
            'user_id' => 'required',
            'text' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('product_comment_report_message')->insert(
                ['comment_id' => $request->report_id, 'user_id' => $request->user_id, 'text' => $request->text, 
                'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'is_delete' => 0,
                ]
                );  

            $query2 = DB::table('product_comment_report_message')->select(['user_id','text','created_at','updated_at','is_delete'])
            ->where('comment_id','=',$request->comment_id)->get();

                return $this->sendResponse($query2, 'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function product_comment_report_close(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'report_id' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('product_comment_report')->where('id', '=', $request->report_id)->update(
                ['status' => 1, ]
            );

            $query2 = DB::table('product_comment_report')->select()->where('id', '=', $request->report_id)->orderby('updated_at', 'DESC')->get();

            return $this->sendResponse($query2,'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    //--------------------------------------------------------------------------------------------------------------------------------------------

    public function get_voyage_report_list(Request $request)
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

            $query1 = DB::table('voyage_report')->select()->where('user_id', '=', $request->user_id)->orderby('updated_at', 'DESC')->get();

            return $this->sendResponse($query1,'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function voyage_report_post(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'voyage_id' => 'required',
            'voyage_user_id' => 'required',
            'user_id' => 'required',
            'title' => 'required',
            'desc' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $report_number = "RV".Str::random(4).date("Ymd").rand(100000, 999999);

            $query1 = DB::table('voyage_report')->insertGetId(
                ['voyage_id' => $request->voyage_id, 'voyage_user_id' => $request->voyage_user_id, 
                'user_id' => $request->user_id, 'title' => $request->title, 'desc' => $request->desc,
                 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 
                'status' => 0, 'is_delete' => 0, 'report_number' => $report_number,
                ]
            );

            $query2 = DB::table('voyage_report_message')->insert(
                ['report_id' => $query1, 'user_id' => $request->user_id, 'text' => $request->desc,
                'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'is_delete' => 0,
                ]
                );

                return $this->sendResponse('voyage_report post successfully', 'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function voyage_report_message(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'report_id' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('voyage_report_message')->select(['user_id','text','created_at','updated_at','is_delete'])
            ->where('report_id','=',$request->report_id)->get();

                return $this->sendResponse($query1, 'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function voyage_report_message_post(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'report_id' => 'required',
            'user_id' => 'required',
            'text' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('voyage_report_message')->insert(
                ['report_id' => $request->report_id, 'user_id' => $request->user_id, 'text' => $request->text, 
                'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'is_delete' => 0,
                ]
                );  

            $query2 = DB::table('voyage_report_message')->select(['user_id','text','created_at','updated_at','is_delete'])
            ->where('report_id','=',$request->report_id)->get();

                return $this->sendResponse($query2, 'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function voyage_report_close(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'report_id' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('voyage_report')->where('id', '=', $request->report_id)->update(
                ['status' => 1, ]
            );

            $query2 = DB::table('voyage_report')->select()->where('id', '=', $request->report_id)->orderby('updated_at', 'DESC')->get();

            return $this->sendResponse($query2,'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function get_voyage_comment_report_list(Request $request)
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

            $query1 = DB::table('voyage_comment_report')->select()->where('user_id', '=', $request->user_id)->orderby('updated_at', 'DESC')->get();

            return $this->sendResponse($query1,'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function voyage_comment_report_post(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'voyage_id' => 'required',
            'voyage_comment_id' => 'required',
            'voyage_user_id' => 'required',
            'user_id' => 'required',
            'title' => 'required',
            'desc' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $report_number = "RVC".Str::random(4).date("Ymd").rand(100000, 999999);

            $query1 = DB::table('voyage_comment_report')->insertGetId(
                ['voyage_id' => $request->voyage_id, 'voyage_comment_id' => $request->voyage_comment_id, 
                'voyage_user_id' => $request->voyage_user_id, 'user_id' => $request->user_id, 'title' => $request->title,
                 'desc' => $request->desc, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"),
                  'status' => 0, 'is_delete' => 0, 'report_number' => $report_number,
                ]
            );

            $query2 = DB::table('voyage_comment_report_message')->insert(
                ['comment_id' => $query1, 'user_id' => $request->user_id, 'text' => $request->desc,
                'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'is_delete' => 0,
                ]
                );

                return $this->sendResponse('voyage_comment_report post successfully', 'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function voyage_comment_report_message(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'comment_id' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('voyage_comment_report_message')->select(['user_id','text','created_at','updated_at','is_delete'])
            ->where('comment_id','=',$request->comment_id)->get();

                return $this->sendResponse($query1, 'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function voyage_comment_report_message_post(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'comment_id' => 'required',
            'user_id' => 'required',
            'text' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('voyage_comment_report_message')->insert(
                ['comment_id' => $request->report_id, 'user_id' => $request->user_id, 'text' => $request->text, 
                'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'is_delete' => 0,
                ]
                );  

            $query2 = DB::table('voyage_comment_report_message')->select(['user_id','text','created_at','updated_at','is_delete'])
            ->where('comment_id','=',$request->comment_id)->get();

                return $this->sendResponse($query2, 'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function voyage_comment_report_close(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'report_id' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('voyage_comment_report')->where('id', '=', $request->report_id)->update(
                ['status' => 1, ]
            );

            $query2 = DB::table('voyage_comment_report')->select()->where('id', '=', $request->report_id)->orderby('updated_at', 'DESC')->get();

            return $this->sendResponse($query2,'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

}