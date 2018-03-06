<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>easyERP</title>
	<script src="{{ asset('js/jquery/jquery.min.js') }}" ></script>
	<script src="{{ asset('js/bootstrap.min.js') }}" ></script>
	<script src="{{ asset('	js/index.js') }}"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/index/index.css') }}">
	@yield('css')
	@yield('js')

</head>
<body>
	@section('header')
	<a href="{{ url('') }}"><h1>ERP管理系统</h1></a>
	@show
	<div class="container-fluid">
		<div class="row">
			
			<!--导航 -->
			<div  class="col-md-2 col-sm-2" >
			@yield('nav')
				    {{-- <a href="{{url('') }}" class="list-group-item">
				        <p class="list-group-item-text">首页</p>
				    </a>
				    <a id="jjj"   class="list-group-item active">
				        <span class="list-group-item-text">信息管理</span>
				    </a>
				    <a href="{{url('employee/show') }}" class="list-group-item employee" >
				        <p class="list-group-item-text">员工管理</p>
				    </a>
				    <a href="{{url('person/index') }}" class="list-group-item employee">
				        <p class="list-group-item-text">人事管理</p>
				    </a>
				    <a href="{{url('storage/index') }}" class="list-group-item employee">
				        <p class="list-group-item-text">仓储管理</p>
				    </a>
				    <a href="{{url('blueprint/index') }}" class="list-group-item">
				        <p class="list-group-item-text">图纸管理</p>
				    </a>
				    <a href="{{url('order/index') }}" class="list-group-item">
				        <p class="list-group-item-text">订单管理</p>
				    </a>
				    <a href="{{url('plan/index') }}" class="list-group-item">
				        <p class="list-group-item-text">生产计划</p>
				    </a>
				    <ul class="nav  nav-stacked">
				    	<li class="active"><a href="#">首页</a></li>
				    	<li><a id="jjj" ><strong>信息管理<span class="caret"></span></strong></a></li>
				    	<li>
				    		<li><a href="	">nihao</a></li>
				    	</li>
				    	<li><a class="employee" href="#">仓储管理</a></li>
				    	<li><a data-toggle="pill" href="#menu1">图纸库</a></li>
				    	<li><a data-toggle="pill" href="#menu2">订单管理</a></li>
				    	<li><a data-toggle="pill" href="#menu3">生产计划</a></li>
				    </ul>
				 --}}
				</div>
				@show

				<!--展示-->
				<div class="col-md-10" style="padding-left:0">
					<div class="container-fluid">

						@yield('content')
					</div>
				</div>
				<!--展示-->
			</div>
		</div>

	</body>
	</html>