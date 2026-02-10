<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\BLog;

class TermsController extends Controller
{
    public function index()
    {
        $terms = DB::table('terms_conditions')->first();
        $latest_posts = Blog::latest()->limit(5)->get();
        return view('pages.terms',compact('terms','latest_posts'));
       
    }
}
