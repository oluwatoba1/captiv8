<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct()
    {

    	$this->middleware('guest');

    }

    // I did this because I had admin login and register also. I edited the default Auth functionality for the Admin page
    public function login()
    {

        return view('customer.login');

    }

    public function register()
    {

        return view('customer.register');

    }
}
