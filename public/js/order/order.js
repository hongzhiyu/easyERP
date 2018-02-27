$( document ).ready( function ( ){
	$( '.more' ).click( function ( ){
		var url = 'detail/' + $( this ).attr( 'data-id' );
		window.location.href = url;
	})
} );
