<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \GuzzleHttp\Client;
use \App\Models\News;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NewsController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }
    
    public function index(){
        $client = new Client();
        $response = $client->request('GET','https://newsapi.org/v2/top-headlines?country=au',[
            'headers' => [
                'Authorization' => '904144d6d5524db2a98d44e3b4cccc30'
            ]
        ]);
        $stringBody = (string)$response->getBody();
        $newsBody = json_decode($stringBody, true);
        $art = array();
        foreach ($newsBody as $news) {
            $a = $news;
            array_push($art, $a );
        }

        foreach ($art[2] as $article) 
        {
            $dt = new Carbon($article['publishedAt']);
            // dd($article['publishedAt']->format('YYYY-MM-DD'));
            News::create([
                'title' => $article['title'],
                'author' => $article['author'],
                'link' => $article['url'],
                'description' => $article['description'],
                'published_at' => $dt->toDateString(),
                'country' => 'US'
            ]);
        }

        return view('response');
    }

    public function showNews(){
        $news = News::all();
        return view('news.index', [
            'news' => $news
        ]);
    }

    public function save()
    {
        $news = DB::select(
            'call returnNews(?,?)',
            array('2021-01-10', 'US')
        );

        return view('news', [
            'news' => $news
        ]);
    }
}
