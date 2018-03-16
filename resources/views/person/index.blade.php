@extends('common.layout')
@section('nav')
@include('common._nav',['nav'=>'person'])
@stop
@section('content')

@include('person._nav',['nav'=>'index'])

<br>



<div class="panel panel-default">
	<div class="panel-heading">
		假期列表
	</div>
	<div class="panel-body">
		<form method ="post" role="form" class="form-inline">
			{{ csrf_field() }}
				<div class="form-group ">
						
					<input class="form-control " name="_Date['type']" type="month" value="{{date('Y-m')}}">
				</div>
				<button type="submit" class="btn btn-default " >查看</button>
		</form>
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>#</th>
					<th>类型</th>
					<th>主体</th>
					<th>开始日期</th>
					<th>结束日期</th>
					<th>天数</th>
					<th>备注</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>员工/无薪</td>
					<td>小洪</td>
					<td>{{date("Y-m-d")}}</td>
					<td>{{date("Y-m-d")}}</td>
					<td>2天</td>
					<td>没有备注</td>
					<td>
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
<script src="{{ asset('js/person/person.js') }}"></script>
@stop

