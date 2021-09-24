<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use Illuminate\Support\Facades\DB;
use Validator;


class BannerController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_banner_list(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'type' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            if(strcasecmp($request->type, "bread") == 0 or strcasecmp($request->type, "store") == 0 or 
            strcasecmp($request->type, "category") == 0 or strcasecmp($request->type, "ad") == 0){

                    $query1 = DB::table('banners')->select(['id','photo as banner'])->where('type', '=' , $request->type)
                    ->orderby('id', 'DESC')->limit(5)->get();
                    
                    return $this->sendResponse($query1,'Successfully.');

            } else {

                return $this->sendError('type is not correct', $validator->errors());

            }

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

}