<div class="panel" style="margin-left: 10px;">
    <div class="table-responsive">
        <table class="table table-striped table-bordered dataTable">
            <thead>
                <tr>
                    <th>Tên sách</th>
                    <th>Miêu tả</th>
                    <th>Tác giả</th>
                    <th>Năm phát hành</th>
                    <th>Số trang</th>
                    <th>Loại sách</th>
                    <th>Chuyên mục</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $book_detail['bookName']; ?></td>
                    <td><?php echo $book_detail['description']; ?></td>
                    <td><?php echo $book_detail['author']; ?></td>
                    <td><?php echo $book_detail['years']; ?></td>3
                    <td><?php echo $book_detail['pageNumber']; ?></td>
                    <td><?php echo $book_detail['bookTypeName']; ?></td>
                    <td><?php echo $book_detail['branchName']; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

