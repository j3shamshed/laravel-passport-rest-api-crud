<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OuthViewController extends Controller
{
    public function index(){
    	return view('settings');
    }
}
