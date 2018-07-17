<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{

    public function __construct()
    {

        $this->middleware(['auth', 'admin']);       

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('setup.products');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[

            'name'          => 'required|string|min:2',
            'description'   => 'required',
            'price'         => 'required|integer',
            'size'          => 'nullable',
            'image'         => 'required|image|mimes:png,jpg,jpeg|max:300',
            'category_id'   => 'required|integer'

        ]);

        $image = request('image');

        if($image){

            //this gets the image's name
            $imageName = $image->getClientOriginalName();

            //this moves the image to the 'images' folder rather than db. bcos... *in unison, "it is bad practice"
            $image->move('images', $imageName);

            //we assign the image name as the new requst
            $image = $imageName;

        }

        Product::create([

            'name'          => request('name'),
            'description'   => request('description'),
            'price'         => request('price'),
            'size'          => request('size'),
            'image'         => $image,
            'category_id'   => request('category_id')

        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
