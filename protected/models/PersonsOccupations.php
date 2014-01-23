<?php

/**
 * This is the model class for table "persons_occupations".
 *
 * The followings are the available columns in table 'persons_occupations':
 * @property string $persons_occupations_id
 * @property string $subject
 * @property string $person_id
 * @property string $occupation
 *
 * The followings are the available model relations:
 * @property Persons $person
 */
class PersonsOccupations extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'persons_occupations';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('subject, occupation', 'length', 'max'=>100),
			array('person_id', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('persons_occupations_id, subject, person_id, occupation', 'safe', 'on'=>'search'),
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
			'person' => array(self::BELONGS_TO, 'Persons', 'person_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'persons_occupations_id' => Yii::t('app','model.personsOccupation.id'), //'Persons Occupations',
			'subject' => Yii::t('app','model.personsOccupation.subject'), //'The subject category of this occupation',
			'person_id' => Yii::t('app','model.personsOccupation.person'), //'Person',
			'occupation' => Yii::t('app','model.personsOccupation.occupation'), //'Occupation',
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

		$criteria->compare('persons_occupations_id',$this->persons_occupations_id,true);
		$criteria->compare('subject',$this->subject,true);
		$criteria->compare('person_id',$this->person_id,true);
		$criteria->compare('occupation',$this->occupation,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PersonsOccupations the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
