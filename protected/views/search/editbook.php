<form class="form-horizontal form-bordered" action="<?php echo Yii::app()->createUrl('admin/document/editbookform') ?>" role="form" method="post" enctype="multipart/form-data">
    <div class="panel-body">

        <input type="hidden" class="form-control" placeholder="<?php echo $book_detail['bookID'] ?>" value="<?php echo $book_detail['bookID'] ?>" name="bookID">


        <div class="form-group">
            <label class="col-sm-2 control-label">Tên sách</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="<?php echo $book_detail['bookName'] ?>" value="<?php echo $book_detail['bookName'] ?>" name="bookName">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Hình ảnh</label>
            <div class="col-sm-10">
                <input type="file" class="styled" name="image">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Tác giả</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="<?php echo $book_detail['author'] ?>" value="<?php echo $book_detail['author'] ?>" name="author">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Năm phát hành</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="<?php echo $book_detail['years'] ?>" value="<?php echo $book_detail['years'] ?>" name="years">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Book Type (Loại sách)</label>
            <div class="col-sm-10">

                <select name="book_type" class="form-control">
                    <?php foreach ($book_type_detail as $book_type): ?>
                        <option value="<?php echo $book_type->bookTypeID ?>" <?php if ($book_detail['bookTypeID'] == $book_type->bookTypeID) echo 'selected' ?>><?php echo $book_type->bookTypeName ?></option>

                    <?php endforeach; ?>
                </select>

            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Branch (Chuyên mục)</label>
            <div class="col-sm-10">
                <select name="branch" class="form-control">
                    <?php foreach ($branch_detail as $branch): ?>
                        <option value="<?php echo $branch->branchID ?>" <?php if ($book_detail['branchID'] == $branch->branchID) echo 'selected' ?>><?php echo $branch->branchName ?></option>

                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Số trang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="<?php echo $book_detail['pageNumber'] ?>" value="<?php echo $book_detail['pageNumber'] ?>" name="pageNumber">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Số lượng</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="<?php echo $book_detail['numbers'] ?>" value="<?php echo $book_detail['numbers'] ?>" name="numbers">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Giá</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="<?php echo $book_detail['cost'] ?>" value="<?php echo $book_detail['cost'] ?>" name="cost">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Miêu tả:</label>
            <div class="col-sm-10">
                <textarea rows="5" cols="5" class="form-control" placeholder="<?php echo $book_detail['description'] ?>" value="<?php echo $book_detail['description'] ?>" name="description"></textarea>
            </div>
        </div>

        <div class="form-actions text-right">
            <input type="submit" value="Sửa" class="btn btn-primary">
        </div>

    </div>
</form>