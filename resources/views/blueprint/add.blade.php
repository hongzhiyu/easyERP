@extends('common.layout')
@section('nav')
@include('common._nav',['nav'=>'blueprint'])
@stop
@section('content')

@include('blueprint._nav',['nav'=>'add'])

<br>
<div class="panel panel-default">
	<div class="panel-body">
		<form class="form-horizontal" method="post" enctype="multipart/form-data" action="">
			{{ csrf_field() }}
			<div class="row">
				<div class="form-group">
					<label for="name" class="col-sm-2 control-label">图纸型号：</label>
					<div class="col-sm-5">
						<input type="text" name="Blueprint[type]" class="form-control"  >
					</div>
				</div>
				<div class="form-group">
					<label for="name" class="col-sm-2 control-label">品名：</label>
					<div class="col-sm-5">
						<input type="text" name="Blueprint[name]" class="form-control" >
					</div>
				</div>
				<div class="form-group">
					<label for="name" class="col-sm-2 control-label ">图纸文件:</label>
					<div class="col-sm-5">
						<input id="bpfile" name="bpfile" type="file" style="display:none" > 
						<div class="input-group">
							<input type="text" class="form-control" id="bpfileCover" >
							<span class="input-group-btn">
								<button class="btn btn-default" id='bpchoosebtn'	 type="button" >选择文件</button>
							</span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="date" class="col-sm-2 control-label">接收时间</label>
					<div class="col-sm-5">
						<input type="date" name="Blueprint[date]"  class="form-control" value="{{old('Blueprint')['date'] ?old('Blueprint')['date']:date('Y-m-d')}}"/>
					</div>
					<span class="help-block">默认为今天({{date('Y-m-d')}})</span>
				</div>
				
			</div>
			<button type="submit" class="btn btn-primary btn-sm col-sm-offset-2 col-sm-4">提交</button>
			<button type="button" class="btn btn-link">取消</button>
		</form>
	</div>
</div>
@stop

@section('js')
<script src="{{ asset('js/blueprint/blueprint.js') }}"></script>
@stop