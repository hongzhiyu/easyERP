@extends('common.layout')
@section('nav')
@include('common._nav',['nav'=>'person'])
@stop
@section('content')

@include('person._nav',['nav'=>'salary'])


<br>
<div id="personcont">

	<div class="panel panel-default">
		<div class="panel-body">
			<form id="sheetform" url="{{ url('person/getsheet') }}">
				{{ csrf_field() }}
				<div class="form-group form-inline">
					<label for="personname">员工姓名：</label>
					<select name="personname" class="form-control">
						@foreach($names as $name)
						<option value="{{$name}}">{{$name}}</option>
						@endforeach
					</select>
					<label for="month">年月</label>
					<input type="month" class="form-control" name="month" value="{{date('Y-m')}}"> 
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


<script src="{{ asset('js/person/person.js') }}">
	
</script>

@stop

@section( 'css' )
<link rel="stylesheet" type="text/css" href="{{ asset('css/person/person.css') }}">
@stop