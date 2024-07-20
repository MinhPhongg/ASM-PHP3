<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        $mostViewed = Post::orderBy('views', 'desc')->get();
        $lastestPost = Post::latest()->first();
        $popularPost = Post::orderBy('views', 'desc')->first();
        return view("welcome",compact("posts","mostViewed","lastestPost","popularPost"));
    }
    public function show($id){
        $post = Post::findOrFail($id);
        return view("show",compact("post"));
    }
    public function search(Request $request){
        $query = $request->input('query');
        $posts = Post::where('title','like','%'.$query.'%')
                    ->orWhere('tag','like','%'.$query.'%')
                    ->get();
        return view('search',compact('posts'));
    }
}
