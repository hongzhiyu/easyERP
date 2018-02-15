$(function(){
	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});
	$('#getSheet').click( function() {
		
		// $.post( '/laravel/public/person/getsheet', function( html ){
		// 	$( '#sheet' ).append( html );
		// });
		var form = new FormData(document.getElementById("sheetform"));
		$.ajax({

			url:'getsheet',
			type:'POST',
			data:  form,
		            contentType: false,
		            cache: false,
		            processData: false,
		      	success:function(data){  
		      		alert( 'hello' );
		      	},  
		      	// error:function(e){  
		       //    		alert("网络错误，请重试！！");  
		       // 	}  
		});	
	});
});