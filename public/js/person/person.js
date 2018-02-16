$(document).ready(function(){
	// $.ajaxSetup({
	//     headers: {
	//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	//     }
	// });
	$('#getSheet').on('click', function( ) {
		// $.post( '/laravel/public/person/getsheet', function( html ){
		// 	$( '#sheet' ).append( html );
		// });
		var post_url = $('#sheetform').attr( 'action' );
		var formData = new FormData( $('#sheetform') [0]);
		// var form = $('select[name="personname"]').val();
		// var form = $('input[name="sheetfile"]').val();
		// console.log(form);
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
		      		console.log( html );
		      		// $('#sheet').append( html );
		      	},  
		      	// error:function(e){  
		       //    		alert("网络错误，请重试！！");  
		       // 	}  
		});	
	});
});