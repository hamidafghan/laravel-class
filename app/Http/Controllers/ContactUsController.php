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
    public function __invoke(Request $request){
       
        // validations
        // store the contact us requests in a table
        // send the email to the admin (info@example.com)
        // Notification 
    
        // redirect back to contact us 

        return $request->all();
    }
}
