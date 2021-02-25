<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\ContactUsRequest;

class ContactUsController extends Controller
{

    /**
     * Get store and notify the user
     * 
     * @param $request
     * @return redirect
     */
    public function __invoke(ContactUsRequest $request)
    {
        if($request->hasFile('image')){
            $path = $request->image->store('contact-files', 'assets');

            return $path;
        }

        return 'No image or file';
    }
}
