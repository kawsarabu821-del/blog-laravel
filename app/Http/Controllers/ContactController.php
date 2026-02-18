<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\BLog;
//use App\Models\Blog; // Make sure you have a Blog model

class ContactController extends Controller
{
    public function index()
    {
        //$contacts = Contact::latest()->paginate(10);
        $latest_posts = Blog::latest()->limit(5)->get();
        return view('pages.contact',compact('latest_posts'));
        //return view('contacts.index', compact('contacts'));
    }

    // public function create()
    // {
    //     return view('contacts.create');
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'title' => 'required|string|max:255',
    //         'content' => 'required|string',
    //     ]);

    //     Blog::create($request->all());

    //     return redirect()->route('contacts.index')->with('success', 'Blog created successfully!');
    // }

    // public function show(Blog $blog)
    // {
    //     return view('contacts.show', compact('blog'));
    // }

    // public function edit(Blog $blog)
    // {
    //     return view('contacts.edit', compact('blog'));
    // }

    // public function update(Request $request, Blog $blog)
    // {
    //     $request->validate([
    //         'title' => 'required|string|max:255',
    //         'content' => 'required|string',
    //     ]);

    //     $blog->update($request->all());

    //     return redirect()->route('contacts.index')->with('success', 'Blog updated successfully!');
    // }

    // public function destroy(Blog $blog)
    // {
    //     $blog->delete();

    //     return redirect()->route('contacts.index')->with('success', 'Blog deleted successfully!');
    // }
}

