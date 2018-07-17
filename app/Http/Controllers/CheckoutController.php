<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function allowcheckout()
    {

    	if(\Auth::check())
    	{

    		return 'this';

    	}

    	return redirect('/customer-login');

    }

}
