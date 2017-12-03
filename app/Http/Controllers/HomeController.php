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

				// attempt to do the login
		$data = \DB::table('user')
		->where('Username', '=', $request->usr)
		->get();
		foreach ($data as $d) {
			$password = $d->Password;
			$role = $d->Role;
		}
		if ($password == $request->psw){
/*
			$data = \DB::table('users')
			->where('Username', '=', $request->usr)
			->get();
*/
			\Session::put('Role', $role);
			return \Redirect::to('/');
		//	\Session::set('Role', $role);
		}
		else{
					// validation not successful, send back to form
			return \Redirect::to('/');
		}
	}

	function doLogout(){
		 \Session::forget('Role');
		 return \Redirect::to('/');
	}

}
