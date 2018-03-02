<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
/**
* 
*/
class BlueprintController extends Controller
{
	
	public function index ( )
	{
		return view('blueprint.index');
	}
	public function add ( )
	{
		return view('blueprint.add');
	}
	public function update ( Request $request, $id)
	{
		return view( 'blueprint.update', [
			'id' =>$id
			] );
	}
}