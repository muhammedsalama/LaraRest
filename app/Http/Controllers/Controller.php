<?php

namespace App\Http\Controllers;

use Dingo\Api\Http\Response;
use Dingo\Api\Routing\Helpers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    use Helpers;

    public function sendResponse($data ,$message, $status = Response::HTTP_OK){
        return $this->response->array([
            'message'=>$message,
            'data'=>$data,
            'status_code'=>$status
        ])->setStatusCode($status);
    }

    public function success($data = null , $message="", $status = Response::HTTP_OK){
        return $this->sendResponse($data,$message,$status);
    }
}
