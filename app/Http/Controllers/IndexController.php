<?php 

namespace App\Http\Controllers;


class IndexController extends Controller
{

	public function index()
	{
		date_default_timezone_set('PRC'); 
		
		return view('index/index');		
	}

}