<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
	function doLogin(Request $request){
		$userdata = array(
			'email' => $request->usr ,
			'password' => $request->psw
		);
				
		$data = \DB::table('user')
		->where('Username', '=', $request->usr)
		->get();
		foreach ($data as $d) {
			$password = $d->Password;
			$role = $d->Role;
		}
		if ($password == $request->psw){

			\Session::put('Role', $role);
			return \Redirect::to('/');
		
		}
		else{
			return \Redirect::to('/');
		}
	}

	function doLogout(){
		 \Session::forget('Role');
		 return \Redirect::to('/');
	}

}
