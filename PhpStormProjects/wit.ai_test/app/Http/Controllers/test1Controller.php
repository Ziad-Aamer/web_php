<?php

namespace App\Http\Controllers;

require 'E:\Web\PHP\PhpStormProjects\wit.ai_test2\vendor\autoload.php';
use Tgallice\Wit\Client;
use Illuminate\Http\Request;

class test1Controller extends Controller
{
    //
    public function one()
    {
        $client = new Client('OWOU4NFHZMCTNSLAPWBZFUPOEMFK4EVR');

        $response = $client->get('/message', [
            'q' => 'hi',
        ]);

    // Get the decoded body
        $intent = json_decode((string) $response->getBody(), true);

        return $intent;

    }
}

