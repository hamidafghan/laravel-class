<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

       

        if($request->hasFile('image')){
            $path = $request->image->store('contact-files', 'assets');

            return $path;
        }

        return 'No image or file';
    }
}
