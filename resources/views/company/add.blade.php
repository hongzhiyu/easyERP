@extends('common.layout')
@section('nav')
@include('common._nav',['nav'=>'company'])
@stop
@section('content')

@include('company._nav', ['nav'=>'add'])

<br>
<div class="panel panel-default">
	<div class="panel-body">
		<form class="form-horizontal" method="post"  action="">
			{{ csrf_field() }}
			<div class="form-group">
			<label for="name" class="col-sm-3 control-label">企业全称</label>
				<div class="col-sm-5">
					<input type="text" name="Employee[name]" class="form-control"   
					value="{{old('Employee')['name'] ? old('Employee')['name']:$employee->name}}"
					>
				</div>
				<span class="help-block " ><strong class=" text-danger">必填项目</strong></span>
			</div>
			<div class="form-group">
				<label for="id" class="col-sm-3 control-label">简称</label>
				<div class="col-sm-5">
					<input type="text" name="Employee[id]" class="form-control"
					value="{{old('Employee')['id'] ? old('Employee')['id']:$employee->id}}"
					>
				</div>
			</div>
			<div class="form-group">
				<label for="sex" class="col-sm-3 control-label">公司类别</label>
				<div class="col-sm-5">
					<label class="radio-inline">
						<input type="radio"  name="Employee[sex]" value="male" checked> 客户
					</label>
					<label class="radio-inline">
						<input type="radio"  name="Employee[sex]" value="female"> 供应商
					</label>
				</div>
			</div>

			<div class="form-group">
				<label for="work" class="col-sm-3 control-label">公司地址</label>
				<div class="col-sm-5">
					<input type="text" name="Employee[work]" class="form-control" id="work" 
					value="{{old('Employee')['work'] ? old('Employee')['work']:$employee->work}}"
					>
				</div>
			</div>
			<div class="form-group">
				<label for="work" class="col-sm-3 control-label">收货地址</label>
				<div class="col-sm-5">
					<input type="text" name="Employee[work]" class="form-control" id="work" 
					value="{{old('Employee')['work'] ? old('Employee')['work']:$employee->work}}"
					>
				</div>
			</div>
			<div class="form-group">
				<label for="work" class="col-sm-3 control-label">收货联系人</label>
				<div class="col-sm-5">
					<input type="text" name="Employee[work]" class="form-control" id="work" 
					value="{{old('Employee')['work'] ? old('Employee')['work']:$employee->work}}"
					>
				</div>
			</div>
			<div class="form-group">
				<label for="work" class="col-sm-3 control-label">联系方式</label>
				<div class="col-sm-5">
					<input type="text" name="Employee[work]" class="form-control" id="work" 
					value="{{old('Employee')['work'] ? old('Employee')['work']:$employee->work}}"
					>
				</div>
			</div>
			<div class="form-group">
				<label for="date" class="col-sm-3 control-label">合作时间</label>
				<div class="col-sm-5">
					<input type="month" name="Employee[date]" value="{{date('Y-m')}}" class="form-control" value="{{old('Employee')['date'] ? old('Employee')['date']:$employee->date}}"/>
				</div>
				<span class="help-block">默认为本月({{date('Y-m')}})</span>
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
{{-- <script src="{{ asset('js/order/order.js') }}"></script> --}}
@stop