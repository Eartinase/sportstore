<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
    	$data['data'] =  \DB::table('product')
    	->join('category','product.CatId', '=', 'category.CatId')
    	->select('category.name as cat','product.*')
    	->where('product.Name', 'LIKE', $request->keyword.'%')
    	//->where('product.CatId', '=', $request->cat)
    	->get();


/*
    	$product = \DB::table('product')
		->join('category','product.CatId', '=', 'category.CatId')
		->select('category.name as cat','product.*')
		->get();
		*/
		return view('search', $data);
    }
}
