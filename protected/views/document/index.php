<div class="row">
    <?php for ($i = 0; $i < count($books) - 1; $i+=2): ?>
        <div class="col-md-2 col-sm-2" style="width: 12.5%;">
            <div class="block">
                <div class="thumbnail">
                    <div class="thumb">
                        <a href="<?php echo $this->createUrl('document/detail',array('book_id'=>  str_replace('/', '_',$books[$i]->bookID), 'book_name' => $books[$i]->bookName)) ?>" title="" ><img alt="" src="http://placehold.it/300" ></a>

                    </div>
                    <div class="caption">
                        <a href="<?php echo $this->createUrl('document/detail',array('book_id'=>  str_replace('/', '_',$books[$i]->bookID), 'book_name' => $books[$i]->bookName)) ?>" title="" class="caption-title"><?php echo $books[$i]->bookName; ?></a>
                    </div>
                </div>
            </div>

            <div class="block">
                <div class="thumbnail">
                    <div class="thumb">
                        <a href="<?php echo $this->createUrl('document/detail',array('book_id'=>  str_replace('/', '_',$books[$i+1]->bookID), 'book_name' => $books[$i+1]->bookName)) ?>" title="" > <img alt="" src="http://placehold.it/300"></a>

                    </div>
                    <div class="caption">
                        <a href="<?php echo $this->createUrl('document/detail',array('book_id'=>  str_replace('/', '_',$books[$i+1]->bookID), 'book_name' => $books[$i+1]->bookName)) ?>" title="" class="caption-title"><?php echo $books[$i + 1]->bookName; ?></a>

                    </div>
                </div>
            </div>
        </div>
    <?php endfor; ?>

</div>
<!-- Pagination -->

<div class="text-center block">

    <?php
    $this->widget('CLinkPager', array(
        'pages' => $pages,
        'maxButtonCount' => 6,
        'htmlOptions' => array('class' => 'pagination',
        ),
        'header' => '',
        'prevPageLabel' => '&larr;',
        'nextPageLabel' => '&rarr;',
        'firstPageLabel' => 'Đầu tiên',
        'lastPageLabel' => 'Cuối cùng',
        'selectedPageCssClass' => 'active',
            )
    )
    ?>

</div>
<!-- /pagination -->

<style>
    .caption-title {
        height: 60px;
        text-align: center;
    }

</style>