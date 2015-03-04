
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
                    <th class="text-center">Sách đang mượn</th>
                    <th class="text-center">Sách quá hạn</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($search_student_id as $res): ?>
                    <tr>
                        <td><a href="#"><strong><?php echo $res->studentID ?></strong></a></td>
                        <td><?php echo $res->studentName ?></td>
                        <td><?php echo $res->grade ?></td>
                        <td><span class="text-semibold"><?php echo $res->birthday ?></span></td>
                        <?php
                        $sql = "SELECT * FROM lend JOIN copies ON lend.copyID = copies.copyID JOIN books ON books.bookID = copies.bookID WHERE lend.studentID = '" . $res->studentID . "' AND returnTime IS NULL AND NOW() <= lend.endTime";
                        $student_detail_indate = Yii::app()->db->createCommand($sql)->queryAll();
                        ?>
                        
                        <td><?php foreach ($student_detail_indate as $detail): ?>
                            <?php echo $detail['bookID'] ;?>: <?php echo $detail['bookName'] ;?>
                            <?php echo '</br>';?>
                            <?php endforeach;?>
                        </td>
                        
                        <?php
                        $sql2 = "SELECT * FROM lend JOIN copies ON lend.copyID = copies.copyID JOIN books ON books.bookID = copies.bookID WHERE lend.studentID = '" . $res->studentID . "' AND returnTime IS NULL AND NOW() >lend.endTime";
                        $student_detail_outdate = Yii::app()->db->createCommand($sql2)->queryAll();
                        ?>
                        
                        <td><?php foreach ($student_detail_outdate as $detail2): ?>
                            <?php echo $detail2['bookID'] ;?>: <?php echo $detail2['bookName'] ;?>
                            <?php echo '</br>';?>
                            <?php endforeach;?>
                        </td>
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

