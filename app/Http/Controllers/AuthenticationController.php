<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthenticationRequest;

class AuthenticationController extends Controller {

    public function submit(AuthenticationRequest $request){
        // $validated = $request->validate([
        //     'login' => 'required|min:3|max:20',
        //     'password' => 'required|min:6|max:20',
        // ]);
        // dd($request);
    } 
    
    public function root(AuthenticationRequest $request){
       return view('pages.Authentication');
    }
}
