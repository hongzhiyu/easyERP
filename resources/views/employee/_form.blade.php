
<form class="form-horizontal" method="post" enctype="multipart/form-data" action="">
	{{ csrf_field() }}
	<div class="form-group">
		<label for="name" class="col-sm-1 control-label">员工姓名</label>
		<div class="col-sm-5">
			<input type="text" name="Employee[ename]" class="form-control" id="name"  placeholder="请输入员工姓名"
			value="{{old('Employee')['ename'] ? old('Employee')['ename']:$employee->ename}}"
			>
		</div>
	</div>
	<div class="form-group">
		<label for="name" class="col-sm-1 control-label">性别</label>
		<div class="col-sm-5">
			<label class="radio-inline">
				<input type="radio"  name="optionsRadios" value="male" checked> 男
			</label>
			<label class="radio-inline">
				<input type="radio"  name="optionsRadios" value="female"> 女
			</label>
		</div>
	</div>
	<div class="form-group">
		<label for="birth" class="col-sm-1 control-label">出生年月</label>
		<div class="col-sm-5">
			<input type="date" name="Employee[birth]"  class="form-control" />
		</div>
	</div>

	<div class="form-group">
		<label for="advatar" class="col-sm-1 control-label" >头像</label>
		<div class="col-sm-5">
			<input id="advatar" type="file" name="eadvatar" style="display:none" > 
			<div class="input-group">
				<input type="text" class="form-control" id="advatarCover" >
				<span class="input-group-btn">
				<button class="btn btn-default" id='chooseadvatarbtn' type="button" >选择文件</button>
				</span>
			</div>
			<span class="help-block">图片/<1M/</span>
		</div>
	</div>

	<div class="form-group">
		<label for="eresume" class="col-sm-1 control-label" >员工简历</label>
		<div class="col-sm-5">
			<input type="file" name="eresume" id="eresume" style="display:none">
			<div class="input-group">
				<input type="text" class="form-control" id="eresumeCover" >
				<span class="input-group-btn">
				<button class="btn btn-default" id='chooseresumebtn' type="button" >选择文件</button>
				</span>
			</div>
			<p class="help-block">word/<1M/</p>
		</div>
	</div>

	<div class="form-group">
		<label for="work" class="col-sm-1 control-label">职务描述</label>
		<div class="col-sm-5">
			<input type="text" name="Employee[ework]" class="form-control" id="work" placeholder="职务描述"
			value="{{old('Employee')['ework'] ? old('Employee')['ework']:$employee->ework}}"
			>
		</div>
	</div>

	<div class="form-group">
			<label for="date" class="col-sm-1 control-label">入职时间</label>
			<div class="col-sm-5">
				<input type="date" name="Employee[edate]" value="{{date('Y-m-d')}}" class="form-control" />
				<span class="help-block">默认为今天({{date('Y-m-d')}})</span>
			</div>
	</div>
	<br>
	<br>
	<div class="form-group">
		<div class="col-sm-2">
			<button type="submit" class="btn btn-primary">提交</button>
		</div>
	</div>
</form>