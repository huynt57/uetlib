<?php

/**
 * This is the model class for table "branchbook".
 *
 * The followings are the available columns in table 'branchbook':
 * @property string $branchID
 * @property string $branchName
 *
 * The followings are the available model relations:
 * @property Books[] $books
 */
class Branchbook extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Branchbook the static model class
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
		return 'branchbook';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('branchID, branchName', 'required'),
			array('branchID', 'length', 'max'=>5),
			array('branchName', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('branchID, branchName', 'safe', 'on'=>'search'),
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
			'books' => array(self::HAS_MANY, 'Books', 'branchID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'branchID' => 'Branch',
			'branchName' => 'Branch Name',
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

		$criteria->compare('branchID',$this->branchID,true);
		$criteria->compare('branchName',$this->branchName,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}