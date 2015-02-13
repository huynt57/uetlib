<script type="text/javascript">
    function getInfoUserID(id) {
        $("#result-student-id").html("<h4>Loading .... </h4>");
        $.get("<?php echo Yii::app()->createUrl('search/detailuser?id=') ?>" + id, function(data) {

            $("#result-student-id").empty();
            $("#result-student-id").html(data);

        });
    }
</script>
<div class="block">
    <h6 class="heading-hr"><i class="icon-stack"></i>Kết quả tìm kiếm</h6>
    <div class="datatable-books datatable">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th class="book-number">Mã sinh viên</th>
                    <th>Tên sinh viên</th>
                    <th>Lớp / Đơn vị</th>                  
                    <th>Ngày sinh</th>
                    <th>Thông tin chi tiết</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($search_student_id as $res): ?>
                    <tr>
                        <td><a href="#"><strong><?php echo $res->studentID ?></strong></a></td>
                        <td><?php echo $res->studentName ?></td>
                        <td><?php echo $res->grade ?></td>
                        <td><span class="text-semibold"><?php echo $res->birthday ?></span></td>
                        <td class="text-center"><a data-toggle="modal" role="button" href="#default-modal-student-id" class="btn btn-default btn-xs btn-icon" onclick="getInfoUserID('<?php echo str_replace("/", "_", $res->studentID) ?>')"><i class="icon-file6" ></i></a></td>
                    </tr>   
                <?php endforeach; ?>                
            </tbody>
        </table>
    </div>
</div>

<div id="default-modal-student-id" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Chi tiết người dùng</h4>
            </div>

            <!-- New invoice template -->
            <div class="panel" id="result-student-id" style="margin-left: 10px;">


            </div>   
            <!-- /new invoice template -->

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>

