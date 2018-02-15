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

		return view('person/index',[
			'names'=>$names
		]);
	}

	//处理考情表
	public function getsheet ( Request $request ) 
	{
		// $personname = $request->input( 'personname' );
		// $sheetfile        = $request->sheetfile;
		// $a = $sheetfile->getClientOriginalExtension();
		// $personname = ['洪志宇', '得到的', 'dsagkl'];
		// $personname = $_FILE['sheetfile'];
		// return $request->headers;
		$personname = $request->personname;
		$sheetstr = $request->sheetstr;
		
		// array_walk($sheetstr, 'urldecode');
		// $a = urldecode( $sheetstr[0] );

		$sheet = new Sheet( );
		$sheetarr = $sheet->deal ( $sheetstr );
		// 
		// 
		// $sheetstr         = explode("%09", urlencode( $sheetstr ));
		// foreach ( $sheetstr as $key => $value ) {
		// 	$value = urldecode( $value );

		// 	preg_match_all('/\d\d:\d\d/', $value, $matches);

		// 	$sheetstr[ $key ] = $matches[ 0 ];
		// }

		// return view( 'person/_sheet' )->with( [
		// 	'name' => $personname,
		// 	'sheetarr' => $sheetarr
		// ] );
		return $sheetarr;
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