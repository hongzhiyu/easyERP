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
	$( '#chooseavatarbtn' ).click( function ( ){
		$( '#avatar' ).click( );
	});
	$( '#avatar' ).change( function( ){
		$("#avatarCover").val($(this).val());
	} );

	$( '#chooseresumebtn' ).click( function ( ){
		$( '#resume' ).click( );
	});
	$( '#resume' ).change( function( ){
		$("#resumeCover").val($(this).val());
	} );

	//统计字数
	$('#work').bind("input propertychange",function( ){
		var content_len = $( this ).val().length;
		console.log(content_len);
		$('#len').html('字数：'+content_len);
	});
	

} );

