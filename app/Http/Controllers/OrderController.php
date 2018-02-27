<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/**
* 
*/
class OrderController extends Controller
{
	
	public function index ( )
	{
		return view('order.index');
	}

	public function detail ( Request $request, $id)
	{
		return view( 'order.detail', [
			'id' =>$id
		] );
	}
	
}