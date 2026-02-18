<?php

namespace App\Http\Controllers;
use App\Models\BLog;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    $homePosts = Blog::latest()->limit(5)->get();
    $latest_posts = Blog::latest()->limit(5)->get();
    $categories = Category::all();
        //dd($homePosts);
    return view('welcome', compact('homePosts','latest_posts','categories'));
       
    }
}
