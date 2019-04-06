<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class simpleController extends Controller
{
    public function abc(){
    	return view('portfolio');
    }

    public function employee(){
    	return view('employee');
    }

    public function home(){
    	return view('home');
    }

}
