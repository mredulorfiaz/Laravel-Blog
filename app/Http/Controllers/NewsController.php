<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \GuzzleHttp\Client;
class NewsController extends Controller
{
    public function index(){
        $client = new Client();
        $response = $client->request('GET','https://newsapi.org/v2/top-headlines?country=us',[
            'headers' => [
                'Authorization' => '904144d6d5524db2a98d44e3b4cccc30'
            ]
        ]);
        $stringBody = (string)  $response->getBody();
        // dd($stringBody);
        return view('response')->with('resp', $stringBody);
    }
}
