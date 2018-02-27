$( document ).ready( function ( ){
	
	$('#getSheet').on('click', function( ) {
		var postUrl = $( '#sheetform' ).attr( 'url' );
		var formData = new FormData( $('#sheetform') [0]);

		$.ajax({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			url: postUrl,
			type:'POST',
			data: formData,
			contentType: false,
			processData: false,
			success:function( html ){  
				$('#sheet').html( html );
				$('.warning').on( 'click', function ( ){
					$( this ).toggleClass( 'warning' );
				});
			},  
			error:function(e){  
				console.log("网络错误，请重试！！");  
			}  
		});	
	});
});
