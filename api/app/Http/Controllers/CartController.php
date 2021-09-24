<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use Illuminate\Support\Facades\DB;
use Validator;


class CartController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_cart_list(Request $request)
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

            $query1 = DB::table('cart')->DISTINCT()->select('users.id','users.photo','users.nickname','seller.id as seller_id','seller.store_name')
            ->join('aking.users','cart.seller_id','=','users.id')->join('aking.seller', 'users.seller_id','=', 'seller.id')
            ->where('cart.user_id','=',$request->user_id)->get();

            $cartitemsresult = array(array());
            $totalcartresult = array();
             
             foreach($query1 as $q1 => $q11){

                $query2 = DB::table('cart')->select('cart.id','cart.user_id','cart.option_price', 'cart.option_stock','products.id as product_id' ,'cart.option_value'
                ,'cart.option_price_ori','cart.status','products.user_id as seller_id' ,'products.name', 'products.thumbnail', 'products.price','products.discount_price', 'products.type_of_discount')
               ->join('aking.products', 'cart.product_id','=','products.id')->where([
                   ['cart.user_id','=',$request->user_id],
                   ['cart.seller_id','=', $query1[$q1]->id],
               ])->get();

                        $totalcartresult[$q1] = [

                            'shop' => $query1[$q1],
                            'items' => $query2,
            
                        ];

             }

             return $this->sendResponse($totalcartresult, 'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function cart_update(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'cart_id' => 'required',
            'option_value' => 'required',
            'option_price' => 'required',
            'option_stock' => 'required',
            'total_price' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('cart')->where('id','=',$request->cart_id)->update(
                ['option_value' => $request->option_value, 'option_price' => $request->option_price,
                'option_stock' => $request->option_stock, 'total_price' => $request->total_price, 'updated_at' => date("Y-m-d H:i:s")]
                );

             return $this->sendResponse('Cart update successfully', 'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function cart_delete(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'cart_id' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $cart_id = explode(",", $request->cart_id);

            $query1 = DB::table('cart')->whereIn('id', $cart_id)->update(
                ['status' => 2, 'updated_at' => date("Y-m-d H:i:s")]
                );

             return $this->sendResponse('Cart delete successfully', 'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

}