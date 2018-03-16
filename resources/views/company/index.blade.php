@extends('common.layout')
@section('nav')
@include('common._nav',['nav'=>'company'])
@stop
@section('content')

@include('company._nav', ['nav'=>'index'])

<br>
<div class="panel panel-default">
	<div class="panel-body">
		<form action="" role="form">
			{{ csrf_field() }}
			<div class="form-inline">
				<div class="form-group">
					<select class="form-control input-sm" name="_Date['type']">
						<option>--全部分类--</option>
						<option>客户</option>
						<option>供应商</option>
					</select>
					
				</div>
				<button type="submit" class="btn btn-default btn-sm" >查看</button>
			</div>
		</form>
		<br>
		<table  class="table table-hover table-bordered ">
			<thead>
				<tr>
					<th>#</th>
					<th>类别</th>
					<th>名称</th>
					<th>合作日期</th>
					<th>操作</th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td>1</td>
					<td>客户</td>
					<td>广州嘉诺工业技术有限公司</td>
					<td>2018/2/27</td>
					<td>
						<div class="btn-group btn-group-xs">
							<button type="button" class="btn btn-default more" data-id="20180226006">详情</button>
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
<script src="{{ asset('js/company/company.js') }}"></script>
@stop