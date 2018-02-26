
@extends('common.layout')

@section('content')
	
	<div class="row">
		<div class="col-md-4">
			<ul class="nav nav-tabs ">
				<li  role="presentation" ><a  href="{{ url('person/day') }}">假期管理</a></li>
				<li  role="presentation" class="active"><a  href="{{ url('person/salary') }}">薪资计算</a></li>
			</ul>
		</div>
	</div>

	<div id="personcont">

	<div class="panel panel-default">
		<div class="panel-heading">薪资计算</div>
		<div class="panel-body">
			<form id="sheetform">
			{{ csrf_field() }}
				<div class="form-group form-inline">
					<label for="personname">员工姓名：</label>
					<select name="personname" class="form-control">
						@foreach($names as $name)
							<option value="{{$name}}">{{$name}}</option>
						@endforeach
					</select>
					<label for="month">年月</label>
					<input type="month" class="form-control" name="month">
				</div>
				<div class="form-group form-horizontal">
					<label for="textarea">考勤记录:</label>
					<textarea class="form-control" rows="3" name="sheetstr"></textarea>
				</div>
				<div class="form-group">
					<button type="button" class="btn btn-default" id="getSheet">查询</button>
					
				</div>
			</form>
		
		</div>
	</div>

<div id="sheet">
	
</div>

		
</div>


<script>
	$('#getSheet').on('click', function( ) {
		var formData = new FormData( $('#sheetform') [0]);
		
		$.ajax({
			 headers: {
				        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				    },
			url: '{{ url('person/getsheet') }}',
			type:'POST',
			data: formData,
		            contentType: false,
		            processData: false,
		      	success:function( html ){  
		      		$('#sheet').html( html );
		      	},  
		      	error:function(e){  
		          		console.log("网络错误，请重试！！");  
		       	}  
		});	
	});
</script>
	
@stop

@section( 'css' )
	<link rel="stylesheet" type="text/css" href="{{ asset('css/person/person.css') }}">
@stop