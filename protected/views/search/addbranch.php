<form class="form-horizontal form-bordered validate" id="form-add-branch"action="<?php echo Yii::app()->createUrl('admin/branch/addbranchform') ?>" role="form" method="post"novalidate="novalidate">
    <div class="panel-body">

        <div class="form-group">
            <label class="col-sm-2 control-label">Mã branch </label>
            <div class="col-sm-10">
                <input type="text" class="required form-control"  required name="branchID">
            </div>
        </div>


        <div class="form-group">
            <label class="col-sm-2 control-label">Tên branch</label>
            <div class="col-sm-10">
                <input type="text" class="form-control required"   name="branchName">
            </div>
        </div>

        <div class="form-actions text-right">
            <input type="submit" value="Thêm" class="btn btn-primary">
        </div>

    </div>
</form>
<script>
    $("#form-add-branch").validate();
</script>