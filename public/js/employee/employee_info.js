$(function(){
	//初始化表格
	var g_table        = $("table#employee_info");

	var init_table_url = "doemployee_info.php";
	$.post(
		init_table_url,
		{action:"init_table"},
		function(data){
			var row_items = $.parseJSON(data);
			for( var i = 0 , j = row_items.length ; i < j ; i++) {
				var data_dom = create_row(row_items[i]);
				g_table.append(data_dom);
			}
	});

	//扩展字符串替换方法
	String.prototype.tmp = function(obj) {
	    return this.replace(/\$\w+\$/g, function(matchs) {
	        var returns = obj[matchs.replace(/\$/g, "")];
	        return (returns + "") == "undefined"? "": returns;
	    });
	};
	/*
	*按钮编辑处理函数
	*/
	function editHandler(){
		//data_id记录旧eid
		var data_id = $(this).attr("dataid");
		var meButton = $(this);
		var editRow = $("<tr></tr>");
		//备份行html
		var meRow = $(this).parent().parent();
		//获取单元要展示的信息
		var datas=new Array();

		for(var i=0;i<6;i++){
			var id='#'+i;
			if(i==1){
				datas.push(meRow.find(id).attr('imgname'));
			}else{
				datas.push(meRow.find(id).text());
			}
		}
		//编辑行HTML
		var editrow_html = "<td><input type='text'  name='eid' value="+datas[0]+"></td>";
		editrow_html+="<td>";
		editrow_html+='<span >'+datas[1]+'</span>';
		editrow_html+='<input type="file" name="eadvatar" />';
		editrow_html+="</td>";
		editrow_html+="<td><input type='text' name='ename' value="+datas[2]+"></td>";
		editrow_html+="<td><input type='text' name='ework' value="+datas[3]+"></td>";
		editrow_html+="<td>"+mdy(datas[4])+"</td>";
		editrow_html+="<td><span >"+datas[5]+"</span><input type='file'  name='eresume'></td>";

		//保存 编辑 按钮html
		var opt_td       = $('<td></td>');
		var saveButton   = $('<button type="button" id="saveButton">保存</button>');
		var cancelButton = $('<button type="button" id="cancelButton">取消</button>');

		/*
		*点击保存
		*-->doemployee_info.php --> 数据库保存数据
		*/
		saveButton.click(function(){
			var form = new FormData(document.getElementById("form"));
			form.append("oldid", data_id);
			$.ajax({
				url:'doemployee_info.php?action=edit_employee',
				type:"post",
				data:form,
				cache:false,
				processData: false,  
		      	contentType: false,  
		      	success:function(data){  
		      		window.location.reload();
		      	},  
		      	error:function(e){  
		          alert("网络错误，请重试！！");  
		       	}  
			});
		});

		/*
		*点击取消
		*当前行html <-- meRow
		*/
		cancelButton.click(function(){
			var currentRow = $(this).parent().parent();
			meRow.find('button').eq(0).click(editHandler);
			meRow.find('button').eq(1).click(delHandler);
			currentRow.replaceWith(meRow);
		});

		editRow.append(editrow_html);
		opt_td.append(saveButton);
		opt_td.append(cancelButton);
		editRow.append(opt_td);
		meRow.replaceWith(editRow);
			
	}
	/*
	*按钮删除处理函数
	*/
	function delHandler(){
		//id --> 员工编号
		var id=$(this).attr("dataid");
		var post_field={};
		post_field['delid']=id;

		$.ajax({
			url:'doemployee_info.php?action=del_employee',
			type:"post",
			data:post_field,
			cache:false,
	      	success:function(data){  
	      		window.location.reload();
	      	},  
	      	error:function(e){  
	          alert("网络错误，请重试！！");  
	       	}  
		});

	}
	/*
	*新增按钮 --> 添加一编辑行
	*addbutton -->unbind(click)
	 */
	$("#addButton").click(function(){
		var newRow = $("<tr></tr>");
		//编辑该行HTML
		var editrow_html = "<td><input type='text'  name='eid'></td>";
		editrow_html+="<td>";
		editrow_html+='<span ></span>';
		editrow_html+='<input type="file" name="eadvatar" />';
		editrow_html+="</td>";
		editrow_html+="<td><input type='text' name='ename'></td>";
		editrow_html+="<td><input type='text' name='ework'></td>";
		editrow_html+="<td>"+mdy()+"</td>";
		editrow_html+="<td><input type='file'  name='eresume'></td>";

		//改行按钮
		var opt_td       = $('<td></td>');
		var sureButton   = $('<button type="button" id="sureButton">确认</button>');
		var cancelButton = $('<button type="button" id="cancelButton">取消</button>');

		/*
		*确认 --> doemployee_info.php --> 保存数据
		 */
		sureButton.click(function(){
			//判断用户是否输入数据
			var meRowInput = $(this).parent().parent().find('input');
			var isPut=true;
			meRowInput.each(function(){
				if($(this).val()==false){
					isPut=false;
					return false;
				}
			});
			//输入后
			//post -->doemployee_info.php
			if(isPut){
				var form = new FormData(document.getElementById("form"));
				$.ajax({
					url:'doemployee_info.php?action=add_employee',
					type:"post",
					data:form,
					cache:false,
					processData: false,  
			      	contentType: false,  
			      	success:function(data){  
			      		window.location.reload();
			      	},  
			      	error:function(e){  
			          alert("网络错误，请重试！！");  
			       	}  
				});
			}
			else{
				alert('请输入完整');
			}
		});

		/*
		*取消 --> 删除改行&&addbutton添加click()
		 */
		cancelButton.click(function(){
			$(this).parent().parent().remove();
			$("#addButton").click(addNewRow);
		});

		newRow.append(editrow_html);
		opt_td.append(sureButton);
		opt_td.append(cancelButton);
		newRow.append(opt_td);
		g_table.append(newRow);
		$(this).unbind();
	});

	/*
	根据json数据创建新的一行
	*/
	function create_row(data_item){
		var col_td = "";
		var row_obj = $("<tr></tr>");
		//行html模板
		var row_htmlTemp = "<td id='0'>$eid$</td>";
		row_htmlTemp     += "<td><img id='1' imgname='$eadvatar$' class=\"img-rounded\" src=\"./images/employee/$eadvatar$\" width='50px'></td>";
		row_htmlTemp     += "<td id='2'>$ename$</td>";
		row_htmlTemp     += "<td id='3'>$ework$</td>";
		row_htmlTemp     += "<td id='4'>$edate$</td>";
		row_htmlTemp     += "<td ><a id='5' href=\"./files/resume/$eresume$\" >$eresume$</a></td>";

		col_td = row_htmlTemp.tmp(data_item);
		//修改按钮
		//删除按钮
		var opt_td     = $('<td></td>');
		var editButton = $('<button type=\"button\"  >修改</button>');
		var delButton  = $('<button type=\"button\" >删除</button>');
		editButton.attr("dataid",data_item['eid']);
		delButton.attr("dataid",data_item['eid']);

		editButton.click(editHandler);
		delButton.click(delHandler);
		opt_td.append(editButton);
		opt_td.append(delButton);

		row_obj.append(col_td);
		row_obj.append(opt_td);

		return row_obj;
	}	
	//制作年月日编辑选项的函数
	function mdy(datestring) {
		if(!datestring){
			var date = new Date();
			var year=date.getFullYear();
		}else{
			var date = new Date(datestring);
			var year=date.getFullYear();
		}
        var nowdate = new Date();
        var nowYear =nowdate.getFullYear();
        var month=date.getMonth();
        var day=date.getDate();
        var out= "";
        var months = [
        		[1,"1月"],[2,"2月"],[3,"3月"],[4,"4月"],[5,"5月"],[6,"6月"],[7,"7月"],[8,"8月"],[9,"9月"],[10,"10月"],[11,"11月"],[12,"12月"]
        ];
        //年选项
        out +="<select name='year' autocomplete ='off'>";
        for(var i=nowYear,j=year-10;i>j;i--){
        	if (i==year) {
        		out+='<option value='+i+' selected=\'selected\'>'+i+'年</option>';
        	}
        	else{
        		out+='<option value='+i+'>'+i+'年</option>';
        	}
        }
        out += '</select>';
        //月选项
		out +="<select name='month' autocomplete ='off'>";
        for(var i=0,j=months.length;i<j;i++){
        	if (i==month) {
        		out+='<option value='+months[i][0]+' selected>'+months[i][1]+'</option>';
        	}
        	else{
        		out+='<option value='+months[i][0]+'>'+months[i][1]+'</option>';
        	}
        }
        out += '</select>';
        //天选项
        out +="<select name='day' autocomplete ='off'>";
        for(var i=1;i<31;i++){
        	if (i==day) {
        		out+='<option value='+i+' selected>'+i+'</option>';
        	}
        	else{
        		out+='<option value='+i+'>'+i+'</option>';
        	}
        }
        out += '</select>';

        return out;
  
    }
});
