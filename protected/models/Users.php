<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $studentID
 * @property string $lastName
 * @property string $middleName
 * @property string $firstName
 * @property string $studentName
 * @property string $grade
 * @property integer $sex
 * @property string $telephone
 * @property string $birthday
 * @property integer $levelUser
 * @property string $dateBlock
 * @property string $note
 * @property string $pass
 *
 * The followings are the available model relations:
 * @property Lend[] $lends
 */
class Users extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('studentID, studentName, grade, pass', 'required'),
			array('studentID, sex, levelUser', 'numerical', 'integerOnly'=>true),
			array('lastName, middleName, firstName, telephone', 'length', 'max'=>15),
			array('studentName', 'length', 'max'=>50),
			array('grade', 'length', 'max'=>30),
			array('pass', 'length', 'max'=>100),
			array('birthday, dateBlock, note', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('studentID, lastName, middleName, firstName, studentName, grade, sex, telephone, birthday, levelUser, dateBlock, note, pass', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'lends' => array(self::HAS_MANY, 'Lend', 'studentID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'studentID' => 'Student',
			'lastName' => 'Last Name',
			'middleName' => 'Middle Name',
			'firstName' => 'First Name',
			'studentName' => 'Student Name',
			'grade' => 'Grade',
			'sex' => 'Sex',
			'telephone' => 'Telephone',
			'birthday' => 'Birthday',
			'levelUser' => 'Level User',
			'dateBlock' => 'Date Block',
			'note' => 'Note',
			'pass' => 'Pass',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('studentID',$this->studentID);
		$criteria->compare('lastName',$this->lastName,true);
		$criteria->compare('middleName',$this->middleName,true);
		$criteria->compare('firstName',$this->firstName,true);
		$criteria->compare('studentName',$this->studentName,true);
		$criteria->compare('grade',$this->grade,true);
		$criteria->compare('sex',$this->sex);
		$criteria->compare('telephone',$this->telephone,true);
		$criteria->compare('birthday',$this->birthday,true);
		$criteria->compare('levelUser',$this->levelUser);
		$criteria->compare('dateBlock',$this->dateBlock,true);
		$criteria->compare('note',$this->note,true);
		$criteria->compare('pass',$this->pass,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}