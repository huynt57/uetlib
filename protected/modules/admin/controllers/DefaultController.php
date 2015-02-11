<?php

class DefaultController extends Controller {

    public $headerTitle;

    protected function beforeAction() {
        if (Yii::app()->session['username'] == ""){
            $this->redirect(yii::app()->createUrl('admin/home'));
        } else {
            $this->actionIndex();
        }
    }

    public function actionIndex() {
        $this->headerTitle = "admin";
        $this->render('index');
    }

}
