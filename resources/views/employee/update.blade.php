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
		<form class="form-horizontal" method="post" enctype="multipart/form-data" action="">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="name" class="col-sm-3 control-label">员工姓名</label>
				<div class="col-sm-5">
					<input type="text" name="Employee[name]" class="form-control"   
					value="{{$employee->name}}"
					>
				</div>
				<span class="help-block " ><strong class=" text-danger">必填项目</strong></span>
			</div>

			<div class="form-group">
				<label for="sex" class="col-sm-3 control-label">性别</label>
				<div class="col-sm-5">
					<label class="radio-inline">
						<input type="radio"  name="Employee[sex]" value="male" @if ($employee->sex == 0)
							{{'checked'}}
						@endif> 男
					</label>
					<label class="radio-inline">
						<input type="radio"  name="Employee[sex]" value="female" @if ($employee->sex == 1)
							{{'checked'}}
						@endif> 女
					</label>
				</div>
			</div>
			<div class="form-group">
				<label for="birth_date" class="col-sm-3 control-label">出生日期</label>
				<div class="col-sm-5">
					<input type="date" name="Employee[birth_date]"  class="form-control" value="{{date('Y-m-d',$employee->birth_date)}}" />
				</div>
				<span class="help-block " ><strong class=" text-danger">必填项目</strong></span>
			</div>

			<div class="form-group">
				<label for="avatar" class="col-sm-3 control-label" >头像</label>
				<div class="col-sm-5">
					<input id="avatar" type="file" name="avatar" style="display:none"  > 
					<div class="input-group">
						<input type="text" class="form-control" id="avatarCover"  value="{{$employee->avatar}}">
						<span class="input-group-btn">
							<button class="btn btn-default" id='chooseavatarbtn' type="button" >选择文件</button>
						</span>
					</div>
					<span class="help-block">图片大小不得大于1M</span>
				</div>
				<span class="help-block " ><strong class=" text-danger">必填项目</strong></span>
			</div>

			<div class="form-group">
				<label for="resume" class="col-sm-3 control-label" >员工简历</label>
				<div class="col-sm-5">
					<input type="file" name="resume" id="resume" style="display:none">
					<div class="input-group">
						<input type="text" class="form-control" id="resumeCover" value="{{$employee->resume}}" >
						<span class="input-group-btn">
							<button class="btn btn-default" id='chooseresumebtn' type="button" >选择文件</button>
						</span>
					</div>
					<span class="help-block">文件大小不得大于1M</span>
				</div>
				<span class="help-block " ><strong class=" text-danger">必填项目</strong></span>
			</div>

			<div class="form-group">
				<label for="work" class="col-sm-3 control-label">职务描述</label>
				<div class="col-sm-5">
					<input type="text" name="Employee[work]" class="form-control" id="work" 
					value="{{$employee->work}}"
					>
				</div>
				<span class="help-block" id='len'></span>
			</div>

			<div class="form-group">
				<label for="date" class="col-sm-3 control-label">入职时间</label>
				<div class="col-sm-5">
					<input type="date" name="Employee[date]"  class="form-control" value="{{date('Y-m-d',$employee->date)}}"/>
				</div>
			</div>
			<br>
			<div class="form-group ">
				<div class="col-sm-offset-3 col-sm-5">
					<button type="submit" class="btn btn-primary btn-block "">提交</button>
				</div>
			</div>
		</form>
	</div>
</div>
@stop

@section('js')
<script src="{{ asset('js/employee/employee.js') }}"></script>
@stop