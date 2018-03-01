$( document ).ready( function ( ){
	//展示页面
	$( '.update' ).click( function ( ){
		var url = $(this).attr( 'url' )  ;
		
		window.location.href = url;
	});

	$( '.delete' ).click( function ( ){
		if (confirm('确定要删除吗？')) 
		{
			var url = $(this).attr( 'url' )  ;
		
			window.location.href = url;
		}
	});
	//新增页面
	$( '#chooseadvatarbtn' ).click( function ( ){
		$( '#advatar' ).click( );
	});
	$( '#advatar' ).change( function( ){
		$("#advatarCover").val($(this).val());
	} );

	$( '#chooseresumebtn' ).click( function ( ){
		$( '#eresume' ).click( );
	});
	$( '#eresume' ).change( function( ){
		$("#eresumeCover").val($(this).val());
	} );
} );
