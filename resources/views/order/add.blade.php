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
				<label for="name" class="col-sm-2 control-label">状态</label>
				<div class="col-sm-2 ">
					<select name="Order[state]" class="form-control">
						<option value="0">-----</option>
						<option value="1">确认回传</option>
						<option value="2">交货完成</option>
						<option value="3">结款</option>
					</select>
				</div>

			</div>
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">订单编号</label>
				<div class="col-sm-6">
					<input type="text" name="Order[id]" class="form-control"   placeholder="订单编号"	>
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
					<input id="orderfile" name="orderfile" type="file" style="display:none" > 
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
						<th class="wid30">#</th>
						<th>型号</th>
						<th>品名</th>
						<th>产品图纸</th>
						<th class="wid80">单价</th>
						<th class="wid80">数量</th>
						<th class="wid80">合计</th>
						<th>操作</th>
					</tr>
				</thead>
				<tbody id="tb">
					<tr>
						<td >1</td>
						<td>
							<input type="text" name="Products[0][type]" class="form-control input-sm"  >
						</td>
						<td>
							<input type="text" name="Products[0][name]" class="form-control input-sm"   >
						</td>
						<td>
							<input class="lefile" type="file" style="display:none" name="product_file[0]"> 
							<div class="input-group" >
								<input type="text" class="form-control input-sm fileCover" >
								<span class="input-group-btn">
									<button class="btn btn-default btn-sm choosebtn" type="button" >选择文件</button>
								</span>
							</div>
						</td>
						<td>
							<input type="text"  name="Products[0][price]" class="form-control input-sm price"   >
						</td>
						<td>
							<input type="number"  name="Products[0][number]" class="form-control input-sm number"  value="1"  >
						</td>
						<td>
							
							<input type="text" name="Products[0][total]" class="form-control input-sm total"   >
						</td>
						<td>
								<button type="button" class="btn btn-default clean">清空</button>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
			<div class="btn-group">
				<button type="button" id="add_product" class="btn btn-primary">新增项目 </button>
				<button type="button" id="product_delete" class="btn btn-default product_delete">删行 </button>
			</div>
			<br>
			<br>
			<button type="submit" class="btn btn-success">提交</button>
		</form>
	</div>
</div>

@stop

@section('js')
<script src="{{ asset('js/order/order.js') }}"></script>
@stop
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/order/order.css') }}">
@stop