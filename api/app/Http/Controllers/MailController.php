<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Mail\SendMail;
use App\Http\Controllers\BaseController as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Validator;

class MailController extends BaseController
{
    public function mail_post(Request $request)
    {
        date_default_timezone_set('Asia/Seoul');

        $validator = Validator::make($request->all(), [
            'access_token' => 'required',
            'email' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $access_token = $request->access_token;

        if(check_access_token($access_token) == 0){

        $certi_num = rand(100000, 999999);

        $query1 = DB::table('email_auth')->insertGetId(
            ['certi_num' => $certi_num, 'email' => $request->email, 'created_at' => date("Y-m-d H:i:s"),]);

        $query2 = DB::table('email_auth')->select('created_at')->where('id','=',$query1)->get();

        $details = [
            'title' => 'Aliseon 회원가입 인증번호 입니다.',
            'body' => '인증번호 : '.$certi_num,
            // 'url' => 'kr.aliseon.com',
        ];

            \Mail::to($request->email)->send(new SendMail($details));

        $sendmailresult = array();
        $sendmailresult = [
            'id' => $query1,
            'time' => $query2[0]->created_at,
        ];

        return $this->sendResponse($sendmailresult ,'Successfully.');

        } else {

            return $this->sendError('access_token is not correct', $validator->errors());   

        }
    }
}