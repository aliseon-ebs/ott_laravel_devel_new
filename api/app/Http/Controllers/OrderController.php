<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Validator;
use stdClass;


class OrderController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_order_list(Request $request)
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

            $vendor_id = array();
            $product_id = array();
            $option_value = array();
            $option_price = array();
            $option_stock = array();
            $status = array();
            $child_status = array();
            $order_list = array();
            $child_order_list = array();
            $total_order_list = array();

            $query1 = DB::table('orders')->select(['id','order_number', 'status', 'payment_status', 'created_at', 'pay_amount','user_id','product_id',
            'vendor_id','option_value', 'option_price', 'option_stock', 'status'])->where( 'user_id','=',$request->user_id )->get();

            foreach($query1 as $q1 => $q11){

                $vendor_id[$q1] = explode("@", $q11->vendor_id);
                $product_id[$q1] = explode("@", $q11->product_id);
                $option_value[$q1] = explode("@", $q11->option_value);
                $option_price[$q1] = explode("@", $q11->option_price);
                $option_stock[$q1] = explode("@", $q11->option_stock);
                $status[$q1] = explode("@", $q11->status);

                $query2 = DB::table('products')->select(['name', 'thumbnail'])->whereIn('id', $product_id[$q1])->get();

                foreach($option_value[$q1] as $o1 => $op1){

                    $child_status = explode("/", $status[$q1][1]);

                    $child_order_list[$q1][$o1] = [

                        'option_value' => $option_value[$q1][$o1],
                        'option_price' => $option_price[$q1][$o1],
                        'option_stock' => $option_stock[$q1][$o1],
                        'status' => $child_status[$o1],
                        'product_name' => $query2[$o1]->name,
                        'product_thumbnail' => $query2[$o1]->thumbnail,
                        'vendor_id' => $vendor_id[$q1][$o1],

                    ];
                }

                $total_order_list[$q1] = [

                    'parent' => $query1[$q1],
                    'child' => $child_order_list[$q1],

                ];

                unset($q11->product_id);
                unset($q11->vendor_id);
                unset($q11->option_value);
                unset($q11->option_price);
                unset($q11->option_stock);
                $q11->status = $status[$q1][0];

            }

            return $this->sendResponse($total_order_list ,'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function order_post(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'method' => 'required',
            'user_id' => 'required',
            'product_id' => 'required',
            'vendor_id' => 'required',
            'option_value' => 'required',
            'option_price' => 'required',
            'option_stock' => 'required', 
            'total_price' => 'required',
            'total_stock' => 'required',
            'customer_name' => 'required',
            'customer_phone' => 'required',
            'customer_email' => 'required',
            'customer_country' => 'required',
            'customer_state' => 'required',
            'customer_address' => 'required',
            'customer_city' => 'required',
            'customer_zip' => 'required',
            'shipping_name' => 'required',
            'shipping_country' => 'required',
            'shipping_phone' => 'required',
            'shipping_city' => 'required',
            'shipping_address' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $order_number = "O".Str::random(4).date("Ymd").rand(100000, 999999);

            $query1 = DB::table('orders')->insert(
                ['user_id' => $request->user_id , 'product_id' => $request->product_id, 'vendor_id' => $request->vendor_id, 'option_value' => $request->option_value,
                'option_price' => $request->option_price , 'option_stock' => $request->option_stock, 'customer_name' => $request->customer_name ,
                'customer_phone' => $request->customer_phone, 'totalQty' => $request->total_stock, 'shipping_name' => $request->shipping_name,
                'shipping_country' => $request->shipping_country , 'shipping_phone' => $request->shipping_phone, 'shipping_city' => $request->shipping_city,
                'shipping_address' => $request->shipping_address,'pay_amount' => $request->total_price, 'order_number' => $order_number, 'payment_status' => 'Pending',
                'customer_email' => $request->customer_email,'customer_country' => $request->customer_country, 'currency_sign' => '$', 'currency_value' => '1',
                'shipping_cost' => '0', 'tax' => '0', 'shipping_title' => 'Free Shipping', 'packing_title' => 'Default Packaging', 'customer_state' => $request->customer_state,
                'method' => $request->method,'shipping' => 'shipto','pickup_location' => 'Uttara','customer_state' => $request->customer_state,'method' => $request->method,
                'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"),
                ]
               );

            $order_complete = array();

            return $this->sendResponse( $order_complete = [
                'order_number' => $order_number,
                'order_date' => date("Y-m-d H:i:s"),
            ],'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

}