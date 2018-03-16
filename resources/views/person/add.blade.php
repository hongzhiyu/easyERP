@extends('common.layout')
@section('nav')
@include('common._nav',['nav'=>'person'])
@stop
@section('content')

@include('person._nav',['nav'=>'add'])

<br>

<div class="panel panel-default">
	<div class="panel-heading">新增假期</div>
	<div class="panel-body">
		<form class=" " action="">
			{{ csrf_field() }}
			<div class="form-inline">
				<div class="form-group">
					<label for="_Date['type']">事务类型</label>
					<select class="form-control" name="_Date['type']">
						<option>员工请假</option>
						<option>企业假期</option>
					</select>
				</div>
				<div class="form-group">
					<select class="form-control" name="_Date['type']">
						<option>无薪</option>
						<option>部分带薪</option>
						<option>带薪</option>
					</select>
				</div>
				<div class="form-group">
					<label for="_Date['type']">员工姓名</label>
					<select multiple class="form-control" name="_Date['type']">
						<option>全部员工</option>
						<option>员工1</option>
						<option>员工2</option>
					</select>
				</div>
			</div>
			<br>
			<div class="form-inline">
				<div class="form-group ">
					<label for="_Date['start']">假期开始日期</label>
					<input type="date" name="_Date['start']" class="form-control" id="start" value="{{date('Y-m-d')}}">
				</div>
				<div class="form-group ">
					<label for="_Date['end']" >假期结束日期</label>
					<input type="date" name="_Date['end']"  id="end" class="form-control" value="{{date('Y-m-d')}}">
				</div>
				<div class="form-group ">
					<label >天数:</label>
					<span id="day">1</span>天
				</div>
				</div>
			<br>
			<div class="form-inline">
				<div class="form-group ">
					<label for="_Date['start']">带薪开始日期</label>
					<input type="date" name="_Date['start']" class="form-control" id="start" value="{{date('Y-m-d')}}">
				</div>
				<div class="form-group ">
					<label for="_Date['end']" >带薪结束日期</label>
					<input type="date" name="_Date['end']"  id="end" class="form-control" value="{{date('Y-m-d')}}">
				</div>
				
				</div>
				<br>
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




@stop

@section('js')
<script src="{{ asset('js/person/person.js') }}"></script>
@stop

