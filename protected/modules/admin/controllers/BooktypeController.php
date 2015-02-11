<?php

class BooktypeController extends Controller {
   
    public function actionIndex() {
        try {
            $booktypes = Booktype::model()->findAll();
            $this->render('index', array('booktypes' => $booktypes));
        } catch (Exception $ex) {
            $ex->getMessage();
        }
    }

    public function actionAddBookTypeForm() {
        try {

            $book_type_id = StringHelper::filterString($_POST['bookTypeID']);
            $branch_name = StringHelper::filterString($_POST['bookTypeName']);

            $add_branch = new Booktype;
            $add_branch->bookTypeID = $book_type_id;
            $add_branch->bookTypeName = $branch_name;

            $add_branch->save(FALSE);

            $this->redirect(Yii::app()->createUrl('admin/booktype'));
        } catch (Exception $ex) {
            $ex->getMessage();
        }
    }

    public function actionEditBookTypeForm() {
        try {
            $book_type_id_old = StringHelper::filterString($_POST['bookTypeID_old']);

            $book_type_id = StringHelper::filterString($_POST['bookTypeID']);
            $branch_name = StringHelper::filterString($_POST['bookTypeName']);

            $edit_booktype = Booktype::model()->findByAttributes(array('bookTypeID' => $book_type_id_old));
            $edit_booktype->bookTypeID = $book_type_id;
            $edit_booktype->bookTypeName = $branch_name;

            $edit_booktype->save(FALSE);


            $this->redirect(Yii::app()->createUrl('admin/booktype'));
        } catch (Exception $ex) {
            $ex->getMessage();
        }
    }

    public function actionDeleteBookType() {
        try {
            $book_type_id = StringHelper::filterString($_GET['booktypeid']);
            $book_deletes = Books::model()->findAllByAttributes(array('bookTypeID' => $book_type_id));
            foreach ($book_deletes as $book_delete) {
                $delete_copies = Copies::model()->findAllByAttributes(array('bookID' => $book_delete->bookID));

                foreach ($delete_copies as $delete_copy) {

                    $lends = Lend::model()->findAllByAttributes(array('copyID' => $delete_copy->copyID));
                    foreach ($lends as $lend) {
                        $lend->delete();
                    }
                    $delete_copy->delete();
                }

                $book_delete->delete();
            }
            $delete_branch = Booktype::model()->findByAttributes(array('bookTypeID' => $book_type_id));
            $delete_branch->delete();
            $this->redirect(Yii::app()->createUrl('admin/booktype'));
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
