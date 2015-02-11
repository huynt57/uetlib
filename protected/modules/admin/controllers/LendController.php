<?php

class LendController extends Controller {

    public function actionIndex() {
        try {
            $lends = Lend::model()->findAll();
            $this->render('index', array('lends' => $lends));
        } catch (Exception $ex) {
            $ex->getMessage();
        }
    }

    public function actionAddLendForm() {
        try {

            $studentID = StringHelper::filterString($_POST['student']);
            $copyID = StringHelper::filterString($_POST['copy']);
            $endTime = StringHelper::filterString($_POST['endTime']);
            $lentTime = date('Y-m-d H:i:s');
            $nhanvien = StringHelper::filterString($_POST['nhanvien']);

            $lend = new Lend;
            $lend->copyID = $copyID;
            $lend->studentID = $studentID;
            $lend->endTime = $endTime;
            $lend->lentTime = $lentTime;
            $lend->nhanvien = $nhanvien;

            $lend->save(FALSE);

            $this->redirect(Yii::app()->createUrl('admin/lend'));
        } catch (Exception $ex) {
            $ex->getMessage();
        }
    }

    public function actionEditLendForm() {
        try {
            $orderNumber = StringHelper::filterString($_POST['orderNumber']);
            $studentID = StringHelper::filterString($_POST['student']);
            $copyID = StringHelper::filterString($_POST['copy']);
            $endTime = StringHelper::filterString($_POST['endTime']);
            $returnTime = StringHelper::filterString($_POST['returnTime']);
            $lentTime = date('Y-m-d H:i:s');
            $isReturn = StringHelper::filterString($_POST['isReturn']);
            $nhanvien = StringHelper::filterString($_POST['nhanvien']);


            $lend = Lend::model()->findByAttributes(array('orderNumber' => $orderNumber));
            $lend->copyID = $copyID;
            $lend->studentID = $studentID;
            $lend->endTime = $endTime;
            $lend->lentTime = $lentTime;
            $lend->nhanvien = $nhanvien;
            $lend->isReturn = $isReturn;

            $lend->save(FALSE);

            $this->redirect(Yii::app()->createUrl('admin/lend'));
        } catch (Exception $ex) {
            $ex->getMessage();
        }
    }

    public function actionDeleteLend() {
        try {
            $lend_id = StringHelper::filterString($_GET['lendid']);
            $delete_lend = Lend::model()->findByAttributes(array('orderNumber' => $lend_id));         
            $delete_lend->delete();
            $this->redirect(Yii::app()->createURL('admin/lend'));
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
