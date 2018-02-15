<form id="sheetform" class="form-horizontal " action="{{ url('person/getsheet') }}" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
	<legend>考勤情况</legend>
	<div class="form-group col-md-2">
		<label for="personname">员工姓名：</label>
		<select name="personname" class="form-control">
			@foreach($names as $name)
				<option value="{{$name}}">{{$name}}</option>
			@endforeach
		</select>

		{{-- <label for="sheetfile">考勤表</label>
		<input type="file" class="file form-control" name="sheetfile"> --}}
		
	</div>
	<div class="form-group col-md-12">
		<label for="textarea">考勤记录</label>
		<textarea class="form-control" rows="6" name="sheetstr"></textarea>
	</div>
	<div class="form-group">
		<div class="col-sm-10">
		<button type="submit" class="btn btn-default" id="getSheet">查询</button>
		</div>
	</div>
</form>

<script type="text/javascript">
$(document).ready(function(){
	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});
	$('#sheetform').on('submit', function( e ) {
		e.preventDefault();
		// $.post( '/laravel/public/person/getsheet', function( html ){
		// 	$( '#sheet' ).append( html );
		// });
		var formData = new FormData( $('#sheetform') [0]);
		// var form = $('select[name="personname"]').val();
		// var form = $('input[name="sheetfile"]').val();
		// console.log(form);
		$.ajax({
			 headers: {
				        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				    },
			url:'{{ url('person/getsheet') }}',
			type:'POST',
			data: formData,
		            contentType: false,
		            processData: false,
		      	success:function( html ){  
		      		console.log( html );
		      		// $('#sheet').append( html );
		      	},  
		      	// error:function(e){  
		       //    		alert("网络错误，请重试！！");  
		       // 	}  
		});	
	});
});
</script>

