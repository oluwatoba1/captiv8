<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartsController extends Controller
{
    public function index()
    {

    	$cartItems = Cart::content();

    	return view('cart', compact('cartItems'));

    }

    public function add(Product $product)
    {

    	Cart::add($product->id, $product->name, 1, $product->price, ['size' => 'medium']);

    	return back();

    }

    public function update(Request $request, $rowId)
    {

    	Cart::update($rowId, $request->qty);

    	return back();

    }

    public function delete($rowId)
    {

        Cart::remove($rowId);

        return back();

    }
}
