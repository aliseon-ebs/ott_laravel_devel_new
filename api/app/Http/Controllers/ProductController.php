<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use Illuminate\Support\Facades\DB;
use Validator;
use stdClass;


class ProductController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_product_detail(Request $request)
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'product_id' => 'required',
            'lang' => 'required',
            'currency' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('products')->select(['id','user_id as vendor_id','thumbnail','name','sub_name', 'discount_price',
            'price','type_of_discount'])->where('id','=',$request->product_id)->get();
            $query1[0]->basic_shipping = 4;
            $query1[0]->free_shipping = 800;

            return $this->sendResponse($query1, 'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function get_product_info(Request $request)
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'product_id' => 'required',
            'lang' => 'required',
            'currency' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('products')->select(['id', 'details as desc'])->where('id','=',$request->product_id)->get();

            return $this->sendResponse($query1, 'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function product_review_file_upload(Request $request)
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'image_path' => 'required',
            'image_thumbnail' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $image_path = array();
            $image_thumbnail = array();

            $image_id = array();

            if(!empty($request->image_path)&&!empty($request->image_thumbnail)){

                $image_path = explode(",", $request->image_path);
                $image_thumbnail = explode(",", $request->image_thumbnail);
                
            }

            foreach($image_path as $i => $im){

                $query2 = DB::table('s3_image_review')->insertGetId(
                    ['path' => $im, 'thumbnail' => $image_thumbnail[$i], 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"),
                    ]
                );

                array_push($image_id, $query2);

            }

            $totalfileupload = array();
            $totalfileupload = [
                'image' => $image_id,
            ];

            return $this->sendResponse($totalfileupload,'Successfully.');

        } else {

        return $this->sendError('access_token is not correct', $validator->errors());   

        }
    }

    public function product_review_upload_result(Request $request)
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'user_id' => 'required',
            'product_id' => 'required',
            'contents_id',
            'rating' => 'required',
            'review' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('product_review')->insertGetId(
                ['user_id' => $request->user_id , 'product_id' => $request->product_id, 'contents_id' => $request->contents_id, 
                    'rating' => $request->rating, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'review' => $request->review, 'is_delete' => 0,
                ]
                );

            return $this->sendResponse($query1, 'Successfully.');

        } else {

        return $this->sendError('access_token is not correct', $validator->errors());   

        }
    }

    public function get_product_review(Request $request)
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'product_id' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $contents = array();
            $contents_result = array();

            $query = DB::table('product_review')->select(['product_review.id as review_id', 'product_review.product_id', 'product_review.contents_id',
            'product_review.rating', 'product_review.created_at', 'product_review.updated_at', 'product_review.review', 'product_review.is_delete',
            'users.profile_photo', 'users.nickname'])->join('users', 'product_review.user_id','=','users.id')->where('product_id','=',$request->product_id)->orderby('updated_at', 'DESC')->get();

            $count_result = count($query);

            foreach($query as $q => $qu){

                $contents[$q] = explode(",", $qu->contents_id);

                $query1 = DB::table('s3_image_review')->select()->whereIn('id', $contents[$q])->get();

                if(!empty($query1[0])){

                    $query[$q]->product_review = $query1;

                }

            }

            $reviewresult = [

                'count' => $count_result,
                'result' => $query,

            ];

            return $this->sendResponse($reviewresult, 'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function get_product_comment(Request $request)
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'product_id' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('product_comments')->select(['product_comments.id', 'product_comments.product_id', 'product_comments.text','product_comments.created_at', 
            'product_comments.updated_at', 'users.nickname', 'users.photo'])->join('users', 'users.id', '=', 'product_comments.user_id')
            ->where('product_id','=',$request->product_id)->orderby('product_comments.id', 'DESC')->get();

            $count_result = count($query1);

            foreach($query1 as $q1 => $q11){

                $query2 = DB::table('product_replies')->where('comment_id','=', $q11->id)->count();

                $q11->product_replies_count = $query2;

            }

            if(!isset($query1)){

                $totalcommentresult = [

                    'count' => $count_result,
    
                ];

            } else {

                $totalcommentresult = [

                    'count' => $count_result,
                    'result' => $query1,
    
                ];

            }

            return $this->sendResponse($totalcommentresult, 'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function product_comment_post(Request $request)
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'user_id' => 'required',
            'product_id' => 'required',
            'text' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('product_comments')->insert(
                ['user_id' => $request->user_id , 'product_id' => $request->product_id, 'text' => $request->text,
                'is_delete' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"),
                ]
               );

            $query2 = DB::table('product_comments')->select(['product_comments.id', 'product_comments.product_id', 'product_comments.text','product_comments.created_at', 
            'product_comments.updated_at', 'users.nickname', 'users.photo'])->join('users', 'users.id', '=', 'product_comments.user_id')
            ->where('product_id','=',$request->product_id)->orderby('product_comments.id', 'DESC')->get();

            $count_result = count($query2);

            foreach($query2 as $q2 => $q22){

                $query3 = DB::table('product_replies')->where('comment_id','=', $q22->id)->count();

                $q22->product_replies_count = $query3;

            }

            if(!isset($query2)){

                $totalcommentresult = [

                    'count' => $count_result,
    
                ];

            } else {

                $totalcommentresult = [

                    'count' => $count_result,
                    'result' => $query2,
    
                ];

            }

            return $this->sendResponse($totalcommentresult, 'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function get_product_comment_detail(Request $request)
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

            $query1 = DB::table('product_replies')->select(['product_replies.id','product_replies.comment_id','product_replies.text',
            'product_replies.created_at', 'product_replies.updated_at','users.id as user_id','users.nickname', 'users.photo'])->join('users', 'users.id', '='
            , 'product_replies.user_id')->where('comment_id','=', $request->comment_id)->get();

            return $this->sendResponse($query1 , 'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function product_replies_post(Request $request)
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'user_id' => 'required',
            'comment_id' => 'required',
            'text' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('product_replies')->insert(
                ['user_id' => $request->user_id , 'comment_id' => $request->comment_id, 'text' => $request->text,
                'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'is_delete' => 0,
                ]
               );

            $query2 = DB::table('product_replies')->select(['product_replies.id','product_replies.comment_id','product_replies.text','product_replies.created_at', 'product_replies.updated_at',
            'users.nickname', 'users.photo'])->join('users', 'users.id', '=', 'product_replies.user_id')->where('comment_id','=', $request->comment_id)->get();

            return $this->sendResponse($query2 , 'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function get_product_buy(Request $request)
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'product_id' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('products')->select('option_id')->where('id','=',$request->product_id)->get();

            $option = array();
            $result = array();

            $option = explode(',', $query1[0]->option_id);

            if(!empty($query1[0]->option_id)){
                foreach($option as $o => $op){

                    $query2 = DB::table('products_option')->select(['option_name','option_ori_value','option_ori_price','option_value','option_price','option_stock'])
                    ->where('id','=',$op)->get();

                    $result[$o]['name'] = explode(',', $query2[0]->option_name);
                    $result[$o]['count'] = count($result[$o]['name']);
                    $result[$o]['original_value'] = explode('/', $query2[0]->option_ori_value);
                    $result[$o]['original_price'] = explode('/', $query2[0]->option_ori_price);
                    $result[$o]['value'] = explode(',',$query2[0]->option_value);
                    $result[$o]['price'] = explode(',',$query2[0]->option_price);
                    $result[$o]['stock'] = explode(',',$query2[0]->option_stock);
                    
                }
            }  

            return $this->sendResponse($result , 'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function get_product_buy_cart(Request $request)
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'user_id' => 'required',
            'product_id' => 'required',
            'seller_id' => 'required',
            'option_value',
            'option_value',
            'option_price',
            'option_price_ori',
            'option_stock',
            'total_price' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('cart')->insertGetId(
                ['user_id' => $request->subject , 'user_id' => $request->user_id, 'product_id' => $request->product_id, 'seller_id' => $request->seller_id,
                'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'option_value' => $request->option_value, 
                'option_price_ori' => $request->option_price_ori, 'option_price' => $request->option_price, 'option_stock' => $request->option_stock, 'status' => 0,
                'total_price' => $request->total_price
                 ]
                );
            
            return $this->sendResponse($query1 , 'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

}