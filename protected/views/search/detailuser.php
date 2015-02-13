<div class="panel" style="margin-left: 10px;">
    <h6><i class="icon-user"></i> Mã số sinh viên: <?php echo $studentID ?></h6>
    <h6><i class="icon-books"></i> Số sách đang mượn: <?php echo count($student_detail) ?> quyển</h6>
    <?php if (count($student_detail) != 0): ?>
        <h6><i class="icon-paragraph-justify2"></i> Chi tiết sách đang mượn: </h6>

        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên sách</th>
                        <th>Ngày mượn</th>
                        <th>Ngày hết hạn</th>
                        <th>Trạng thái</th>
                    </tr>
                </thead>
                <?php $i = 0; ?>
                <tbody>
                    <?php foreach ($student_detail as $detail): ?>

                        <tr>
                            <td><?php echo ++$i; ?></td>
                            <td><?php echo $detail['bookName']; ?></td>
                            <td><?php echo date("d/m/Y", strtotime($detail['lentTime'])); ?></td>
                            <td><?php echo date("d/m/Y", strtotime($detail['endTime'])); ?></td>

                            <?php if (strtotime("now") <= strtotime($detail['endTime'])): ?>
                                <td><span class="label label-success"><?php echo 'Còn hạn'; ?></span></td>

                            <?php endif; ?>
                            <?php if (strtotime("now") > strtotime($detail['endTime'])): ?>
                                <td><span class="label label-danger"><?php echo 'Hết hạn'; ?></span></td>

                            <?php endif; ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
    <?php if (count($student_detail_return) != 0): ?>
        <h6><i class="icon-books"></i> Số sách đã trả: <?php echo count($student_detail_return) ?> quyển</h6>
        <h6><i class="icon-paragraph-justify2"></i> Chi tiết sách đã trả: </h6>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên sách</th>
                    <th>Ngày mượn</th>
                    <th>Ngày hết hạn</th>
                    <th>Ngày trả</th>
                </tr>
            </thead>
            <tbody>
                <?php $j = 0; ?>
                <?php foreach ($student_detail_return as $detail2): ?>

                    <tr>
                        <td><?php echo ++$j; ?></td>
                        <td><?php echo $detail2['bookName']; ?></td>
                        <td><?php echo date("d/m/Y", strtotime($detail2['lentTime'])); ?></td>
                        <td><?php echo date("d/m/Y", strtotime($detail2['endTime'])); ?></td>
                        <td><?php echo date("d/m/Y", strtotime($detail2['returnTime'])); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>