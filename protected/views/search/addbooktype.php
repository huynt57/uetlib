<form class="form-horizontal form-bordered validate" id="form-add-branch"action="<?php echo Yii::app()->createUrl('admin/booktype/addbooktypeform') ?>" role="form" method="post"novalidate="novalidate">
    <div class="panel-body">

        <div class="form-group">
            <label class="col-sm-2 control-label">Mã book type </label>
            <div class="col-sm-10">
                <input type="text" class="required form-control"  required name="bookTypeID">
            </div>
        </div>


        <div class="form-group">
            <label class="col-sm-2 control-label">Tên book type</label>
            <div class="col-sm-10">
                <input type="text" class="form-control required"   name="bookTypeName">
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