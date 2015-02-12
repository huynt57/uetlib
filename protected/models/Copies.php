<?php

/**
 * This is the model class for table "copies".
 *
 * The followings are the available columns in table 'copies':
 * @property string $bookID
 * @property string $copyID
 * @property string $note
 * @property integer $checked
 *
 * The followings are the available model relations:
 * @property Books $book
 * @property Lend[] $lends
 */
class Copies extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Copies the static model class
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
		return 'copies';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('bookID, copyID', 'required'),
			array('checked', 'numerical', 'integerOnly'=>true),
			array('bookID, copyID', 'length', 'max'=>10),
			array('note', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('bookID, copyID, note, checked', 'safe', 'on'=>'search'),
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
			'book' => array(self::BELONGS_TO, 'Books', 'bookID'),
			'lends' => array(self::HAS_MANY, 'Lend', 'copyID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'bookID' => 'Book',
			'copyID' => 'Copy',
			'note' => 'Note',
			'checked' => 'Checked',
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

		$criteria->compare('bookID',$this->bookID,true);
		$criteria->compare('copyID',$this->copyID,true);
		$criteria->compare('note',$this->note,true);
		$criteria->compare('checked',$this->checked);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}