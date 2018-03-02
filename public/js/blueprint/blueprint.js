$( document ).ready( function ( ){
	//订单列表详情
	$( '.update' ).click( function ( ){
		var url = 'update/' + $( this ).attr( 'data-id' );
		window.location.href = url;
	});
	
} );
