<?php

class DocumentController extends Controller {

    public function actionIndex() {
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
            $this->render('detail', array('book_detail' => $book_detail, 'count_lend' => $check_remain));
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
