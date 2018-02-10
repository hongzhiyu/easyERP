<div>
	<form class="form-inline " action="">
	{{ csrf_field() }}
		<div class="form-group col-md-12">
			<legend>考勤表</legend>
			<select class="form-control">
				@foreach($names as $name)
					<option>{{$name}}</option>
				@endforeach
			</select>

			<button type="submit" class="btn btn-default" id="getSheet">查询</button>
		</div>
	</form>

	<div>
		<table id="sheet" class="table table-hover table-condensed table-striped">
			
		</table>
	</div>

</div>