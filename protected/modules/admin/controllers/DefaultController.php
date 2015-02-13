<?php

class DefaultController extends Controller {

    public $headerTitle;

    public function actionIndex() {
        $this->headerTitle = "admin";
        $this->render('index');
    }

}
