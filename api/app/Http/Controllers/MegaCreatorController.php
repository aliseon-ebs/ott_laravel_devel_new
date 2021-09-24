<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use Illuminate\Support\Facades\DB;
use Validator;


class MegaCreatorController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function megacreator_apply_post(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'user_id' => 'required',
            'category_id' => 'required',
            'desc' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $input['category_id'] = $request->category_id;
            $input['desc'] = $request->desc;
            $input['created_at'] = date("Y-m-d H:i:s");
            $input['updated_at'] = date("Y-m-d H:i:s");

            $query1 = DB::table('megacreator')->insertGetId($input);

            $input2['mega_id'] = $query1;
            $input2['mega_status'] = 1;

            $query2 = DB::table('users')->where('id','=',$request->user_id)->update($input2);

            return $this->sendResponse('MegaCreator Apply Successfully','Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function megacreator_confirm_post(Request $request)
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

            $query1 = DB::table('users')->select('mega_id')->where('id','=',$request->user_id)->get();

            $query2 = DB::table('users')->where('id', '=', $request->user_id)->update(
                ['mega_status' => 2],
                );

            $query3 = DB::table('megacreator')->where('id', '=', $query1[0]->mega_id)->update(
                ['is_confirm' => 1],
            );

            return $this->sendResponse('MegaCreator Confirm Successfully','Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

}