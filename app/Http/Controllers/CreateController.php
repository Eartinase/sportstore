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

	public function create(Request $request)
	{
		
			$name = $request->name;
			\DB::table('product')->insert(
				[
					'Name' => $name, 
					'Description' => 0,
					'CatId'=>0,
					'Price'=>0,
					'Image'=>0
				]
			);
		
		$data['data'] = \DB::table('category')->get();
		return view('create', $data);

	}
}
