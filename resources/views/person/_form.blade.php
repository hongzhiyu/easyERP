<form class="form-inline " action="">

{{ csrf_field() }}

  <div class="form-group col-md-12">
	<legend>人事管理</legend>
	<select class="form-control" name="_Date['type']">
	  <option>员工请假</option>
	  <option>企业假期</option>
	</select>
    <label for="exampleInputName2">开始日期</label>
    <input type="date" name="_Date['start']" class="form-control">
    <label for="exampleInputName2">结束日期</label>
    <input type="date" name="_Date['end']" class="form-control">
  <button type="submit" class="btn btn-default">提交</button>
    
  </div>


</form>