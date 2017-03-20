<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
    	$users = [
			'0' => [
				'first' => 'andre',
				'last' => 'alfa',
				'location' => 'Indonesia'
			]
		];
	    return $users;
    }
}
