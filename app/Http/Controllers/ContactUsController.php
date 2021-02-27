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
        info($request->all());

        if($request->hasFile('image')){
            info('inside the if');
            $path = $request->image->store('contact-files', 'assets');

            return $path;
        }else{
            info('out side of the if');
        }

        return 'No image or file';
    }
}
