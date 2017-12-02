<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
	public function index()
	{
		$data['data'] = \DB::table('product')->get();
		return view('list', $data);
	}

	public function ajax_getList(){
		$product = \DB::table('product')
		->join('category','product.CatId', '=', 'category.CatId')
		->select('category.name as cat','product.*')
		->get();
		
		foreach ($product as $p){ 
			$data[] = array(	
				$p->Name,
				$p->Description,
				$p->cat,
				$p->Price,
				"<img src='".$p->Image."'>",
				"<button class='btn btn-info' value='".$p->Id."'>Edit</button>"
			);		
		}			
		
		$output = array(            
			"data" => $data
		);	
		echo json_encode($output);
	}
}
