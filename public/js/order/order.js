$( document ).ready( function ( ){
	//订单列表详情
	$( '.more' ).click( function ( ){
		var url = 'detail/' + $( this ).attr( 'data-id' );
		window.location.href = url;
	});
	//新增订单
	$('#choosebtn').click( function(){
		$('#lefile').click();
	});
	$("#lefile").change(function(){
		  $("#fileCover").val($(this).val());
	});

	$('#orderchoosebtn').click( function(){
		$('#orderfile').click();
	});
	$("#orderfile").change(function(){
		  $("#orderfileCover").val($(this).val());
	});

	$("#price,#number").change(function(){
		$("#total").html( $("#price").val()*$("#number").val());
	});
} );
