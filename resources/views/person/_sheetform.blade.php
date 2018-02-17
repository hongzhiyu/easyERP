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
		<label for="month">年月</label>
		<input type="month" class="form-control" name="month">
	</div>
	<div class="form-group form-horizontal">
		<label for="textarea">考勤记录:</label>
		<textarea class="form-control" rows="3" name="sheetstr">07:5712:0113:2917:31	07:5912:0113:2917:34		07:5812:0313:2917:34	07:5812:0113:2917:31	07:5912:0113:2917:32	07:5812:0213:2917:33	07:5812:0213:2917:32	07:5812:0013:2917:30		07:5812:0013:2917:32	07:5912:0113:2917:32	07:5912:0313:2917:30	07:5812:0113:2917:32	07:5712:0113:2917:31	07:5912:0213:2917:33		07:5812:0113:2917:34	07:5912:0213:2917:34	07:5812:0013:2917:31	07:5812:0013:2917:31	07:5812:0013:2918:38	07:5912:0012:0013:2917:30		07:5812:0013:2917:31	07:5712:0213:2917:3017:30	07:5912:0013:2917:3117:31	07:5812:0213:2917:35	07:5812:0413:2917:30
</textarea>
	</div>
	<div class="form-group">
		<button type="button" class="btn btn-default" id="getSheet">查询</button>
		
	</div>
</form>


