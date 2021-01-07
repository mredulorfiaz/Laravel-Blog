<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::paginate(5); 

         
        return view('posts.index', [
            'posts' => $posts
        ]);
    }
    public function store(Request $request){
        // dd('OK');

        $this->validate($request, [
           'body' => 'required',
        ]);

        $request->user()->posts()->create([
            'body' => $request->body
        ]);

        return back();
    }
}
