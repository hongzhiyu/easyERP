$( document ).ready( function ( ){


	//订单列表详情
	$( '.more' ).click( function ( ){
		var url = 'detail/' + $( this ).attr( 'data-id' );
		window.location.href = url;
	});
	//订单列表删除
	$( '.delete' ).click( function ( ){
		if (confirm('确定要删除吗？')) 
		{
			var url = 'delete/' + $( this ).attr( 'data-id' );
			window.location.href = url;
		}
	});

	bind_event();

	function bind_event()
	{

	//新增订单
	$('.choosebtn').click( function(){
		$(this).parents('td').find('input.lefile').first().click();
	});
	$(".lefile").change(function(){
		$(this).parents('td').find('input.fileCover').first().val($(this).val());
	});

	$('#orderchoosebtn').click( function(){
		$('#orderfile').click();
	});
	$("#orderfile").change(function(){
		$("#orderfileCover").val($(this).val());
	});

	//新增订单 总价
	$(".price").change(function(){
		var price = $(this).val();
		var number = $(this).parents("tr").find("input.number").first().val();
		var total = $(this).parents("tr").find("input.total").first();

		total.val( price * number);
	});
	$(".number").change(function(){
		var number = $(this).val();
		var price = $(this).parents("tr").find("input.price").first().val();
		var total = $(this).parents("tr").find("input.total").first();

		total.val( price * number);
	});

	//新增订单 清空
	//
	$('.clean').click(function(){
		$(this).parents('tr').find('input').val('');
		
	});

	}
	//新增订单 删除
	$("#product_delete").click(function(){
		var num  = $('#tb').find('tr').length;
		if( num == 1)
		{
			alert('不能删除');
		}
		else{
			
			$('#tb').find('tr').last().remove();
		}
	});
	//新增订单 新增项目
	$("#add_product").click(function(){
		var tbody = $('#tb');
		var row_num = tbody.children('tr').length + 1;


		var newRow = $("<tr></tr>");

		var row_html = '<td>' + row_num + '</td>';
		row_html += '<td><input type="text" name="Products['+ row_num +'][type]" class="form-control input-sm"   >	</td>';
		row_html += '<td><input type="text" name="Products['+ row_num +'][name]" class="form-control input-sm"   >	</td>';

		row_html += '<td><input class="lefile" type="file" style="display:none" name="product_file['+ row_num +']"><div class="input-group" ><input type="text" class="form-control input-sm fileCover" ><span class="input-group-btn"><button class="btn btn-default btn-sm choosebtn" type="button" >选择文件</button></span></div></td>'
		row_html += '<td><input type="text"  name="Products['+ row_num +'][price]" class="form-control input-sm price"   ></td>';
		row_html += '<td><input type="number"  name="Products['+ row_num +'][number]" class="form-control input-sm number" value="1"  ></td>';
		row_html += '<td><input type="text"  name="Products['+ row_num +'][total]" class="form-control input-sm total"   ></td>';

		row_html += '<td><button type="button" class="btn btn-default clean">清空</button></div></td>';

		newRow.append(row_html);
		tbody.append(newRow);

		bind_event();

	});

});
