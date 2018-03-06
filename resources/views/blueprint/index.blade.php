@extends('common.layout')
@section('nav')
@include('common._nav',['nav'=>'blueprint'])
@stop
@section('content')

<div class="row">
	<div class="col-md-12">
		<ul class="nav nav-tabs ">
			<li  role="presentation" class="active"><a  href="{{ url('blueprint/index') }}">图纸列表</a></li>
			<li  role="presentation" class=""><a  href="{{ url('blueprint/add') }}">添加图纸</a></li>
		</ul>
	</div>
</div>
<br>
<div class="panel panel-default">
	<div class="panel-body">
		<form action="" role="form">
			<div class="form-inline">
				<div class="form-group">
					<select class="form-control input-sm" name="_Date['type']">
						<option>全部客户</option>
						<option>嘉诺</option>
						<option>达意隆</option>
						<option>供应商</option>
					</select>
					
				</div>
				<div class="form-group">
					<input type="text" class="form-control input-sm">
				</div>
				<button type="submit" class="btn btn-default btn-sm" >查看</button>
			</div>
		</form>
		<br>
		<table  class="table table-hover ">
			<thead>
				<tr>
					<th>#</th>
					<th>图纸编号</th>
					<th>所属客户</th>
					<th>文件</th>
					<th>接收日期</th>
					<th>操作</th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td>1</td>
					<td>20180226006</td>
					<td>广州嘉诺</td>
					<td><a href="">20180226006.dwg</a></td>
					<td>2018/2/27</td>
					
					<td>
						<div class="btn-group btn-group-xs">
							<button type="button" class="btn btn-default update" data-id="1">修改</button>
							<button type="button" class="btn btn-default">删除</button>

						</div>
					</td>
				</tr>
				
			</tbody>
		</table>
	</div>
</div>

@stop

@section('js')
<script src="{{ asset('js/blueprint/blueprint.js') }}"></script>
@stop

