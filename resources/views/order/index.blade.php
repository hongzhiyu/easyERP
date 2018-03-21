@extends('common.layout')
@section('nav')
@include('common._nav',['nav'=>'order'])
@stop
@section('content')

@include('order._nav', ['nav'=>'index'])

<br>
<div class="panel panel-default">
	<div class="panel-body">
		<form action="" role="form">
			{{ csrf_field() }}
			<div class="form-inline">
				<div class="form-group">
					<select class="form-control " name="_Date['type']">
						<option>--全部客户--</option>
						<option>广州嘉诺工业技术有限公司</option>
						<option>达意隆</option>
						<option>惠州阳鑫</option>
					</select>
					<select class="form-control " name="_Date['type']">
						<option>状态</option>
						<option>确认回传</option>
						<option value="">已交货</option>
						<option value="">已付款</option>
					</select>
					<input type="text" class="form-control" placeholder="订单名称" >
				</div>
				<button type="submit" class="btn btn-default btn-sm" >查看</button>
			</div>
		</form>
		<br>
		<table  class="table table-hover ">
			<thead>
				<tr>
					<th>#</th>
					<th>所属客户</th>
					<th>订单编号</th>
					<th>文件</th>
					<th>接收日期</th>
					<th>交货日期</th>
					<th>状态</th>
					<th>操作</th>
				</tr>
			</thead>

			<tbody>
				@for($i = 0; $i < count( $orders ); $i ++ )
				<tr>
					<td>{{$i+1}}</td>
					<td>{{$orders[$i]->owner}}</td>
					<td>{{$orders[$i]->id}}</td>
					<td>
						<a href="{{ '../../storage/app/files/order/'.$orders[ $i ]->orderfile}}">{{$orders[ $i ]->orderfile}}</a>
					</td>
					<td>{{$orders[$i]->date}}</td>
					<td>{{$orders[$i]->delivery_date}}</td>
					<td>
						@switch($orders[$i]->state)
						@case( 0 )
						<span class="label label-danger">未确认</span>
						@break
						@case( 1 )
						<span class="label   label-info	">确认回传</span>
						@break
						@case( 2 )
						<span class="label   label-primary">已交货</span>
						
						@default
						@endswitch


					</td>
					<td>
						<div class="btn-group btn-group-xs">
							<button type="button" class="btn btn-default more" data-id="{{$orders[$i]->id}}">详情</button>
							<button type="button" class="btn btn-default delete" data-id="{{$orders[$i]->id}}">删除</button>
						</div>
					</td>
				</tr>
				@endfor
				
			</tbody>
		</table>
	</div>
</div>
@stop

@section('js')
<script src="{{ asset('js/order/order.js') }}"></script>
@stop