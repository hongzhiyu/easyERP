<?php

namespace App\Http\Controllers;

/**
* 
*/
class StorageController extends Controller
{
	
	public function index ( )
	{
		return view('storage.index');
	}
	public function type ( )
	{
		return view('storage.type');
	}
	public function change ( )
	{
		return view('storage.change');
	}
}