<?php

/**
 * This is the model class for table "mps".
 *
 * The followings are the available columns in table 'mps':
 * @property string $mp_id
 * @property string $person_id
 *
 * The followings are the available model relations:
 * @property Belongs[] $belongs
 * @property Elected[] $electeds
 * @property Interpellations[] $interpellations
 * @property Persons $person
 */
class Mps extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mps';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('person_id', 'required'),
			array('person_id', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('mp_id, person_id', 'safe', 'on'=>'search'),
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
			'belongs' => array(self::HAS_MANY, 'Belongs', 'mp_id'),
			'electeds' => array(self::HAS_MANY, 'Elected', 'mp_id'),
			'interpellations' => array(self::HAS_MANY, 'Interpellations', 'mp_id'),
			'person' => array(self::BELONGS_TO, 'Persons', 'person_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'mp_id' => 'Mp',
			'person_id' => 'Person',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('mp_id',$this->mp_id,true);
		$criteria->compare('person_id',$this->person_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mps the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
