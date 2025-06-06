<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home(Request $request){
        $data = [];
        return view('home', $data);
    }
}
