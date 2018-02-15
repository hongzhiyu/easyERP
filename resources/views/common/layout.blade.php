<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Document</title>
	<script src="{{ asset('js/jquery/jquery.min.js') }}" ></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/index/index.css') }}">
	@yield('css')
</head>
<body>
	@section('header')
	<h1>ERP管理系统</h1>
	@show
	<div class="container-fluid">
		<div class="row">
			@section('nav')
			<!--导航 -->
			<div class="col-md-2 col-sm-2" >
				{{--<ul class="list-group ">
					<li><a href="{{url('') }}">首页</a></li>
					<li ><a href="{{url('employee/show') }}">员工管理系统</a></li>
					<li ><a href="{{url('person/index') }}">人事管理</a></li>
				</ul>--}}
				
				    <a href="{{url('') }}" class="list-group-item">
				        <p class="list-group-item-text">首页</p>
				    </a>
				    <a href="{{url('employee/show') }}" class="list-group-item">
				        <p class="list-group-item-text">员工管理系统</p>
				    </a>
				    <a href="{{url('person/index') }}" class="list-group-item">
				        <p class="list-group-item-text">人事管理</p>
				    </a>
		
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
@yield('js')
</html>