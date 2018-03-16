@extends('common.layout')
@section('nav')
@include('common._nav',['nav'=>'order'])
@stop
@section('content')

@include('order._nav', ['nav'=>'add'])

<br>
<div class="panel panel-default">
	<div class="panel-body">
		<form class="form-horizontal" method="post" enctype="multipart/form-data" action="">
			{{ csrf_field() }}
			<div class="row">
				<div class=" col-sm-6 col-md-offset-2">
					<h4 class="text-center" ><em>基本信息</em></h4>
				</div>
			</div>
			<br>
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">订单编号</label>
				<div class="col-sm-6">
					<input type="text" name="Order[name]" class="form-control" id="name"  placeholder="订单编号"	>
				</div>
			</div>
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">客户</label>
				<div class="col-sm-6 ">
					<select name="Order[owner]" class="form-control">
						<option value="jn">广州嘉诺</option>
						<option value="dyl">达意隆</option>
						<option value="yx">阳鑫</option>
					</select>
				</div>
				<button type="button" class="btn btn-link">新增客户</button>

			</div>
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">接收日期</label>
				<div class="col-sm-6">
					<input type="date" name="Order[date]" class="form-control"  value="{{date('Y-m-d')}}">
					<span class="help-block">默认为今天({{date('m-d')}})</span>
				</div>

			</div>
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">交货日期</label>
				<div class="col-sm-6">
					<input type="date" name="Order[delivery_date]" class="form-control"   value="{{date('Y-m-d')}}">

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

			<br>
			<div class=" col-sm-6 col-md-offset-2">
				<h4 class="text-center" ><em>项目内容</em></h4>
			</div>

			<table class="table table-hover table-bordered table-condensed table-responsive">
				<caption>已添加项目</caption>
				<thead>
					<tr>
						<th>#</th>
						<th>型号</th>
						<th>品名</th>
						<th>产品图纸</th>
						<th>单价</th>
						<th>数量</th>
						<th>合计</th>
						<th>操作</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td style="width: 5%">1</td>
						<td  style="width: 20%">
							<input type="text" name="Products[0][name]" class="form-control input-sm"  >
						</td>
						<td style="width: 20%">
							<input type="text" name="Products[0][name]" class="form-control input-sm"   >
						</td>
						<td style="width: 20%">
						<input id="lefile" type="file" style="display:none" > 
							<div class="input-group" >
								<input type="text" class="form-control input-sm" id="fileCover" >
								<span class="input-group-btn">
									<button class="btn btn-default btn-sm" id='choosebtn'	 type="button" >选择文件</button>
								</span>
							</div>
							</td>
							<td style="width: 80px">
							<div class="input-group">

								<input type="text" id="price" name="Products[0][price]" class="form-control input-sm"   >
							</div></td>
							<td style="width: 80px"><input type="number" id="number" name="Products[0][number]" class="form-control input-sm"  value="1"  ></td>
							<td style="width: 80px">90</td>
							<td>
								<div class="btn-group btn-group-sm">
									<button type="button" class="btn btn-default">修改</button>
									<button type="button" class="btn btn-default">删除</button>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
				<button type="button" class="btn btn-primary pull-right">新增项目 </button>
				<br>
				<button type="submit" class="btn btn-success">提交</button>
			</form>
		</div>
	</div>

	@stop

	@section('js')
	<script src="{{ asset('js/order/order.js') }}"></script>
	@stop