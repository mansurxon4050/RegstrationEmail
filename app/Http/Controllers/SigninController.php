<?php

namespace App\Http\Controllers;

use App\Models\Human;
use Illuminate\Http\Request;

class SigninController extends Controller
{
    public function signin(Request $request ){

        $all = Human::all();
        $admin = Human::where('role','admin')->get('email')[0]->email;
        $users = Human::where('role','user')->get('email')[0]->email;
        //$users ->$request->all('email');


        switch($request->email){
            case $admin:            return view('admin', compact('all'));
            case $users:            return view('user', compact('all'));

        }
    }

    public function create(Request $request){
        Human::create([
            'email'     => $request->email,
            'password'    => $request->password,
            'role' => 'user'
        ]);
        $all = Human::all();
        return view('admin', compact('all'));
    }

}
