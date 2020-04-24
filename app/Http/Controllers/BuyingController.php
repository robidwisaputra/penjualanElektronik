<?php

namespace App\Http\Controllers;

use App\Buying;
use App\Supplier;
use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Exports\BuyingExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;


class BuyingController extends Controller
{
    public function index(){
        $data['suppliers'] = Supplier::all();
        $data['categories'] = Category::all();
        $data['access'] = Auth::user()->access;
        return view('transaction.buying')->with($data);
    }

    public function idBuying(){
    	$kode = "B";
    	$kode .= date('y');

    	$currentYear = date('y');
    	$last_digit = DB::table('buying')
    			->select(DB::raw("IFNULL(MAX(SUBSTRING(id_buying,4,6)),0)+1 digit"))
    			->where(DB::raw("SUBSTRING(id_buying,2,2)"), '=',$currentYear)
    			->first();

    	$last_digit = json_decode(json_encode($last_digit), true);
    	$kode .= sprintf('%06d', $last_digit['digit']);
    	return $kode;
    }


    public function input(Request $request){
    	$request->validate([
    		'supplier' => 'required',
    		'name_product' => 'required',
    		'quantity' => 'required',
    		'model' => 'required',
    		'id_category' => 'required'
    	]);

    	$total = $request->total;
    	$quantity = $request->quantity;

    	// input ke tabel barang
    	$category = $request->id_category;
    	$name = $request->name_product;
    	$model = $request->model;
    	$guarantee = $request->guarantee;
    	$description = $request->description;
    	$price = $total / $quantity;
    	$price += $price * 0.1;

    	// jika ada gambar
    	if($request->hasFile('image') && $request->file('image')->isValid()){
        $fillname = $name . $model . '.' .$request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('', $fillname);
        $image = $fillname;
      }
 			
 			$data = [
 				'id_category' => $category,
 				'name' => $name,
 				'model' => $model,
 				'guarantee' => $guarantee,
 				'price' => $price,
 				'stock' => $quantity,
 				'image' => $image,
 				'description' => $description
 			];
 			DB::table('products')->insert($data);

 			// untuk mengambil id terakhir
 			$product = Product::all()->last();

    	// input ke tabel buying
    	$buying = new Buying;
    	$buying->id_buying   = $this->idBuying();
    	$buying->date        = date('Y-m-d');
    	$buying->id_employee = Auth::user()->id_employee;
    	$buying->id_supplier = $request->id_supplier;
    	$buying->id_product  = $product->id_product;
    	$buying->quantity    = $quantity;
    	$buying->total       = $total;
    	$buying->save();

    	return redirect('buying')->with('status', 'Data buying succesfully added');
    }

    public function reportBuying(){
        $totalBuying = Buying::count();
        $buying = Buying::all();
        $access = Auth::user()->access;
        return view('report.buying', compact('totalBuying', 'buying', 'access'));
    }

    public function exportexcel() 
    {
        return Excel::download(new BuyingExport, 'Buying.xlsx');
    }

}
