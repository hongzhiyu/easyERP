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
	public function add ( )
	{
		return view('storage.add');
	}
	public function show ( )
	{
		return view('storage.show');
	}
	public function update ( )
	{
		return view('storage.update');
	}
	public function updatestorage ( )
	{
		return view('storage.updatestorage');
	}
	
}