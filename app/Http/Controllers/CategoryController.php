<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\BLog;
use App\Models\Category;

class CategoryController extends Controller
{
    
    public function single($slug){
        $single_cat = Category::where('slug',$slug)->firstOrFail();
        $allPosts = Blog::where('category_id', $single_cat->id)->get();
        $categories = Category::all();
        $latest_posts = Blog::latest()->limit(5)->get();
        //dd($post_by_category);
        //$categories = DB::table('categories')->first();
        return view('category.single',compact('allPosts','categories','latest_posts','single_cat'));
    }
}
