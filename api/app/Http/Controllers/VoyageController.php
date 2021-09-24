<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use Illuminate\Support\Facades\DB;
use Aws\Rekognition\RekognitionClient;
use Validator;


class VoyageController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function get_voyage_list(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'user_id' => 'required',
            'category' => 'required',
            'lang' => 'required',
            'keyword',
            'is_ott' => 'required',
            'start' => 'required',
            'limit' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $fav_channel = array();
            $thumbnail = array();
            $thumbnail_video = array();
            $type = array();
            $item = array();
        
            $thumbnailresult = array();
            $profileresult = array();
            $nameresult = array();
            $itemresult = array(); 
    
            if($request->user_id != 0){

                $query1 = DB::table('from_fav_channel')->select('to')->where('from', '=', $request->user_id)->get();

                if(isset($query1[0])){

                    $fav_channel = explode(",", $query1[0]->to);

                }

            }

            switch($request->user_id){

                case 0 :

                    switch($request->is_ott){

                        case 0 :

                            switch($request->category){

                                case 0 :

                                    $query2 = DB::table('voyage')->select([
                                        'voyage.id','voyage.user_id','voyage.product_id','voyage.contents_id','voyage.contents_type','voyage.category_id',
                                        'voyage.status', 'voyage.description', 'voyage.create_at','voyage.update_at','voyage.like_count','voyage.view_count',
                                        'voyage.comment_count','categories_ko.name as category_name', 'users.nickname','users.photo','users.seller_status'])
                                    ->join('aking.categories_ko', 'voyage.category_id','=', 'categories_ko.id')
                                    ->join('aking.users', 'voyage.user_id','=','users.id')
                                    ->where([
                                        ['is_delete', '=', '0'],
                                        ['voyage.description','like', '%'.$request->keyword.'%'],
                                    ])
                                    ->orderby('create_at', 'DESC')
                                    ->offset($request->start)
                                    ->limit($request->limit)->get();

                                break;

                                case !0 :

                                    $query2 = DB::table('voyage')->select([
                                        'voyage.id','voyage.user_id','voyage.product_id','voyage.contents_id','voyage.contents_type','voyage.category_id',
                                        'voyage.status', 'voyage.description', 'voyage.create_at','voyage.update_at','voyage.like_count','voyage.view_count',
                                        'voyage.comment_count','categories_ko.name as category_name', 'users.nickname','users.photo','users.seller_status'])
                                    ->join('aking.categories_ko', 'voyage.category_id','=', 'categories_ko.id')
                                    ->join('aking.users', 'voyage.user_id','=','users.id')
                                    ->where([
                                        ['is_delete', '=', '0'],
                                        ['category_id','=',$request->category],
                                        ['voyage.description','like', '%'.$request->keyword.'%'],
                                    ])
                                    ->orderby('create_at', 'DESC')
                                    ->offset($request->start)
                                    ->limit($request->limit)->get();

                                break;

                            }

                        break;

                        case 1 :

                            switch($request->category){

                                case 0 :

                                    $query2 = DB::table('voyage')->select([
                                        'voyage.id','voyage.user_id','voyage.product_id','voyage.contents_id','voyage.contents_type','voyage.category_id',
                                        'voyage.status', 'voyage.description', 'voyage.create_at','voyage.update_at','voyage.like_count','voyage.view_count',
                                        'voyage.comment_count','categories_ko.name as category_name', 'users.nickname','users.photo','users.seller_status'])
                                    ->join('aking.categories_ko', 'voyage.category_id','=', 'categories_ko.id')
                                    ->join('aking.users', 'voyage.user_id','=','users.id')
                                    ->where([
                                        ['is_delete', '=', '0'],
                                        ['contents_type','like', '%1%'],
                                        ['voyage.description','like', '%'.$request->keyword.'%'],
                                    ])
                                    ->orderby('create_at', 'DESC')
                                    ->offset($request->start)
                                    ->limit($request->limit)->get();

                                break;

                                case !0 :

                                    $query2 = DB::table('voyage')->select([
                                        'voyage.id','voyage.user_id','voyage.product_id','voyage.contents_id','voyage.contents_type','voyage.category_id',
                                        'voyage.status', 'voyage.description', 'voyage.create_at','voyage.update_at','voyage.like_count','voyage.view_count',
                                        'voyage.comment_count','categories_ko.name as category_name', 'users.nickname','users.photo','users.seller_status'])
                                    ->join('aking.categories_ko', 'voyage.category_id','=', 'categories_ko.id')
                                    ->join('aking.users', 'voyage.user_id','=','users.id')
                                    ->where([
                                        ['is_delete', '=', '0'],
                                        ['category_id','=',$request->category],
                                        ['contents_type','like', '%1%'],
                                        ['voyage.description','like', '%'.$request->keyword.'%'],
                                    ])
                                    ->orderby('create_at', 'DESC')
                                    ->offset($request->start)
                                    ->limit($request->limit)->get();

                                break;

                            }
                        
                        break;

                    }

                break;

                case !0 : 

                    switch($request->is_ott){

                        case 0 :

                            switch($request->category){

                                case 0 :

                                    $query2 = DB::table('voyage')->select([
                                        'voyage.id','voyage.user_id','voyage.product_id','voyage.contents_id','voyage.contents_type','voyage.category_id',
                                        'voyage.status', 'voyage.description', 'voyage.create_at','voyage.update_at','voyage.like_count','voyage.view_count',
                                        'voyage.comment_count','categories_ko.name as category_name', 'users.nickname','users.photo','users.seller_status'])
                                    ->join('aking.categories_ko', 'voyage.category_id','=', 'categories_ko.id')
                                    ->join('aking.users', 'voyage.user_id','=','users.id')
                                    ->whereIn('user_id', $fav_channel)
                                    ->where([
                                        ['is_delete', '=', '0'],
                                        ['voyage.description','like', '%'.$request->keyword.'%'],
                                        ])
                                    ->orderby('create_at', 'DESC')
                                    ->offset($request->start)
                                    ->limit($request->limit)->get();

                                    // if(count($query2) == 0){

                                    //     $query2 = DB::table('voyage')->select([
                                    //         'voyage.id','voyage.user_id','voyage.product_id','voyage.contents_id','voyage.contents_type','voyage.category_id',
                                    //         'voyage.status', 'voyage.description', 'voyage.create_at','voyage.update_at','voyage.like_count','voyage.view_count',
                                    //         'voyage.comment_count','category.dept1_ko as category_en','category.ko as category_ko', 'users.name','users.photo'])
                                    //     ->join('aking.category', 'voyage.category_id','=', 'category.id')
                                    //     ->join('aking.users', 'voyage.user_id','=','users.id')
                                    //     ->where('is_delete', '=', '0')
                                    //     ->orderby('create_at', 'DESC')
                                    //     ->offset($request->start)
                                    //     ->limit($request->limit)->get();

                                    // }

                                break;

                                case !0 :

                                    $query2 = DB::table('voyage')->select([
                                        'voyage.id','voyage.user_id','voyage.product_id','voyage.contents_id','voyage.contents_type','voyage.category_id',
                                        'voyage.status', 'voyage.description', 'voyage.create_at','voyage.update_at','voyage.like_count','voyage.view_count',
                                        'voyage.comment_count','categories_ko.name as category_name', 'users.nickname','users.photo','users.seller_status'])
                                    ->join('aking.categories_ko', 'voyage.category_id','=', 'categories_ko.id')
                                    ->join('aking.users', 'voyage.user_id','=','users.id')
                                    ->whereIn('user_id', $fav_channel)
                                    ->where([
                                        ['is_delete', '=', '0'],
                                        ['category_id','=',$request->category],
                                        ['voyage.description','like', '%'.$request->keyword.'%'],
                                    ])
                                    ->orderby('create_at', 'DESC')
                                    ->offset($request->start)
                                    ->limit($request->limit)->get();

                                    // if(count($query2) == 0){

                                    //     $query2 = DB::table('voyage')->select([
                                    //         'voyage.id','voyage.user_id','voyage.product_id','voyage.contents_id','voyage.contents_type','voyage.category_id',
                                    //         'voyage.status', 'voyage.description', 'voyage.create_at','voyage.update_at','voyage.like_count','voyage.view_count',
                                    //         'voyage.comment_count','category.dept1_ko as category_en','category.ko as category_ko', 'users.name','users.photo'])
                                    //     ->join('aking.category', 'voyage.category_id','=', 'category.id')
                                    //     ->join('aking.users', 'voyage.user_id','=','users.id')
                                    //     ->where([
                                    //         ['is_delete', '=', '0'],
                                    //         ['category_id','=',$request->category],
                                    //     ])
                                    //     ->orderby('create_at', 'DESC')
                                    //     ->offset($request->start)
                                    //     ->limit($request->limit)->get();

                                    // }

                                break;

                            }

                        break;

                        case 1 :

                            switch($request->category){

                                case 0 :

                                    $query2 = DB::table('voyage')->select([
                                        'voyage.id','voyage.user_id','voyage.product_id','voyage.contents_id','voyage.contents_type','voyage.category_id',
                                        'voyage.status', 'voyage.description', 'voyage.create_at','voyage.update_at','voyage.like_count','voyage.view_count',
                                        'voyage.comment_count','categories_ko.name as category_name', 'users.nickname','users.photo','users.seller_status'])
                                    ->join('aking.categories_ko', 'voyage.category_id','=', 'categories_ko.id')
                                    ->join('aking.users', 'voyage.user_id','=','users.id')
                                    ->whereIn('user_id', $fav_channel)
                                    ->where([
                                        ['is_delete', '=', '0'],
                                        ['contents_type','like', '%1%'],
                                        ['voyage.description','like', '%'.$request->keyword.'%'],
                                    ])
                                    ->orderby('create_at', 'DESC')
                                    ->offset($request->start)
                                    ->limit($request->limit)->get();

                                        // if(count($query2) == 0){

                                        //     $query2 = DB::table('voyage')->select([
                                        //         'voyage.id','voyage.user_id','voyage.product_id','voyage.contents_id','voyage.contents_type','voyage.category_id',
                                        //         'voyage.status', 'voyage.description', 'voyage.create_at','voyage.update_at','voyage.like_count','voyage.view_count',
                                        //         'voyage.comment_count','category.dept1_ko as category_en','category.ko as category_ko', 'users.name','users.photo'])
                                        //     ->join('aking.category', 'voyage.category_id','=', 'category.id')
                                        //     ->join('aking.users', 'voyage.user_id','=','users.id')
                                        //     ->where([
                                        //         ['is_delete', '=', '0'],
                                        //         ['contents_type','like', '%1%'],
                                        //     ])
                                        //     ->orderby('create_at', 'DESC')
                                        //     ->offset($request->start)
                                        //     ->limit($request->limit)->get();

                                        // }

                                break;

                                case !0 :

                                    $query2 = DB::table('voyage')->select([
                                        'voyage.id','voyage.user_id','voyage.product_id','voyage.contents_id','voyage.contents_type','voyage.category_id',
                                        'voyage.status', 'voyage.description', 'voyage.create_at','voyage.update_at','voyage.like_count','voyage.view_count',
                                        'voyage.comment_count','categories_ko.name as category_name', 'users.nickname','users.photo','users.seller_status'])
                                    ->join('aking.categories_ko', 'voyage.category_id','=', 'categories_ko.id')
                                    ->join('aking.users', 'voyage.user_id','=','users.id')
                                    ->whereIn('user_id', $fav_channel)
                                    ->where([
                                        ['is_delete', '=', '0'],
                                        ['category_id','=',$request->category],
                                        ['contents_type','like', '%1%'],
                                        ['voyage.description','like', '%'.$request->keyword.'%'],
                                    ])
                                    ->orderby('create_at', 'DESC')
                                    ->offset($request->start)
                                    ->limit($request->limit)->get();

                                        // if(count($query2) == 0){

                                        //     $query2 = DB::table('voyage')->select([
                                        //         'voyage.id','voyage.user_id','voyage.product_id','voyage.contents_id','voyage.contents_type','voyage.category_id',
                                        //         'voyage.status', 'voyage.description', 'voyage.create_at','voyage.update_at','voyage.like_count','voyage.view_count',
                                        //         'voyage.comment_count','category.dept1_ko as category_en','category.ko as category_ko', 'users.name','users.photo'])
                                        //     ->join('aking.category', 'voyage.category_id','=', 'category.id')
                                        //     ->join('aking.users', 'voyage.user_id','=','users.id')
                                        //     ->where([
                                        //         ['is_delete', '=', '0'],
                                        //         ['category_id','=',$request->category],
                                        //         ['contents_type','like', '%1%'],
                                        //     ])
                                        //     ->orderby('create_at', 'DESC')
                                        //     ->offset($request->start)
                                        //     ->limit($request->limit)->get();

                                        // }

                                break;

                            }
                        
                        break;

                    }

                break;   

            }

            foreach($query2 as $q1 => $q11){
        
                $thumbnail[$q1] = explode(",", $q11->contents_id);
                $type[$q1] = explode(",", $q11->contents_type);
                $item[$q1] = explode(",", $q11->product_id);
    
                $query3 = DB::table('products')->select(['id','name','brand','thumbnail','price','discount_price','type_of_discount'])
                ->whereIn('id', $item[$q1])->get();
    
                $itemresult[$q1] = $query3;
    
                }

            if($request->is_ott == 0){

                foreach($thumbnail as $t => $th){
    
                    foreach($th as $thumbnails => $thumbnailss){

                        if($type[$t][$thumbnails] == '0'){

                            $query3 = DB::table('s3_image_voyage')->select('thumbnail')->where('id', '=', $thumbnail[$t][$thumbnails])->get();

                        } else {

                            $query3 = DB::table('s3_video_voyage')->select('thumbnail')->where('id', '=', $thumbnail[$t][$thumbnails])->get();

                        }

                        if(!empty($query3[0])){
    
                            $thumbnailresult[$t][$thumbnails] = $query3[0]->thumbnail; 
    
                        }

                    }

                }

            } else {

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

            }

                foreach($query2 as $q111 => $q1111){
    
                    if(isset($thumbnailresult[$q111])){
                        $query2[$q111]->thumbnail = $thumbnailresult[$q111];
                    }

                    $query2[$q111]->items = $itemresult[$q111];

                }
    
                return $this->sendResponse($query2, 'Successfully.'); 
        
        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }
    }

    public function get_voyage_detail(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'voyage_id' => 'required',
            'lang' => 'required',
            'currency' => 'required',
            'is_ott' => 'required',
        ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $content = array();
            $content_video = array();
            $content_id_related = array();
            $content_type_related = array();
            $thumbnail_related = array();
            $type = array();
            $item = array();

            $contentresult = array();
            $profileresult = array();
            $nameresult = array();
            $itemresult = array();

        $query1 = DB::table('voyage')->select([
            'voyage.id','voyage.user_id','voyage.product_id','voyage.contents_id','voyage.contents_type','voyage.category_id','users.subscribeto_cnt',
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

        switch($request->is_ott){

            case 0 :

            foreach($content as $c => $co){

                foreach($co as $contents => $contentss){

                    if($type[$c][$contents] == '0'){

                        $query3 = DB::table('s3_image_voyage')->select('path')->where('id', '=', $content[$c][$contents])->get();

                    } else {

                        $query3 = DB::table('s3_video_voyage')->select('p480')->where('id', '=', $content[$c][$contents])->get();

                    }

                    if(!empty($query3[0]->path)){

                        $contentresult[$c][$contents] = $query3[0]->path; 

                    }


                    if(!empty($query3[0]->p480)){

                        $contentresult[$c][$contents] = $query3[0]->p480; 

                    }

                }

            }

            break;

            case 1 :

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
                
            break;

        }

            foreach($query1 as $q111 => $q1111){

                $query1[$q111]->contents = $contentresult[$q111];
                $query1[$q111]->items = $itemresult[$q111];

            }

            if($request->is_ott == 0){

                $query4 = DB::table('voyage')->select(['id', 'user_id','contents_id','contents_type', 'status', 'description', 'create_at' ,'update_at' ,'like_count' ,'view_count' ,'comment_count'])
                ->where([
                    ['user_id', '!=', $request->user_id],
                    ['id', '!=', $request->voyage_id],
                ])->inRandomOrder()->limit(5)->get();

            } else {

                $query4 = DB::table('voyage')->select(['id', 'user_id','contents_id','contents_type', 'status', 'description', 'create_at' ,'update_at' ,'like_count' ,'view_count' ,'comment_count'])
                ->where([
                    ['user_id', '!=', $request->user_id],
                    ['contents_type','like', '%1%'],
                    ['id', '!=', $request->voyage_id],
                ])->inRandomOrder()->limit(5)->get();

            }

            foreach($query4 as $q4 => $q44){

            $content_id_related[$q4] = explode(",",$q44->contents_id);
            $content_type_related[$q4] = explode(",",$q44->contents_type);

                foreach($content_id_related[$q4] as $co => $con){

                    if($content_type_related[$q4][$co] == 0){

                        $query5 = DB::table('s3_image_voyage')->select('thumbnail')->where('id' ,'=' , $content_id_related[$q4][$co])->get();

                        $content_video[$q4][$co] = $query5[0]->thumbnail;

                    } else if($content_type_related[$q4][$co] == 1){

                        $query5 = DB::table('s3_video_voyage')->select('thumbnail')->where('id' ,'=' , $content_id_related[$q4][$co])->get();

                        $content_video[$q4][$co] = $query5[0]->thumbnail;

                    }

                }
                
                $q44->thumbnail = $content_video[$q4];

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

    public function voyage_delete(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'voyage_id' => 'required',
        ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('voyage')->where('id', '=', $request->voyage_id)->exists();

            if($query1 == 1){

                $query2 = DB::table('voyage')->where('id', '=', $request->voyage_id)->delete();

                return $this->sendResponse('voyage delete successfully', 'Successfully.');

            } else {

                return $this->sendResponse('voyage does not exist', 'Successfully.');

            }

        } else {

        return $this->sendError('access_token is not correct', $validator->errors());   

        }
    }

    public function voyage_like(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'user_id' => 'required',
            'voyage_id' => 'required',
            'is_like' => 'required',
        ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            if($request->is_like == 0){

                    $query1 = DB::table('voyage_like')->where([
                        ['user_id', '=', $request->user_id],
                        ['voyage_id', '=', $request->voyage_id],
                    ])->exists();

                    if($query1 != 1){

                        $query2 = DB::table('voyage_like')->insert(
                            ['user_id' => $request->user_id, 'voyage_id' => $request->voyage_id]
                        );

                        $query3 = DB::table('voyage')->select('like_count')->where('id', '=', $request->voyage_id)->get();

                        $like_count = $query3[0]->like_count + 1;

                        $query4 = DB::table('voyage')->where('id','=',$request->voyage_id)->update(
                            ['like_count' => $like_count]
                        );

                        return $this->sendResponse('like Successfully.' , 'Successfully.');

                    } else {

                        return $this->sendResponse('like Successfully.' , 'Successfully.');
                        
                    }

            }

            if($request->is_like == 1){

                $query5 = DB::table('voyage_like')->where([
                    ['user_id', '=', $request->user_id],
                    ['voyage_id', '=', $request->voyage_id],
                ])->doesntExist();

                if($query5 != 1){

                    $query6 = DB::table('voyage_like')->where([
                        ['user_id', '=', $request->user_id],
                        ['voyage_id', '=', $request->voyage_id],
                    ])->delete();
    
                    $query7 = DB::table('voyage')->select('like_count')->where('id', '=', $request->voyage_id)->get();
    
                    $like_count = $query7[0]->like_count - 1;
    
                    $query8 = DB::table('voyage')->where('id','=',$request->voyage_id)->update(
                        ['like_count' => $like_count]
                    );
    

                }

                return $this->sendResponse('unlike Successfully.' , 'Successfully.');

            }

        } else {

        return $this->sendError('access_token is not correct', $validator->errors());   

        }
    }

    public function voyage_comment_request(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'voyage_id' => 'required',
        ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $count_result = 0;

            $query1 = DB::table('voyage_comments')->select(['voyage_comments.id', 'voyage_comments.voyage_id', 'voyage_comments.text','voyage_comments.created_at', 
            'voyage_comments.updated_at', 'voyage_comments.is_delete', 'users.id as user_id','users.nickname', 'users.profile_photo'])->join('users', 'users.id', '=', 'voyage_comments.user_id')
            ->where('voyage_id','=',$request->voyage_id)->orderby('voyage_comments.id', 'DESC')->get();

            foreach($query1 as $q1 => $q11){

                if($q11->is_delete == 0){

                    $count_result++;

                }

                $query2 = DB::table('voyage_replies')->select(['voyage_replies.id','voyage_replies.comment_id','voyage_replies.text','voyage_replies.created_at',
                'voyage_replies.updated_at','voyage_replies.voyage_id','voyage_replies.is_delete','users.id as user_id','users.nickname', 'users.profile_photo'])
                ->join('users', 'users.id', '=', 'voyage_replies.user_id')->where('comment_id','=', $q11->id)->get();

                $commentresult[$q1] = [

                    'parent' => $query1[$q1],
                    'child' => $query2,
    
                ];

            }

            $query3 = DB::table('voyage')->where('id', '=', $request->voyage_id)->update(['comment_count' => $count_result]);

            if(!isset($commentresult)){

                $totalcommentresult = [

                    'count' => $count_result,
    
                ];

            } else {

                $totalcommentresult = [

                    'count' => $count_result,
                    'result' => $commentresult,
    
                ];

            }

            return $this->sendResponse($totalcommentresult, 'Successfully.');

        } else {

        return $this->sendError('access_token is not correct', $validator->errors());   

        }
    }

    public function voyage_comment_post(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'user_id' => 'required',
            'voyage_id' => 'required',
            'text' => 'required',
        ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('voyage_comments')->insert(
            ['user_id' => $request->user_id , 'voyage_id' => $request->voyage_id, 'text' => $request->text,
             'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"),  'is_delete' => 0]
            );

            $query2 = DB::table('voyage')->select('comment_count')->where('id','=', $request->voyage_id)->get();

            $comment_count = $query2[0]->comment_count + 1;

            $query3 = DB::table('voyage')->where('id','=',$request->voyage_id)->update(
            ['comment_count' => $comment_count]
            );

            return $this->sendResponse('voyage_comment post successfully', 'Successfully.');

        } else {

        return $this->sendError('access_token is not correct', $validator->errors());   

        }
    }

    public function voyage_comment_edit(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'comment_id' => 'required',
            'text' => 'required',
        ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('voyage_comments')->where('id', '=', $request->comment_id)->update(
                ['text' => $request->text , 'updated_at' => date("Y-m-d H:i:s")]
                );

            return $this->sendResponse('voyage_comment edit successfully', 'Successfully.');

        } else {

        return $this->sendError('access_token is not correct', $validator->errors());   

        }
    }

    public function voyage_comment_delete(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'comment_id' => 'required',
            'voyage_id' => 'required',
        ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('voyage_comments')->where('id', '=', $request->comment_id)->exists();

            if($query1 == 1){

                $query2 = DB::table('voyage_comments')->select('is_delete')->where('id', '=', $request->comment_id)->get();

                if($query2[0]->is_delete == 0){

                    $query3 = DB::table('voyage_comments')->where('id', '=', $request->comment_id)->update(['is_delete' => 1]);

                    $query4 = DB::table('voyage')->select('comment_count')->where('id','=', $request->voyage_id)->get();
    
                    $comment_count = $query4[0]->comment_count - 1;
        
                    $query5 = DB::table('voyage')->where('id','=',$request->voyage_id)->update(
                    ['comment_count' => $comment_count]
                    );
    
                    return $this->sendResponse('voyage_comment delete successfully', 'Successfully.');

                } else {

                    return $this->sendResponse('voyage_comment is always delete', 'Successfully.');

                }

            } else {

                return $this->sendResponse('voyage_comment does not exist', 'Successfully.');

            }

        } else {

        return $this->sendError('access_token is not correct', $validator->errors());   

        }
    }

    public function voyage_replies_post(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'user_id' => 'required',
            'comment_id' => 'required',
            'voyage_id' => 'required',
            'text' => 'required',
        ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('voyage_replies')->insert(
            ['user_id' => $request->user_id , 'comment_id' => $request->comment_id, 'voyage_id' => $request->voyage_id, 'text' => $request->text,
             'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'is_delete' => 0]
            );

            return $this->sendResponse('voyage_replies post successfully', 'Successfully.');

        } else {

        return $this->sendError('access_token is not correct', $validator->errors());   

        }
    }

    public function voyage_replies_delete(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'replies_id' => 'required',
        ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('voyage_replies')->where('id', '=', $request->replies_id)->exists();

            if($query1 == 1){

                $query2 = DB::table('voyage_replies')->where('id', '=', $request->replies_id)->update(['is_delete' => 1]);

                return $this->sendResponse('voyage_replies delete successfully', 'Successfully.');

            } else {

                return $this->sendResponse('voyage_replies does not exist', 'Successfully.');

            }

        } else {

        return $this->sendError('access_token is not correct', $validator->errors());   

        }
    }

    public function voyage_replies_edit(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'replies_id' => 'required',
            'text' => 'required',
        ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('voyage_replies')->where('id', '=', $request->replies_id)->update(
                ['text' => $request->text , 'updated_at' => date("Y-m-d H:i:s")]
                );

            return $this->sendResponse('voyage_replies edit successfully', 'Successfully.');

        } else {

        return $this->sendError('access_token is not correct', $validator->errors());   

        }
    }

    public function voyage_file_upload(Request $request)
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'video_path',
            'video_resolution',
            'video_thumbnail',
            'image_path',
            'image_thumbnail',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $video_path = array();
            $video_resolution = array();
            $video_thumbnail;

            $video_path_result = array(array());
            $video_resolution_result = array(array());
            $video_thumbnail_result;

            $image_path = array();
            $image_thumbnail = array();

            $video_id = array();
            $image_id = array();

            $p480 = null;
            $p720 = null;
            $p1080 = null;

            if(!empty($request->video_path)&&!empty($request->video_resolution)&&!empty($request->video_thumbnail)){

                $video_path = explode("@", $request->video_path);
                $video_resolution = explode("@", $request->video_resolution);
                $video_thumbnail = explode(",", $request->video_thumbnail);
                
            }

            if(!empty($request->image_path)&&!empty($request->image_thumbnail)){

                $image_path = explode(",", $request->image_path);
                $image_thumbnail = explode(",", $request->image_thumbnail);
                
            }

            foreach($video_resolution as $v => $vi){

                $video_path_result[$v] = explode(",", $video_path[$v]);
                $video_resolution_result[$v] = explode(",", $video_resolution[$v]);

                foreach($video_resolution_result[$v] as $vid => $vide){
            
                    if($vide == 480){

                        $p480 = $video_path_result[$v][$vid];

                    } else if($vide == 720){

                        $p720 = $video_path_result[$v][$vid];

                    }else if($vide == 1080){

                        $p1080 = $video_path_result[$v][$vid];
        
                    }

                }

                if(!empty($video_path_result[$v])){

                    $query1 = DB::table('s3_video_voyage')->insertGetId(
                        ['p480' => $p480, 'p720' => $p720,'p1080' => $p1080, 'thumbnail' => $video_thumbnail[$v], 'is_ott' => 1,'create_at' => date("Y-m-d H:i:s"), 'update_at' => date("Y-m-d H:i:s"),
                        ]
                    );
    
                    array_push($video_id, $query1);
    
                }

            }

            foreach($image_path as $i => $im){

                $query2 = DB::table('s3_image_voyage')->insertGetId(
                    ['path' => $im, 'thumbnail' => $image_thumbnail[$i], 'create_at' => date("Y-m-d H:i:s"), 'update_at' => date("Y-m-d H:i:s"),
                    ]
                );

                array_push($image_id, $query2);

            }

            $totalfileupload = array();
            $totalfileupload = [
                'video' => $video_id,
                'image' => $image_id,
            ];

            return $this->sendResponse($totalfileupload,'Successfully.');

        } else {

        return $this->sendError('access_token is not correct', $validator->errors());   

        }
    }

    public function voyage_upload_result(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'user_id' => 'required',
            'product_id',
            'description' => 'required',
            'contents_id' => 'required',
            'contents_type' => 'required',
            'category_id' => 'required',
            'tag',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $type = array();
            $path = array();
            $thumbnail = array();

            $type_result = array();
            $id_result = array();
            $type_result = explode(",", $request->type);
            $path = explode(",", $request->path);
            $thumbnail = explode(",", $request->thumbnail);

                $query1 = DB::table('voyage')->insertGetId(
                    ['user_id' => $request->user_id , 'product_id' => $request->product_id, 'contents_id' => $request->contents_id, 
                    'contents_type' => $request->contents_type, 'status' => 1, 'description' => $request->description, 
                    'category_id' => $request->category_id, 'create_at' => date("Y-m-d H:i:s"), 'update_at' => date("Y-m-d H:i:s"),
                    'like_count' => 0, 'comment_count' => 0, 'view_count' => 0, 'tag' => $request->tag, 'is_delete' => 0,
                    ]
                    );

                $query2 = DB::table('voyage')->select('is_delete')->where([
                    ['user_id', '=', $request->user_id],
                    ['is_delete', '=', 0],
                ])->count();

                $query3 = DB::table('users')->where('id','=',$request->user_id)->update(['contents_cnt' => $query2]);

            return $this->sendResponse($query1, 'Successfully.');

        } else {

        return $this->sendError('access_token is not correct', $validator->errors());   

        }
    }

}