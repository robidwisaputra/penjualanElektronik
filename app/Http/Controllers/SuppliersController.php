<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalSuppliers = Supplier::count();
        $suppliers = Supplier::all();
        $access = Auth::user()->access;
        return view('supplier.index', compact('suppliers', 'totalSuppliers', 'access'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $access = Auth::user()->access;
        return view('supplier.create', compact('access'));
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
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'email|required'
        ]);

        $status = Supplier::create($request->all());
        if($status) return redirect('supplier')->with('status', 'Data Succesfully Added');
        else return redirect('supplier')->with('status', 'Data Failed Added');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        $access = Auth::user()->access;
        return view('supplier.edit', compact('supplier', 'access'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required', 
            'email' => 'required|email'
        ]);

        $status = Supplier::find($supplier->id_supplier)
                    ->update($request->all());

        if($status) return redirect('supplier')->with('status', 'Data Succesfully Updated');
        else return redirect('supplier')->with('status', 'Data Failed Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        $status = Supplier::destroy($supplier->id_supplier);
        if($status) return redirect('supplier')->with('status', 'Data Succesfully Deleted');
        else return redirect('supplier')->with('status', 'Data Failed Deleted');
    }
}
