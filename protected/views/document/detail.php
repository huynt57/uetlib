<div class="row">
    <div class="col-lg-2">

        <!-- Profile links -->
        <div class="block">

            <div class="block">
                <div class="thumbnail">
                    <div class="thumb">
                        <img alt="" src="http://placehold.it/300">
                    </div>

                    <div class="caption text-center">
                        <h6><?php echo $book_detail->bookName; ?> <small><?php echo "Tác giả: ".$book_detail->author; ?></small></h6>
                    </div>
                </div>
            </div>
        </div>
        <!-- /profile links -->

    </div>

    <div class="col-lg-10">

        <!-- Page tabs -->
        <div class="tabbable page-tabs">
            <ul class="nav nav-pills nav-justified">
                <li class="active"><a href="#activity" data-toggle="tab"><i class="icon-paragraph-justify2"></i>Thông tin về sách <?php echo $book_detail->bookName; ?></a></li>
               
            </ul>
            <div class="tab-content">

                <!-- First tab -->
                <div class="tab-pane active fade in" id="activity">

                    <!-- Statistics -->
                    <div class="block">
                        <ul class="statistics list-justified">
                            <li>
                                <div class="statistics-info">
                                    <a href="#" title="" class="bg-success"><i class="icon-user-plus"></i></a>
                                    <strong><?php echo $book_detail->pageNumber; ?></strong>
                                </div>
                                <div class="progress progress-micro">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                        <span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <span>Số trang</span>
                            </li>
                            <li>
                                <div class="statistics-info">
                                    <a href="#" title="" class="bg-warning"><i class="icon-point-up"></i></a>
                                    <strong>621,873</strong>
                                </div>
                                <div class="progress progress-micro">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                                        <span class="sr-only">20% Complete</span>
                                    </div>
                                </div>
                                <span>Total clicks</span>
                            </li>
                            <li>
                                <div class="statistics-info">
                                    <a href="#" title="" class="bg-info"><i class="icon-cart-plus"></i></a>
                                    <strong>562</strong>
                                </div>
                                <div class="progress progress-micro">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                        <span class="sr-only">90% Complete</span>
                                    </div>
                                </div>
                                <span>New orders</span>
                            </li>
                            <li>
                                <div class="statistics-info">
                                    <a href="#" title="" class="bg-danger"><i class="icon-coin"></i></a>
                                    <strong>$45,360</strong>
                                </div>
                                <div class="progress progress-micro">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                        <span class="sr-only">70% Complete</span>
                                    </div>
                                </div>
                                <span>General balance</span>
                            </li>
                            <li>
                                <div class="statistics-info">
                                    <a href="#" title="" class="bg-primary"><i class="icon-people"></i></a>
                                    <strong>562K+</strong>
                                </div>
                                <div class="progress progress-micro">
                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                        <span class="sr-only">50% Complete</span>
                                    </div>
                                </div>
                                <span>Total users</span>
                            </li>
                            <li>
                                <div class="statistics-info">
                                    <a href="#" title="" class="bg-info"><i class="icon-facebook"></i></a>
                                    <strong>36,290</strong>
                                </div>
                                <div class="progress progress-micro">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100" style="width: 93%;">
                                        <span class="sr-only">93% Complete</span>
                                    </div>
                                </div>
                                <span>Facebook fans</span>
                            </li>
                        </ul>
                    </div>
                    <!-- /statistics -->

                </div>
            </div>
            <!-- /page tabs -->

        </div>
    </div>
    <!-- /profile grid -->