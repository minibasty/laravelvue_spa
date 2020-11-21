<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\APIBaseController as APIBaseController;
use App\User;

// เรียกใช้งาน Model
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends APIBaseController
{
    public function login()
    {

        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user = Auth::user();

            // ลบรายการ Token เก่าของ User นี้ออก
            $token_delete = DB::table('oauth_access_tokens')->where('user_id', $user->id)->delete();

            if ($token_delete) {
                $success['token'] = $user->createToken('MyApp')->accessToken;
                return $this->sendResponse($success, 'User login successfully');
            }
        }else{
            return $this->sendError('Unauthorised');
        }
    }
}
