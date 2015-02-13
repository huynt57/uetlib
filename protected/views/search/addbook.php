<form class="form-horizontal form-bordered validate" action="<?php echo Yii::app()->createUrl('admin/document/addbookform') ?>" role="form" method="post" enctype="multipart/form-data">
    <div class="panel-body">

        <div class="form-group">
            <label class="col-sm-2 control-label">Mã sách</label>
            <div class="col-sm-10">
                <input type="text" class="required form-control"   name="bookID">
            </div>
        </div>


        <div class="form-group">
            <label class="col-sm-2 control-label">Tên sách</label>
            <div class="col-sm-10">
                <input type="text" class="form-control required  "   name="bookName">
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
                <input type="text" class="form-control required  "   name="author">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Năm phát hành</label>
            <div class="col-sm-10">
                <input type="text" class="form-control required  "  name="years">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Book Type (Loại sách)</label>
            <div class="col-sm-10">

                <select name="book_type" class="form-control required  ">
                    <?php foreach ($book_type_detail as $book_type): ?>
                        <option value="<?php echo $book_type->bookTypeID ?>"><?php echo $book_type->bookTypeName ?></option>

                    <?php endforeach; ?>
                </select>

            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Branch (Chuyên mục)</label>
            <div class="col-sm-10">
                <select name="branch" class="form-control required  ">
                    <?php foreach ($branch_detail as $branch): ?>
                        <option value="<?php echo $branch->branchID ?>"><?php echo $branch->branchName ?></option>

                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Số trang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control required  " name="pageNumber">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Số lượng</label>
            <div class="col-sm-10">
                <input type="text" class="form-control required  "  name="numbers">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Giá</label>
            <div class="col-sm-10">
                <input type="text" class="form-control required  "  name="cost">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Miêu tả:</label>
            <div class="col-sm-10">
                <textarea rows="5" cols="5" class="form-control required  "  name="description"></textarea>
            </div>
        </div>

        <div class="form-actions text-right">
            <input type="submit" value="Thêm" class="btn btn-primary">
        </div>

    </div>
</form>