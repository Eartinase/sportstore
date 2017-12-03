<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditController extends Controller
{
	public function edit(Request $request)
	{
		if(\Session::get('Role')=='admin'){
			$data['data'] = \DB::table('product')
			->where('Id','=', $request->id)
			->get();

			$data['cat'] = \DB::table('category')->get();

			return view('edit', $data);
		}
		return redirect('/');
	}

	public function editSubmit(Request $request){
		if(\Session::get('Role')=='admin'){
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
		return redirect('/');
	}

	public function delete(Request $request){
		if(\Session::get('Role')=='admin'){
			\DB::table('product')->where('Id', '=', $request->id)->delete();
			$data['data'] = \DB::table('product')->get();
			return view('list', $data);
		}
		return redirect('/');
	}


}
