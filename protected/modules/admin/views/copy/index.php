<script type="text/javascript">
    function editcopy(id) {
        $("#result-edit").html("<h4>Loading .... </h4>");
        $.get("<?php echo Yii::app()->createUrl('search/editcopy?id=') ?>" + id, function(data) {
            $("#result-edit").empty();
            $("#result-edit").html(data);

        });
    }

    function addcopy() {
        $("#result-add").html("<h4>Loading .... </h4>");
        $.get("<?php echo Yii::app()->createUrl('search/addcopy') ?>", function(data) {
            $("#result-add").empty();
            $("#result-add").html(data);

        });
    }

    function deletecopy() {
        alert('Bạn có chắc chắn xóa không ?. Các các bản copy, thông tin mượn thuộc bản copy này cũng sẽ bị xóa. Hành động này sẽ không thể quay lại được !');
    }
</script>
<div class="block">
    <h6 class="heading-hr">
        <i class="icon-stack"></i>Quản lý các bản copy
        <a data-toggle="modal" href="#default-modal-add"><button class="btn btn-success" style="margin-left: 100px;" onclick="addcopy()"><i class="icon-file-plus"></i> Thêm một bản copy</button></a>
    </h6>
    <div class="datatable-books datatable">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th class="book-number">Mã Sách</th>
                    <th>Tên Sách</th>
                    <th>Copy ID</th>
                    <th>Note</th>
                    <th>Checked</th>
                    <th class="text-center">Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($copies as $copy): ?>
                    <tr>
                        <td><strong><?php echo $copy->bookID; ?></strong></td>

                        <td><strong><?php $book_name = Books::model()->findByAttributes(array('bookID' => $copy->bookID));
                echo $book_name->bookName;
                    ?></strong></td>
                        <td><?php echo $copy->copyID; ?></td>
                        <td><?php echo $copy->note; ?></td>
                        <td><?php echo $copy->checked; ?></td>

                        <td class="text-center">
                            <a data-toggle="modal" role="button" href="#default-modal-edit" class="btn btn-default btn-xs btn-icon"  onclick="editcopy('<?php echo $copy->copyID ?>')"><i class="icon-pencil4" ></i></a>
                            <a data-toggle="modal" role="button" href="<?php echo Yii::app()->createUrl('admin/copy/deletecopy?copyid=') . $copy->copyID ?>" class="btn btn-default btn-xs btn-icon" onclick="deletecopy()"><i class="icon-remove3" ></i></a>
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
                <h4 class="modal-title">Sửa đổi thông tin bản copy</h4>
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
                <h4 class="modal-title">Thêm một bản Copy</h4>
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

