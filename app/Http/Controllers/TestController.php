<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{
    public function welcome(){
    	return view('welcome');
    }
}
