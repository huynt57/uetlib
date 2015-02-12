<?php

/**
 * This is the model class for table "books".
 *
 * The followings are the available columns in table 'books':
 * @property string $bookID
 * @property string $bookName
 * @property string $publisher
 * @property string $author
 * @property integer $years
 * @property string $branchID
 * @property string $bookTypeID
 * @property integer $pageNumber
 * @property integer $numbers
 * @property integer $cost
 * @property string $description
 *
 * The followings are the available model relations:
 * @property Branchbook $branch
 * @property Booktype $bookType
 * @property Copies[] $copies
 */
class Books extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Books the static model class
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
		return 'books';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('bookID, bookName, publisher, author, years, branchID, bookTypeID, pageNumber, numbers, cost', 'required'),
			array('years, pageNumber, numbers, cost', 'numerical', 'integerOnly'=>true),
			array('bookID, bookTypeID', 'length', 'max'=>10),
			array('branchID', 'length', 'max'=>5),
			array('description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('bookID, bookName, publisher, author, years, branchID, bookTypeID, pageNumber, numbers, cost, description', 'safe', 'on'=>'search'),
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
			'branch' => array(self::BELONGS_TO, 'Branchbook', 'branchID'),
			'bookType' => array(self::BELONGS_TO, 'Booktype', 'bookTypeID'),
			'copies' => array(self::HAS_MANY, 'Copies', 'bookID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'bookID' => 'Book',
			'bookName' => 'Book Name',
			'publisher' => 'Publisher',
			'author' => 'Author',
			'years' => 'Years',
			'branchID' => 'Branch',
			'bookTypeID' => 'Book Type',
			'pageNumber' => 'Page Number',
			'numbers' => 'Numbers',
			'cost' => 'Cost',
			'description' => 'Description',
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
		$criteria->compare('bookName',$this->bookName,true);
		$criteria->compare('publisher',$this->publisher,true);
		$criteria->compare('author',$this->author,true);
		$criteria->compare('years',$this->years);
		$criteria->compare('branchID',$this->branchID,true);
		$criteria->compare('bookTypeID',$this->bookTypeID,true);
		$criteria->compare('pageNumber',$this->pageNumber);
		$criteria->compare('numbers',$this->numbers);
		$criteria->compare('cost',$this->cost);
		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}