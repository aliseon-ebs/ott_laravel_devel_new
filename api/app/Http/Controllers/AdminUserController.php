<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use Illuminate\Support\Facades\DB;
use Validator;


class AdminUserController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_ticket_list(Request $request)
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

            $query1 = DB::table('admin_user_conversations')->select()->where([
                ['user_id','=', $request->user_id],
                ['type', '=', "Ticket"], 
                ])->orderby('updated_at', 'DESC')->get();

            return $this->sendResponse($query1 ,'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function ticket_post(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'user_id' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('admin_user_conversations')->insertGetId(
                ['subject' => $request->subject , 'user_id' => $request->user_id, 'message' => $request->message,
                 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'type' => "Ticket", 'order_number' => null
                 ]
                );

            $query2 = DB::table('admin_user_messages')->insert(
                ['conversation_id' => $query1 , 'message' => $request->message, 'user_id' => $request->user_id,
                'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"),
                ]
               );

            return $this->sendResponse($query1 ,'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function ticket_delete(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'ticket_id' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('admin_user_conversations')->where('id', '=', $request->ticket_id)->exists();

            if($query1 == 1){

                $query2 = DB::table('admin_user_messages')->where('conversation_id', '=', $request->ticket_id)->exists();

                if($query2 == 1){

                    $query3 = DB::table('admin_user_conversations')->where('id', '=', $request->ticket_id)->update(['is_delete' => 1]);
                    $query4 = DB::table('admin_user_messages')->where('conversation_id', '=', $request->ticket_id)->update(['is_delete' => 1]);

                    return $this->sendResponse('ticket delete successfully', 'Successfully.');

                } else {

                    return $this->sendResponse('conversations->ticket_id does not exist', 'Successfully.');
                    
                }

            } else {

                return $this->sendResponse('conversations->ticket_id does not exist', 'Successfully.');
            }

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

    public function ticket_edit(Request $request)
    // public function index()
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'ticket_id' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

            $query1 = DB::table('admin_user_conversations')->where('id', '=', $request->ticket_id)->update(
                ['subject' => $request->subject ,'message' => $request->message , 'updated_at' => date("Y-m-d H:i:s")]
                );

            $query2 = DB::table('admin_user_messages')->where('conversation_id', '=', $request->ticket_id)->update(
                ['message' => $request->message , 'updated_at' => date("Y-m-d H:i:s")]
                );

                return $this->sendResponse('ticket edit successfully', 'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   
    
        }

    }

}