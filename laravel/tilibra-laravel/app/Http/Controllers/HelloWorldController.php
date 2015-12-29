<?php

namespace App\Http\Controllers;

class HelloWorldController extends Controller
{

	public function getHello() {
		return [
			'msg' => 'Hello World',

			'url' => url('hello-world'),
		];
	}

	public function echoar($qualquercoisa = 'default') {
		return $qualquercoisa;
	}

}
