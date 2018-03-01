@extends('common.layout')

@section('content')

<div class="row">
	<div class="col-md-12">
		<ul class="nav nav-tabs ">
			<li  role="presentation" class=""><a href="{{ url('order/index') }}">订单列表</a></li>
			<li  role="presentation" class="active"><a  href="{{ url('order/add') }}">添加订单</a></li>
			<li  role="presentation" class=""><a  href="{{ url('order/delivery') }}">送货单</a></li>
		</ul>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-heading">添加订单</div>
	<div class="panel-body">
		<form class="form-horizontal" method="post" enctype="multipart/form-data" action="">
			{{ csrf_field() }}
			<div class="row">
				<div class="col-md-6">
					<h4 class="text-center"><em>基本信息</em></h4>
					<br>
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">订单编号</label>
						<div class="col-sm-6">
							<input type="text" name="Employee[ename]" class="form-control" id="name"  placeholder="订单编号"	>
						</div>
					</div>
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">客户</label>

						<div class="col-sm-6 ">
							<select name="" id="" class="form-control">
								<option value="">广州嘉诺</option>
								<option value="">达意隆</option>
								<option value="">阳鑫</option>
							</select>
						</div>
						<button type="button" class="btn btn-link">新增客户</button>

					</div>
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">接收日期</label>
						<div class="col-sm-6">
							<input type="date" name="Employee[ename]" class="form-control"   placeholder="订单编号"	value="{{date('Y-m-d')}}">
							<span class="help-block">默认为今天({{date('Y-m-d')}})</span>
						</div>

					</div>
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">交货日期</label>
						<div class="col-sm-6">
							<input type="date" name="Employee[ename]" class="form-control"   value="{{date('Y-m-d')}}">

						</div>

					</div>
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label ">订单文件</label>
						<div class="col-sm-6">
							<input id="orderfile" type="file" style="display:none" > 
							<div class="input-group">
								<input type="text" class="form-control" id="orderfileCover" >
								<span class="input-group-btn">
						                        <button class="btn btn-default" id='orderchoosebtn'	 type="button" >选择文件</button>
						                    </span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<h4 class="text-center"><em>项目内容</em></h4><br>
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">序号</label>
						<div class="col-sm-6 ">
							<p class="form-control-static">1</p>
						</div>

					</div>
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">产品型号</label>
						<div class="col-sm-6">
							<input type="text" name="Employee[ename]" class="form-control"  >
						</div>
					</div>
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label ">产品图纸</label>
						<div class="col-sm-6">
							<input id="lefile" type="file" style="display:none" > 
							<div class="input-group">
								<input type="text" class="form-control" id="fileCover" >
								<span class="input-group-btn">
						                        <button class="btn btn-default" id='choosebtn'	 type="button" >选择文件</button>
						                    </span>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">单价</label>
						<div class="col-sm-6 ">
							<div class="input-group">

								<span class="input-group-addon">￥</span>
								<input type="text" id="price" name="Products[0][price]" class="form-control"  >
							</div>
						</div>

					</div>
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">数量</label>
						<div class="col-sm-6 ">
							<input type="number" id="number" name="Products[0][number]" class="form-control"  value="1">
						</div>

					</div>
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">合计</label>
						<div class="col-sm-6 ">
							<p id="total" class="form-control-static"></p>
						</div>

					</div>
					<div class="form-group">
						<div class="col-md-offset-2 col-md-6">

							<button type="button" class="btn btn-primary pull-right">新增项目 </button>
						</div>
					</div>
				</div>
			</div>
			<table class="table table-hover table-bordered table-condensed table-responsive">
				<caption>已添加项目</caption>
				<thead>
				<tr>
					<th>#</th>
					<th>产品名</th>
					<th>单价</th>
					<th>数量</th>
					<th>合计</th>
					<th>交货期</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>
						<strong>M221X1G12D204TZG</strong>
						<span>螺母</span>
					</td>
					<td>30</td>
					<td>3</td>
					<td>90</td>
					<td>2018-3-1</td>
					<td>
						<div class="btn-group btn-group-xs">
							<button type="button" class="btn btn-default">修改</button>
							<button type="button" class="btn btn-default">删除</button>
						</div>
					</td>
				</tr>
			</tbody>
			</table>
			<br>
			<button type="submit" class="btn btn-success">提交</button>
		</form>
	</div>
</div>

@stop

@section('js')
<script src="{{ asset('js/order/order.js') }}"></script>
@stop