<?php

namespace App\Http\Controllers;
use App\Models\BLog;
use App\Models\Category;
use Illuminate\Http\Request;
//use App\Models\Blog; // Make sure you have a Blog model

class BlogController extends Controller
{
    public function index()
    {
        $allPosts = Blog::all();
        $categories = Category::all();
        $latest_posts = Blog::latest()->limit(5)->get();
        return view('blogs.index', compact('allPosts','categories','latest_posts'));
    }

     // blog-sinlge-page
     public function single($slug){
        $blog_single = Blog::where('slug',$slug)->firstOrFail();
        $categories = Category::all();
        $latest_posts = Blog::latest()->limit(5)->get();
        $related_posts = Blog::where('category_id',$blog_single->category_id)
                         ->where('id', '!=', $blog_single->id)
                         ->latest()
                         ->get();
       // dd($related_posts);
         return view('blogs.single', compact('blog_single','categories','latest_posts','related_posts'));
     }

    // public function create()
    // {
    //     return view('blogs.create');
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'title' => 'required|string|max:255',
    //         'content' => 'required|string',
    //     ]);

    //     Blog::create($request->all());

    //     return redirect()->route('blogs.index')->with('success', 'Blog created successfully!');
    // }

    // public function show(Blog $blog)
    // {
    //     return view('blogs.show', compact('blog'));
    // }

    // public function edit(Blog $blog)
    // {
    //     return view('blogs.edit', compact('blog'));
    // }

    // public function update(Request $request, Blog $blog)
    // {
    //     $request->validate([
    //         'title' => 'required|string|max:255',
    //         'content' => 'required|string',
    //     ]);

    //     $blog->update($request->all());

    //     return redirect()->route('blogs.index')->with('success', 'Blog updated successfully!');
    // }

    // public function destroy(Blog $blog)
    // {
    //     $blog->delete();

    //     return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully!');
    // }




}

