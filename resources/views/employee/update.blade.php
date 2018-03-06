@extends('common.layout')
@section('nav')
@include('common._nav',['nav'=>'employee'])
@stop
@section('content')
<div class="row">
	<div class="col-md-12">
		<ul class="nav nav-tabs ">
			<li  role="presentation" class=""><a  href="{{ url('employee/show') }}">员工列表</a></li>
			<li  role="presentation" class=""><a  href="{{ url('employee/add') }}">新增员工</a></li>
			<li  role="presentation" class="active"><a  >编辑员工信息</a></li>
		</ul>
	</div>
</div>
<br>
	<div class="panel panel-default">
        <div class="panel-body">
            @include('employee._form')
        </div>
    </div>
@stop