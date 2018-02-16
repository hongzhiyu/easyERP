<form id="sheetform" class=" " action="{{ url('person/getsheet') }}" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
	<legend>考勤情况</legend>
	<div class="form-group form-inline">
		<label for="personname">员工姓名：</label>
		<select name="personname" class="form-control">
			@foreach($names as $name)
				<option value="{{$name}}">{{$name}}</option>
			@endforeach
		</select>
		<label for="month">月份</label>
		<select name="month" class="form-control">
			@for ( $i = 1; $i < 13; $i++)
				<option value="{{ $i }}">{{ $i .'月'}}</option>
			@endfor
		</select>
	</div>
	<div class="form-group form-horizontal">
		<label for="textarea">考勤记录:</label>
		<textarea class="form-control" rows="3" name="sheetstr"></textarea>
	</div>
	<div class="form-group">
		<button type="button" class="btn btn-default" id="getSheet">查询</button>
	</div>
</form>


