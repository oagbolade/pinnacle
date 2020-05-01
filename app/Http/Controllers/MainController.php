<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function landing()
    {
        return view('main.welcome');
    }

    public function company()
    {
        return view('main.company');
    }

    public function team()
    {
        return view('main.team');
    }

    public function terms()
    {
        return view('main.terms');
    }

    public function clientele()
    {
        return view('main.clientele');
    }

    public function partner()
    {
        return view('main.partner');
    }

    public function service()
    {
        return view('main.service');
    }

    public function value()
    {
        return view('main.value');
    }

    public function contact()
    {
        return view('main.contact');
    }
}
