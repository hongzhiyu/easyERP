$(document).ready(function(){
	$('#getSheet').on('click', function( ) {
		var post_url = $('#sheetform').attr( 'action' );
		var formData = new FormData( $('#sheetform') [0]);
		
		$.ajax({
			 headers: {
				        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				    },
			url: post_url,
			type:'POST',
			data: formData,
		            contentType: false,
		            processData: false,
		      	success:function( html ){  
		      		$('#sheet').html( html );
		      		// console.log( html );
		      	
		      		
		      	},  
		      	error:function(e){  
		          		console.log("网络错误，请重试！！");  
		       	}  
		});	
	});

	
});