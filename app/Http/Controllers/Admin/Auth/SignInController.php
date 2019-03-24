<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Requests\Admin\SingInFormRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SignInController extends Controller
{
	/**
	 * [singIn ]
	 * @param  SingInFormRequest $request []
	 * @return [type]  auth signIn
	 */
    public function singIn(SingInFormRequest $request)
    {
    	// check whether pass validate
    	$input = $request->all();
    	// handle sign in
    	if (Auth::attempt([
    		'email' => $input['email'],
    		'password' => $input['password']
    	],
    	$input['remember'])
    	) {
    		// return next request
    	}
    	else 
    	{
    		// return error fail and redirect	
    	}
    }
}
