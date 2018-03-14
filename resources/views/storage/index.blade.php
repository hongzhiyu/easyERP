@extends('common.layout')
@section('nav')
@include('common._nav',['nav'=>'storage'])
@stop
@section('content')
@include('storage._nav',['nav'=>'index'])

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