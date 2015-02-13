<form class="form-horizontal form-bordered" action="<?php echo Yii::app()->createUrl('admin/document/addbookform') ?>" role="form" method="post">
    <div class="panel-body">

        <div class="form-group">
            <label class="col-sm-2 control-label">Mã sách</label>
            <div class="col-sm-10">
                <input type="text" class="form-control required error"   name="bookID">
            </div>
        </div>


        <div class="form-group">
            <label class="col-sm-2 control-label">Tên sách</label>
            <div class="col-sm-10">
                <input type="text" class="form-control required error"   name="bookName">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Hình ảnh</label>
            <div class="col-sm-10">
                <div class="uploader"><input type="file" class="styled"><span class="filename" style="-webkit-user-select: none;">Chưa file nào được chọn</span><span class="action" style="-webkit-user-select: none;">Chọn File</span></div>
            </div>
        </div>
        <div class="uploader"><input type="file" class="styled"><span class="filename" style="-webkit-user-select: none;">No file selected</span><span class="action" style="-webkit-user-select: none;">Choose File</span></div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Tác giả</label>
            <div class="col-sm-10">
                <input type="text" class="form-control required error"   name="author">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Năm phát hành</label>
            <div class="col-sm-10">
                <input type="text" class="form-control required error"  name="years">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Book Type (Loại sách)</label>
            <div class="col-sm-10">

                <select name="book_type" class="form-control required error">
                    <?php foreach ($book_type_detail as $book_type): ?>
                        <option value="<?php echo $book_type->bookTypeID ?>"><?php echo $book_type->bookTypeName ?></option>

                    <?php endforeach; ?>
                </select>

            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Branch (Chuyên mục)</label>
            <div class="col-sm-10">
                <select name="branch" class="form-control required error">
                    <?php foreach ($branch_detail as $branch): ?>
                        <option value="<?php echo $branch->branchID ?>"><?php echo $branch->branchName ?></option>

                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Số trang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control required error" name="pageNumber">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Số lượng</label>
            <div class="col-sm-10">
                <input type="text" class="form-control required error"  name="numbers">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Giá</label>
            <div class="col-sm-10">
                <input type="text" class="form-control required error"  name="cost">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Miêu tả:</label>
            <div class="col-sm-10">
                <textarea rows="5" cols="5" class="form-control required error"  name="description"></textarea>
            </div>
        </div>

        <div class="form-actions text-right">
            <input type="submit" value="Sửa" class="btn btn-primary">
        </div>

    </div>
</form>