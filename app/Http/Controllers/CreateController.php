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
}
