@extends('common.layout')

@section('content')
	<div class="panel panel-default">
        <div class="panel-heading">新增员工信息</div>
        <div class="panel-body">
            @include('employee._form')
        </div>
@stop