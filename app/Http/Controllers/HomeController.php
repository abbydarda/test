<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\View;

class HomeController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function index($params){
        $response = null;
        $user = [
                [
                    "id" => 1,
                    "name" => "abby",
                ],
                [
                    "id" => 2,
                    "name" => "al",
                ],
                [
                    "id" => 3,
                    "name" => "reza",
                ],
        ];

        if ($params === "api") {
            $response = array(
                "title" => "HOME API",
                "user" => $user
            );
          
            return $response;
        }else{
            $response = array(
                "title" => "HOME WEB",
                "user" => $user,
            );
            return View::make("home_web")->with(array('response'=>$response));
        }   

    }
}
