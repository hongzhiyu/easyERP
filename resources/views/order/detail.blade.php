@extends('common.layout')

@section('content')

<div class="row">
	<div class="col-md-12">
		<ul class="nav nav-tabs ">
			<li  role="presentation" class="active"><a >订单详情</a></li>
			<li  role="presentation" class=""><a id="salary" href="{{ url('person/salary') }}">添加订单</a></li>
		</ul>
	</div>
</div>

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
			<h4 class="text-center">采购方</h4><br>
			<strong class="text-right col-md-4">客户名称:</strong><em><a href="" title="点击查看客户信息">广州嘉诺工业技术有限公司</a></em><br>
			<strong class="text-right col-md-4">收货人:</strong><em>念永春</em><br>
			<strong class="text-right col-md-4">收货人联系方式:</strong><em>13588845655</em><br>
			<strong class="text-right col-md-4">收货地址:</strong><em>广州嘉诺工业技术有限公司的地址我也不知道</em>
		</div>
		<div class="col-md-6">
			<h4 class="text-center">供应方</h4><br>
			<strong class="text-right col-md-4">客户名称:</strong><em><a href="" title="点击查看客户信息">广州嘉诺工业技术有限公司</a></em><br>
			<strong class="text-right col-md-4">收货人:</strong><em>念永春</em><br>
			<strong class="text-right col-md-4">收货人联系方式:</strong><em>13588845655</em><br>
			<strong class="text-right col-md-4">收货地址:</strong><em>广州嘉诺工业技术有限公司</em>
		</div>
	</div>
	</div>
</div>
@stop

@section('js')
<script src="{{ asset('js/order/order.js') }}"></script>
@stop