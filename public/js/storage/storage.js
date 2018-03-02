$(document).ready( function ( ){
	//index
	$('#update').click( function ( ){
		var url = $( this ).attr( 'url' );
		window.location.href = url
	});

	$('.good').each( function ( ){

		var str = '型号:'+$(this).attr('data-type')+'<br>';
		str += '名称:'+$(this).attr('data-name')+'<br>';
		str += '数量:'+$(this).attr('data-num')+'<br>';

		$(this).tooltip(
		{
			container: 'body',
			html:'true',
			placement:'top',
			title: str
		});
	});

});
