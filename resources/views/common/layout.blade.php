<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="{{ asset('js/jquery/jquery.min.js') }}" ></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">
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
			<div class="col-md-2 col-sm-2" style="background-color: #f5f5f5">
				<ul class="nav ">
					<li><a href="{{url('') }}">首页</a></li>
					<li ><a href="{{url('employee/show') }} ">员工管理系统</a></li>
					<li ><a href="#">公司信息管理</a></li>
				</ul>
			</div>
			@show

			<!--展示-->
			<div class="col-md-10">
				<div class="container-fluid">
					@yield('content')
				</div>
			</div>
			<!--展示-->
		</div>
	</div>

</body>
</html>