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
		$product = \DB::table('product')->get();
		
		foreach ($product as $p){ 
			$data[] = array(	
				$p->Name,
				$p->Description,
				$p->CatId,
				$p->Price,
				"<img src='".$p->Image."'>"
			);		
		}			
		
		$output = array(            
			"data" => $data
		);	
		echo json_encode($output);
	}
}
