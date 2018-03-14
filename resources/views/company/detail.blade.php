@extends('common.layout')
@section('nav')
@include('common._nav',['nav'=>'company'])
@stop
@section('content')

@include('company._nav', ['nav'=>'detail'])

<br>
<div class="panel panel-default">
	<div class="panel-body">
		
	</div>
</div>
@stop

@section('js')
<script src="{{ asset('js/company/company.js') }}"></script>
@stop