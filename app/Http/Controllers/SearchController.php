<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
	public function search(Request $request)
	{
		if(isset($_GET['cat'])){
			$sql='SELECT category.name AS cat, product.* '.
			'FROM product '.
			'JOIN category ON product.CatId = category.CatId '.
			"WHERE product.Name LIKE '".$request->keyword."%' ";
			
			foreach((array)$_GET['cat'] as $c){
				$sql .= 'AND product.CatId = '.$c;
			}
			$data['searchProduct']=\DB::select($sql);

		}else{
			$data['searchProduct'] =  \DB::table('product')
			->join('category','product.CatId', '=', 'category.CatId')
			->select('category.name as cat','product.*')
			->where('product.Name', 'LIKE', $request->keyword.'%') 
			->orderby('product.Name')   	
			->get();
		}

		$data['cat'] = \DB::table('category')->get();

		return view('search', $data);
	}

	public function json_search(Request $request)
	{
		if(isset($_GET['cat'])){
			$sql='SELECT category.name AS cat, product.* '.
			'FROM product '.
			'JOIN category ON product.CatId = category.CatId '.
			"WHERE product.Name LIKE '".$request->keyword."%' ";
			
			foreach((array)$_GET['cat'] as $c){
				$sql .= 'AND product.CatId = '.$c;
			}
			$data['searchProduct']=\DB::select($sql);

		}else{
			$data['searchProduct'] =  \DB::table('product')
			->join('category','product.CatId', '=', 'category.CatId')
			->select('category.name as cat','product.*')
			->where('product.Name', 'LIKE', $request->keyword.'%') 
			->orderby('product.Name')   	
			->get();
		}

		$output = array(            
			"data" => $data
		);	
		echo json_encode($output);
	}
}
