@extends('common.layout')
@section('nav')
	@include('common._nav',['nav'=>'order'])
@stop
@section('content')

@include('order._nav', ['nav'=>'search'])

<br>
<div class="panel panel-default">
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
<script src="{{ asset('js/order/order.js') }}"></script>
@stop