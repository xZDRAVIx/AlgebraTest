<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		blabla
        return view('home');
    }
	
	public function aboutUs()
	{
		return view ('about_us');
	}

}
