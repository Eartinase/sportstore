<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
    //	$data['data'] = \DB::table('product')->get();
    	$data['data'] = \DB::table('product')
		->join('category','product.CatId', '=', 'category.CatId')
		->select('category.name as cat','product.*')
		->orderBy('name')
		->get();

		$data['cat'] = \DB::table('category')->get();
		
    	return view('welcome', $data);
    }

   
}
