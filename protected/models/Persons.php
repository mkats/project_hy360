<?php

/**
 * This is the model class for table "persons".
 *
 * The followings are the available columns in table 'persons':
 * @property string $person_id
 * @property string $name
 * @property integer $age
 * @property string $sex
 *
 * The followings are the available model relations:
 * @property Ministers[] $ministers
 * @property Mps[] $mps
 * @property PartyLeaders[] $partyLeaders
 * @property PersonsOccupations[] $personsOccupations
 * @property PrimeMinisters[] $primeMinisters
 */
class Persons extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'persons';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('age', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>50),
			array('sex', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('person_id, name, age, sex', 'safe', 'on'=>'search'),
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
			'ministers' => array(self::HAS_MANY, 'Ministers', 'person_id'),
			'mps' => array(self::HAS_MANY, 'Mps', 'person_id'),
			'partyLeaders' => array(self::HAS_MANY, 'PartyLeaders', 'person_id'),
			'personsOccupations' => array(self::HAS_MANY, 'PersonsOccupations', 'person_id'),
			'primeMinisters' => array(self::HAS_MANY, 'PrimeMinisters', 'person_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'person_id' => Yii::t('app','model.person.id'), //'Person',
			'name' => Yii::t('app','model.person.name'), //'Name',
			'age' => Yii::t('app','model.person.age'), //'Age',
			'sex' => Yii::t('app','model.person.sex'), //'Sex',
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

		$criteria->compare('person_id',$this->person_id,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('age',$this->age);
		$criteria->compare('sex',$this->sex,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Persons the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
