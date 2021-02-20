<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{

    /**
     * Get store and notify the user
     * 
     * @param $request
     * @return redirect
     */
    public function __invoke(Request $request)
    {
        return $request->input('name');
    }
}
