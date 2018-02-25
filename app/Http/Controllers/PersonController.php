<?php 

namespace App\Http\Controllers;

use App\Models\Sheet;
use Illuminate\Http\Request;

class PersonController extends Controller
{
	//展示
	public function index ( )
	{

		$names = ['洪志宇', '得到的', 'dsagkl'];

		return view('person.index',[
			'names'=>$names
		]);
	}

	public function salary ( )
	{
		$names = ['洪志宇', '得到的', 'dsagkl'];

		return view('person._salary',[
			'names'=>$names
		]);
	}
	public function day ( )
	{
		$names = ['洪志宇', '得到的', 'dsagkl'];

		return view('person._day')->with( [
			'names'=>$names
		]);
	}

	//处理考情表
	public function getsheet ( Request $request ) 
	{
		$personname = $request->personname;
		$sheetstr = $request->sheetstr;
		$month = $request->month;

		$days = date("t",strtotime($month));
		

		$sheet = new Sheet( );
		$sheetarr = $sheet->deal ( $sheetstr, $days );

				
		$a = view( 'person._sheet' )->with( [
			'personname' => $personname,
			'sheetarr' => $sheetarr,
			'days'=> $days
		])->render( );
		return $a;		

		// return $sheetarr;

		// dd($html);

		// dd($sheetarr[0][1][0]);
	}
}