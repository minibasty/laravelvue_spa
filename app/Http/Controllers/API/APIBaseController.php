<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;

class APIBaseController extends Controller
{
    //สร้าง Function ในการแสดงข้อมูลเมื่อทำงานสำเร็จ
    public function sendResponse($result, $message)
    {
        $response = [
            'success' => true,
            'data' => $result,
            'message' => $message
        ];

        return response()->json($response,200);
    }

    // ฟังชั่นแสดงข้อมูลเมื่อมีข้อผิดพลาด
    public function sendError($error, $errorMessages =[],$code = 404)
    {
        $response = [
            'success' => false,
            'message' => $error
        ];

        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }

        return response()->json($response, $code);
    }
}
