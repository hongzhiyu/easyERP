@extends('common.layout')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<ul class="nav nav-tabs ">
				<li  role="presentation" class="active"><a id="salary" href="{{ url('storage/index') }}">仓库一览</a></li>
				<li  role="presentation" class=""><a id="day" href="{{ url('storage/type') }}">库存信息</a></li>
				<li  role="presentation" class=""><a id="salary" href="{{ url('storage/change') }}">调整库存</a></li>
			</ul>
		</div>
	</div>
	<div class="panel panel-default">
	<div class="panel-heading">仓库一览</div>
	<div class="panel-body">
	@include('storage._svg')
	</div>
	</div>
@stop

@section('js')
	<script src="{{ asset('js/storage/storage.js') }}"></script> 
@stop