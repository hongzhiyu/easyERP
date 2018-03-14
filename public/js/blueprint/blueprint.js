$( document ).ready( function ( ){
	//修改 点击
	$( '.update' ).click( function ( ){
		var url = 'update/' + $( this ).attr( 'data-id' );
		window.location.href = url;
	});
	//删除 点击
	$( '.delete' ).click( function ( ){
		if (confirm('确定要删除吗？')) 
		{
			var url = $(this).attr( 'url' )  ;
		
			window.location.href = url;
		}
	});
	//新增 选择文件
	$( '#bpchoosebtn' ).click( function ( ){
		$( '#bpfile' ).click( );
	});
	$( '#bpfile' ).change( function( ){
		$("#bpfileCover").val($(this).val());
	} );
} );
