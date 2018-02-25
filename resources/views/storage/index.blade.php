@extends('common.layout')

@section('content')
	@include('storage._svg')
@stop

@section('js')
	<script src="{{ asset('js/storage/storage.js') }}"></script> 
@stop