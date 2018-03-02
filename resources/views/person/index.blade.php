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
	<div class="panel-heading">新增假期</div>
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

<div class="panel panel-default">
	<div class="panel-heading">
		假期列表
	</div>
	<div class="panel-body">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>#</th>
					<th>类型</th>
					<th>主体</th>
					<th>开始日期</th>
					<th>结束日期</th>
					<th>天数</th>
					<th>备注</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>员工(无薪)</td>
					<td>小洪</td>
					<td>{{date("Y-m-d")}}</td>
					<td>{{date("Y-m-d")}}</td>
					<td>2天</td>
					<td>没有备注</td>
					<td>
						<div class="btn-group btn-group-xs">
						<button type="button" class="btn btn-default">修改</button>
							<button type="button" class="btn btn-default">删除</button>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>


@stop

@section( 'css' )
<link rel="stylesheet" type="text/css" href="{{ asset('css/person/person.css') }}">
@stop

