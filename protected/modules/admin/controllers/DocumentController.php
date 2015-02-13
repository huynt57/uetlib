<?php

class DocumentController extends Controller {

    public function actionIndex() {
        $sql = "SELECT * FROM books JOIN booktype ON books.bookTypeID = booktype.bookTypeID JOIN branchbook ON books.branchID = branchbook.branchID";
        $book_detail = Yii::app()->db->createCommand($sql)->queryAll();
        $this->render('index', array('books' => $book_detail));
    }

    public function actionEditBookForm() {
        try {
            @$bookID = StringHelper::filterString($_POST['bookID']);
            @$bookName = StringHelper::filterString($_POST['bookName']);
            @$author = StringHelper::filterString($_POST['author']);
            @$years = StringHelper::filterString($_POST['years']);
            @$branch = StringHelper::filterString($_POST['branch']);
            @$bookType = StringHelper::filterString($_POST['book_type']);
            @$pageNumber = StringHelper::filterString($_POST['pageNumber']);
            @$numbers = StringHelper::filterString($_POST['numbers']);
            @$cost = StringHelper::filterString($_POST['cost']);
            @$description = StringHelper::filterString($_POST['description']);

            $edit_book = Books::model()->findByAttributes(array('bookID' => $bookID));
            $edit_book->bookName = $bookName;
            $edit_book->author = $author;
            $edit_book->years = $years;
            $edit_book->branchID = $branch;
            $edit_book->bookTypeID = $bookType;
            $edit_book->pageNumber = $pageNumber;
            $edit_book->numbers = $numbers;
            $edit_book->cost = $cost;
            $edit_book->description = $description;

            $edit_book->save(FALSE);

            $this->redirect(Yii::app()->createURL('admin/document'));
        } catch (exception $e) {
            echo $e->getMessage();
        }
    }

    public function actionDeleteBook() {
        try {
            $book_id = StringHelper::filterString($_GET['bookid']);
            $delete_copied = Copies::model()->findAllByAttributes(array('bookID' => $book_id));
            foreach ($delete_copied as $delete_copy) {
                $delete_lends = Lend::model()->findAllByAttributes(array('copyID' => $delete_copy->copyID));
                foreach ($delete_lends as $delete_lend) {
                    $delete_lend->delete();
                }

                $delete_copy->delete();
            }
            $delete_book = Books::model()->findByAttributes(array('bookID' => $book_id));
            $delete_book->delete();
            $this->redirect(Yii::app()->createURL('admin/document'));
        } catch (exception $e) {
            echo $e->getMessage();
        }
    }

    public function actionAddBookForm() {
        try {
            @$bookID = StringHelper::filterString($_POST['bookID']);
            @$bookName = StringHelper::filterString($_POST['bookName']);
            @$author = StringHelper::filterString($_POST['author']);
            @$years = StringHelper::filterString($_POST['years']);
            @$branch = StringHelper::filterString($_POST['branch']);
            @$bookType = StringHelper::filterString($_POST['book_type']);
            @$pageNumber = StringHelper::filterString($_POST['pageNumber']);
            @$numbers = StringHelper::filterString($_POST['numbers']);
            @$cost = StringHelper::filterString($_POST['cost']);
            @$description = StringHelper::filterString($_POST['description']);


            $edit_book = new Books;
            $edit_book->bookID = $bookID;
            $edit_book->bookName = $bookName;
            $edit_book->author = $author;
            $edit_book->years = $years;
            $edit_book->branchID = $branch;
            $edit_book->bookTypeID = $bookType;
            $edit_book->pageNumber = $pageNumber;
            $edit_book->numbers = $numbers;
            $edit_book->cost = $cost;
            $edit_book->description = $description;

            if (isset($_FILES['image'])) {
                $name = StringHelper::generateRandomString(5).$_FILES['image']['name'];
                $storeFolder = '/uploads/';   //2
                $tempFile = $_FILES['image']['tmp_name'];
                $targetPath = $storeFolder;
                $targetFile = $targetPath . $name;
                $edit_book->image = $targetFile;
                move_uploaded_file($tempFile, Yii::getPathOfAlias('webroot') . '/'.$targetFile); //6
            }
            $edit_book->save(FALSE);

            $this->redirect(Yii::app()->createURL('admin/document'));
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
