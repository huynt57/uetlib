<form class="form-horizontal form-bordered validate" id="form-add-book"action="<?php echo Yii::app()->createUrl('admin/user/adduserform') ?>" role="form" method="post" enctype="multipart/form-data" novalidate="novalidate">
    <div class="panel-body">    
        <div class="form-group">
            <label class="col-sm-2 control-label">Mã sinh viên</label>
            <div class="col-sm-10">
                <input type="text" class="form-control required  " name="studentID" >
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">last Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control  " name="lastName" >
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">middle Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control  " name="middleName" >
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">first Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control  " name="firstName" >
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">student Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control required " name="studentName" >
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Đơn vị</label>
            <div class="col-sm-10">
                <input type="text" class="form-control required " name="grade" >
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Giới tính</label>
            <div class="col-sm-10">
                <input type="number" class="form-control  " name="sex" >
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">SĐT</label>
            <div class="col-sm-10">
                <input type="tel" class="form-control  " name="telephone" >
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Ngày sinh</label>
            <div class="col-sm-10">
                <input type="date" class="form-control  " name="birthday" >
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Level User</label>
            <div class="col-sm-10">
                <input type="number" class="form-control  " name="levelUser" >
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Ghi chú</label>
            <div class="col-sm-10">
                <input type="textarea" class="form-control  " name="note" >
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-sm-2 control-label">Pass</label>
            <div class="col-sm-10">
                <input type="text" class="form-control  required" name="pass" >
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