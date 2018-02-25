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
}