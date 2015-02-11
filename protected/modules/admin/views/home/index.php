<div class="login-wrapper">
    <form action="<?php echo Yii::app()->createUrl('admin/home/login')?>" role="form" method="post">
        <div class="popup-header">
            <a href="#" class="pull-left"><i class="icon-user-plus"></i></a>
            <span class="text-semibold">Đăng nhập hệ thống quản trị</span>
        </div>
        <div class="well">
            <div class="form-group has-feedback">
                <label>Tên đăng nhập</label>
                <input type="text" class="form-control" placeholder="Username" name="admin_name">
                <i class="icon-users form-control-feedback"></i>
            </div>

            <div class="form-group has-feedback">
                <label>Mật khẩu</label>
                <input type="password" class="form-control" placeholder="Password" name="admin_password">
                <i class="icon-lock form-control-feedback"></i>
            </div>

            <div class="row form-actions">               
                <div class="col-xs-6">
                    <button type="submit" class="btn btn-warning pull-right"><i class="icon-menu2"></i> Đăng nhập</button>
                </div>
            </div>
        </div>
    </form>
</div>  