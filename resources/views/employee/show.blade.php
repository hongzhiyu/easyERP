@extends('common.layout')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/employee/employee.css') }}">
@stop
@section('content')
<div class="row">
	<div class="col-md-12">
		<ul class="nav nav-tabs ">
			<li  role="presentation" class="active"><a  href="{{ url('employee/show') }}">员工列表</a></li>
			<li  role="presentation" class=""><a  href="{{ url('employee/add') }}">新增员工</a></li>
		</ul>
	</div>
</div>
<br>
<table id="employee_info" class="table table-hover table-bordered table-condensed table-striped" >
	<thead>
		<tr>
			<th>#</th>
			<th>工号</th>
			<th>头像</th>
			<th>姓名</th>
			<th>职务</th>
			<th>入职时间</th>
			<th>简历</th>
			<th>操作</th>
		</tr>
	</thead>
	<tbody>
		@for( $i = 0; $i < count( $employees ); $i ++)
		<tr>
		<td>{{ $i + 1 }}</td>
			<td>{{$employees[$i]->id}}</td>
			<td><img src="{{ '../../storage/app/images/employee/'.$employees[ $i ]->eadvatar }}"></td>
			<td>{{$employees[ $i ]->ename}}</td>
			<td>{{$employees[ $i ]->ework}}</td>
			<td>{{ date('Y-m-d', $employees[ $i ]->edate)}}</td>
			<td><a href="{{ '../../storage/app/files/resume/'.$employees[ $i ]->eresume}}">{{$employees[ $i ]->eresume}}</a></td>
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