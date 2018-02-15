<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
	//展示
	public function index ( )
	{

		$names = ['洪志宇', '得到的', 'dsagkl'];

		return view('person/index',[
			'names'=>$names
		]);
	}

	//处理考情表
	public function getsheet ( Request $request ) 
	{
		// $personname = $request->input( 'personname' );
		$sheetfile        = $request->sheetfile;
		$a = $sheetfile->getClientOriginalExtension();
		// $personname = ['洪志宇', '得到的', 'dsagkl'];
		// $personname = $_FILE['sheetfile'];
		// return $request->headers;
		// return view( 'person/_sheet' )->with( [
		// 	'arrays' => $personname
		// ] );
		
		return $a;
		// 
		 // if (Input::hasFile('sheetfile'))
		 //    {
		 //       return "file present";
		 //    }
		 //    else{
		 //        return "file not present";
		 //    }
	}
}