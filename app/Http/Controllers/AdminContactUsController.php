<?php 
namespace App\Http\Controllers;

class AdminContactUsController extends Controller
{
	
	public function adminContactUsView()
	{
		return view('public-pages.contact');
	}
}