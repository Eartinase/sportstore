<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
	public function index(){
		if(\Session::get('Role')=='admin'){
			$data['data'] = \DB::table('product')->get();
			return view('list', $data);
		}
		return redirect('/');
	}

	public function ajax_getList(){
		$product = \DB::table('product')
		->join('category','product.CatId', '=', 'category.CatId')
		->select('category.name as cat','product.*')
		->get();
		
		foreach ($product as $p){ 
			$data[] = array(	
				$p->Name,
				"<img src='".$p->Image."'>",
				$p->cat,
				$p->Description,				
				$p->Price,				
				"<button class='btn btn-info' name='id' form='edit' value='".$p->Id."'>Edit</button>".
				"<button class='btn btn-danger' name='id' form='delete' value='".$p->Id."'>Delete</button>"
			);		
		}			
		
		$output = array(            
			"data" => $data
		);	
		echo json_encode($output);
	}
}
