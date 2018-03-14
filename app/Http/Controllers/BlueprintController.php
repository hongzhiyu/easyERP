<?php

namespace App\Http\Controllers;

use App\Models\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
/**
* 
*/
class BlueprintController extends Controller
{
	
	public function index ( )
	{

		$bps = Blueprint::paginate(10);
		return view('blueprint.index',[
			'bps' => $bps
			]);
	}
	public function add (  Request $request )
	{
		if( $request->isMethod('GET') )
		{

			return view('blueprint.add');
		}
		if( $request->isMethod('POST') )
		{
			//验证
			$this->validate($request, [ 
				'Blueprint.name'=>'required',
				'Blueprint.type'=>'required',
				'Blueprint.date'=>'required'
				]);

			$Bp = new Blueprint( );

			$blueprint = $request->input('Blueprint');
			$bpfile = $request->file('bpfile');

			$blueprint['date'] = strtotime($blueprint['date']);

			if($bpfile->isValid())
			{
				//扩展名
				$ext = $bpfile->getClientOriginalExtension();
				//临时绝对路径
				$realPath = $bpfile->getRealPath();

				$bpfilename =  '图纸'.'_'.$blueprint['name'].'_'.$blueprint['type'].'.'.$ext;

				Storage::disk('bpfile')->put($bpfilename, file_get_contents($realPath));

				$blueprint['bpfile'] = $bpfilename;

			}
			else
			{
				return redirect()->back()->withInput();
			}

			//数据库创建行
			if($Bp::create($blueprint))
			{
				return redirect('blueprint/index')->with('success', '添加成功-'.$blueprint['type']);
			}else
			{
				return redirect()->back()->withInput();
			}
		}
	}
	public function update ( Request $request, $id)
	{
		return view( 'blueprint.update', [
			'id' =>$id
			] );
	}
	//删除图纸信息
	public function delete( $id )
	{
		$Bp = Blueprint::find($id);

		if( $Bp->delete() )
		{
			Storage::disk('bpfile')->delete($Bp->bpfile);
			return redirect('blueprint/index')->with('success', '删除'.$Bp->type.'成功啦！');
		}
	}
	public function search ( )
	{
		return view('blueprint.search');
	}
}