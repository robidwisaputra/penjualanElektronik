<?php

namespace App\Http\Controllers;

use App\Product;
use App\Member;
use App\Employee;
use App\Selling;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Exports\SellingExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class SellingController extends Controller
{
    public function index(){
        $idSelling = $this->idSelling();
    	$products = Product::all();
    	$members = Member::all();
        $access = Auth::user()->access;

    	return view('transaction.selling', compact('id_Selling', 'products', 'members', 'access'));
    }

    // membuat kode otomatis untuk transaksi
    public function idSelling(){
    	$kode = "S";
    	$kode .= date('y');

    	$currentYear = date('y');
    	$last_digit = DB::table('selling')
    			->select(DB::raw("IFNULL(MAX(SUBSTRING(id_selling,4,6)),0)+1 digit"))
    			->where(DB::raw("SUBSTRING(id_selling,2,2)"), '=',$currentYear)
    			->first();

    	$last_digit = json_decode(json_encode($last_digit), true);
    	$kode .= sprintf('%06d', $last_digit['digit']);
    	return $kode;
    }

    public function input(Request $request){
        // masukan request ke variabel
        $idSelling = $this->idSelling();
        $id_employee = Auth::user()->id_employee;
        $id_member = $request->id_member;
        $tanggal = date('Y-m-d');

        // pengurangan stock di table barang
        foreach($request->items as $items){
            $product = Product::find($items['id_product']);
            $product->stock = $product->stock - $items['quantity'];
            $product->save();
        }

        // Input table Selling
        $Selling = array(
            'id_selling' => $idSelling,
            'date' => $tanggal,
            'id_employee' => $id_employee,
            'id_member' => $id_member
        );
        DB::table('selling')->insert($Selling);
        
        
        //Input table det_Selling
        $o = 0;
        foreach($request->items as $items){
            $data = array(
                'id_selling' => $idSelling,
                'id_product' => $items['id_product'],
                'quantity' => $items['quantity'],
                'price' => $items['price']
            );
            $o++;
            DB::table('detail_selling')->insert($data);            
        }
        return redirect('selling')->with('status', 'Data Selling succesfully added');
    }

    public function reportSelling(){
        $totalSelling = Selling::count();
        $selling = Selling::all();
        // $detail = Detail_selling::all();
        $access = Auth::user()->access;
        return view('report.selling', compact('totalSelling', 'selling', 'detail', 'access'));
    }

    public function exportreportSelling(){
        return Excel::download(new SellingExport, 'Selling.xlsx');
    }
}