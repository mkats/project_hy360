<?php

/**
 * This is the model class for table "parties".
 *
 * The followings are the available columns in table 'parties':
 * @property string $party_id
 * @property string $name
 * @property double $electoral_percentage
 *
 * The followings are the available model relations:
 * @property Belongs[] $belongs
 * @property Leads[] $leads
 * @property Participate[] $participates
 * @property PartyParticipatesGovernment[] $partyParticipatesGovernments
 */
class Parties extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'parties';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('electoral_percentage', 'numerical'),
			array('name', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('party_id, name, electoral_percentage', 'safe', 'on'=>'search'),
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
			'belongs' => array(self::HAS_MANY, 'Belongs', 'party_id'),
			'leads' => array(self::HAS_MANY, 'Leads', 'party_id'),
			'participates' => array(self::HAS_MANY, 'Participate', 'party_id'),
			'partyParticipatesGovernments' => array(self::HAS_MANY, 'PartyParticipatesGovernment', 'party_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'party_id' => 'Party',
			'name' => 'Name',
			'electoral_percentage' => 'Electoral Percentage',
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

		$criteria->compare('party_id',$this->party_id,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('electoral_percentage',$this->electoral_percentage);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Parties the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
