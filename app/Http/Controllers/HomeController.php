<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function aboutUs()
    {

    return view('frontendviews.aboutUs');
    }


    public function contactUs()
    {

    return view('frontendviews.contactUs');
    }

    public function documents()
    {

    return view('frontendviews.documents');
    }
    public function register()
    {

    return view('frontendviews.register');
    }
    public function school()
    {

    return view('frontendviews.school');
    }
    public function tutorial()
    {

    return view('frontendviews.tutorial');
    }
    public function services()
    {

    return view('frontendviews.services');
    }
    public function login()
    {

    return view('frontendviews.login');
    }

}


