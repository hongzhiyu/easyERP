@extends('common.layout')

@section('content')
<div class="row">
	<div class="col-md-12">
		<ul class="nav nav-tabs ">
			<li  role="presentation" class=""><a id="salary" href="{{ url('storage/index') }}">仓库一览</a></li>
			<li  role="presentation" class="active"><a id="day" href="{{ url('storage/type') }}">库存信息</a></li>
			<li  role="presentation" class=""><a id="salary" href="{{ url('storage/change') }}">调整库存</a></li>
		</ul>
	</div>
</div>
<div class="panel panel-default">
	<div class="panel-heading">建立物料</div>
	<div class="panel-body">
		<form class="form-horizontal" method="post" enctype="multipart/form-data" action="">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">编号：</label>
				<div class="col-sm-5">
					<input type="text" name="Employee[ename]" class="form-control" id="name"  placeholder="如：1、2、3">
				</div>
			</div>
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">型号：</label>
				<div class="col-sm-5">
					<input type="text" name="Employee[ename]" class="form-control" id="name"  placeholder="如：311-400-752">
				</div>
			</div>
			<div class="form-group ">
				<label for="name" class="col-sm-2 control-label">类型：</label>
				<div class="col-sm-5">
					<select name="_Date['start_noon']" class="form-control">
						<option value="all">过渡接头</option>
						<option value="am">螺母</option>
						<option value="pm">套筒</option>
					</select>
				</div>

			</div>
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">库存位置：</label>
				<div class="col-sm-5">
					<input type="text" name="Employee[ename]" class="form-control" id="name"  placeholder="库存位置">
				</div>
			</div>
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">库存数量：</label>
				<div class="col-sm-5">
					<input type="number" name="Employee[ename]" class="form-control" id="name"  placeholder="数量">
				</div>
			</div>
		</form>
	</div>
</div>
<div class ="panel panel-default">
	<div class ="panel-heading">删除物料</div>
	<div class ="panel-body">
		<table class="table table-hover table-condensed  table-bordered" align="center">
			<thead>
				<tr>
					<th class="text-center">编号</th>
					<th class="text-center">型号</th>
					<th  class="text-center" >所属类型</th>
					<th class="text-center" colspan="3">库存位置</th>
					<th class="text-center">数量</th>
					<th class="text-center">单位</th>
					<th class="text-center">操作</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td  class="text-center">001</td>
					<td class="text-center">311-4555-899</td>
					<td class="text-center">过渡接头</td>
					<td class="text-center">A架</td>
					<td class="text-center">3-1层</td>
					<td class="text-center">15</td>
					<td class="text-center">20</td>
					<td class="text-center">件</td>
					<td class="text-center"><a href="">修改</a><a href="">删除</a></td>
				</tr>
				<tr>
					<td  class="text-center">001</td>
					<td class="text-center">311-4555-899</td>
					<td class="text-center">过渡接头</td>
					<td class="text-center">A架</td>
					<td class="text-center">3-1层</td>
					<td class="text-center">15</td>
					<td class="text-center">20</td>
					<td class="text-center">件</td>
					<td class="text-center"><a href="">修改</a><a href="">删除</a></td>
				</tr>
				<tr>
					<td  class="text-center">001</td>
					<td class="text-center">311-4555-899</td>
					<td class="text-center">过渡接头</td>
					<td class="text-center">A架</td>
					<td class="text-center">3-1层</td>
					<td class="text-center">15</td>
					<td class="text-center">20</td>
					<td class="text-center">件</td>
					<td class="text-center"><a href="">修改</a><a href="">删除</a></td>
				</tr>
				
			</tbody>
		</table>
	</div>
</div>
@stop

@section('js')
<script src="{{ asset('js/storage/storage.js') }}"></script> 
@stop