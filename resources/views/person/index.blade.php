@extends('common.layout')

@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">人事管理</div>
		<div class="panel-body">

			@include('person._form')

		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">考情情况</div>
		<div class="panel-body">

			@include('person._sheetform')
		
		</div>
	</div>
	
	<div id="sheet">
		
	</div>
	
@stop

@section('js')
	<script src="{{ asset('js/person/person.js') }}" ></script>
@stop
@section( 'css' )
	<link rel="stylesheet" type="text/css" href="{{ asset('css/person/person.css') }}">
@stop