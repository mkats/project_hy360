<?php

/**
 * This is the model class for table "governments".
 *
 * The followings are the available columns in table 'governments':
 * @property string $government_id
 * @property string $parliament_cycle_id
 * @property string $prime_minister_id
 *
 * The followings are the available model relations:
 * @property PrimeMinisters $primeMinister
 * @property ParliamentCycles $parliamentCycle
 * @property MinisterParticipatesGovernment[] $ministerParticipatesGovernments
 * @property PartyParticipatesGovernment[] $partyParticipatesGovernments
 */
class Governments extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'governments';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('parliament_cycle_id, prime_minister_id', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('government_id, parliament_cycle_id, prime_minister_id', 'safe', 'on'=>'search'),
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
			'primeMinister' => array(self::BELONGS_TO, 'PrimeMinisters', 'prime_minister_id'),
			'parliamentCycle' => array(self::BELONGS_TO, 'ParliamentCycles', 'parliament_cycle_id'),
			'ministerParticipatesGovernments' => array(self::HAS_MANY, 'MinisterParticipatesGovernment', 'government_id'),
			'partyParticipatesGovernments' => array(self::HAS_MANY, 'PartyParticipatesGovernment', 'government_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'government_id' => Yii::t('app','model.government.id'), //'Government',
			'parliament_cycle_id' => Yii::t('app','model.government.parliamentCycle'), //'Parliament Cycle',
			'prime_minister_id' => Yii::t('app','model.government.primeMinister'), //'Prime Minister',
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

		$criteria->compare('government_id',$this->government_id,true);
		$criteria->compare('parliament_cycle_id',$this->parliament_cycle_id,true);
		$criteria->compare('prime_minister_id',$this->prime_minister_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Governments the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
