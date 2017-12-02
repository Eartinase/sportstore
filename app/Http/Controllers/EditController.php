<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditController extends Controller
{
	public function edit(Request $request)
	{
		$data['data'] = \DB::table('product')
		->where('Id','=', $request->id)
		->get();

		$data['cat'] = \DB::table('category')->get();

		return view('edit', $data);
	}

	public function editSubmit(Request $request)
	{
		\DB::table('product')
		->where('Id', $request->id)
		->update([
			'Name'			=> $request->name,
			'Description' 	=> $request->desc,	
			'CatId'			=> $request->cat,
			'Price'			=> $request->price,
			'Image'			=> $request->image
		]);
		$data['data'] = \DB::table('product')->get();
		return view('list', $data);
	}


}
