<script type="text/javascript">
    function getInfoBook(id) {
        $("#result").html("<h4>Loading .... </h4>");
        $.get("<?php echo Yii::app()->createUrl('search/detailbook?id=') ?>" + id, function(data) {
            $("#result").empty();
            $("#result").html(data);

        });
    }

    function editBook(id) {
        $("#result-edit").html("<h4>Loading .... </h4>");
        $.get("<?php echo Yii::app()->createUrl('search/editbook?id=') ?>" + id, function(data) {
            $("#result-edit").empty();
            $("#result-edit").html(data);

        });
    }
    
    function addBook() {
        $("#result-add").html("<h4>Loading .... </h4>");
        $.get("<?php echo Yii::app()->createUrl('search/addbook') ?>", function(data) {
            $("#result-add").empty();
            $("#result-add").html(data);

        });
    }

    function deleteBook() {
        alert('Bạn có chắc chắn xóa không ?.Các sách trong bảng sách, bảng copy và bảng mượn sách đều sẽ bị xóa. Hành động này sẽ không thể quay lại được !');
    }
</script>
<div class="block">
    <h6 class="heading-hr">
        <i class="icon-stack"></i>Quản lý sách
        <a data-toggle="modal" href="#default-modal-add"><button class="btn btn-success" style="margin-left: 100px;" onclick="addBook()"><i class="icon-file-plus"></i> Thêm sách</button></a>
    </h6>
    <div class="datatable-books datatable">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th class="book-number">Mã sách</th>
                    <th>Hình ảnh</th>
                    <th>Tên sách</th>
                    <th class="book-amount">Số lượng</th>
                    <th>Tình trạng</th>
                    <th class="book-cost">Giá</th>
                    <th class="book-expand text-center">Chi tiết</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($books as $book): ?>
                    <tr>
                        <td><strong><?php echo $book['bookID']; ?></strong></td>
                        <td>
                            <div class="thumb">
                                <img alt="" src="http://placehold.it/300" height="150px" width="150px">
                            </div>
                        </td>
                        <td><?php echo $book['bookName'] ?></td>
                        <td><h4><?php echo $book['numbers'] ?></h4></td>
                        <?php
                        $sql2 = "SELECT count(*) AS count_lend FROM lend JOIN copies ON lend.copyID = copies.copyID JOIN books ON books.bookID = copies.copyID WHERE books.bookID = '" . $book['bookID'] . "'";
                        $count_lend = Yii::app()->db->createCommand($sql2)->queryRow();
                        ?>
                        <?php if ($count_lend['count_lend'] >= $book['numbers']): ?>
                            <td><span class="label label-danger"><?php echo 'Hết sách'; ?></span></td>

                        <?php endif; ?>
                        <?php if ($count_lend['count_lend'] < $book['numbers']): ?>
                            <td><span class="label label-success"><?php echo 'Còn sách'; ?></span></td>

                        <?php endif; ?>
                        <td><span class="text-semibold"><?php echo $book['cost'] ?></span></td>
                        <td class="text-center">
                            <a data-toggle="modal" role="button" href="#default-modal" class="btn btn-default btn-xs btn-icon"  onclick="getInfoBook('<?php echo str_replace("/", "_", $book['bookID']) ?>')"><i class="icon-file6" ></i></a>
                            <a data-toggle="modal" role="button" href="#default-modal-edit" class="btn btn-default btn-xs btn-icon"  onclick="editBook('<?php echo str_replace("/", "_", $book['bookID']) ?>')"><i class="icon-pencil4" ></i></a>
                            <a data-toggle="modal" role="button" href="<?php echo Yii::app()->createUrl('admin/document/deletebook?bookid=') . $book['bookID'] ?>" class="btn btn-default btn-xs btn-icon" onclick="deleteBook()"><i class="icon-remove3" ></i></a>
                        </td>

                    </tr>   
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Default modal -->
<div id="default-modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Chi tiết sách</h4>
            </div>

            <!-- New invoice template -->
            <div class="panel" id="result" style="margin-left: 10px;">


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
                <h4 class="modal-title">Sửa đổi thông tin sách</h4>
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
                <h4 class="modal-title">Thêm một cuốn sách</h4>
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

