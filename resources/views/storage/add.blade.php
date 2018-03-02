@extends('common.layout')

@section('content')
<div class="row">
	<div class="col-md-12">
		<ul class="nav nav-tabs ">
			<li  role="presentation" class=""><a  href="{{ url('storage/index') }}">仓库一览</a></li>
				<li  role="presentation" class=""><a  href="{{ url('storage/show') }}">库存列表</a></li>
				<li  role="presentation" class="active"><a  href="{{ url('storage/add') }}">新建物料</a></li>
				<li  role="presentation" class=""><a href="{{ url('storage/update') }}">更新库存</a></li>
		</ul>
	</div>
</div>
<br>
<div class="panel panel-default">
	<div class="panel-body">
		<form class="form-horizontal" method="post"  action="">
			{{ csrf_field() }}
			
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">型号：</label>
				<div class="col-sm-5">
					<input type="text" name="" class="form-control" id="name"  placeholder="如：311-400-752">
				</div>
			</div>
			<div class="form-group ">
				<label for="name" class="col-sm-2 control-label">类型：</label>
				<div class="col-sm-3">
					<select name="" class="form-control">
						<option value="all">过渡接头</option>
						<option value="am">螺母</option>
						<option value="pm">套筒</option>
					</select>
				</div>
				<button type="button" class="btn btn-link">新增类型</button>

			</div>
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">库存位置：</label>
				<div class="col-sm-5">
				<div class="row">
					<div class="col-sm-3">
					<select name="" class="form-control">
						<option value="all">A架</option>
						<option value="am">B架</option>
						<option value="pm">C架</option>
					</select>
					</div>
					<div class="col-sm-3">
					<select name="" class="form-control">
						<option value="all">1层</option>
						<option value="am">2层</option>
						<option value="pm">3层</option>
						<option value="pm">4层</option>
					</select>
					</div>
					<div class="col-sm-3">
					<select name="" class="form-control">
						<option value="all">1面</option>
						<option value="am">2面</option>
					</select>
					</div>
					<div class="col-sm-3">
					<input type="number" name="" class="form-control" id="name"  placeholder="位置">
					</div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">库存数量：</label>
				<div class="col-sm-2">
					<input type="number" name="" class="form-control" id="name"  placeholder="数量">
				</div>
			</div>
			<br>
			<button type="submit" class="btn btn-primary btn-sm col-sm-offset-2 col-sm-5" >提交</button>
		</form>
	</div>
</div>

@stop

@section('js')
<script src="{{ asset('js/storage/storage.js') }}"></script> 
@stop