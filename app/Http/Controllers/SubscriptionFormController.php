<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Subscription;

class SubscriptionFormController extends Controller{
    public function subscriptionFormInfo(Request $request){
        //dd($request);

        // Validate the request
        $request->validate([
             'email' => "required|email|unique:subscriptions",
        ]);


        // create the email //
        Subscription::create( $request->only('email'));
     

        // redirect with  success massage //
        return redirect()->back()->with('success','thank u for subscribing');

    } 
}
