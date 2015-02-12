<?php

/**
 * This is the model class for table "lend".
 *
 * The followings are the available columns in table 'lend':
 * @property integer $orderNumber
 * @property integer $studentID
 * @property string $copyID
 * @property string $lentTime
 * @property string $endTime
 * @property string $returnTime
 * @property integer $isReturn
 * @property integer $nhanvien
 *
 * The followings are the available model relations:
 * @property Users $student
 * @property Copies $copy
 */
class Lend extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Lend the static model class
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
		return 'lend';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('studentID, copyID, lentTime, endTime, nhanvien', 'required'),
			array('studentID, isReturn, nhanvien', 'numerical', 'integerOnly'=>true),
			array('copyID', 'length', 'max'=>10),
			array('returnTime', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('orderNumber, studentID, copyID, lentTime, endTime, returnTime, isReturn, nhanvien', 'safe', 'on'=>'search'),
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
			'student' => array(self::BELONGS_TO, 'Users', 'studentID'),
			'copy' => array(self::BELONGS_TO, 'Copies', 'copyID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'orderNumber' => 'Order Number',
			'studentID' => 'Student',
			'copyID' => 'Copy',
			'lentTime' => 'Lent Time',
			'endTime' => 'End Time',
			'returnTime' => 'Return Time',
			'isReturn' => 'Is Return',
			'nhanvien' => 'Nhanvien',
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

		$criteria->compare('orderNumber',$this->orderNumber);
		$criteria->compare('studentID',$this->studentID);
		$criteria->compare('copyID',$this->copyID,true);
		$criteria->compare('lentTime',$this->lentTime,true);
		$criteria->compare('endTime',$this->endTime,true);
		$criteria->compare('returnTime',$this->returnTime,true);
		$criteria->compare('isReturn',$this->isReturn);
		$criteria->compare('nhanvien',$this->nhanvien);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}