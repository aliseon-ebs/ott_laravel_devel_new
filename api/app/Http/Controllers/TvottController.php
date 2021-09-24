<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use Illuminate\Support\Facades\DB;
use Validator;


class TvottController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function get_tvott_users(Request $request)

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

        $result = array();

        $query1 = DB::table('certi')->select('auth_id')->where('access_token','=',$request->access_token)->get();

        $auth_id = $query1[0]->auth_id;

        $query2 = DB::table('users_tvott')->where('auth_id','=', $auth_id)->get();

            foreach($query2 as $q2 => $q22){

                $query3 = DB::table('users')->select(['id', 'nickname','photo','language','country','currency'])
                ->where('id', '=', $q22->user_id)->first();

                if(!empty($query3)){
                    array_push($result, $query3);
                }

            }

                return $this->sendResponse($result,'Successfully.'); 

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   

        }

    }

    public function add_tvott_users(Request $request)

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

        $result = array();

        $query1 = DB::table('certi')->select('auth_id')->where('access_token','=',$request->access_token)->get();

        $auth_id = $query1[0]->auth_id;

        $query2 = DB::table('users_tvott')->where([
            ['user_id', '=', $request->user_id],
            ['auth_id', '=', $auth_id],
        ])->doesntExist();

        $query3 = DB::table('users_tvott')->where('auth_id','=', $auth_id)->get();

        if($query2 == 1 && count($query3) < 3){

            $query4 = DB::table('users_tvott')->insert(
                ['user_id' => $request->user_id , 'auth_id' => $auth_id,
                ]
            );

        } else if($query2 != 1){

            return $this->sendError('ott user always exists', $validator->errors());   

        } 
        else if(count($query3) > 2){

            return $this->sendError('Too many ott users. Please use an existing registered user.', $validator->errors());   

        }

        $query5 = DB::table('users_tvott')->where('auth_id','=',$auth_id)->get();

            foreach($query5 as $q5 => $q55){

                $query6 = DB::table('users')->select(['id', 'nickname','photo','language','country','currency'])
                ->where('id', '=', $q55->user_id)->orderby('id', 'DESC')->get();

                if(!empty($query6[0]))
                {
                    array_push($result, $query6[0]);
                }

            }

                return $this->sendResponse($result,'Successfully.'); 

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   

        }

    }

    public function delete_tvott_users(Request $request)

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

        $result = array();

        $query1 = DB::table('certi')->select('auth_id')->where('access_token','=',$request->access_token)->get();

        $auth_id = $query1[0]->auth_id;

        $query2 = DB::table('users_tvott')->where([
            ['user_id', '=', $request->user_id],
            ['auth_id', '=', $auth_id],
        ])->doesntExist();

        $query3 = DB::table('users_tvott')->where(
            ['user_id' => $request->user_id , 'auth_id' => $auth_id,
            ]
        )->delete();

        $query4 = DB::table('users_tvott')->where('auth_id','=',$auth_id)->get();

            foreach($query4 as $q4 => $q44){

                $query5 = DB::table('users')->select(['id', 'nickname','photo','language','country','currency'])
                ->where('id', '=', $q44->user_id)->orderby('id', 'DESC')->get();

                array_push($result, $query5[0]);

            }

                return $this->sendResponse($result,'Successfully.'); 

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   

        }

    }

    public function get_popular_list(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'user_id' => 'required',
            'category' => 'required',
            'start' => 'required',
            'limit' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

                $thumbnail = array();
                $thumbnail_video = array();
                $type = array();
                $item = array();
    
                $thumbnailresult = array();
                $profileresult = array();
                $nameresult = array();
                $itemresult = array();

                switch($request->category){

                    case 0 :

                    $query1 = DB::table('voyage')->select([
                        'voyage.id','voyage.user_id','voyage.product_id','voyage.contents_id','voyage.contents_type','voyage.category_id',
                        'voyage.status', 'voyage.description', 'voyage.create_at','voyage.update_at','voyage.like_count','voyage.view_count',
                        'voyage.comment_count','categories_ko.name as category_ko','categories_en.name as category_en', 'users.nickname','users.photo'])
                        ->join('aking.categories_ko', 'voyage.category_id','=', 'categories_ko.id')
                        ->join('aking.categories_en', 'voyage.category_id','=', 'categories_en.id')
                        ->join('aking.users', 'voyage.user_id','=','users.id')
                    ->where([
                        ['is_delete', '=', '0'],
                        ['contents_type','like', '%1%'],
                    ])->orderby('view_count', 'DESC')
                    ->offset($request->start)
                    ->limit($request->limit)->get();

                    break;

                    case !0 :
        
                    $query1 = DB::table('voyage')->select([
                        'voyage.id','voyage.user_id','voyage.product_id','voyage.contents_id','voyage.contents_type','voyage.category_id',
                        'voyage.status', 'voyage.description', 'voyage.create_at','voyage.update_at','voyage.like_count','voyage.view_count',
                        'voyage.comment_count','categories_ko.name as category_ko','categories_en.name as category_en', 'users.nickname','users.photo'])
                    ->join('aking.categories_ko', 'voyage.category_id','=', 'categories_ko.id')
                    ->join('aking.categories_en', 'voyage.category_id','=', 'categories_en.id')
                    ->join('aking.users', 'voyage.user_id','=','users.id')
                    ->where([
                        ['is_delete', '=', '0'],
                        ['category_id','=',$request->category],
                        ['contents_type','like', '%1%'],
                    ])->orderby('view_count', 'DESC')
                    ->offset($request->start)
                    ->limit($request->limit)->get();

                    break;

                }
    
                foreach($query1 as $q1 => $q11){
    
                    $thumbnail[$q1] = explode(",", $q11->contents_id);
                    $type[$q1] = explode(",", $q11->contents_type);
                    $item[$q1] = explode(",", $q11->product_id);
    
                    $query2 = DB::table('products')->select(['id','name','brand','thumbnail','price','discount_price','type_of_discount'])
                    ->whereIn('id', $item[$q1])->get();
    
                    $itemresult[$q1] = $query2;
    
                }

                $j = 0;

                foreach($type as $t => $ty){

                    foreach($ty as $types => $typess){

                        if($type[$t][$types] == 1){

                            $thumbnail_video[$t][$j] =  $thumbnail[$t][$types];
                            $j++;

                        }

                    }

                    $j = 0;

                }


                foreach($thumbnail_video as $t => $th){
    
                    foreach($th as $thumbnails => $thumbnailss){

                        $query3 = DB::table('s3_video_voyage')->select('thumbnail')->where('id', '=', $thumbnail_video[$t][$thumbnails])->get();
    
                        $thumbnailresult[$t][$thumbnails] = $query3[0]->thumbnail; 

                    }

                }
    
                foreach($query1 as $q111 => $q1111){
    
                    if(isset($thumbnailresult[$q111])){
                        $query1[$q111]->thumbnail = $thumbnailresult[$q111];
                    }

                    $query1[$q111]->items = $itemresult[$q111];

                }
    
                    return $this->sendResponse($query1, 'Successfully.');

            }

    }

    public function get_popular_detail(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'voyage_id' => 'required',
            'lang' => 'required',
            'currency' => 'required',
        ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $content = array();
            $content_video = array();
            $type = array();
            $item = array();

            $contentresult = array();
            $profileresult = array();
            $nameresult = array();
            $itemresult = array();

        $query1 = DB::table('voyage')->select([
            'voyage.id','voyage.user_id','voyage.product_id','voyage.contents_id','voyage.contents_type','voyage.category_id',
            'voyage.status', 'voyage.description', 'voyage.create_at','voyage.update_at','voyage.like_count','voyage.view_count',
            'voyage.comment_count','categories_ko.name as category_ko','categories_en.name as category_en', 'users.nickname','users.photo'])
            ->join('aking.categories_ko', 'voyage.category_id','=', 'categories_ko.id')
            ->join('aking.categories_en', 'voyage.category_id','=', 'categories_en.id')
            ->join('aking.users', 'voyage.user_id','=','users.id')
            ->where('voyage.id', '=', $request->voyage_id)->get();

        $view_count = $query1[0]->view_count + 1;

        $query2 = DB::table('voyage')->where('id', '=', $request->voyage_id)->update(['view_count' => $view_count]);

        $query1[0]->view_count = $view_count;

        foreach($query1 as $q1 => $q11){
    
            $content[$q1] = explode(",", $q11->contents_id);
            $type[$q1] = explode(",", $q11->contents_type);
            $item[$q1] = explode(",", $q11->product_id);

            $query2 = DB::table('products')->select(['id','name','brand','thumbnail','price','discount_price','type_of_discount'])
            ->whereIn('id', $item[$q1])->get();

            $itemresult[$q1] = $query2;

        }

        $j = 0;

        foreach($type as $t => $ty){

            foreach($ty as $types => $typess){

                if($type[$t][$types] == 1){

                    $content_video[$t][$j] =  $content[$t][$types];
                    $j++;

                }

            }

            $j = 0;

        }

        foreach($content_video as $c => $co){

            foreach($co as $contents => $contentss){

                $query3 = DB::table('s3_video_voyage')->select('p480')->where('id', '=', $content_video[$c][$contents])->get();

                $contentresult[$c][$contents] = $query3[0]->p480; 

            }
        }

            foreach($query1 as $q111 => $q1111){

                $query1[$q111]->contents = $contentresult[$q111];
                $query1[$q111]->items = $itemresult[$q111];

            }

        $query4 = DB::table('voyage')->select(['id', 'user_id','contents_id', 'status', 'description', 'create_at' ,'update_at' ,'like_count' ,'view_count' ,'comment_count'])
        ->where([
            ['user_id', '!=', $request->user_id],
            ['id', '!=', $request->voyage_id],
        ])->orderby('view_count', 'DESC')->limit(5)->get();

        for($i = 0; $i < count($query4); $i++){

            $query5 = DB::table('s3_image_voyage')->select('thumbnail')->where('s3_image_voyage.id', '=', $query4[$i]->contents_id)->get();
            $query4[$i]->thumbnail =  $query5[0]->thumbnail;

        }

        $totalresultvoyage = array();
        $totalresultvoyage = [
            'detail' => $query1,
            'related' => $query4,
        ];

        return $this->sendResponse($totalresultvoyage, 'Successfully.');

        } else {

        return $this->sendError('access_token is not correct', $validator->errors());   

        }

    }

}