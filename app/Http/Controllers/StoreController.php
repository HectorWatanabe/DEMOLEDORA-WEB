<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class StoreController extends Controller
{
	public function index(){
   		return view('store.welcome');
    }

    public function about(){
   		return view('store.about');
    }

    public function contact(){
   		return view('store.contact');
    }

  	public function shop(){
  		$products = Product::all();
  	  return view('store.shop', compact('products'));
  	}

    public function show($slug){
      $product = Product::where('slug', $slug)->first();
      return view('store.show', compact('product'));
    }
}
