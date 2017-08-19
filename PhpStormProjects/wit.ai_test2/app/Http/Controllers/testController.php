<?php

namespace App\Http\Controllers;



use GuzzleHttp\Client;
use Illuminate\Http\Request;

require 'E:\Web\PHP\PhpStormProjects\wit.ai_test2\vendor\autoload.php';

class testController extends Controller
{
    //
    public function one()
    {


        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'https://api.github.com/repos/guzzle/guzzle');
        echo $res->getStatusCode();
// 200
        echo $res->getHeaderLine('content-type');
// 'application/json; charset=utf8'
        echo $res->getBody();
// '{"id": 1420053, "name": "guzzle", ...}'


    return "HI";
    }
}
