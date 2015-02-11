<form class="form-horizontal form-bordered validate" id="form-add-book"action="<?php echo Yii::app()->createUrl('admin/user/edituserform') ?>" role="form" method="post" enctype="multipart/form-data" novalidate="novalidate">
    <div class="panel-body">
        
        <input type="hidden" class="form-control  " name="studentID_old" value="<?php echo $user_detail->studentID ?>">
        <div class="form-group">
            <label class="col-sm-2 control-label">Mã sinh viên</label>
            <div class="col-sm-10">
                <input type="text" class="form-control required  " name="studentID" value="<?php echo $user_detail->studentID ?>">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">last Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control  " name="lastName" value="<?php echo $user_detail->lastName ?>">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">middle Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control  " name="middleName" value="<?php echo $user_detail->middleName ?>">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">first Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control  " name="firstName" value="<?php echo $user_detail->firstName ?>">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">student Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control required " name="studentName" value="<?php echo $user_detail->studentName ?>">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Đơn vị</label>
            <div class="col-sm-10">
                <input type="text" class="form-control required " name="grade" value="<?php echo $user_detail->grade ?>">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Giới tính</label>
            <div class="col-sm-10">
                <input type="number" class="form-control  " name="sex" value="<?php echo $user_detail->sex ?>">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">SĐT</label>
            <div class="col-sm-10">
                <input type="tel" class="form-control  " name="telephone" value="<?php echo $user_detail->telephone ?>">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Ngày sinh</label>
            <div class="col-sm-10">
                <input type="date" class="form-control  " name="birthday" value="<?php echo date("Y-m-d", strtotime($user_detail->birthday)) ?>">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Level User</label>
            <div class="col-sm-10">
                <input type="number" class="form-control  " name="levelUser" value="<?php echo $user_detail->levelUser ?>">
            </div>
        </div>



        <div class="form-group">
            <label class="col-sm-2 control-label">Ghi chú</label>
            <div class="col-sm-10">
                <input type="textarea" class="form-control  " name="note" value="<?php echo $user_detail->note ?>">
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-sm-2 control-label">Pass</label>
            <div class="col-sm-10">
                <input type="text" class="form-control required " name="pass" value="<?php echo $user_detail->pass ?>">
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