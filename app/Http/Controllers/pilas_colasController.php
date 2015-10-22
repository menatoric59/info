<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class pilas_colasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex(Request $request)
	{	
		$uri = $request->path();
		return view('layout/pilas_colas')->with('tipoObjeto',$uri);
	}


}
