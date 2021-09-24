<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use Illuminate\Support\Facades\DB;
use Validator;
use stdClass;
use App\Http\Controllers\API\AuthController;


class StoreController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function get_recommend_product_list(Request $request)
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

            $query1 = DB::table('products')->select(['id','name','brand','thumbnail','price','discount_price','type_of_discount'])->orderby('updated_at', 'DESC')->limit(6)->get();

            return $this->sendResponse($query1, 'Successfully.');

        } else {

        return $this->sendError('access_token is not correct', $validator->errors());   

        }

    }

    public function get_recommend_shop_list(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
        ]);

        $recommshopresult = array();
        $recommitemresult = array();

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('products')->selectraw('user_id, COUNT(*) as count')->groupby('user_id')->orderby('count', 'DESC')->limit(4)->get();

            foreach($query1 as $q1 => $q11){

                $query2 = DB::table('users')->select(['id','nickname','profile_photo','desc','subscribe_from_cnt'])->where('id','=',$q11->user_id)->orderby('updated_at', 'DESC')->limit(2)->get();

                $query3 = DB::table('products')->select(['id','name','brand','thumbnail','price','discount_price','type_of_discount'])->where('user_id','=',$q11->user_id)->orderby('updated_at', 'DESC')->limit(4)->get();

                $recommshopresult[$q1] = $query2;
                $recommitemresult[$q1] = $query3;

                $totalrecommshopresult[$q1] = [

                    'shop' => $recommshopresult[$q1],
                    'items' => $recommitemresult[$q1],
    
                ];

            }

            return $this->sendResponse($totalrecommshopresult, 'Successfully.');

        } else {

        return $this->sendError('access_token is not correct', $validator->errors());   

        }

    }

    public function get_recommend_category_product(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'category_id' => 'required',
            'lang' => 'required',
            'start' => 'required',
            'limit' => 'required',
            'sort' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            if(strcasecmp($request->lang, "ar") == 0 or strcasecmp($request->lang, "ko") == 0 or strcasecmp($request->lang, "en") == 0 or strcasecmp($request->lang, "vi") == 0){

                if($request->category_id == 0 && strcasecmp($request->lang, "ar") == 0){

                    $query1 = DB::table('categories')->select(['id', 'name as dept1', 'activation_status'])->where([
                        ['language','=', "ar"],
                        ['parent','not like', '%.%']
                    ])->get();
                        
                } else if($request->category_id == 0 && strcasecmp($request->lang, "ko") == 0){

                    $query1 = DB::table('categories')->select(['id', 'name as dept1', 'activation_status'])->where([
                        ['language','=', "ko"],
                        ['parent','not like', '%.%']
                    ])->get();
                        
                } else if($request->category_id == 0 && strcasecmp($request->lang, "en") == 0){

                    $query1 = DB::table('categories')->select(['id', 'name as dept1', 'activation_status'])->where([
                        ['language','=', "en"],
                        ['parent','not like', '%.%']
                    ])->get();
                        
                } else if($request->category_id == 0 && strcasecmp($request->lang, "vi") == 0){

                    $query1 = DB::table('categories')->select(['id', 'name as dept1', 'activation_status'])->where([
                        ['language','=', "vi"],
                        ['parent','not like', '%.%']
                    ])->get();
                        
                } else if($request->category_id != 0 && strcasecmp($request->lang, "ar") == 0){

                    $query1 = DB::table('categories')->select(['id', 'name as dept1', 'activation_status'])->where([
                        ['language','=', "ar"],
                        ['parent','not like', '%.%'],
                        ['id','=', $request->category_id]
                    ])->get();
                        
                } else if($request->category_id != 0 && strcasecmp($request->lang, "ko") == 0){

                    $query1 = DB::table('categories')->select(['id', 'name as dept1', 'activation_status'])->where([
                        ['language','=', "ko"],
                        ['parent','not like', '%.%'],
                        ['id','=', $request->category_id]
                    ])->get();
                        
                } else if($request->category_id != 0 && strcasecmp($request->lang, "en") == 0){

                    $query1 = DB::table('categories')->select(['id', 'name as dept1', 'activation_status'])->where([
                        ['language','=', "en"],
                        ['parent','not like', '%.%'],
                        ['id','=', $request->category_id]
                    ])->get();
                        
                } else if($request->category_id != 0 && strcasecmp($request->lang, "vi") == 0){

                    $query1 = DB::table('categories')->select(['id', 'name as dept1', 'activation_status'])->where([
                        ['language','=', "vi"],
                        ['parent','not like', '%.%'],
                        ['id','=', $request->category_id]
                    ])->get();
                        
                }

                $category = array();

                foreach($query1 as $q1){

                    if(strcasecmp($request->sort, "new") == 0){

                        $query2 = DB::table('products')->where('category_id','=', $q1->id)->count();

                        $query3 = DB::table('products')->select(['id','name','brand','thumbnail','price','discount_price','type_of_discount'])
                        ->where('category_id','=', $q1->id)->orderby('created_at', 'DESC')->offset($request->start)->limit($request->limit)->get();

                        $category[$q1->dept1] = [
                            'count' => $query2,
                            'product' => $query3,
                        ];

                    } else if(strcasecmp($request->sort, "high") == 0){

                        $query2 = DB::table('products')->where('category_id','=', $q1->id)->count();

                        $query3 = DB::table('products')->select(['id','name','brand','thumbnail','price','discount_price','type_of_discount'])
                        ->where('category_id','=', $q1->id)->orderby('price', 'DESC')->offset($request->start)->limit($request->limit)->get();

                        $category[$q1->dept1] = [
                            'count' => $query2,
                            'product' => $query3,
                        ];

                    } else if(strcasecmp($request->sort, "low") == 0){

                        $query2 = DB::table('products')->where('category_id','=', $q1->id)->count();

                        $query3 = DB::table('products')->select(['id','name','brand','thumbnail','price','discount_price','type_of_discount'])
                        ->where('category_id','=', $q1->id)->orderby('price', 'ASC')->offset($request->start)->limit($request->limit)->get();

                        $category[$q1->dept1] = [
                            'count' => $query2,
                            'product' => $query3,
                        ];


                    } else if(strcasecmp($request->sort, "accum") == 0){

                        $query2 = DB::table('products')->where('category_id','=', $q1->id)->count();

                        $query3 = DB::table('products')->select(['id','name','brand','thumbnail','price','discount_price','type_of_discount'])
                        ->where('category_id','=', $q1->id)->orderby('created_at', 'DESC')->offset($request->start)->limit($request->limit)->get();

                        $category[$q1->dept1] = [
                            'count' => $query2,
                            'product' => $query3,
                        ];

                    } else {

                        return $this->sendError('sort is not correct', $validator->errors());   

                    }

                }

                return $this->sendResponse($category , 'Successfully.');

            } else {

                return $this->sendError('lang is required.', $validator->errors());   

            }

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

}