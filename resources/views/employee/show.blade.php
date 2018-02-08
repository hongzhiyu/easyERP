@extends('common.layout')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/employee/employee.css') }}">
@stop
@section('content')
	<button type="button" class="btn btn-default"><a href="{{ url('employee/add') }}">新增</a></button>
	<table id="employee_info" class="table table-hover table-condensed table-striped" >
		<thead>
			<tr>
				<th>编号</th>
				<th>头像</th>
				<th>姓名</th>
				<th>职务</th>
				<th>入职时间</th>
				<th>简历</th>
				<th>操作</th>
			</tr>
		</thead>
		<tbody>
			@foreach($employees as $employee)
				<tr>
					<th>{{$employee->id}}</th>
					<td><img src="{{ '../../storage/app/images/employee/'.$employee->eadvatar }}"></td>
					<td>{{$employee->ename}}</td>
					<td>{{$employee->ework}}</td>
					<td>{{ date('Y-m-d', $employee->edate)}}</td>
					<td><a href="{{ '../../storage/app/files/resume/'.$employee->eresume}}">{{$employee->eresume}}</a></td>
					<td>
						<a href=" {{url('employee/update', ['id' => $employee->id ]) }}" >编辑</a>
						<a href=" {{url('employee/delete', ['id' => $employee->id ]) }}" 
							onclick="if (confirm('确定要删除吗？') == false) return false; ">删除</a>
					</td>
				</tr>
			@endforeach
		</tbody>

	</table>
@stop