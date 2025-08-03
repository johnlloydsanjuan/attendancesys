<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home(Request $request){
        $data = [];
        $systemName = "Attendance System";
        $dateTime = Carbon::now();
        $goInto = "login"; //for default

        $data['goInto'] = $goInto;
        $data['htmlTitle'] = "Login - $systemName";

        return view('templates.onboarding-template', $data);
    }
}
