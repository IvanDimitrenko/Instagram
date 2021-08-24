<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistrationRequest;
use App\Http\Models\UsersModel;

class RegistrationController extends Controller
{
    public function submit(RegistrationRequest $req)
    {
        // $validated = $request->validate([
        //     'login' => 'required|min:3|max:20',
        //     'password' => 'required|min:6|max:20',
        // ]);
        $users_model = new UsersModel();
        $users_model->email = $req->input('email');
        $users_model->login = $req->input('login');
        $users_model->name = $req->input('name');
        $users_model->password = $req->input('password');
        $users_model->save();

        return redirect()->route('authentication');
    }

    public function root(RegistrationRequest $req)
    {
        return view('pages.Registration');
    }
}
