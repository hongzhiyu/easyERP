
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
		<label for="inputfile" class="col-sm-1 control-label" >头像</label>
		<div class="col-sm-5">
			<input type="file" name="eadvatar" id="advatar" >
			<p class="help-block">图片/<1M/</p>
		</div>
	</div>

	<div class="form-group">
		<label for="eresume" class="col-sm-1 control-label" >员工简历</label>
		<div class="col-sm-5">
			<input type="file" name="eresume" id="eresume" >
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

	<div class="from-group">
		<div class="row">
		<label for="date" class="col-sm-1 control-label">入职时间</label>
		<div class="col-sm-6">
			<input type="date" name="Employee[edate]" />
		</div>
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