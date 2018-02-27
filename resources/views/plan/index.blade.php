@extends('common.layout')

@section('content')
	
	<div class="row">
		<div class="col-md-2">
			<ul class="nav nav-tabs ">
				<li  role="presentation" class="active"><a id="day" href="{{ url('person/day') }}">假期管理</a></li>
				<li  role="presentation" class=""><a id="salary" href="{{ url('person/salary') }}">薪资计算</a></li>
			</ul>
		</div>
	</div>

	<div id="personcont">

	@include( 'person._day' )
		
	</div>
@stop

@section( 'css' )
	<link rel="stylesheet" type="text/css" href="{{ asset('css/person/person.css') }}">
@stop