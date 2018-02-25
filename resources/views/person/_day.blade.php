@extends('common.layout')

@section('content')
	
	<div class="row">
		<div class="col-md-4">
			<ul class="nav nav-tabs ">
				<li  role="presentation" class="active"><a  href="{{ url('person/day') }}">假期管理</a></li>
				<li  role="presentation" class=""><a  href="{{ url('person/salary') }}">薪资计算</a></li>
			</ul>
		</div>
	</div>

	<div id="personcont">

	<div class="panel panel-default">
	<div class="panel-heading">人事管理</div>
	<div class="panel-body">
		<form class=" " action="">
		{{ csrf_field() }}
		<div class="form-inline">
		        <div class="form-group  ">
		                <label for="_Date['type']">事务类型</label>
		                <select class="form-control" name="_Date['type']">
		                        <option>员工请假</option>
		                        <option>企业假期</option>
		                </select>
		        </div>
		        <div class="form-group ">
		                <label for="_Date['start']">开始日期</label>
		                <input type="date" name="_Date['start']" class="form-control">
		        </div>
		        <div class="form-group ">
		                <select name="_Date['start_noon']" class="form-control">
		                    <option value="all">全天</option>
		                    <option value="am">上午</option>
		                    <option value="pm">下午</option>
		                </select>
		        </div>
		         <div class="form-group ">
		                <label for="_Date['end']">结束日期</label>
		                <input type="date" name="_Date['end']" class="form-control">
		        </div>
		        <div class="form-group ">
		                <select name="_Date['end_noon']" class="form-control">
		                    <option value="all">全天</option>
		                    <option value="am">上午</option>
		                    <option value="pm">下午</option>
		                </select>
		        </div>
		</div>
		        <div class="form-group  ">
		                <label for="_Date['remark']">备注</label>
		                <textarea class="form-control" rows="3" cols="20" name="_Date['remark']"></textarea>
		        </div>


		         <div class="form-group">
		                <button type="submit" class="btn btn-default">提交</button>
		        </div>
		</form>

	</div>
</div>
		
	</div>
@stop

@section( 'css' )
	<link rel="stylesheet" type="text/css" href="{{ asset('css/person/person.css') }}">
@stop

