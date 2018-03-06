<a href="{{url('') }}" class="list-group-item {{($nav == 'index')?'active' :" "}}">
	<p class="list-group-item-text ">首页</p>
</a>
<a  data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="list-group-item  ">
	<span class="list-group-item-text "><em>信息管理</em><span class="caret"></span></span>
</a>
<div class=" panel-collapse collapse in" id="collapseOne">
	
	<a href="{{url('employee/show') }}" class="list-group-item {{($nav == 'employee')?'active' :" "}}" >
		<p class="list-group-item-text text-center">员工管理</p>
	</a>
	<a href="{{url('blueprint/index') }}" class="list-group-item {{($nav == 'blueprint')?'active' :" "}}">
	<p class="list-group-item-text text-center">    图纸库</p>
</a>
</div>
<a href="{{url('person/index') }}" class="list-group-item {{($nav == 'person')?'active' :" "}}">
	<p class="list-group-item-text">人事管理</p>
</a>
<a href="{{url('storage/index') }}" class="list-group-item {{($nav == 'storage')?'active' :" "}}">
	<p class="list-group-item-text">仓储管理</p>
</a>

<a href="{{url('order/index') }}" class="list-group-item {{($nav == 'order')?'active' :" "}}">
	<p class="list-group-item-text">订单管理</p>
</a>
<a href="{{url('plan/index') }}" class="list-group-item {{($nav == 'plan')?'active' :" "}}">
	<p class="list-group-item-text">生产计划</p>
</a>


