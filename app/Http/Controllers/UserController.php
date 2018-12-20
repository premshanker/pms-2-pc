<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        User::create($request->all());
        //return $request->all();
       // return view('user');
       // return back()->withErrors(['field_name' => ['Your custom message here.']]);
       //return redirect()->route('user')->with($request->all());
       return redirect('user')->with('status', 'Profile updated!');
    }
    
}
