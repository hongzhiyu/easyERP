@extends('common.layout')

@section('content')

<div class="row">
	<div class="col-md-12">
		<ul class="nav nav-tabs ">
			<li  role="presentation" class="active"><a href="{{ url('order/index') }}">订单详情</a></li>
			<li  role="presentation" class=""><a  href="{{ url('order/add') }}">添加订单</a></li>
			<li  role="presentation" class=""><a  href="{{ url('order/delivery') }}">送货单</a></li>
		</ul>
	</div>
</div>
<br>
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>订单{{ $id }}</strong>
		<div class="btn-group btn-group-sm col-md-offset-9">
			<button type="button" class="btn btn btn-default btn-warning ">修改</button>

		</div>
		<a href="{{ url('order/index') }}" class="btn btn btn-link  ">返回</a>



	</div>
	<div class="panel-body">
			<div class="row">
			<div class="col-md-6">
				<ol class="breadcrumb">
				订单状态：
					<li><button  type="button" class="btn btn-xs btn-default" >确认回传</button></li>
					
					<li class="active"><button  type="button" class="btn btn-xs btn-success">交货完成</button></li>
					
					<li><button  type="button" class="btn btn-xs btn-default">结款</button></li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<h4 class="text-center">采购方</h4><br>
				<strong class="text-right col-md-4">客户名称:</strong><em><a href="" title="点击查看客户信息">广州嘉诺工业技术有限公司</a></em><br>
				<strong class="text-right col-md-4">收货人:</strong><em>念永春</em><br>
				<strong class="text-right col-md-4">收货人联系方式:</strong><em>13588845655</em><br>
				<strong class="text-right col-md-4">收货地址:</strong><em>广州嘉诺工业技术有限公司的地址我也不知道</em>
			</div>
			<div class="col-md-6">
				<h4 class="text-center">供应方</h4><br>
				<strong class="text-right col-md-4">客户名称:</strong><em><a href="" title="点击查看客户信息">广州永峰机械制造有限公司</a></em><br>
				<strong class="text-right col-md-4">联系人:</strong><em>洪永祥</em><br>
				<strong class="text-right col-md-4">联系方式:</strong><em>13588845655</em><br>
				<strong class="text-right col-md-4">地址:</strong><em>广州永峰机械制造有限公司的dz</em>
			</div>
		</div>
		<br>

		<br>
		<table class="table table-hover table-bordered table-condensed table-responsive">
			<caption>订单内容</caption>
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
							<button type="button" class="btn btn-default">安排生产</button>
							<button type="button" class="btn btn-default">删除</button>
						</div>
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td>
						<a href="" title="点击查看图纸"><strong>T221X112G1825H24G</strong></a>
						<span>焊接头部</span>
					</td>
					<td><a href="" title="查看报价">23.51</a></td>
					<td>3</td>
					<td>70.53</td>
					<td>2018-3-1</td>
					<td>
						<div class="btn-group btn-group-xs">
							<button type="button" class="btn btn-default">安排生产</button>
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
<script src="{{ asset('js/order/order.js') }}"></script>
@stop