<script type="text/javascript">
    function editBranch(id) {
        $("#result-edit").html("<h4>Loading .... </h4>");
        $.get("<?php echo Yii::app()->createUrl('search/editbranch?id=') ?>" + id, function(data) {
            $("#result-edit").empty();
            $("#result-edit").html(data);

        });
    }

    function addBranch() {
        $("#result-add").html("<h4>Loading .... </h4>");
        $.get("<?php echo Yii::app()->createUrl('search/addbranch') ?>", function(data) {
            $("#result-add").empty();
            $("#result-add").html(data);

        });
    }

    function deleteBranch() {
        alert('Bạn có chắc chắn xóa không ?. Các sách, các bản copy, thông tin mượn thuộc branch này cũng sẽ bị xóa. Hành động này sẽ không thể quay lại được !');
    }
</script>
<div class="block">
    <h6 class="heading-hr">
        <i class="icon-stack"></i>Quản lý Branch
        <a data-toggle="modal" href="#default-modal-add"><button class="btn btn-success" style="margin-left: 100px;" onclick="addBranch()"><i class="icon-file-plus"></i> Thêm branch</button></a>
    </h6>
    <div class="datatable-books datatable">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th class="book-number">Mã branch</th>
                    <th>Tên branch</th>
                    <th class="text-center">Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($branchs as $branch): ?>
                    <tr>
                        <td><strong><?php echo $branch->branchID; ?></strong></td>
                        
                        <td><?php echo $branch->branchName; ?></td>

                        <td class="text-center">
                            <a data-toggle="modal" role="button" href="#default-modal-edit" class="btn btn-default btn-xs btn-icon"  onclick="editBranch('<?php echo $branch->branchID ?>')"><i class="icon-pencil4" ></i></a>
                            <a data-toggle="modal" role="button" href="<?php echo Yii::app()->createUrl('admin/branch/deletebranch?branchid=') . $branch->branchID ?>" class="btn btn-default btn-xs btn-icon" onclick="deleteBranch()"><i class="icon-remove3" ></i></a>
                        </td>

                    </tr>   
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Default modal -->

<div id="default-modal-edit" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Sửa đổi thông tin branch</h4>
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
                <h4 class="modal-title">Thêm một branch</h4>
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

