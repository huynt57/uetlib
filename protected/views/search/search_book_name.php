<script type="text/javascript">
    function getInfoBookName(id) {
        $("#result-book-name").html("<h4>Loading .... </h4>");
        $.get("<?php echo Yii::app()->createUrl('search/detailbook?id=') ?>" + id, function(data) {

            $("#result-book-name").empty();
            $("#result-book-name").html(data);

        });
    }
</script>
<div class="block">
    <h6 class="heading-hr"><i class="icon-stack"></i>Kết quả tìm kiếm</h6>
    <div class="datatable-books datatable">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th class="book-number">Mã sách</th>
                    <th>Hình ảnh</th>
                    <th>Tên sách</th>
<!--                    <th class="book-amount">Số lượng</th>-->
                    <th>Tình trạng</th>
                    <th class="book-cost">Giá</th>
                    <th class="book-expand text-center">Chi tiết</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($search_book_name as $res): ?>
                    <tr>
                        <td><a href="invoice.html"><strong><?php echo $res->bookID ?></strong></a></td>
                        <td>
                            <div class="thumb">
                                <img alt="" src="http://placehold.it/300" height="150px" width="150px">
                            </div>
                        </td>
                        <td><?php echo $res->bookName ?></td>
    <!--                        <td><h4><?php //echo $res->numbers   ?></h4></td>-->
                        <?php
                        $sql2 = "SELECT count(*) AS count_lend FROM lend JOIN copies ON lend.copyID = copies.copyID JOIN books ON books.bookID = copies.copyID WHERE books.bookID = '" . $res->bookID . "'";
                        $count_lend = Yii::app()->db->createCommand($sql2)->queryRow();
                        ?>
                        <?php if ($count_lend['count_lend'] >= $res->numbers): ?>
                            <td><span class="label label-danger"><?php echo 'Hết sách'; ?></span></td>

                        <?php endif; ?>
                        <?php if ($count_lend['count_lend'] < $res->numbers): ?>
                            <td><span class="label label-success"><?php echo 'Còn sách'; ?></span></td>

                        <?php endif; ?>
                        <td><span class="text-semibold"><?php echo $res->cost ?></span></td>
                        <td class="text-center"><a data-toggle="modal" role="button" href="#default-modal-book-name" class="btn btn-default btn-xs btn-icon" onclick="getInfoBookName('<?php echo str_replace("/", "_", $res->bookID) ?>')"><i class="icon-file6" ></i></a></td>
                    </tr>   
                <?php endforeach; ?>                
            </tbody>
        </table>
    </div>
</div>

<!-- Default modal -->
<div id="default-modal-book-name" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Chi tiết sách</h4>
            </div>

            <!-- New invoice template -->
            <div class="panel" id="result-book-name" style="margin-left: 10px;">


            </div>   
            <!-- /new invoice template -->

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>

            </div>
        </div>
    </div>
</div>
