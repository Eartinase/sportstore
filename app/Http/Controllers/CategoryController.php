<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
	public function index(){
		$data['data'] = \DB::table('category')->get();
		return view('category', $data);
	}

	public function createCat(Request $request){
		\DB::table('category')->insert([
			[
				'Name'	=> $request->catName,				
			]
		]);
		
		$data['data'] = \DB::table('category')->get();
		return redirect('/category');
	}

	public function delCat(Request $request){
		
		$query = \DB::table('product')
		->where('CatId', $request->id)
		->get();

		if (!empty ( $query )) {
			return view('check',$query);
		}	
		\DB::table('category')->where('CatId', '=', $request->id)->delete();

		return redirect('/category');
	}

	public function editCat(Request $request)
	{
		\DB::table('category')
		->where('CatId', $request->catId)
		->update([
			'Name'			=> $request->catName			
		]);
		$data['data'] = \DB::table('category')->get();
		return redirect('/category');
	}
}
