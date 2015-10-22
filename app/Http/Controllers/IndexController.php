<?php namespace App\Http\Controllers;

class IndexController extends Controller {

//var_dump('sdad');

	public function getIndex()
	{
		return view('index');
	}
	public function postIndex()
	{
		var_dump('expression');
	}

}
