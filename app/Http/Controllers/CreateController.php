<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CreateController extends Controller
{
	public function index()
	{
		$data['data'] = \DB::table('category')->get();
		return view('create', $data);
	}

	public function create(Request $request){
		/*
		$cat = \DB::table('category')
		->where('CatId', '=', $request->cat)
		->get();
	//	$cat = \DB::select('select CatId from category where CatId = ?', ['1' => $request->cat])->get();

		foreach ($cat as $c) {
			$result = $c->Name."";
		}					
*/
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
