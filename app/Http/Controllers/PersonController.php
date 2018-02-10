<?php 

namespace App\Http\Controllers;

class PersonController extends Controller
{
	//展示
	public function index(){

		$names = ['洪志宇', '得到的', 'dsagkl'];

		return view('person/index',[
			'names'=>$names
		]);
	}

	//
}