$(function(){
	var record_table = $('#record_table');
	//-->reader.php获取数据
	var init_url = 'reader.php';
	// var inputfile = $("#inputfile").val();
	// var year = $("select").eq(0).val();
	// var month = $("select").eq(1).val();
	// var post_fields = {
	// 	inputfile : inputfile,
	// 	inputyear : year,
	// 	inputmonth : month
	// };

	$('#submit').click(function(){
		// console.log(post_fields);
		// $.post(init_url, post_fields, function(data){
		// 	alert('ok');
		// 	var records = $.parseJSON(data);
		// 	for (var i = 0; i < records.length; i++) {
		// 		var row = createRow(records[i],i);			
		// 		record_table.append(row);
		// 	}
		// });

		var form = new FormData(document.getElementById("form"));
		$.ajax({
			url:'reader.php',
			type:'post',
			data:form,
			cache:false,
			processData: false,  
	      	contentType: false,  
	      	success:function(data){  
	      		var records = $.parseJSON(data);
				for (var i = 0; i < records.length; i++) {
					var row = createRow(records[i],i);			
					record_table.append(row);
				}
	      	},  
	      	error:function(e){  
	          alert("网络错误，请重试！！");  
	       	}  
		});
	});
		

});

function createRow(data,i){
	var row      = $('<tr></tr>');
	var cell     = $('<td></td>');
	cell.append(i+1);
	row.append(cell);
	var cell     = $('<td></td>');

	for (var j = 0; j < 6; j++) {
		cell.append(data[j][0]);
		if (!data[j][1]) {
			cell.css("background-color","red");
		}
			row.append(cell);
			var cell     = $('<td></td>');
	}
	return row;
}