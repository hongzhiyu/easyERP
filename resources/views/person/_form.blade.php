<form class="form-inline " action="">
<legend>人事管理</legend>
{{ csrf_field() }}
        <div class="row">
        <div class="form-group col-md-2">
                <label for="_Date['type']">事务类型</label>
                <select class="form-control" name="_Date['type']">
                        <option>员工请假</option>
                        <option>企业假期</option>
                </select>
        </div>
        <div class="form-group col-md-3 ">
                <label for="_Date['remark']">备注</label>
                <input type="text" class="form-control" name="_Date['remark']">
        </div>
        <div class="form-group col-md-3">
                <label for="_Date['start']">开始日期</label>
                <input type="date" name="_Date['start']" class="form-control">
        </div>
         <div class="form-group col-md-3">
                <label for="_Date['end']">结束日期</label>
                <input type="date" name="_Date['end']" class="form-control">
        </div>
         <div class="form-group col-md-1">
                <button type="submit" class="btn btn-default">提交</button>
        </div>
</form>