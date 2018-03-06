<?php 

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

define( "MALE", 0);
define( "FEMALE", 1);
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
		$Em = new Employee();

		//提交表单
		if( $request->isMethod('POST') )
		{
			//验证

			$this->validate($request, [ 
				'Employee.name'=>'required',
				'Employee.work'=>'required',
				'Employee.date'=>'required'
			]);

			$employee = $request->input('Employee');
			$avatar = $request->file('avatar');
			$resume = $request->file('resume');
			//将日期转为时间戳
			$employee['birth_date'] = strtotime($employee['birth_date']);
			$employee['date'] = strtotime($employee['date']);
			//将性别转为数字
			if( $employee['sex'] == 'male')
			{

				$employee['sex'] = MALE;
			}else
			{
				$employee['sex'] = FEMALE;
			}


		
			if($avatar->isValid())
			{
				//扩展名
				$ext = $avatar->getClientOriginalExtension();
				//临时绝对路径
				$realPath = $avatar->getRealPath();

				$avatarname = '头像'.date('Y-m-d-H-i-s').'_'.uniqid().'.'.$ext;

				Storage::disk('advatar')->put($avatarname, file_get_contents($realPath));

				$employee['avatar'] = $avatarname;

			}
			else
			{
				return redirect()->back()->withInput();
			}

			//简历文件是否上传成功
			if($resume->isValid())
			{
				
				//扩展名
				$ext = $resume->getClientOriginalExtension();
				//临时绝对路径
				$realPath = $resume->getRealPath();

				$resumename = date('Y-m-d-H-i-s').'_'.uniqid().'.'.$ext;

				Storage::disk('resume')->put($resumename, file_get_contents($realPath));

				$employee['resume'] = $resumename;

			}else
			{
				return redirect()->back()->withInput();
			}

			//数据库创建行
			if($Em::create($employee))
			{
				return redirect('employee/show')->with('success', '添加成功啦！');;
			}else
			{
				return redirect()->back()->withInput();
			}

		}

		//get
		return view('employee/add', [
			'employee'=>$Em
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