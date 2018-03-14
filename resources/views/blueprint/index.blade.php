@extends('common.layout')
@section('nav')
@include('common._nav',['nav'=>'blueprint'])
@stop
@section('content')

@include('blueprint._nav',['nav'=>'index'])
<br>
<div class="row">
@include('common.message')
</div>


<div class="panel panel-default">
	<div class="panel-body">
		<form action="" role="form">
			<div class="form-inline">
					
				<div class="input-group">
					<input type="text" class="form-control" placeholder="图纸编号" >
					<span class="input-group-btn">
						<button class="btn btn-default" type="button" >查看</button>
					</span>
				</div>
			</div>
		</form>
		<br>
		<table  class="table table-hover ">
			<thead>
				<tr>
					<th>#</th>
					<th>图纸编号</th>
					<th>品名</th>
					<th>文件</th>
					<th>接收日期</th>
					<th>操作</th>
				</tr>
			</thead>

			<tbody>
				@for( $i = 0; $i < count( $bps ); $i ++)
				<tr>
					<td>{{ $i + 1 }}</td>
					<td>{{$bps[$i]->type}}</td>
					<td>{{$bps[$i]->name}}</td>
					<td>{{$bps[$i]->type}}</td>
					<td><a href="{{ '../../storage/app/files/blueprint/'.$bps[ $i ]->bpfile}}">{{$bps[$i]->bpfile}}</a></td>
					<td>{{ date('Y-m-d', $bps[ $i ]->date)}}</td>					
					<td>
						<div class="btn-group btn-group-xs">
							<button type="button" class="btn btn-default update"  url="{{ url('blueprint/update') .'/' .$bps[ $i ]->id }}">修改</button>
							<button type="button" class="btn btn-default delete" url="{{ url('blueprint/delete') .'/' .$bps[ $i ]->id}}">删除</button>

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
<script src="{{ asset('js/blueprint/blueprint.js') }}"></script>
@stop

