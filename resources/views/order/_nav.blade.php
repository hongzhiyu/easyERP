<div class="row">
	<div class="col-md-12">
		<ul class="nav nav-tabs ">
			<li  role="presentation" class="{{($nav == 'index')?'active' :" "}}"><a href="{{ url('order/index') }}">订单列表</a></li>
			<li  role="presentation" class="{{($nav == 'add')?'active' :" "}}"><a  href="{{ url('order/add') }}">添加订单</a></li>
			
			<li  role="presentation" class="{{($nav == 'delivery')?'active' :" "}}"><a  href="{{ url('order/delivery') }}">送货单</a></li>
		</ul>
	</div>
</div>