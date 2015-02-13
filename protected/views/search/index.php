<div class="tabbable page-tabs">
    <ul class="nav nav-tabs">
        <?php if ($search_book_id != ""): ?><li class="active"><a href="#search-book-id" data-toggle="tab"><i class="icon-table2"></i>Tìm kiếm theo mã sách</a></li><?php endif; ?>
        <?php if ($search_book_name != ""): ?><li><a href="#search-book-name" data-toggle="tab"><i class="icon-checkbox-partial"></i> Tìm kiếm theo tên sách</a></li><?php endif; ?>
        <?php if ($search_student_id != ""): ?><li class="<?php if ($search_book_id == "") echo 'active'; ?>"><a href="#search-student-id" data-toggle="tab"><i class="icon-checkbox-partial"></i> Tìm kiếm theo mã sinh viên</a></li><?php endif; ?>
        <?php if ($search_student_name != ""): ?><li><a href="#search-student-name" data-toggle="tab"><i class="icon-checkbox-partial"></i> Tìm kiếm theo tên sinh viên</a></li><?php endif; ?>
    </ul>
    <div class="tab-content">    
        <div class="tab-pane active fade in" id="search-book-id">
            <?php if ($search_book_id != "") $this->renderPartial('search_book_id', array('search_book_id' => $search_book_id)); ?>
        </div>
        <div class="tab-pane fade in" id="search-book-name">
            <?php if ($search_book_name != "") $this->renderPartial('search_book_name', array('search_book_name' => $search_book_name)); ?>
        </div>
        <?php if ($search_student_id != "" && $search_book_id ==""): ?>
            <div class="tab-pane <?php echo 'active' ?> fade in" id="search-student-id">
                <?php $this->renderPartial('search_student_id', array('search_student_id' => $search_student_id)); ?>
            </div>
        <?php endif; ?>
        <div class="tab-pane fade in" id="search-student-name">
            <?php if ($search_student_name != "") $this->renderPartial('search_student_name', array('search_student_name' => $search_student_name)); ?>
        </div>
    </div>
</div>

