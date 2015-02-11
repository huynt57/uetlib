<script type="text/javascript">
    function getInfoUserName(id) {
        $("#result-student-name").html("<h4>Loading .... </h4>");
        $.get("<?php echo Yii::app()->createUrl('search/detailuser?id=') ?>" + id, function(data) {

            $("#result-student-name").empty();
            $("#result-student-name").html(data);

        });
    }

    function editUser(id) {
        $("#result-edit").html("<h4>Loading .... </h4>");
        $.get("<?php echo Yii::app()->createUrl('search/edituser?id=') ?>" + id, function(data) {
            $("#result-edit").empty();
            $("#result-edit").html(data);

        });
    }

    function addUser() {
        $("#result-add").html("<h4>Loading .... </h4>");
        $.get("<?php echo Yii::app()->createUrl('search/adduser') ?>", function(data) {
            $("#result-add").empty();
            $("#result-add").html(data);

        });
    }

    function deleteUser() {
        alert('Bạn có chắc chắn xóa không ?. Thông tin người dùng này tại các bảng khác cũng sẽ bị xóa. Hành động này sẽ không thể quay lại được !');
    }
</script>
<div class="block">
    <h6 class="heading-hr"><i class="icon-stack"></i>Quản lý người dùng
        <a data-toggle="modal" href="#default-modal-add"><button class="btn btn-success" style="margin-left: 100px;" onclick="addUser()"><i class="icon-file-plus"></i> Thêm user</button></a>
    </h6>

    <div class="datatable-books datatable">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th class="book-number">Mã sinh viên</th>
                    <th>Tên sinh viên</th>
                    <th>Lớp / Đơn vị</th>                  
                    <th>Ngày sinh</th>
                    <th>Giới tính</th>
                    <th>SĐT</th>
                    <th>Level User</th>
                    <th>Ghi chú</th>
                    <th class="text-center">Thông tin chi tiết</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($search_student_name as $res): ?>
                    <tr>
                        <td><a href="#"><strong><?php echo $res->studentID ?></strong></a></td>
                        <td><?php echo $res->studentName ?></td>
                        <td><?php echo $res->grade ?></td>
                        <td><span class="text-semibold"><?php echo $res->birthday ?></span></td>
                        <td><?php echo $res->sex ?></td>
                        <td><?php echo $res->telephone ?></td>
                        <td><?php echo $res->levelUser ?></td>
                        <td><?php echo $res->note ?></td>
                        <td class="text-center"><a data-toggle="modal" role="button" href="#default-modal-student-name" class="btn btn-default btn-xs btn-icon" onclick="getInfoUserName('<?php echo str_replace("/", "_", $res->studentID) ?>')"><i class="icon-file6" ></i></a>
                            <a data-toggle="modal" role="button" href="#default-modal-edit" class="btn btn-default btn-xs btn-icon"  onclick="editUser('<?php echo $res->studentID ?>')"><i class="icon-pencil4" ></i></a>
                            <a data-toggle="modal" role="button" href="<?php echo Yii::app()->createUrl('admin/user/deleteuser?userid=') . $res->studentID ?>" class="btn btn-default btn-xs btn-icon" onclick="deleteUser()"><i class="icon-remove3" ></i></a></td>

                    </tr>   
                <?php endforeach; ?>                
            </tbody>
        </table>
    </div>
</div>

<div id="default-modal-student-name" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Chi tiết người dùng</h4>
            </div>

            <!-- New invoice template -->
            <div class="panel" id="result-student-name" style="margin-left: 10px;">


            </div>   
            <!-- /new invoice template -->

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>

<div id="default-modal-edit" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Sửa đổi thông tin người dùng</h4>
            </div>

            <!-- New invoice template -->
            <div class="panel" id="result-edit" style="margin-left: 10px;">


            </div>   
            <!-- /new invoice template -->

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>

            </div>
        </div>
    </div>
</div>

<div id="default-modal-add" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Thêm một người dùng</h4>
            </div>

            <!-- New invoice template -->
            <div class="panel" id="result-add" style="margin-left: 10px;">


            </div>   
            <!-- /new invoice template -->

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>

            </div>
        </div>
    </div>
</div>

