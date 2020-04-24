<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $access = Auth::user()->access;
        return view('product.index', compact('products', 'access'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $access = Auth::user()->access;
        $categories = Category::all();
        $brands = Brand::all(); 
        return view('product.create', compact('categories', 'brands', 'access'));
   }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_category' => 'required|exists:categories',
            'id_brand' => 'required|exists:brands',
            'name' => 'required',
            'model' => 'required',
            'guarantee' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png',
            'description' => 'required'
        ]);

        $input = $request->all();

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $fillname = $input['name'] . $input['model'] . '.' .$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('', $fillname);
            $input['image'] = $fillname;
        }

        $status = Product::create($input);
        if($status) return redirect('product')->with('status', 'Data Succesfully Added');
        else return redirect('product')->with('status', 'Data Failde Added');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $chooseCategory = Category::where('id_category', $product->id_category);
        $chooseBrand = Brand::where('id_brand', $product->id_brand);
        $access = Auth::user()->access;
        $categories = Category::all();
        $brands = Brand::all();
        return view('product.edit', compact('product', 'chooseBrand', 'chooseCategory', 'categories', 'brands', 'access'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'id_category' => 'required|exists:categories',
            'id_brand' => 'required|exists:brands',
            'name' => 'required',
            'model' => 'required',
            'guarantee' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png',
            'description' => 'required'
        ]);

        $input = $request->all();

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $fillname = $input['name'] . $input['model'] . '.' .$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('', $fillname);
            $input['image'] = $fillname;
        }

        $status = Product::find($product->code_product)
                    ->update($input);

        if($status) return redirect('product')->with('status', 'Data Succesfully Added');
        else return redirect('product')->with('status', 'Data Failde Added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $status = Product::destroy($product->code_product);
        if($status) return redirect('product')->with('status', 'Data Succesfully Deleted');
        else return redirect('product')->with('status', 'Data Failed Deleted');
    }
}
