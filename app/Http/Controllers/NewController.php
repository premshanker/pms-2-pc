<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use View;
use App\User;

class NewController extends Controller
{
    public function new(){
        //return view('new',['text'=>'I am Prem Shanker Bajpayee']);
        $users = User::all();
        //return view('new')->with('text','I am using with keyword');
        $text = "I am using with keyword";
       // var_dump($users);
        //die();
        //dd($users);
        return view('new', compact('users', 'text'));
    }
    public function master(){
        $gender = 'female';
        $name = "I am Prem";
        return view('mastertest', compact('gender', 'name'));
    }
}
