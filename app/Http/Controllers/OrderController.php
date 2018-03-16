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

	public function search ( )
	{
		return view( 'order.search');
	}
	public function add (Request $request)
	{
		return view('order.add');
	}

	public function delivery( )
	{
		return view('order.delivery');
	}
	
}