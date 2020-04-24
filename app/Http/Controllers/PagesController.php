<?php

namespace App\Http\Controllers;

use App\Product;
use App\Member;
use App\Selling;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function home(){
    	$access = Auth::user()->access;
    	$product = Product::count();
    	$member = Member::count();
    	$selling = Selling::count();

    	return view('home', compact('product', 'member', 'selling', 'access'));
    }
}
