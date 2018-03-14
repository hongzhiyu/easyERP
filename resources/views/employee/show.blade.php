@extends('common.layout')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/employee/employee.css') }}">
@stop
@section('nav')
@include('common._nav',['nav'=>'employee'])
@stop
@section('content')
@include('employee._nav', ['nav'=>'show'])
<br>

<div class="row">
@include('common.message')
</div>

<table id="employee_info" class="table table-hover table-bordered  table-striped" >
	<thead>
		<tr>
			<th>#</th>
			<th>工号</th>
			<th>姓名</th>
			<th>性别</th>
			<th>出生日期</th>
			<th>年龄</th>	
			<th>头像</th>
			<th>职务</th>
			<th>入职时间</th>
			<th>工龄</th>
			<th>简历</th>
			<th>操作</th>
		</tr>
	</thead>
	<tbody>
		@for( $i = 0; $i < count( $employees ); $i ++)
		<tr>
			<td>{{ $i + 1 }}</td>
			<td>{{$employees[$i]->id}}</td>
			<td>{{$employees[ $i ]->name}}</td>
			@if( $employees[ $i ]->sex == 0)
				<td>男</td>
			@else
				<td>女</td>
			@endif
			<td>{{date('Y-m-d', $employees[$i]->birth_date)}}</td>
			<td>{{date('Y')-date('Y', $employees[$i]->birth_date) }}</td>
			<td><img src="{{ '../../storage/app/images/employee/'.$employees[ $i ]->avatar }}"></td>
			<td>{{$employees[ $i ]->work}}</td>
			<td>{{ date('Y-m-d', $employees[ $i ]->date)}}</td>
			<td>{{ date('Y')-date('Y', $employees[ $i ]->date)}}</td>
			<td><a href="{{ '../../storage/app/files/resume/'.$employees[ $i ]->resume}}">{{$employees[ $i ]->resume}}</a></td>
			<td>
				<div class="btn-group btn-group-xs">
				<button type="button" class="btn btn-default update" url="{{ url('employee/update') .'/' .$employees[ $i ]->id }}">编辑</button>
					<button type="button" class="btn btn-default delete" url="{{ url('employee/delete') .'/' .$employees[ $i ]->id}}" >删除</button>
				</div>
				
				</td>
			</tr>
			@endfor
		</tbody>

	</table>
	@stop

@section('js')
<script src="{{ asset('js/employee/employee.js') }}"></script>
@stop