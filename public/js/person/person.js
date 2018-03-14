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

	//开始日期改变事件
	$('#start').bind("input propertychange",function( ){
		var s1 = $( this ).val();
		var s2 = $('#end').val();
		$('#end').val( s1 );
		// $('#len').html('字数：'+content_len);
	});
	$('#end').bind("input propertychange",function( ){
		var s1 = $( '#start' ).val();
		var s2 = $(this).val();
		$('#day').html(DateDiff(s1,s2));

	});


});

   function  DateDiff(sDate1,  sDate2){    //sDate1和sDate2是2002-12-18格式  
   	var  aDate,  oDate1,  oDate2,  iDays  
   	aDate  =  sDate1.split("-")  
       oDate1  =  new  Date(aDate[1]  +  '-'  +  aDate[2]  +  '-'  +  aDate[0])    //转换为12-18-2002格式  
       aDate  =  sDate2.split("-")  
       oDate2  =  new  Date(aDate[1]  +  '-'  +  aDate[2]  +  '-'  +  aDate[0])  
       iDays  =  parseInt(Math.abs(oDate1  -  oDate2)  /  1000  /  60  /  60  /24)    //把相差的毫秒数转换为天数  
       return  iDays  
   }
