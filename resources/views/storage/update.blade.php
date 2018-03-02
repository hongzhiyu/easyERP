@extends('common.layout')

@section('content')
<div class="row">
	<div class="col-md-12">
		<ul class="nav nav-tabs ">
			<li  role="presentation" class=""><a  href="{{ url('storage/index') }}">仓库一览</a></li>
				<li  role="presentation" class=""><a  href="{{ url('storage/show') }}">库存列表</a></li>
				<li  role="presentation" class=""><a  href="{{ url('storage/add') }}">新建物料</a></li>
				<li  role="presentation" class="active"><a href="{{ url('storage/update') }}">更新库存</a></li>
		</ul>
	</div>
</div>
<br>
<div class="panel panel-default">
	<div class="panel-heading">修改库存</div>
	<div class="panel-body">
		<form class="form-horizontal" method="post" enctype="multipart/form-data" action="">
			{{ csrf_field() }}
			<div class="col-lg-6">
				<div class="input-group">
					<input type="text" class="form-control">
					<span class="input-group-btn">
						<button class="btn btn-default" type="button">
							搜索
						</button>
					</span>
				</div>
			</div>
		</form>
	</div>
</div>

@stop

@section('js')
<script src="{{ asset('js/storage/storage.js') }}"></script> 
@stop