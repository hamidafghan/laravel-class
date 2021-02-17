<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicPageController extends Controller
{
    public function welcome() {
        return view('public-pages.welcome');
    }

    public function about(){
        return view('public-pages.about');
    }

    /**
     * Get the contact us view
     * 
     * @return view
     */
    public function contactUs(){
        return view('public-pages.contact');
    }
}
