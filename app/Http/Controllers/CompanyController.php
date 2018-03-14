<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;


class CompanyController extends Controller
{

	
	public function index ( )
	{
		return view('company.index');
	}
	public function add ( )
	{
		$Em = new Employee( );
		
		return view('company.add',['employee'=>$Em]);
	}
	public function detail ( Request $request, $id)
	{
		return view( 'company.detail', [
			'id' =>$id
		] );
	}
	
}