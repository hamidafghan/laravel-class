<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicPageController extends Controller
{
    public function welcome() {
        $cards = \DB::table('cards')->get();

        return view('public-pages.welcome', compact('cards'));
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
