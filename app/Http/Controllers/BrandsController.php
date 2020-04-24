<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        $access = Auth::user()->access;
        return view('brand.index', compact('brands', 'access'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $access = Auth::user()->access;
        return view('brand.create', compact('access'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['brand' => 'required']);

        $brand = new Brand;
        $brand->brand = $request->brand;
        $brand->save();

        return redirect('brand')->with('status', 'Data Succesfully Added');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        $access = Auth::user()->access;
        return view('brand.edit', compact('brand', 'access'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        $request->validate(['brand' => 'required']);
        
        $brand = brand::find($brand->id_brand);
        $brand->brand = $request->brand;
        $brand->save();

        return redirect('brand')->with('status', 'Data Succesfully Updated'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        brand::destroy($brand->id_brand);
        return redirect('brand')->with('status', 'Data Succesfully Deleted');
    }
}
