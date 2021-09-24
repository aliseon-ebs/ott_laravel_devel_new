<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use Illuminate\Support\Facades\DB;
use Validator;


class SellerController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function seller_apply_post(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'user_id' => 'required',
            'shop_image',
            'store_name' => 'required',
            'store_desc',
            'manager_name' => 'required',
            'manager_contact' => 'required',
            'company_email' => 'required',
            'zip' => 'required',
            'city' => 'required',
            'state' => 'required',
            'address' => 'required',
            'bank' => 'required',
            'account_number' => 'required',
            'account_holder_name' => 'required',
            'passbook' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            if(!empty($request->store_image)){
                $input['store_image'] = $request->store_image;
            }

            $input['store_name'] = $request->store_name;
            
            if(!empty($request->store_desc)){
                $input['store_desc'] = $request->store_desc;
            } 

            $input['manager_name'] = $request->manager_name;
            $input['manager_contact'] = $request->manager_contact;
            $input['company_email'] = $request->company_email;
            $input['zip'] = $request->zip;
            $input['city'] = $request->city;
            $input['state'] = $request->state;
            $input['address'] = $request->address;
            $input['bank'] = $request->bank;
            $input['account_number'] = $request->account_number;
            $input['account_holder_name'] = $request->account_holder_name;
            $input['passbook'] = $request->passbook;
            $input['created_at'] = date("Y-m-d H:i:s");
            $input['updated_at'] = date("Y-m-d H:i:s");

            $query1 = DB::table('seller')->insertGetId($input);

            $input2['seller_id'] = $query1;
            $input2['seller_status'] = 1;

            $query2 = DB::table('users')->where('id','=',$request->user_id)->update($input2);

            return $this->sendResponse('Seller Apply Successfully','Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function seller_confirm_post(Request $request)
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

            $query1 = DB::table('users')->select('seller_id')->where('id','=',$request->user_id)->get();

            $query2 = DB::table('users')->where('id', '=', $request->user_id)->update(
                ['seller_status' => 2],
                );

            $query3 = DB::table('seller')->where('id', '=', $query1[0]->seller_id)->update(
                ['is_confirm' => 1],
            );

            return $this->sendResponse('Seller Confirm Successfully','Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

}