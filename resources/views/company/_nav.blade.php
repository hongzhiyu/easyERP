<div class="row">
	<div class="col-md-12">
		<ul class="nav nav-tabs ">
			<li  role="presentation" class="{{($nav == 'index'||$nav == 'detail')?'active' :" "}}"><a  href="{{ url('company/index') }}">
			@if($nav == 'detail')
			{{'企业详情'}}
			@else
			{{'企业信息'}}
			@endif</a></li>
			<li  role="presentation" class="{{($nav == 'add')?'active' :" "}}"><a  href="{{ url('company/add') }}">新增企业</a></li>
			
		</ul>
	</div>
</div>