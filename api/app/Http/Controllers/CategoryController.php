<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use Illuminate\Support\Facades\DB;
use Validator;
use stdClass;
use Illuminate\Support\Facades\Http;


class CategoryController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_category_list(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'lang' => 'required',
            'dept' => 'required',
            'dept1_name',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            if(strcasecmp($request->lang, "ar") == 0 or strcasecmp($request->lang, "ko") == 0 or strcasecmp($request->lang, "en") == 0 or strcasecmp($request->lang, "vi") == 0){

                if(strcasecmp($request->lang, "ar") == 0){
                        
                    if($request->dept == 1){

                        $query1 = DB::table('categories')->select(['id', 'name as dept1', 'activation_status'])->where([
                            ['language','=', "ar"],
                            ['parent','not like', '%.%']
                        ])->orderBy('parent','asc')->get();
                        
                        return $this->sendResponse($query1,'Successfully.');
                        
                    } else if($request->dept == 2){

                        if(!empty($request->dept1_name)){

                            $query1 = DB::table('categories_ar as c1')->select(['c1.name as dept1', 'c2.name as dept2'])
                            ->leftJoin('categories_ar as c2', 'c2.parent', '=', 'c1.id')->leftJoin('categories_ar as c3', 'c3.parent', '=', 'c2.id')
                            ->leftJoin('categories_ar as c4', 'c4.parent', '=', 'c3.id')->leftJoin('categories_ar as c5', 'c5.parent', '=', 'c4.id')
                            ->where([
                                ['c1.language', '=', "ar"],
                                ['c1.name', '=', $request->dept1_name]
                            ])->orderBy('c1.name', 'asc')->get();

                        } else {
                            
                            $query1 = DB::table('categories_ar as c1')->select(['c1.name as dept1', 'c2.name as dept2'])
                            ->leftJoin('categories_ar as c2', 'c2.parent', '=', 'c1.id')->leftJoin('categories_ar as c3', 'c3.parent', '=', 'c2.id')
                            ->leftJoin('categories_ar as c4', 'c4.parent', '=', 'c3.id')->leftJoin('categories_ar as c5', 'c5.parent', '=', 'c4.id')
                            ->where('c1.language', '=', "ar")->orderBy('c1.name', 'asc')->get();

                        }
                        
                        return $this->sendResponse($query1,'Successfully.');

                    } else if($request->dept == 3){

                        if(!empty($request->dept1_name)){

                            $query1 = DB::table('categories_ar as c1')->select(['c1.name as dept1', 'c2.name as dept2', 'c3.name as dept3'])
                            ->leftJoin('categories_ar as c2', 'c2.parent', '=', 'c1.id')->leftJoin('categories_ar as c3', 'c3.parent', '=', 'c2.id')
                            ->leftJoin('categories_ar as c4', 'c4.parent', '=', 'c3.id')->leftJoin('categories_ar as c5', 'c5.parent', '=', 'c4.id')
                            ->where([
                                ['c1.language', '=', "ar"],
                                ['c1.name', '=', $request->dept1_name]
                            ])->orderBy('c1.name', 'asc')->get();

                        } else {
                            
                            $query1 = DB::table('categories_ar as c1')->select(['c1.name as dept1', 'c2.name as dept2', 'c3.name as dept3'])
                            ->leftJoin('categories_ar as c2', 'c2.parent', '=', 'c1.id')->leftJoin('categories_ar as c3', 'c3.parent', '=', 'c2.id')
                            ->leftJoin('categories_ar as c4', 'c4.parent', '=', 'c3.id')->leftJoin('categories_ar as c5', 'c5.parent', '=', 'c4.id')
                            ->where('c1.language', '=', "ar")->orderBy('c1.name', 'asc')->get();

                        }
                        
                        return $this->sendResponse($query1,'Successfully.');

                    } else if($request->dept == 4){

                        if(!empty($request->dept1_name)){

                            $query1 = DB::table('categories_ar as c1')->select(['c1.name as dept1', 'c2.name as dept2', 'c3.name as dept3', 'c4.name as dept4'])
                            ->leftJoin('categories_ar as c2', 'c2.parent', '=', 'c1.id')->leftJoin('categories_ar as c3', 'c3.parent', '=', 'c2.id')
                            ->leftJoin('categories_ar as c4', 'c4.parent', '=', 'c3.id')->leftJoin('categories_ar as c5', 'c5.parent', '=', 'c4.id')
                            ->where([
                                ['c1.language', '=', "ar"],
                                ['c1.name', '=', $request->dept1_name]
                            ])->orderBy('c1.name', 'asc')->get();

                        } else {
                            
                            $query1 = DB::table('categories_ar as c1')->select(['c1.name as dept1', 'c2.name as dept2', 'c3.name as dept3', 'c4.name as dept4'])
                            ->leftJoin('categories_ar as c2', 'c2.parent', '=', 'c1.id')->leftJoin('categories_ar as c3', 'c3.parent', '=', 'c2.id')
                            ->leftJoin('categories_ar as c4', 'c4.parent', '=', 'c3.id')->leftJoin('categories_ar as c5', 'c5.parent', '=', 'c4.id')
                            ->where('c1.language', '=', "ar")->orderBy('c1.name', 'asc')->get();

                        }
                        
                        return $this->sendResponse($query1,'Successfully.');

                    } else if($request->dept == 5){

                        if(!empty($request->dept1_name)){

                            $query1 = DB::table('categories_ar as c1')->select(['c1.name as dept1', 'c2.name as dept2', 'c3.name as dept3', 'c4.name as dept4', 'c5.name as dept5'])
                            ->leftJoin('categories_ar as c2', 'c2.parent', '=', 'c1.id')->leftJoin('categories_ar as c3', 'c3.parent', '=', 'c2.id')
                            ->leftJoin('categories_ar as c4', 'c4.parent', '=', 'c3.id')->leftJoin('categories_ar as c5', 'c5.parent', '=', 'c4.id')
                            ->where([
                                ['c1.language', '=', "ar"],
                                ['c1.name', '=', $request->dept1_name]
                            ])->orderBy('c1.name', 'asc')->get();

                        } else {
                            
                            $query1 = DB::table('categories_ar as c1')->select(['c1.name as dept1', 'c2.name as dept2', 'c3.name as dept3', 'c4.name as dept4', 'c5.name as dept5'])
                            ->leftJoin('categories_ar as c2', 'c2.parent', '=', 'c1.id')->leftJoin('categories_ar as c3', 'c3.parent', '=', 'c2.id')
                            ->leftJoin('categories_ar as c4', 'c4.parent', '=', 'c3.id')->leftJoin('categories_ar as c5', 'c5.parent', '=', 'c4.id')
                            ->where('c1.language', '=', "ar")->orderBy('c1.name', 'asc')->get();

                        }
                        
                        return $this->sendResponse($query1,'Successfully.');

                    }

                } else if(strcasecmp($request->lang, "ko") == 0){

                    if($request->dept == 1){

                        $query1 = DB::table('categories')->select(['id', 'name as dept1', 'activation_status'])->where([
                            ['language','=', "ko"],
                            ['parent','not like', '%.%']
                        ])->orderBy('parent','asc')->get();
                        
                        return $this->sendResponse($query1,'Successfully.');

                    } else if($request->dept == 2){

                        if(!empty($request->dept1_name)){

                            $query1 = DB::table('categories_ko as c1')->select(['c1.name as dept1', 'c2.name as dept2'])
                            ->leftJoin('categories_ko as c2', 'c2.parent', '=', 'c1.id')->leftJoin('categories_ko as c3', 'c3.parent', '=', 'c2.id')
                            ->leftJoin('categories_ko as c4', 'c4.parent', '=', 'c3.id')->leftJoin('categories_ko as c5', 'c5.parent', '=', 'c4.id')
                            ->where([
                                ['c1.language', '=', "ko"],
                                ['c1.name', '=', $request->dept1_name]
                            ])->orderBy('c1.name', 'asc')->get();

                        } else {
                            
                            $query1 = DB::table('categories_ko as c1')->select(['c1.name as dept1', 'c2.name as dept2', 'c3.name as dept3', 'c4.name as dept4', 'c5.name as dept5'])
                            ->leftJoin('categories_ko as c2', 'c2.parent', '=', 'c1.id')->leftJoin('categories_ko as c3', 'c3.parent', '=', 'c2.id')
                            ->leftJoin('categories_ko as c4', 'c4.parent', '=', 'c3.id')->leftJoin('categories_ko as c5', 'c5.parent', '=', 'c4.id')
                            ->where('c1.language', '=', "ko")->orderBy('c1.name', 'asc')->get();

                        }
                        
                        return $this->sendResponse($query1,'Successfully.');

                    } else if($request->dept == 3){

                        if(!empty($request->dept1_name)){

                            $query1 = DB::table('categories_ko as c1')->select(['c1.name as dept1', 'c2.name as dept2', 'c3.name as dept3'])
                            ->leftJoin('categories_ko as c2', 'c2.parent', '=', 'c1.id')->leftJoin('categories_ko as c3', 'c3.parent', '=', 'c2.id')
                            ->leftJoin('categories_ko as c4', 'c4.parent', '=', 'c3.id')->leftJoin('categories_ko as c5', 'c5.parent', '=', 'c4.id')
                            ->where([
                                ['c1.language', '=', "ko"],
                                ['c1.name', '=', $request->dept1_name]
                            ])->orderBy('c1.name', 'asc')->get();

                        } else {
                            
                            $query1 = DB::table('categories_ko as c1')->select(['c1.name as dept1', 'c2.name as dept2', 'c3.name as dept3', 'c4.name as dept4', 'c5.name as dept5'])
                            ->leftJoin('categories_ko as c2', 'c2.parent', '=', 'c1.id')->leftJoin('categories_ko as c3', 'c3.parent', '=', 'c2.id')
                            ->leftJoin('categories_ko as c4', 'c4.parent', '=', 'c3.id')->leftJoin('categories_ko as c5', 'c5.parent', '=', 'c4.id')
                            ->where('c1.language', '=', "ko")->orderBy('c1.name', 'asc')->get();

                        }
                        
                        return $this->sendResponse($query1,'Successfully.');

                    } else if($request->dept == 4){

                        if(!empty($request->dept1_name)){

                            $query1 = DB::table('categories_ko as c1')->select(['c1.name as dept1', 'c2.name as dept2', 'c3.name as dept3', 'c4.name as dept4'])
                            ->leftJoin('categories_ko as c2', 'c2.parent', '=', 'c1.id')->leftJoin('categories_ko as c3', 'c3.parent', '=', 'c2.id')
                            ->leftJoin('categories_ko as c4', 'c4.parent', '=', 'c3.id')->leftJoin('categories_ko as c5', 'c5.parent', '=', 'c4.id')
                            ->where([
                                ['c1.language', '=', "ko"],
                                ['c1.name', '=', $request->dept1_name]
                            ])->orderBy('c1.name', 'asc')->get();

                        } else {
                            
                            $query1 = DB::table('categories_ko as c1')->select(['c1.name as dept1', 'c2.name as dept2', 'c3.name as dept3', 'c4.name as dept4'])
                            ->leftJoin('categories_ko as c2', 'c2.parent', '=', 'c1.id')->leftJoin('categories_ko as c3', 'c3.parent', '=', 'c2.id')
                            ->leftJoin('categories_ko as c4', 'c4.parent', '=', 'c3.id')->leftJoin('categories_ko as c5', 'c5.parent', '=', 'c4.id')
                            ->where('c1.language', '=', "ko")->orderBy('c1.name', 'asc')->get();

                        }
                        
                        return $this->sendResponse($query1,'Successfully.');

                    } else if($request->dept == 5){

                        if(!empty($request->dept1_name)){

                            $query1 = DB::table('categories_ko as c1')->select(['c1.name as dept1', 'c2.name as dept2', 'c3.name as dept3', 'c4.name as dept4', 'c5.name as dept5'])
                            ->leftJoin('categories_ko as c2', 'c2.parent', '=', 'c1.id')->leftJoin('categories_ko as c3', 'c3.parent', '=', 'c2.id')
                            ->leftJoin('categories_ko as c4', 'c4.parent', '=', 'c3.id')->leftJoin('categories_ko as c5', 'c5.parent', '=', 'c4.id')
                            ->where([
                                ['c1.language', '=', "ko"],
                                ['c1.name', '=', $request->dept1_name]
                            ])->orderBy('c1.name', 'asc')->get();

                        } else {
                            
                            $query1 = DB::table('categories_ko as c1')->select(['c1.name as dept1', 'c2.name as dept2', 'c3.name as dept3', 'c4.name as dept4', 'c5.name as dept5'])
                            ->leftJoin('categories_ko as c2', 'c2.parent', '=', 'c1.id')->leftJoin('categories_ko as c3', 'c3.parent', '=', 'c2.id')
                            ->leftJoin('categories_ko as c4', 'c4.parent', '=', 'c3.id')->leftJoin('categories_ko as c5', 'c5.parent', '=', 'c4.id')
                            ->where('c1.language', '=', "ko")->orderBy('c1.name', 'asc')->get();

                        }
                        
                        return $this->sendResponse($query1,'Successfully.');

                    }

                } else if(strcasecmp($request->lang, "en") == 0){

                    if($request->dept == 1){

                        $query1 = DB::table('categories')->select(['id', 'name as dept1', 'activation_status'])->where([
                            ['language','=', "en"],
                            ['parent','not like', '%.%']
                        ])->orderBy('parent','asc')->get();
                        
                        return $this->sendResponse($query1,'Successfully.');

                    } else if($request->dept == 2){

                        if(!empty($request->dept1_name)){

                            $query1 = DB::table('categories_en as c1')->select(['c1.name as dept1', 'c2.name as dept2'])
                            ->leftJoin('categories_en as c2', 'c2.parent', '=', 'c1.id')->leftJoin('categories_en as c3', 'c3.parent', '=', 'c2.id')
                            ->leftJoin('categories_en as c4', 'c4.parent', '=', 'c3.id')->leftJoin('categories_en as c5', 'c5.parent', '=', 'c4.id')
                            ->where([
                                ['c1.language', '=', "en"],
                                ['c1.name', '=', $request->dept1_name]
                            ])->orderBy('c1.name', 'asc')->get();

                        } else {
                            
                            $query1 = DB::table('categories_en as c1')->select(['c1.name as dept1', 'c2.name as dept2'])
                            ->leftJoin('categories_en as c2', 'c2.parent', '=', 'c1.id')->leftJoin('categories_en as c3', 'c3.parent', '=', 'c2.id')
                            ->leftJoin('categories_en as c4', 'c4.parent', '=', 'c3.id')->leftJoin('categories_en as c5', 'c5.parent', '=', 'c4.id')
                            ->where('c1.language', '=', "en")->orderBy('c1.name', 'asc')->get();

                        }
                        
                        return $this->sendResponse($query1,'Successfully.');

                    } else if($request->dept == 3){

                        if(!empty($request->dept1_name)){

                            $query1 = DB::table('categories_en as c1')->select(['c1.name as dept1', 'c2.name as dept2', 'c3.name as dept3'])
                            ->leftJoin('categories_en as c2', 'c2.parent', '=', 'c1.id')->leftJoin('categories_en as c3', 'c3.parent', '=', 'c2.id')
                            ->leftJoin('categories_en as c4', 'c4.parent', '=', 'c3.id')->leftJoin('categories_en as c5', 'c5.parent', '=', 'c4.id')
                            ->where([
                                ['c1.language', '=', "en"],
                                ['c1.name', '=', $request->dept1_name]
                            ])->orderBy('c1.name', 'asc')->get();

                        } else {
                            
                            $query1 = DB::table('categories_en as c1')->select(['c1.name as dept1', 'c2.name as dept2', 'c3.name as dept3'])
                            ->leftJoin('categories_en as c2', 'c2.parent', '=', 'c1.id')->leftJoin('categories_en as c3', 'c3.parent', '=', 'c2.id')
                            ->leftJoin('categories_en as c4', 'c4.parent', '=', 'c3.id')->leftJoin('categories_en as c5', 'c5.parent', '=', 'c4.id')
                            ->where('c1.language', '=', "en")->orderBy('c1.name', 'asc')->get();

                        }
                        
                        return $this->sendResponse($query1,'Successfully.');

                    } else if($request->dept == 4){

                        if(!empty($request->dept1_name)){

                            $query1 = DB::table('categories_en as c1')->select(['c1.name as dept1', 'c2.name as dept2', 'c3.name as dept3', 'c4.name as dept4'])
                            ->leftJoin('categories_en as c2', 'c2.parent', '=', 'c1.id')->leftJoin('categories_en as c3', 'c3.parent', '=', 'c2.id')
                            ->leftJoin('categories_en as c4', 'c4.parent', '=', 'c3.id')->leftJoin('categories_en as c5', 'c5.parent', '=', 'c4.id')
                            ->where([
                                ['c1.language', '=', "en"],
                                ['c1.name', '=', $request->dept1_name]
                            ])->orderBy('c1.name', 'asc')->get();

                        } else {
                            
                            $query1 = DB::table('categories_en as c1')->select(['c1.name as dept1', 'c2.name as dept2', 'c3.name as dept3', 'c4.name as dept4'])
                            ->leftJoin('categories_en as c2', 'c2.parent', '=', 'c1.id')->leftJoin('categories_en as c3', 'c3.parent', '=', 'c2.id')
                            ->leftJoin('categories_en as c4', 'c4.parent', '=', 'c3.id')->leftJoin('categories_en as c5', 'c5.parent', '=', 'c4.id')
                            ->where('c1.language', '=', "en")->orderBy('c1.name', 'asc')->get();

                        }
                        
                        return $this->sendResponse($query1,'Successfully.');

                    } else if($request->dept == 5){

                        if(!empty($request->dept1_name)){

                            $query1 = DB::table('categories_en as c1')->select(['c1.name as dept1', 'c2.name as dept2', 'c3.name as dept3', 'c4.name as dept4', 'c5.name as dept5'])
                            ->leftJoin('categories_en as c2', 'c2.parent', '=', 'c1.id')->leftJoin('categories_en as c3', 'c3.parent', '=', 'c2.id')
                            ->leftJoin('categories_en as c4', 'c4.parent', '=', 'c3.id')->leftJoin('categories_en as c5', 'c5.parent', '=', 'c4.id')
                            ->where([
                                ['c1.language', '=', "en"],
                                ['c1.name', '=', $request->dept1_name]
                            ])->orderBy('c1.name', 'asc')->get();

                        } else {
                            
                            $query1 = DB::table('categories_en as c1')->select(['c1.name as dept1', 'c2.name as dept2', 'c3.name as dept3', 'c4.name as dept4', 'c5.name as dept5'])
                            ->leftJoin('categories_en as c2', 'c2.parent', '=', 'c1.id')->leftJoin('categories_en as c3', 'c3.parent', '=', 'c2.id')
                            ->leftJoin('categories_en as c4', 'c4.parent', '=', 'c3.id')->leftJoin('categories_en as c5', 'c5.parent', '=', 'c4.id')
                            ->where('c1.language', '=', "en")->orderBy('c1.name', 'asc')->get();

                        }
                        
                        return $this->sendResponse($query1,'Successfully.');

                    }
                    
                } else if(strcasecmp($request->lang, "vi") == 0){

                    if($request->dept == 1){

                        $query1 = DB::table('categories')->select(['id', 'name as dept1', 'activation_status'])->where([
                            ['language','=', "vi"],
                            ['parent','not like', '%.%']
                        ])->orderBy('parent','asc')->get();
                        
                        return $this->sendResponse($query1,'Successfully.');

                    } else if($request->dept == 2){

                        if(!empty($request->dept1_name)){

                            $query1 = DB::table('categories_vi as c1')->select(['c1.name as dept1', 'c2.name as dept2'])
                            ->leftJoin('categories_vi as c2', 'c2.parent', '=', 'c1.id')->leftJoin('categories_vi as c3', 'c3.parent', '=', 'c2.id')
                            ->leftJoin('categories_vi as c4', 'c4.parent', '=', 'c3.id')->leftJoin('categories_vi as c5', 'c5.parent', '=', 'c4.id')
                            ->where([
                                ['c1.language', '=', "vi"],
                                ['c1.name', '=', $request->dept1_name]
                            ])->orderBy('c1.name', 'asc')->get();

                        } else {
                            
                            $query1 = DB::table('categories_vi as c1')->select(['c1.name as dept1', 'c2.name as dept2'])
                            ->leftJoin('categories_vi as c2', 'c2.parent', '=', 'c1.id')->leftJoin('categories_vi as c3', 'c3.parent', '=', 'c2.id')
                            ->leftJoin('categories_vi as c4', 'c4.parent', '=', 'c3.id')->leftJoin('categories_vi as c5', 'c5.parent', '=', 'c4.id')
                            ->where('c1.language', '=', "vi")->orderBy('c1.name', 'asc')->get();

                        }
                        
                        return $this->sendResponse($query1,'Successfully.');

                    } else if($request->dept == 3){

                        if(!empty($request->dept1_name)){

                            $query1 = DB::table('categories_vi as c1')->select(['c1.name as dept1', 'c2.name as dept2', 'c3.name as dept3'])
                            ->leftJoin('categories_vi as c2', 'c2.parent', '=', 'c1.id')->leftJoin('categories_vi as c3', 'c3.parent', '=', 'c2.id')
                            ->leftJoin('categories_vi as c4', 'c4.parent', '=', 'c3.id')->leftJoin('categories_vi as c5', 'c5.parent', '=', 'c4.id')
                            ->where([
                                ['c1.language', '=', "vi"],
                                ['c1.name', '=', $request->dept1_name]
                            ])->orderBy('c1.name', 'asc')->get();

                        } else {
                            
                            $query1 = DB::table('categories_vi as c1')->select(['c1.name as dept1', 'c2.name as dept2', 'c3.name as dept3'])
                            ->leftJoin('categories_vi as c2', 'c2.parent', '=', 'c1.id')->leftJoin('categories_vi as c3', 'c3.parent', '=', 'c2.id')
                            ->leftJoin('categories_vi as c4', 'c4.parent', '=', 'c3.id')->leftJoin('categories_vi as c5', 'c5.parent', '=', 'c4.id')
                            ->where('c1.language', '=', "vi")->orderBy('c1.name', 'asc')->get();

                        }
                        
                        return $this->sendResponse($query1,'Successfully.');

                    } else if($request->dept == 4){

                        if(!empty($request->dept1_name)){

                            $query1 = DB::table('categories_vi as c1')->select(['c1.name as dept1', 'c2.name as dept2', 'c3.name as dept3', 'c4.name as dept4'])
                            ->leftJoin('categories_vi as c2', 'c2.parent', '=', 'c1.id')->leftJoin('categories_vi as c3', 'c3.parent', '=', 'c2.id')
                            ->leftJoin('categories_vi as c4', 'c4.parent', '=', 'c3.id')->leftJoin('categories_vi as c5', 'c5.parent', '=', 'c4.id')
                            ->where([
                                ['c1.language', '=', "vi"],
                                ['c1.name', '=', $request->dept1_name]
                            ])->orderBy('c1.name', 'asc')->get();

                        } else {
                            
                            $query1 = DB::table('categories_vi as c1')->select(['c1.name as dept1', 'c2.name as dept2', 'c3.name as dept3', 'c4.name as dept4'])
                            ->leftJoin('categories_vi as c2', 'c2.parent', '=', 'c1.id')->leftJoin('categories_vi as c3', 'c3.parent', '=', 'c2.id')
                            ->leftJoin('categories_vi as c4', 'c4.parent', '=', 'c3.id')->leftJoin('categories_vi as c5', 'c5.parent', '=', 'c4.id')
                            ->where('c1.language', '=', "vi")->orderBy('c1.name', 'asc')->get();

                        }
                        
                        return $this->sendResponse($query1,'Successfully.');

                    } else if($request->dept == 5){

                        if(!empty($request->dept1_name)){

                            $query1 = DB::table('categories_vi as c1')->select(['c1.name as dept1', 'c2.name as dept2', 'c3.name as dept3', 'c4.name as dept4', 'c5.name as dept5'])
                            ->leftJoin('categories_vi as c2', 'c2.parent', '=', 'c1.id')->leftJoin('categories_vi as c3', 'c3.parent', '=', 'c2.id')
                            ->leftJoin('categories_vi as c4', 'c4.parent', '=', 'c3.id')->leftJoin('categories_vi as c5', 'c5.parent', '=', 'c4.id')
                            ->where([
                                ['c1.language', '=', "vi"],
                                ['c1.name', '=', $request->dept1_name]
                            ])->orderBy('c1.name', 'asc')->get();

                        } else {
                            
                            $query1 = DB::table('categories_vi as c1')->select(['c1.name as dept1', 'c2.name as dept2', 'c3.name as dept3', 'c4.name as dept4', 'c5.name as dept5'])
                            ->leftJoin('categories_vi as c2', 'c2.parent', '=', 'c1.id')->leftJoin('categories_vi as c3', 'c3.parent', '=', 'c2.id')
                            ->leftJoin('categories_vi as c4', 'c4.parent', '=', 'c3.id')->leftJoin('categories_vi as c5', 'c5.parent', '=', 'c4.id')
                            ->where('c1.language', '=', "vi")->orderBy('c1.name', 'asc')->get();

                        }
                        
                        return $this->sendResponse($query1,'Successfully.');

                    }
                    
                }

            } else {

                return $this->sendError('lang is required.', $validator->errors());   

            }

        } else {

            return $this->sendError('Access_token is not correct', $validator->errors());   
    
        }

    }


    public function get_category_list1(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'lang' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            if(strcasecmp($request->lang, "ar") == 0 or strcasecmp($request->lang, "ko") == 0 or strcasecmp($request->lang, "en") == 0){

                if(strcasecmp($request->lang, "ar") == 0){

                    $query1 = DB::table('category_dept1')->select(['id','ko as category'])->get();
                    // $query1 = DB::table('category_dept1')->select(['id','ar as category'])->get();
                    
                    return $this->sendResponse($query1,'Successfully.');

                } else if(strcasecmp($request->lang, "ko") == 0){

                    $query1 = DB::table('category_dept1')->select(['id','ko as category'])->get();

                    return $this->sendResponse($query1,'Successfully.');

                } else if(strcasecmp($request->lang, "en") == 0){

                    $query1 = DB::table('category_dept1')->select(['id','ko as category'])->get();
                    // $query1 = DB::table('category_dept1')->select(['id','en as category'])->get();

                    return $this->sendResponse($query1,'Successfully.');
                    
                }

            } else {

                return $this->sendError('lang is required.', $validator->errors());   

            }

        } else {

            return $this->sendError('Access_token is not correct', $validator->errors());   
    
        }

    }

    public function category_search(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'keyword' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('category')->select()->whereRaw("if(dept5_ko like '%".$request->keyword."%', '5검색', 
            if(dept5_ko is null and dept4_ko like '%".$request->keyword."%', '4검색', 
            if(dept5_ko is null and dept4_ko is null and dept3_ko like '%".$request->keyword."%', '3검색', 
            if(dept5_ko is null and dept4_ko is null and dept3_ko is null and dept2_ko like '%".$request->keyword."%', '2검색', 
            if(dept5_ko is null and dept4_ko is null and dept3_ko is null and dept2_ko is null and dept1_ko like '%".$request->keyword."%', '1검색', '결과 없음')))))")
            ->get();
            
            return $this->sendResponse($query1, 'Successfully.');

        } else {

            return $this->sendError('Access_token is not correct', $validator->errors());   
    
        }

    }

    public function get_option(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'par1',
            'par2',
            'par3',
            'par4',
            'par5',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $a = $request->par1;

            $b = $request->par2;

            $c = $request->par3;

            $d = $request->par4;
            
            $e = $request->par5;

            $result = array();

            $a = str_replace(',',',', $a);
            $b = str_replace(',',',', $b);
            $c = str_replace(',',',', $c);
            $d = str_replace(',',',', $d);
            $e = str_replace(',',',', $e);

            $arr1 = array();
            $arr2 = array();
            $arr3 = array();
            $arr4 = array();
            $arr5 = array();

            $arr1 = explode(',',$a);
            $arr2 = explode(',',$b);
            $arr3 = explode(',',$c);
            $arr4 = explode(',',$d);
            $arr5 = explode(',',$e);


                if(!empty($e)){
                    foreach($arr1 as $a1 => $ar1){

                        foreach($arr2 as $a2 => $ar2){

                            foreach($arr3 as $a3 => $ar3){

                                foreach($arr4 as $a4 => $ar4){

                                    foreach($arr5 as $a5 => $ar5){

                                        array_push($result ,$ar1."/".$ar2."/".$ar3."/".$ar4."/".$ar5);

                                    }

                                }

                            }

                        }

                    }
                } else if(!empty($d)){
                    foreach($arr1 as $a1 => $ar1){

                        foreach($arr2 as $a2 => $ar2){

                            foreach($arr3 as $a3 => $ar3){

                                foreach($arr4 as $a4 => $ar4){

                                    array_push($result,$ar1."/".$ar2."/".$ar3."/".$ar4);

                                }

                            }

                        }

                    }
                } else if(!empty($c)){
                    foreach($arr1 as $a1 => $ar1){

                        foreach($arr2 as $a2 => $ar2){

                            foreach($arr3 as $a3 => $ar3){

                                array_push($result, $ar1."/".$ar2."/".$ar3);

                            }

                        }

                    }
                } else if(!empty($b)){
                    foreach($arr1 as $a1 => $ar1){

                        foreach($arr2 as $a2 => $ar2){

                            array_push($result, $ar1."/".$ar2);

                        }

                    }

                } else if(!empty($a)){
                    foreach($arr1 as $a1 => $ar1){

                        array_push($result, $ar1);

                        }
                
                }

                $result = implode(",", $result);

                print_r($result);

        } else {

            return $this->sendError('Access_token is not correct', $validator->errors());   
    
        }

    }

    public function get_option2(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'par1',
            'par2',
            'par3',
            'par4',
            'par5',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $a = $request->par1;

            $b = $request->par2;

            $c = $request->par3;

            $d = $request->par4;
            
            $e = $request->par5;

            $result = array();

            // $a = str_replace(',',',', $a);
            // $b = str_replace(',',',', $b);
            // $c = str_replace(',',',', $c);
            // $d = str_replace(',',',', $d);
            // $e = str_replace(',',',', $e);

            $arr1 = array();
            $arr2 = array();
            $arr3 = array();
            $arr4 = array();
            $arr5 = array();

            $arr1 = explode(',',$a);
            $arr2 = explode(',',$b);
            $arr3 = explode(',',$c);
            $arr4 = explode(',',$d);
            $arr5 = explode(',',$e);


                if(!empty($e)){
                    foreach($arr1 as $a1 => $ar1){

                        foreach($arr2 as $a2 => $ar2){

                            foreach($arr3 as $a3 => $ar3){

                                foreach($arr4 as $a4 => $ar4){

                                    foreach($arr5 as $a5 => $ar5){

                                        array_push($result ,$ar1 + $ar2 + $ar3 + $ar4 + $ar5);

                                    }

                                }

                            }

                        }

                    }
                } else if(!empty($d)){
                    foreach($arr1 as $a1 => $ar1){

                        foreach($arr2 as $a2 => $ar2){

                            foreach($arr3 as $a3 => $ar3){

                                foreach($arr4 as $a4 => $ar4){

                                    array_push($result,$ar1 + $ar2 + $ar3 + $ar4);

                                }

                            }

                        }

                    }
                } else if(!empty($c)){
                    foreach($arr1 as $a1 => $ar1){

                        foreach($arr2 as $a2 => $ar2){

                            foreach($arr3 as $a3 => $ar3){

                                array_push($result,$ar1 + $ar2 + $ar3);

                            }

                        }

                    }
                } else if(!empty($b)){
                    foreach($arr1 as $a1 => $ar1){

                        foreach($arr2 as $a2 => $ar2){

                            array_push($result, $ar1 + $ar2);

                        }

                    }

                } else if(!empty($a)){
                    foreach($arr1 as $a1 => $ar1){

                        array_push($result, $ar1);

                        }
                
                }

                $result = implode(",", $result);

                print_r($result);

        } else {

            return $this->sendError('Access_token is not correct', $validator->errors());   
    
        }

    }

    public function test(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'keyword1' => 'required',
            'keyword2' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            // $result_keyword = array();
            // $keyword1 = explode(',', $request->keyword1);
            // $keyword2 = explode(',', $request->keyword2);

            // foreach($keyword1 as $key1 => $key11){
    
            //     foreach($keyword2 as $key2 => $key22){

            //         print_r($key11."  /  ".$key22."\n");
                    
            //         if(stripos($key22, $key11) !== false) {  
        
            //             array_push($result_keyword, $key22);
        
            //         }
        
            //     }
    
            // }

            // $result_keyword = array_unique($result_keyword);
            // print_r($result_keyword);

        } else {

            return $this->sendError('Access_token is not correct', $validator->errors());   
    
        }

    }

    public function guzzle(Request $request)
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

            DB::table('users')->orderBy('id')->chunk(10, function ($users) {
                foreach ($users as $u => $us) {
                    print_r($us);
                }

                return false;
            });

        } else {

            return $this->sendError('Access_token is not correct', $validator->errors());   
    
        }

    }

}