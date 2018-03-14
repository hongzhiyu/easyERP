<div class="row">
	<div class="col-md-12">
		<ul class="nav nav-tabs ">
			<li  role="presentation" class="{{($nav == 'index')?'active' :" "}}"><a  href="{{ url('blueprint/index') }}">图纸列表</a></li>
			<li  role="presentation" class="{{($nav == 'add')?'active' :" "}}"><a  href="{{ url('blueprint/add') }}">添加图纸</a></li>
			@if($nav == 'update')
				<li  role="presentation" class="active"><a  ">图纸112详情</a></li>
			@endif
		</ul>
	</div>
</div>