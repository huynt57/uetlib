<?php

class SearchController extends Controller {

    public $headerTitle;

    public function actionIndex() {

        $query = StringHelper::filterString($_GET['query']);
        $option = StringHelper::filterString($_GET['search-option']);

        $this->headerTitle = "Kết quả tìm kiếm cho từ khóa \"" . $query . "\"";
        $this->pageTitle = "Kết quả tìm kiếm cho từ khóa \"" . $query . "\"" . " | uetlib.edu.vn";
        $title = "Kết quả tìm kiếm cho từ khóa \"" . $query . "\"" . " | uetlib.edu.vn";
        $des = "Kết quả tìm kiếm cho từ khóa \"" . $query . "\"" . " | uetlib.edu.vn";
        $image = Yii::app()->getBaseUrl(true) . "/themes/classic/assets/images/logo.png";
        Yii::app()->clientScript->registerMetaTag($title, null, null, array('property' => 'og:title'));
        Yii::app()->clientScript->registerMetaTag($image, null, null, array('property' => 'og:image'));
        Yii::app()->clientScript->registerMetaTag(500, null, null, array('property' => 'og:image:width'));
        Yii::app()->clientScript->registerMetaTag(500, null, null, array('property' => 'og:image:height'));
        Yii::app()->clientScript->registerMetaTag("website", null, null, array('property' => 'og:type'));
        Yii::app()->clientScript->registerMetaTag($des, null, null, array('property' => 'og:description'));


        if ($option == "everything") {
            $search_book_id = $this->SearchBookByID($query);
            $search_book_name = $this->SearchBookByName($query);
            $search_student_id = $this->SearchUserByID($query);
            $search_student_name = $this->SearchUserByName($query);
            $this->render('index', array('search_book_id' => $search_book_id,
                'search_book_name' => $search_book_name,
                'search_student_id' => $search_student_id,
                'search_student_name' => $search_student_name));
        } else if ($option == "books") {
            $search_student_id = "";
            $search_student_name = "";
            $search_book_id = $this->SearchBookByID($query);
            $search_book_name = $this->SearchBookByName($query);
            $this->render('index', array('search_book_id' => $search_book_id,
                'search_book_name' => $search_book_name,
                'search_student_id' => $search_student_id,
                'search_student_name' => $search_student_name));
        } else if ($option == "users") {
            $search_book_id = "";
            $search_book_name = "";
            $search_student_id = $this->SearchUserByID($query);
            $search_student_name = $this->SearchUserByName($query);
            $this->render('index', array('search_book_id' => $search_book_id,
                'search_book_name' => $search_book_name,
                'search_student_id' => $search_student_id,
                'search_student_name' => $search_student_name));
        }
    }

    public function SearchBookByID($query) {
        if ($query != "") {
            $Criteria = new CDbCriteria;
            $Criteria->select = "*";
            $Criteria->addSearchCondition('bookID', $query);
            $result = Books::model()->findAll($Criteria);
            return $result;
        }
    }

    public function SearchBookByName($query) {
        if ($query != "") {
            $Criteria = new CDbCriteria;
            $Criteria->select = "*";
            $Criteria->addSearchCondition('bookName', $query);
            $result = Books::model()->findAll($Criteria);
            return $result;
        }
    }

    public function SearchUserByName($query) {
        if ($query != "") {
            $Criteria = new CDbCriteria;
            $Criteria->select = "*";
            $Criteria->addSearchCondition('studentName', $query);
            $result = Users::model()->findAll($Criteria);
            return $result;
        }
    }

    public function SearchUserByID($query) {
        if ($query != "") {
            $Criteria = new CDbCriteria;
            $Criteria->select = "*";
            $Criteria->addSearchCondition('studentID', $query);
            $result = Users::model()->findAll($Criteria);
            return $result;
        }
    }

    public function actionDetailBook() {
        try {
            $this->layout = "detail_search";
            $book_id = str_replace("_", "/", StringHelper::filterString($_GET['id']));
            $sql = "SELECT * FROM books JOIN booktype ON books.bookTypeID = booktype.bookTypeID JOIN branchbook ON books.branchID = branchbook.branchID WHERE books.bookID = '" . $book_id . "'";
            $book_detail = Yii::app()->db->createCommand($sql)->queryRow();
            $this->render('detailBook', array('book_detail' => $book_detail));
        } catch (exception $e) {
            echo $e->getMessage();
        }
    }

    public function actionDetailUser() {
        $this->layout = "detail_search";
        try {
            $student_id = StringHelper::filterString($_GET['id']);
            $sql = "SELECT * FROM lend JOIN copies ON lend.copyID = copies.copyID JOIN books ON books.bookID = copies.bookID WHERE lend.studentID = '" . $student_id . "' AND returnTime IS NULL";
            $student_detail = Yii::app()->db->createCommand($sql)->queryAll();
            $sql2 = "SELECT * FROM lend JOIN copies ON lend.copyID = copies.copyID JOIN books ON books.bookID = copies.bookID WHERE lend.studentID = '" . $student_id . "' AND returnTime IS NOT NULL";
            $student_detail_return = Yii::app()->db->createCommand($sql2)->queryAll();
            $this->render('detailUser', array('student_detail' => $student_detail, 'studentID' => $student_id, 'student_detail_return' => $student_detail_return));
        } catch (exception $e) {
            echo $e->getMessage();
        }
    }

    public function actionEditBook() {
        try {
            $this->layout = "detail_search";
            $book_id = str_replace("_", "/", StringHelper::filterString($_GET['id']));
            $sql = "SELECT * FROM books JOIN booktype ON books.bookTypeID = booktype.bookTypeID JOIN branchbook ON books.branchID = branchbook.branchID WHERE books.bookID = '" . $book_id . "'";
            $book_detail = Yii::app()->db->createCommand($sql)->queryRow();
            $branch_detail = Branchbook::model()->findAll();
            $book_type_detail = Booktype::model()->findAll();
            $this->render('editbook', array('book_detail' => $book_detail, 'branch_detail' => $branch_detail, 'book_type_detail' => $book_type_detail));
        } catch (exception $e) {
            echo $e->getMessage();
        }
    }

    public function actionAddBook() {
        try {
            $this->layout = "detail_search";
            $branch_detail = Branchbook::model()->findAll();
            $book_type_detail = Booktype::model()->findAll();
            $this->render('addbook', array('branch_detail' => $branch_detail, 'book_type_detail' => $book_type_detail));
        } catch (exception $e) {
            echo $e->getMessage();
        }
    }

    public function actionAddBranch() {
        try {
            $this->layout = "detail_search";
            $this->render('addbranch');
        } catch (exception $e) {
            echo $e->getMessage();
        }
    }

    public function actionEditBranch() {
        try {
            $branch_id = StringHelper::filterString($_GET['id']);
            $this->layout = "detail_search";
            $branch_detail = Branchbook::model()->findByAttributes(array('branchID' => $branch_id));
            $this->render('editbranch', array('branch_detail' => $branch_detail));
        } catch (exception $e) {
            echo $e->getMessage();
        }
    }

    public function actionAddBookType() {
        try {
            $this->layout = "detail_search";
            $this->render('addbooktype');
        } catch (exception $e) {
            echo $e->getMessage();
        }
    }

    public function actionEditBookType() {
        try {
            $book_type_id = StringHelper::filterString($_GET['id']);
            $this->layout = "detail_search";
            $book_type_detail = Booktype::model()->findByAttributes(array('bookTypeID' => $book_type_id));
            $this->render('editbooktype', array('book_type_detail' => $book_type_detail));
        } catch (exception $e) {
            echo $e->getMessage();
        }
    }
    
    public function actionAddLend() {
        try {
            $this->layout = "detail_search";
            $copyIDs = Copies::model()->findAll();
            $studentIDs = Users::model()->findAll();
            $this->render('addlend', array('copyIDs' => $copyIDs, 'studentIDs' => $studentIDs));
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
