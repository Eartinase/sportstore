<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
   public function index()
   {
   	$data['data'] = \DB::table('category')->get();
   	 return view('category', $data);
   }
}
