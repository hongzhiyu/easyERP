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

			//get
		if( $request->isMethod('GET') )
		{
			return view('employee/add');
			
		}

		//提交表单
		if( $request->isMethod('POST') )
		{
			//验证

			$this->validate($request, [ 
				'Employee.name'=>'required',
				'Employee.work'=>'required',
				'Employee.date'=>'required'
				]);

			$Em = new Employee( );

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

				$avatarname =  '头像'.'_'.$employee['name'].'_'.date('Y').uniqid().'.'.$ext;

				Storage::disk('avatar')->put($avatarname, file_get_contents($realPath));

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

				$resumename = '简历'.'_'.$employee['name'].'_'.date('Y').uniqid().'.'.$ext;

				Storage::disk('resume')->put($resumename, file_get_contents($realPath));

				$employee['resume'] = $resumename;

			}else
			{
				return redirect()->back()->withInput();
			}

			//数据库创建行
			if($Em::create($employee))
			{
				return redirect('employee/show')->with('success', '添加成功-'.$employee['name']);
			}else
			{
				return redirect()->back()->withInput();
			}

		}

		
	}

	

	//编辑更新员工信息
	public function update(Request $request, $id)
	{

		$Em = Employee::find($id);
		if($request->isMethod('GET'))
		{

			return view('employee/update', [
				'employee' => $Em
				]);
		}
		if($request->isMethod('POST'))
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

			if($employee['name'] != $Em->name)
			{
				$Em->name = $employee['name'];
			}
			if($employee['birth_date'] != $Em->birth_date)
			{
				$Em->birth_date = $employee['birth_date'];
			}
			if($employee['work'] != $Em->work)
			{
				$Em->work = $employee['work'];
			}
			if($employee['date'] != $Em->date)
			{
				$Em->date = $employee['date'];
			}
			if($employee['sex'] != $Em->sex)
			{
				$Em->sex = $employee['sex'];
			}
			

			if($avatar != null){
				if($avatar->isValid())
				{

					if(Storage::disk('avatar')->delete($Em->avatar))
					{
						//扩展名
						$ext = $avatar->getClientOriginalExtension();
						//临时绝对路径
						$realPath = $avatar->getRealPath();

						$avatarname =  '头像'.'_'.$employee['name'].'_'.date('Y').uniqid().'.'.$ext;

						Storage::disk('avatar')->put($avatarname, file_get_contents($realPath));

						$Em->avatar = $avatarname;

					}

				}
			}
			if($resume != null)
			{
				if($resume->isValid()){
					if(Storage::disk('resume')->delete($Em->resume))
					{
						//扩展名
						$ext = $resume->getClientOriginalExtension();
						//临时绝对路径
						$realPath = $resume->getRealPath();
						$resumename = '简历'.'_'.$employee['name'].'_'.date('Y').uniqid().'.'.$ext;

						Storage::disk('resume')->put($resumename, file_get_contents($realPath));
						$Em->resume = $resumename;

					}

				}
			}
			if ($Em->save()) 
			{
				return redirect('employee/show')->with('success', '修改成功-' . $employee['name']);
			} else 
			{
				return redirect()->back()->withInput();
			}
		}
		
		
		
	}
	//删除员工信息
	public function delete( $id )
	{
		$Em = Employee::find($id);

		if( $Em->delete() )
		{
			Storage::disk('resume')->delete($Em->resume);
			Storage::disk('avatar')->delete($Em->avatar);
			return redirect('employee/show')->with('success', '删除'.$Em->name.'成功啦！');
		}
	}
}