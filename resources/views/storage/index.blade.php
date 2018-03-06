@extends('common.layout')
@section('nav')
@include('common._nav',['nav'=>'storage'])
@stop
@section('content')
<div class="row">
	<div class="col-md-12">
		<ul class="nav nav-tabs ">
			<li  role="presentation" class="active"><a  href="{{ url('storage/index') }}">仓库一览</a></li>
			<li  role="presentation" class=""><a  href="{{ url('storage/show') }}">库存列表</a></li>
			<li  role="presentation" class=""><a  href="{{ url('storage/add') }}">新建物料</a></li>
			<li  role="presentation" class=""><a href="{{ url('storage/update') }}">更新库存</a></li>
		</ul>
	</div>
</div>
<br>
<div class="panel panel-default">
	<div class="panel-heading">仓库平面图
	<div class="btn-group btn-group-xs col-xs-offset-10">
			<button id="update" url="{{ url('storage/updatestorage') }}" type="button" class="btn btn btn-default btn-warning ">修改</button>

		</div></div>
	<div class="panel-body">
		@include('storage._plane')
	</div>
</div>
<div class="panel panel-default">
	<div class="panel-heading">货架情况</div>
	<div class="panel-body">
		@include('storage._svg')
	</div>
</div>
@stop

@section('js')
<script src="{{ asset('js/storage/storage.js') }}"></script> 
@stop