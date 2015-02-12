<?php

class DocumentController extends Controller {

    public function actionIndex() {
        $criteria = new CDbCriteria;
        $total = Books::model()->count();

        $pages = new CPagination($total);
        $pages->pageSize = 32;
        $pages->applyLimit($criteria);

        $books = Books::model()->findAll($criteria);

        $this->render('index', array(
            'books' => $books,
            'pages' => $pages,
        ));
    }

    public function actionDetail() {
        $this->render('detail');
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
