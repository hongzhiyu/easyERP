@extends('common.layout')
@section('nav')
@include('common._nav',['nav'=>'employee'])
@stop
@section('content')
@include('employee._nav', ['nav'=>'add'])
<br>
<div class="panel panel-default">
	<div class="panel-body">
		<form class="form-horizontal" method="post" enctype="multipart/form-data" action="">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="name" class="col-sm-3 control-label">员工姓名</label>
				<div class="col-sm-5">
					<input type="text" name="Employee[name]" class="form-control"   
					value="{{old('Employee')['name'] ? old('Employee')['name']: ""}}"
					>
				</div>
				<span class="help-block " ><strong class=" text-danger">必填项目</strong></span>
			</div>
		
			<div class="form-group">
				<label for="sex" class="col-sm-3 control-label">性别</label>
				<div class="col-sm-5">
					<label class="radio-inline">
						<input type="radio"  name="Employee[sex]" value="male" {{old('Employee')['sex'] ? ((old('Employee')['sex']=='male')?'checked':""):"checked"}}> 男
					</label>
					<label class="radio-inline">
						<input type="radio"  name="Employee[sex]" value="female" {{old('Employee')['sex'] ? ((old('Employee')['sex']=='female')?'checked':""):""}}> 女
					</label>
				</div>
			</div>
			<div class="form-group">
				<label for="birth_date" class="col-sm-3 control-label">出生日期</label>
				<div class="col-sm-5">
					<input type="date" name="Employee[birth_date]"  class="form-control" value="{{old('Employee')['birth_date'] ?old('Employee')['birth_date']:""}}" />
				</div>
				<span class="help-block " ><strong class=" text-danger">必填项目</strong></span>
			</div>

			<div class="form-group">
				<label for="avatar" class="col-sm-3 control-label" >头像</label>
				<div class="col-sm-5">
					<input id="avatar" type="file" name="avatar" style="display:none"  > 
					<div class="input-group">
						<input type="text" class="form-control" id="avatarCover"  >
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
						<input type="text" class="form-control" id="resumeCover" >
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
					value="{{old('Employee')['work'] ? old('Employee')['work']:""}}"
					>
				</div>
				<span class="help-block" id='len'></span>
			</div>

			<div class="form-group">
				<label for="date" class="col-sm-3 control-label">入职时间</label>
				<div class="col-sm-5">
					<input type="date" name="Employee[date]"  class="form-control" value="{{old('Employee')['date'] ?old('Employee')['date']:date('Y-m-d')}}"/>
				</div>
				<span class="help-block">默认为今天({{date('Y-m-d')}})</span>
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