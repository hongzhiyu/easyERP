@extends('common.layout')

@section('content')

<div class="row">
	<div class="col-md-12">
		<ul class="nav nav-tabs ">
			<li  role="presentation" class="active"><a  href="{{ url('person/index') }}">假期管理</a></li>
			<li  role="presentation" class=""><a  href="{{ url('person/salary') }}">薪资计算</a></li>
		</ul>
	</div>
</div>

<br>

<div class="panel panel-default">
	<div class="panel-body">
		<form class=" " action="">
			{{ csrf_field() }}
			<div class="form-inline">
				<div class="form-group">
					<label for="_Date['type']">事务类型</label>
					<select class="form-control" name="_Date['type']">
						<option>员工请假</option>
						<option>企业假期</option>
					</select>
				</div>
				<div class="form-group">
					<select class="form-control" name="_Date['type']">
						<option>无薪</option>
						<option>带薪</option>
					</select>
				</div>
				<div class="form-group">
					<label for="_Date['type']">员工姓名</label>
					<select class="form-control" name="_Date['type']">
						<option>员工1</option>
						<option>员工2</option>
					</select>
				</div>
				<div class="form-group ">
					<label for="_Date['start']">开始日期</label>
					<input type="datetime-local" name="_Date['start']" class="form-control" value="{{date('Y-m-d').'T'.date('H:i')}}">
				</div>
				<div class="form-group ">
					<label for="_Date['end']">结束日期</label>
					<input type="datetime-local" name="_Date['end']" class="form-control">
				</div>
				
			</div>
			<br>
			<div class="form-group  ">
				<label for="_Date['remark']">备注</label>
				<textarea class="form-control" rows="3" cols="20" name="_Date['remark']"></textarea>
			</div>


			<div class="form-group">
				<button type="submit" class="btn btn-default">提交</button>
			</div>
		</form>

	</div>
</div>

@stop

@section( 'css' )
<link rel="stylesheet" type="text/css" href="{{ asset('css/person/person.css') }}">
@stop

