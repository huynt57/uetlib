<form class="form-horizontal form-bordered validate" id="form-add-book"action="<?php echo Yii::app()->createUrl('admin/lend/editlendform') ?>" role="form" method="post" enctype="multipart/form-data" novalidate="novalidate">
    <div class="panel-body">
         <input type="hidden" class="form-control"  value="<?php echo $lend_detail->orderNumber ?>" name="orderNumber">
        <div class="form-group">
            <label class="col-sm-2 control-label">Student ID</label>
            <div class="col-sm-10">

                <select name="student" class="form-control required  ">
                    <?php foreach ($studentIDs as $studentID): ?>
                        <option value="<?php echo $studentID->studentID ?>" <?php if($lend_detail->studentID == $studentID->studentID) echo 'selected'?>><?php echo $studentID->studentID ?></option>

                    <?php endforeach; ?>
                </select>

            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Copy ID</label>
            <div class="col-sm-10">
                <select name="copy" class="form-control required  ">
                    <?php foreach ($copyIDs as $copy): ?>
                        <option value="<?php echo $copy->copyID ?>" <?php if($lend_detail->copyID == $copy->copyID) echo 'selected'?>><?php echo $copy->copyID ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        
        <div class="form-group">
            <label class="col-sm-2 control-label">Thời điểm mượn</label>
            <div class="col-sm-10">
                <input type="date" class="form-control required  " name="lentTime" value="<?php echo date("Y-m-d", strtotime($lend_detail->lentTime))?>">
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-sm-2 control-label">Thời điểm hết hạn</label>
            <div class="col-sm-10">
                <input type="date" class="form-control required  " name="endTime" value="<?php echo date("Y-m-d", strtotime($lend_detail->endTime))?>">
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-sm-2 control-label">Thời điểm trả sách</label>
            <div class="col-sm-10">
                <input type="date" class="form-control required  " name="returnTime" value="<?php echo date("Y-m-d", strtotime($lend_detail->returnTime))?>">
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-sm-2 control-label">Is return</label>
            <div class="col-sm-10">
                <input type="number" class="form-control required  " name="isReturn" value="<?php echo $lend_detail->isReturn;?>">
            </div>
        </div>


        <div class="form-group">
            <label class="col-sm-2 control-label">Nhân viên</label>
            <div class="col-sm-10">
                <input type="number" class="form-control required  " name="nhanvien" value="<?php echo $lend_detail->nhanvien ?>">
            </div>
        </div>

        <div class="form-actions text-right">
            <input type="submit" value="Sửa" class="btn btn-primary">
        </div>

    </div>
</form>
<script>
    $("#form-add-book").validate();
</script>