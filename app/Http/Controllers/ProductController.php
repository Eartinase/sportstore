<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller{
	public function index(){
		
	}

	public function delProduct(Request $request){
		\DB::table('product')->where('Id', '=', $request->id)->delete();
		return redirect('/category');
	}
}
