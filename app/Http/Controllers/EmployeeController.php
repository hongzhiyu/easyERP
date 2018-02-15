<?php 

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
	//展示
	public function show()
	{
		$employees = Employee::paginate(10);
		return view('employee/show',[
			'employees' => $employees
		]);		
	}
	// 新增员工页面
	public function add(Request $request)
	{
		$employee = new Employee();

		if( $request->isMethod('POST') ){
			//验证
			// $this->validate($request, [
			// 	'Employee.ename'=>'required',
			// 	'Employee.ework'=>'required',
			// 	'Employee.year'=>'required|integer',
			// 	'Employee.month'=>'required|integer',
			// 	'Employee.day'=>'required|integer',
			// ]);
			$this->validate($request, [ 
				'Employee.ename'=>'required',
				'Employee.ework'=>'required',
				'Employee.edate'=>'required'
			]);

			$data = $request->input('Employee');
			$eadvatar = $request->file('eadvatar');
			$eresume = $request->file('eresume');
			/*$newdata = [
				'ename'=>$data['ename'],
				'ework'=>$data['ework'],
			];
			$newdata['edate'] = mktime(0,0,0,$data['month'],$data['day'],$data['year']);
			*/
		
			$data['edate'] = strtotime($data['edate']);
			echo $data['edate'];
			//头像文件是否上传成功
			if($eadvatar == null || $eresume == null){
				return redirect()->back()->withInput();
			}
			if($eadvatar->isValid()){
				//扩展名
				$ext = $eadvatar->getClientOriginalExtension();
				//临时绝对路径
				$realPath = $eadvatar->getRealPath();

				$eadvatarname = date('Y-m-d-H-i-s').'_'.uniqid().'.'.$ext;

				Storage::disk('advatar')->put($eadvatarname, file_get_contents($realPath));

				//$employee->eadvatar = $eadvatarname;
				// $newdata['eadvatar'] = $eadvatarname;
				$data['eadvatar'] = $eadvatarname;

			}
			else{
				return redirect()->back()->withInput();
			}
			//简历文件是否上传成功
			if($eresume->isValid()){
				
				//扩展名
				$ext = $eresume->getClientOriginalExtension();
				//临时绝对路径
				$realPath = $eresume->getRealPath();

				$eresumename = date('Y-m-d-H-i-s').'_'.uniqid().'.'.$ext;

				Storage::disk('resume')->put($eresumename, file_get_contents($realPath));

				////////////////////////////////////////
				// $employee->eresume = $eresumename; //
				////////////////////////////////////////

				// $newdata['eresume'] = $eresumename;
				$data['eresume'] = $eresumename;

			}else{
				return redirect()->back()->withInput();
			}

			if($employee::create($data)){
				return redirect('employee/show')->with('success', '添加成功啦！');;
			}else{
				return redirect()->back()->withInput();
			}

		}
		return view('employee/add', [
			'employee'=>$employee
		]);
	}

	

	//编辑更新员工信息
	public function update(Request $request, $id)
	{
		$employee = Employee::find($id);

		if($request->isMethod('POST')){
			//验证
			$this->validate($request, [
				'Employee.ename'=>'required',
				'Employee.ework'=>'required',
				'Employee.year'=>'required|integer',
				'Employee.month'=>'required|integer',
				'Employee.day'=>'required|integer',
			]);

			$data = $request->input('Employee');
			$eadvatar = $request->file('eadvatar');
			$eresume = $request->file('eresume');

			$employee->ename = $data['ename'];
			$employee->ework = $data['ework'];
			$employee->edate = mktime(0,0,0,$data['month'],$data['day'],$data['year']);

			if($eadvatar != null){
				if($eadvatar->isValid()){
					//扩展名
					$ext = $eadvatar->getClientOriginalExtension();
					//临时绝对路径
					$realPath = $eadvatar->getRealPath();

					$eadvatarname = date('Y-m-d-H-i-s').'_'.uniqid().'.'.$ext;

					Storage::disk('advatar')->put($eadvatarname, file_get_contents($realPath));

					if(Storage::disk('advatar')->delete($employee->eadvatar)){
						$employee->eadvatar = $eadvatarname;

					}

				}
			}
			if($eresume != null){
				if($eresume->isValid()){
					//扩展名
					$ext = $eresume->getClientOriginalExtension();
					//临时绝对路径
					$realPath = $eresume->getRealPath();

					$eresumename = date('Y-m-d-H-i-s').'_'.uniqid().'.'.$ext;

					Storage::disk('advatar')->put($eresumename, file_get_contents($realPath));

					if(Storage::disk('advatar')->delete($employee->eresume)){
						$employee->eresume = $eresumename;

					}

				}
			}
			if ($employee->save()) {
                return redirect('employee/show')->with('success', '修改成功-' . $id);
            } else {
                return redirect()->back()->withInput();
            }
		}
		
		
		return view('employee/update', [
			'employee' => $employee
		]);
	}
	//删除员工信息
	public function delete($id){
		$employee = Employee::find($id);

		if($employee->delete()){
			return redirect('employee/show');
		}
	}
}