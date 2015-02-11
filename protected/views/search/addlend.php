<form class="form-horizontal form-bordered validate" id="form-add-book"action="<?php echo Yii::app()->createUrl('admin/lend/addlendform') ?>" role="form" method="post" enctype="multipart/form-data" novalidate="novalidate">
    <div class="panel-body">
        <div class="form-group">
            <label class="col-sm-2 control-label">Student ID</label>
            <div class="col-sm-10">

                <select name="student" class="form-control required  ">
                    <?php foreach ($studentIDs as $studentID): ?>
                        <option value="<?php echo $studentID->studentID ?>"><?php echo $studentID->studentID ?></option>

                    <?php endforeach; ?>
                </select>

            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Copy ID</label>
            <div class="col-sm-10">
                <select name="copy" class="form-control required  ">
                    <?php foreach ($copyIDs as $copy): ?>
                        <option value="<?php echo $copy->copyID ?>"><?php echo $copy->copyID ?></option>

                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Thời điểm hết hạn</label>
            <div class="col-sm-10">
                <input type="datetime-local" class="form-control required  "  name="endTime">
            </div>
        </div>


        <div class="form-group">
            <label class="col-sm-2 control-label">Nhân viên</label>
            <div class="col-sm-10">
                <input type="number" class="form-control required  " name="nhanvien">
            </div>
        </div>

        <div class="form-actions text-right">
            <input type="submit" value="Thêm" class="btn btn-primary">
        </div>

    </div>
</form>
<script>
    $("#form-add-book").validate();
</script>