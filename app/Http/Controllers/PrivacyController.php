<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\BLog;

class PrivacyController extends Controller
{
    public function index()
    {
        $privacy = DB::table('privacy_policy')->first();
        $latest_posts = Blog::latest()->limit(5)->get();
        return view('pages.privacy',compact('latest_posts','privacy'));
       
    }
}
