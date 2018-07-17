<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class CategoriesController extends Controller
{
    
	public function index($id)
	{

		$products_categories = Product::where('category_id', $id)->get();

		return view('categories', compact('products_categories'));

	}

}

