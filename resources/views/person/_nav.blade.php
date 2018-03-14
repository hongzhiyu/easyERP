<div class="row">
	<div class="col-md-12">
		<ul class="nav nav-tabs ">
			<li  role="presentation" class="{{($nav == 'index')?'active' :" "}}"><a  href="{{ url('person/index') }}">假期管理</a></li>
			<li  role="presentation" class="{{($nav == 'salary')?'active' :" "}}"><a  href="{{ url('person/salary') }}">薪资计算</a></li>
			<li  role="presentation" class="{{($nav == 'payroll')?'active' :" "}}"><a  href="{{ url('person/payroll') }}">工资单</a></li>
		</ul>
	</div>
</div>