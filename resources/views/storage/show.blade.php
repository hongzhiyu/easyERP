@extends('common.layout')
@section('nav')
@include('common._nav',['nav'=>'storage'])
@stop
@section('content')
@include('storage._nav',['nav'=>'show'])

<br>

<div class ="panel panel-default">
	<div class ="panel-body">
		<form action="" role="form">
			{{ csrf_field() }}
			<div class="form-inline">
				<div class="form-group">
					<select class="form-control " name="_Date['type']">
						<option>全部类型</option>
						<option>过渡接头</option>
						<option>套筒</option>
					</select>
					
					<input type="text" class="form-control" placeholder="" >
				</div>
				<button type="submit" class="btn btn-default btn-sm" >查看</button>
			</div>
		</form>
		<br>
		<table class="table table-hover table-bordered table-condensed table-striped " align="center">
			<thead>
				<tr>
					<th >#</th>
					<th >型号</th>
					<th   >所属类型</th>
					<th>图纸</th>
					<th  colspan="3">库存位置</th>
					<th >数量</th>
					<th >单位</th>
					<th >操作</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td >1</td>
					<td >311-4555-899</td>
					<td >过渡接头</td>
					<td></td>
					<td >A架</td>
					<td >3-1层</td>
					<td >15</td>
					<td >20</td>
					<td >件</td>
					<td >
						<div class="btn-group btn-group-xs">
							<button type="button" class="btn btn-default">修改</button>
							<button type="button" class="btn btn-default">删除</button>
						</div>
					</td>

				</tr>
			</tbody>
		</table>
	</div>
</div>
@stop

@section('js')
<script src="{{ asset('js/storage/storage.js') }}"></script> 
@stop