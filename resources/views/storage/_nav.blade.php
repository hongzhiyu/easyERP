<div class="row">
	<div class="col-md-12">
		<ul class="nav nav-tabs ">
			<li  role="presentation" class="{{($nav == 'index')?'active' :" "}}"><a  href="{{ url('storage/index') }}">仓库一览</a></li>
				<li  role="presentation" class="{{($nav == 'show')?'active' :" "}}"><a  href="{{ url('storage/show') }}">库存列表</a></li>
				<li  role="presentation" class="{{($nav == 'add')?'active' :" "}}"><a  href="{{ url('storage/add') }}">新建物料</a></li>
				
		</ul>
	</div>
</div>