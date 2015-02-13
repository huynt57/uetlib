<?php

class DocumentController extends Controller {

    public $headerTitle;

    public function actionIndex() {
        $this->pageTitle = "Thư viện hội sinh viên trường Đại học Công nghệ - Đại học Quốc Gia Hà Nội | uetlib.edu.vn";
        $title = "Thư viện hội sinh viên trường Đại học Công nghệ - Đại học Quốc Gia Hà Nội";
        $des = "Trang web của thư viện hội sinh viên trường Đại học Công nghệ - Đại học Quốc Gia Hà Nội, nơi cung cấp tài liệu hữu ích và tin cậy cho sinh viên UET";
        $image = Yii::app()->getBaseUrl(true) . "/themes/classic/assets/images/logo.png";
        Yii::app()->clientScript->registerMetaTag($title, null, null, array('property' => 'og:title'));
        Yii::app()->clientScript->registerMetaTag($image, null, null, array('property' => 'og:image'));
        Yii::app()->clientScript->registerMetaTag(500, null, null, array('property' => 'og:image:width'));
        Yii::app()->clientScript->registerMetaTag(500, null, null, array('property' => 'og:image:height'));
        Yii::app()->clientScript->registerMetaTag("website", null, null, array('property' => 'og:type'));
        Yii::app()->clientScript->registerMetaTag($des, null, null, array('property' => 'og:description'));
        $this->headerTitle = "Trang chủ";

        $criteria = new CDbCriteria;
        $total = Books::model()->count();

        $pages = new CPagination($total);
        $pages->pageSize = 12;
        $pages->applyLimit($criteria);

        $books = Books::model()->findAll($criteria);

        $this->render('index', array(
            'books' => $books,
            'pages' => $pages,
        ));
    }

    public function actionDetail() {
        try {

            $book_id = $_GET['book_id'];
            $book_id = StringHelper::filterString($book_id);
            $book_id = str_replace('_', '/', $book_id);
            $sql = "SELECT * FROM books JOIN booktype ON books.bookTypeID = booktype.bookTypeID JOIN branchbook ON books.branchID = branchbook.branchID WHERE books.bookID = '" . $book_id . "'";
            $book_detail = Yii::app()->db->createCommand($sql)->queryRow();
            $sql2 = "SELECT count(*) AS count_lend FROM lend JOIN copies ON lend.copyID = copies.copyID JOIN books ON books.bookID = copies.copyID WHERE books.bookID = '" . $book_id . "'";
            $check_remain = Yii::app()->db->createCommand($sql2)->queryRow();
            $this->headerTitle = "Thông tin sách " . $book_detail['bookName'];
            $this->pageTitle = "Thông tin sách " . $book_detail['bookName'] . " | uetlib.edu.vn";
            $title = "Thông tin sách " . $book_detail['bookName'] . " | uetlib.edu.vn";
            $des = $book_detail['description'];
            $image = Yii::app()->getBaseUrl(true) . "/themes/classic/assets/images/logo.png";
            Yii::app()->clientScript->registerMetaTag($title, null, null, array('property' => 'og:title'));
            Yii::app()->clientScript->registerMetaTag($image, null, null, array('property' => 'og:image'));
            Yii::app()->clientScript->registerMetaTag(500, null, null, array('property' => 'og:image:width'));
            Yii::app()->clientScript->registerMetaTag(500, null, null, array('property' => 'og:image:height'));
            Yii::app()->clientScript->registerMetaTag("website", null, null, array('property' => 'og:type'));
            Yii::app()->clientScript->registerMetaTag($des, null, null, array('property' => 'og:description'));

            $this->render('detail', array('book_detail' => $book_detail, 'count_lend' => $check_remain));
        } catch (exception $e) {
            echo $e->getMessage();
        }
    }

    public function actionBookType() {
        try {
            $book_type = $_GET['book_type'];
            $book_type = StringHelper::filterString($book_type);
            $criteria = new CDbCriteria;
            $criteria->condition = "bookTypeID = '" . $book_type . "'";
            $total = Books::model()->count($criteria);
            $pages = new CPagination($total);
            $pages->pageSize = 12;
            $pages->applyLimit($criteria);
            $books = Books::model()->findAll($criteria);

            $this->headerTitle = "Danh mục sách thuộc loại " . $_GET['book_type_name'];
            $this->pageTitle = "Danh mục sách thuộc loại " . $_GET['book_type_name'] . " | uetlib.edu.vn";
            $title = "Danh mục sách thuộc loại " . $_GET['book_type_name'] . " | uetlib.edu.vn";
            $des = "Danh mục sách thuộc loại " . $_GET['book_type_name'] . " | uetlib.edu.vn";
            $image = Yii::app()->getBaseUrl(true) . "/themes/classic/assets/images/logo.png";
            Yii::app()->clientScript->registerMetaTag($title, null, null, array('property' => 'og:title'));
            Yii::app()->clientScript->registerMetaTag($image, null, null, array('property' => 'og:image'));
            Yii::app()->clientScript->registerMetaTag(500, null, null, array('property' => 'og:image:width'));
            Yii::app()->clientScript->registerMetaTag(500, null, null, array('property' => 'og:image:height'));
            Yii::app()->clientScript->registerMetaTag("website", null, null, array('property' => 'og:type'));
            Yii::app()->clientScript->registerMetaTag($des, null, null, array('property' => 'og:description'));

            $this->render('booktype', array(
                'books' => $books,
                'pages' => $pages,
            ));
        } catch (exception $e) {
            echo $e->getMessage();
        }
    }

    public function actionBranchType() {
        try {
            $branch_type = $_GET['branch_type'];
            $branch_type = StringHelper::filterString($branch_type);
            $criteria = new CDbCriteria;
            $criteria->condition = "branchID = '" . $branch_type . "'";
            $total = Books::model()->count($criteria);
            $pages = new CPagination($total);
            $pages->pageSize = 12;
            $pages->applyLimit($criteria);
            $books = Books::model()->findAll($criteria);

            $this->headerTitle = "Danh mục sách thuộc chuyên mục " . $_GET['branch_type_name'];
            $this->pageTitle = "Danh mục sách thuộc chuyên mục " . $_GET['branch_type_name'] . " | uetlib.edu.vn";
            $title = "Danh mục sách thuộc chuyên mục " . $_GET['branch_type_name'] . " | uetlib.edu.vn";
            $des = "Danh mục sách thuộc chuyên mục " . $_GET['branch_type_name'] . " | uetlib.edu.vn";
            $image = Yii::app()->getBaseUrl(true) . "/themes/classic/assets/images/logo.png";
            Yii::app()->clientScript->registerMetaTag($title, null, null, array('property' => 'og:title'));
            Yii::app()->clientScript->registerMetaTag($image, null, null, array('property' => 'og:image'));
            Yii::app()->clientScript->registerMetaTag(500, null, null, array('property' => 'og:image:width'));
            Yii::app()->clientScript->registerMetaTag(500, null, null, array('property' => 'og:image:height'));
            Yii::app()->clientScript->registerMetaTag("website", null, null, array('property' => 'og:type'));
            Yii::app()->clientScript->registerMetaTag($des, null, null, array('property' => 'og:description'));

            $this->render('branchtype', array(
                'books' => $books,
                'pages' => $pages,
            ));
        } catch (exception $e) {
            echo $e->getMessage();
        }
    }

    // Uncomment the following methods and override them if needed
    /*
      public function filters()
      {
      // return the filter configuration for this controller, e.g.:
      return array(
      'inlineFilterName',
      array(
      'class'=>'path.to.FilterClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }

      public function actions()
      {
      // return external action classes, e.g.:
      return array(
      'action1'=>'path.to.ActionClass',
      'action2'=>array(
      'class'=>'path.to.AnotherActionClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }
     */
}
