<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function contacts()
    {
        return view('home.contacts');
    }


    public function cryptocurrencies()
    {
        return view('home.cryptocurrencies');
    }

    public function forex()
    {
        return view('home.forex');
    }
    public function shares()
    {
        return view('home.shares');
    }
    public function indices()
    {
        return view('home.indices');
    }
    public function trade()
    {
        return view('home.trade');
    }

    public function copy()
    {
        return view('home.copy');
    }
    public function automate()
    {
        return view('home.automate');
    }
    public function about()
    {
        return view('home.about');
    }
    public function whyUs()
    {
        return view('home.why-us');
    }

    public function forTraders()
    {
        return view('home.for-traders');
    }

    public function regulation()
    {
        return view('home.regulation');
    }

    public function etfs()
    {
        return view('home.etfs');
    }
}
