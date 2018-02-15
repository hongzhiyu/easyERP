<form id="sheetform" class="form-inline " action="{{ url('person/getsheet') }}" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
	<div class="form-group col-md-12">
		<legend>考勤情况</legend>
		<label for="personname">员工姓名：</label>
		<select name="personname" class="form-control">
			@foreach($names as $name)
				<option value="{{$name}}">{{$name}}</option>
			@endforeach
		</select>

		<label for="sheetfile">考勤表</label>
		<input type="file" class="file form-control" name="sheetfile">
		<button type="submit" class="btn btn-default" id="getSheet">查询</button>
		
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
		      	},  
		      	// error:function(e){  
		       //    		alert("网络错误，请重试！！");  
		       // 	}  
		});	
	});
});
</script>

