<form class=" " action="">
<legend>人事管理</legend>
{{ csrf_field() }}
<div class="form-inline">
        <div class="form-group  ">
                <label for="_Date['type']">事务类型</label>
                <select class="form-control" name="_Date['type']">
                        <option>员工请假</option>
                        <option>企业假期</option>
                </select>
        </div>
        <div class="form-group ">
                <label for="_Date['start']">开始日期</label>
                <input type="date" name="_Date['start']" class="form-control">
        </div>
        <div class="form-group ">
                <select name="_Date['start_noon']" class="form-control">
                    <option value="all">全天</option>
                    <option value="am">上午</option>
                    <option value="pm">下午</option>
                </select>
        </div>
         <div class="form-group ">
                <label for="_Date['end']">结束日期</label>
                <input type="date" name="_Date['end']" class="form-control">
        </div>
        <div class="form-group ">
                <select name="_Date['end_noon']" class="form-control">
                    <option value="all">全天</option>
                    <option value="am">上午</option>
                    <option value="pm">下午</option>
                </select>
        </div>
</div>
        <div class="form-group  ">
                <label for="_Date['remark']">备注</label>
                <textarea class="form-control" rows="3" cols="20" name="_Date['remark']"></textarea>
        </div>


         <div class="form-group">
                <button type="submit" class="btn btn-default">提交</button>
        </div>
</form>