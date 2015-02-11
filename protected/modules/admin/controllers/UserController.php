<?php

class UserController extends Controller {

    public function actionIndex() {
        try {
            $search_student_name = Users::model()->findAll();
            $this->render('index', array('search_student_name' => $search_student_name));
        } catch (Exception $ex) {
            $ex->getMessage();
        }
    }

    public function actionEditUserForm() {
        try {
            $studentID_old = StringHelper::filterString($_POST['studentID_old']);
            $studentID = StringHelper::filterString($_POST['studentID']);
            $lastName = StringHelper::filterString($_POST['lastName']);
            $firstName = StringHelper::filterString($_POST['firstName']);

            $middleName = StringHelper::filterString($_POST['middleName']);
            $studentName = StringHelper::filterString($_POST['studentName']);

            $grade = StringHelper::filterString($_POST['grade']);
            $sex = StringHelper::filterString($_POST['sex']);

            $telephone = StringHelper::filterString($_POST['telephone']);
            $birthday = StringHelper::filterString($_POST['birthday']);

            $levelUser = StringHelper::filterString($_POST['levelUser']);
            $note = StringHelper::filterString($_POST['note']);
            $pass = StringHelper::filterString($_POST['pass']);

            $user = Users::model()->findByAttributes(array('studentID' => $studentID_old));

            $user->studentID = $studentID;
            $user->lastName = $lastName;
            $user->firstName = $firstName;
            $user->middleName = $middleName;
            $user->studentName = $studentName;
            $user->grade = $grade;
            $user->sex = $sex;
            $user->telephone = $telephone;
            $user->birthday = $birthday;
            $user->levelUser = $levelUser;
            $user->note = $note;
            $user->pass = $pass;

            $user->save(FALSE);

            $this->redirect(Yii::app()->createUrl('admin/user'));
        } catch (Exception $ex) {
            $ex->getMessage();
        }
    }

    public function actionAddUserForm() {
        try {
            $studentID = StringHelper::filterString($_POST['studentID']);
            $lastName = StringHelper::filterString($_POST['lastName']);
            $firstName = StringHelper::filterString($_POST['firstName']);

            $middleName = StringHelper::filterString($_POST['middleName']);
            $studentName = StringHelper::filterString($_POST['studentName']);

            $grade = StringHelper::filterString($_POST['grade']);
            $sex = StringHelper::filterString($_POST['sex']);

            $telephone = StringHelper::filterString($_POST['telephone']);
            $birthday = StringHelper::filterString($_POST['birthday']);

            $levelUser = StringHelper::filterString($_POST['levelUser']);
            $note = StringHelper::filterString($_POST['note']);
            $pass = StringHelper::filterString($_POST['pass']);

            $user = new Users;

            $user->studentID = $studentID;
            $user->lastName = $lastName;
            $user->firstName = $firstName;
            $user->middleName = $middleName;
            $user->studentName = $studentName;
            $user->grade = $grade;
            $user->sex = $sex;
            $user->telephone = $telephone;
            $user->birthday = $birthday;
            $user->levelUser = $levelUser;
            $user->note = $note;
            $user->pass = $pass;

            $user->save(FALSE);

            $this->redirect(Yii::app()->createUrl('admin/user'));
        } catch (Exception $ex) {
            $ex->getMessage();
        }
    }

    public function actionDeleteUser() {
        try {
            $user_id = StringHelper::filterString($_GET['userid']);
            $user_delete = Users::model()->findByAttributes(array('studentID' => $user_id));
            $delete_lends = Lend::model()->findAllByAttributes(array('studentID' => $user_id));
            foreach ($delete_lends as $delete_lend) {
                $delete_lend->delete();
            }
            $user_delete->delete();
            $this->redirect(Yii::app()->createUrl('admin/user'));
        } catch (Exception $ex) {
            $ex->getMessage();
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
