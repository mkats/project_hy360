<?php

/**
 * This is the model class for table "prime_ministers".
 *
 * The followings are the available columns in table 'prime_ministers':
 * @property string $prime_minister_id
 * @property string $person_id
 *
 * The followings are the available model relations:
 * @property GovernmentHasPrimeMinister[] $governmentHasPrimeMinisters
 * @property Persons $person
 */
class PrimeMinisters extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'prime_ministers';
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
			array('prime_minister_id, person_id', 'safe', 'on'=>'search'),
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
			'governmentHasPrimeMinisters' => array(self::HAS_MANY, 'GovernmentHasPrimeMinister', 'prime_minister_id'),
			'person' => array(self::BELONGS_TO, 'Persons', 'person_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'prime_minister_id' => Yii::t('app','model.primeMinister.id'), //'Prime Minister',
			'person_id' => Yii::t('app','model.primeMinister.person'), //'Person',
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

		$criteria->compare('prime_minister_id',$this->prime_minister_id,true);
		$criteria->compare('person_id',$this->person_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PrimeMinisters the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
