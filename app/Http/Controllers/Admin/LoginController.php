<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //

	use AuthenticatesUsers;

	protected $redirectTo = '/products';

	public function showLoginForm()
	{
		return view('auth.admin.login');
	}

	protected function guard()
	{
		return \Auth::guard('admin');
	}
}
