<?php

class BranchController extends Controller {

    public function actionIndex() {
        try {
            $branchs = Branchbook::model()->findAll();
            $this->render('index', array('branchs' => $branchs));
        } catch (Exception $ex) {
            $ex->getMessage();
        }
    }

    public function actionAddBranchForm() {
        try {

            $branch_id = StringHelper::filterString($_POST['branchID']);
            $branch_name = StringHelper::filterString($_POST['branchName']);

            $add_branch = new Branchbook;
            $add_branch->branchID = $branch_id;
            $add_branch->branchName = $branch_name;

            $add_branch->save(FALSE);

            $this->redirect(Yii::app()->createUrl('admin/branch'));
        } catch (Exception $ex) {
            $ex->getMessage();
        }
    }

    public function actionEditBranchForm() {
        try {
            $branch_id_old = StringHelper::filterString($_POST['branchID_old']);

            $branch_id = StringHelper::filterString($_POST['branchID']);
            $branch_name = StringHelper::filterString($_POST['branchName']);

            $edit_branch = Branchbook::model()->findByAttributes(array('branchID' => $branch_id_old));
            $edit_branch->branchID = $branch_id;
            $edit_branch->branchName = $branch_name;

            $edit_branch->save(FALSE);

            $this->redirect(Yii::app()->createUrl('admin/branch'));
        } catch (Exception $ex) {
            $ex->getMessage();
        }
    }

    public function actionDeleteBranch() {
        try {
            $branch_id = StringHelper::filterString($_GET['branchid']);
            $book_deletes = Books::model()->findAllByAttributes(array('branchID' => $branch_id));
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
            $delete_branch = Branchbook::model()->findByAttributes(array('branchID' => $branch_id));
            $delete_branch->delete();
            $this->redirect(Yii::app()->createURL('admin/branch'));
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
