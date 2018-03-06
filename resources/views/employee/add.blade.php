@extends('common.layout')
@section('nav')
@include('common._nav',['nav'=>'employee'])
@stop
@section('content')
@include('employee._nav', ['nav'=>'add'])
<br>
<div class="panel panel-default">
	<div class="panel-body">
		@include('employee._form')
	</div>
</div>
@stop

@section('js')
<script src="{{ asset('js/employee/employee.js') }}"></script>
@stop