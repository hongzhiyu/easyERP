@extends('common.layout')

@section('content')

<div class="row">
	<div class="col-md-12">
		<ul class="nav nav-tabs ">
			<li  role="presentation" class="active"><a >修改</a></li>
			<li  role="presentation" class=""><a  href="{{ url('blueprint/add') }}">添加图纸</a></li>
		</ul>
	</div>
</div>
<br>
<div class="panel panel-default">
	<div class="panel-body">
		<form class="form-horizontal" method="post" enctype="multipart/form-data" action="">
			{{ csrf_field() }}
			<div class="row">
				<div class="form-group">
					<label for="name" class="col-sm-2 control-label">图纸型号：</label>
					<div class="col-sm-5">
						<input type="text" name="" class="form-control" id="name"  value="ZJ-FLYB-KPK-L70Z-G">
					</div>
				</div>
				<div class="form-group">
					<label for="name" class="col-sm-2 control-label">品名：</label>
					<div class="col-sm-5">
						<input type="text" name="" class="form-control" id="name"  value="法兰压板">
					</div>
				</div>
				<div class="form-group">
					<label for="name" class="col-sm-2 control-label ">图纸文件:</label>
					<div class="col-sm-5">
						<input id="orderfile" type="file" style="display:none" > 
						<div class="input-group">
							<input type="text" class="form-control" id="orderfileCover" >
							<span class="input-group-btn">
								<button class="btn btn-default" id='orderchoosebtn'	 type="button" >选择文件</button>
							</span>
						</div>
					</div>
				</div>
				
			</div>
			<button type="submit" class="btn btn-primary btn-sm col-sm-offset-2 col-sm-4 disabled" >提交</button>
			<button type="button" class="btn btn-link">返回</button>
		</form>
	</div>
</div>
@stop