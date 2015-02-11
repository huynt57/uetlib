<form class="form-horizontal form-bordered validate" id="form-add-branch"action="<?php echo Yii::app()->createUrl('admin/copy/addcopyform') ?>" role="form" method="post"novalidate="novalidate">
    <div class="panel-body">
        <input type="hidden" name="copyID_old" value="<?php echo $copy_detail->copyID; ?>">
        <div class="form-group">
            <label class="col-sm-2 control-label">Book ID</label>
            <div class="col-sm-10">
                <select name="bookID" class="form-control required  ">
                    <?php foreach ($bookIDs as $book): ?>
                        <option value="<?php echo $book->bookID ?>"</option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        
        
        <div class="form-group">
            <label class="col-sm-2 control-label">Copy ID</label>
            <div class="col-sm-10">
                <select name="copyID" class="form-control required  ">
                    <?php foreach ($copyIDs as $copy): ?>
                        <option value="<?php echo $copy->copyID ?>"></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
    

        <div class="form-group">
            <label class="col-sm-2 control-label">Ghi chú</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"   name="note">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Checked</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="checked">
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