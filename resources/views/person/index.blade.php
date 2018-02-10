@extends('common.layout')

@section('content')
	<div class="panel panel-default">
        <div class="panel-heading">人事管理</div>
        <div class="panel-body">
            @include('person._form')
            @include('person._sheet')
        </div>
    </div>
@stop