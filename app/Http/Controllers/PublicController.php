<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home(Request $request){
        $data = [];
        $goInto = "login"; //for default
        $cssGoInto = "login";

        $data['goInto'] = $goInto;
        $data['cssGoInto'] = $cssGoInto;

        return view('templates.onboarding-template', $data);
    }
}
