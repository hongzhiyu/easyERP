$( document ).ready( function ( ){
	//订单列表详情
	$( '.more' ).click( function ( ){
		var url = 'detail/' + $( this ).attr( 'data-id' );
		window.location.href = url;
	});
});