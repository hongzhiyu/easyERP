@extends('common.layout')

@section('content')

<div class="row">
	<div class="col-md-12">
		<ul class="nav nav-tabs ">
			<li  role="presentation" class="active"><a href="{{ url('order/index') }}">订单列表</a></li>
			<li  role="presentation" class=""><a  href="{{ url('order/add') }}">添加订单</a></li>
			<li  role="presentation" class=""><a  href="{{ url('order/delivery') }}">送货单</a></li>
		</ul>
	</div>
</div>
<br>
<div class="panel panel-default">
	<div class="panel-body">
		<form action="" role="form">
			{{ csrf_field() }}
			<div class="form-inline">
				<div class="form-group">
					<select class="form-control input-sm" name="_Date['type']">
						<option>全部客户</option>
						<option>嘉诺</option>
						<option>达意隆</option>
					</select>
					<select class="form-control input-sm" name="_Date['type']">
						<option>状态</option>
						<option>确认回传</option>
						<option value="">已交货</option>
						<option value="">已付款</option>
						<option>取消</option>
					</select>
				</div>
			<button type="submit" class="btn btn-default btn-sm" >查看</button>
			</div>
		</form>
		<br>
		<table  class="table table-hover ">
			<thead>
				<tr>
					<th>序号</th>
					<th>所属客户</th>
					<th>订单编号</th>
					<th>文件</th>
					<th>接受日期</th>
					<th>交货日期</th>
					<th>状态</th>
					<th>操作</th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td>1</td>
					<td>广州嘉诺</td>
					<td>20180226006</td>
					<td><a href="">20180226006.pdf</a></td>
					<td>2018/2/27</td>
					<td>2018/3/1</td>
					<td>
						<span class="label label-danger">取消</span>

					</td>
					<td>
						<div class="btn-group btn-group-xs">
							<button type="button" class="btn btn-default">详情</button>
							<button type="button" class="btn btn-default">删除</button>
						</div>
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td>广州嘉诺</td>
					<td>20180226006</td>
					<td><a href="">20180226006.pdf</a></td>
					<td>2018/2/27</td>
					<td>2018/3/1</td>
					<td>
						<span class="label label-info">确认回传</span>
						<span class="label label-primary">已交货</span>
						<span class="label label-warning">注意货期</span>

					</td>
					<td>
						<div class="btn-group btn-group-xs">
							<button type="button" class="btn btn-default" href="index">详情</button>
							<button type="button" class="btn btn-default">删除</button>
						</div>
					</td>
				</tr>

				<tr>
					<td>3</td>
					<td>广州嘉诺</td>
					<td>20180226006</td>
					<td><a href="">20180226006.pdf</a></td>
					<td>2018/2/27</td>
					<td>2018/3/1</td>
					<td>
						<span class="label label-success">已付款</span>

					</td>
					<td>
						<div class="btn-group btn-group-xs">
							<button type="button" class="btn btn-default">详情</button>
							<button type="button" class="btn btn-default">删除</button>
						</div>
					</td>
				</tr>
				<tr>
					<td>4</td>
					<td>广州嘉诺</td>
					<td>20180226006</td>
					<td><a href="">20180226006.pdf</a></td>
					<td>2018/2/27</td>
					<td>2018/3/1</td>
					<td>
						<span class="label label-warning">注意货期</span>
					</td>
					<td>
						<div class="btn-group btn-group-xs">
							
							<button type="button" class="btn btn-default more" data-id="20180226006">详情</button>
							<button type="button" class="btn btn-default delete">删除</button>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
@stop

@section('js')
<script src="{{ asset('js/order/order.js') }}"></script>
@stop