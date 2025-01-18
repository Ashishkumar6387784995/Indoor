<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    //
    public function aboutUs(){
        return view('user.pages.about.about-us');
    }

    //
    public function ourVision(){
        return view('user.pages.about.our-vision');
    }
}
