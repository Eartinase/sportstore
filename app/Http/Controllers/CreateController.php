<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CreateController extends Controller
{
	public function index()
	{
		if(\Session::get('Role')=='admin'){
		$data['data'] = \DB::table('category')->get();
		return view('create', $data);
	}
	return redirect('/');
	}

	public function create(Request $request){		
		\DB::table('product')->insert([
			[
				'Name'			=> $request->name,
				'Description' 	=> $request->desc,	
				'CatId'			=> $request->cat,
				'Price'			=> $request->price,
				'Image'			=> $request->image
			]
		]);
		
		$data['data'] = \DB::table('category')->get();
		return redirect('/list');
	}
}
