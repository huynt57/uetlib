<form class="form-horizontal form-bordered validate" id="form-add-branch"action="<?php echo Yii::app()->createUrl('admin/booktype/editbooktypeform') ?>" role="form" method="post"novalidate="novalidate">
    <div class="panel-body">
        <input type="hidden" name="bookTypeID_old" value="<?php echo $book_type_detail->bookTypeID; ?>">
        <div class="form-group">
            <label class="col-sm-2 control-label">Mã book type </label>
            <div class="col-sm-10">
                <input type="text" class="required form-control" placeholder="<?php echo $book_type_detail->bookTypeID; ?>" value="<?php echo $book_type_detail->bookTypeID; ?>" required name="bookTypeID">
            </div>
        </div>


        <div class="form-group">
            <label class="col-sm-2 control-label">Tên book type</label>
            <div class="col-sm-10">
                <input type="text" class="form-control required"  placeholder="<?php echo $book_type_detail->bookTypeName; ?>" value="<?php echo $book_type_detail->bookTypeName; ?>" name="bookTypeName">
            </div>
        </div>

        <div class="form-actions text-right">
            <input type="submit" value="Sửa" class="btn btn-primary">
        </div>

    </div>
</form>
<script>
    $("#form-add-branch").validate();
</script>