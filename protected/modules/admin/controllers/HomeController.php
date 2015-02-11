<?php

class HomeController extends Controller {

    public function actionIndex() {
        Yii::app()->session['username'] = 1;
        $this->layout = 'login';
        $this->render('index');
    }

    public function actionLogin() {
        Yii::app()->session['username'] = 1;
        $request = Yii::app()->request;
        if ($request->isPostRequest && isset($_POST)) {
            try {
                $admin_name = StringHelper::filterString(Yii::app()->request->getPost('admin_name'));
                $admin_password = StringHelper::filterString(Yii::app()->request->getPost('admin_password'));
                $user = Admin::model()->findByAttributes(array('username' => $admin_name));
                if ($user) {

                    //user existed, check password
                    if ($user->password == md5($admin_password)) {
                        Yii::app()->session['username'] = $user->id;
                        $this->redirect(Yii::app()->createUrl('admin'));
                    } else {

                        $this->redirect(Yii::app()->createUrl('admin/home'));
                    }
                    // }
                } else {

                    $this->redirect(Yii::app()->createUrl('admin/home'));
                }
            } catch (exception $e) {

                echo ($e->getMessage());
            }
        }
    }

    public function actionLogout() {
        unset(Yii::app()->session['username']);
        $this->redirect(Yii::app()->createUrl('admin/home'));
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
