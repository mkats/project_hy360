<?php

/**
 * This is the model class for table "party_participates_government".
 *
 * The followings are the available columns in table 'party_participates_government':
 * @property string $party_participates_government_id
 * @property string $party_id
 * @property string $government_id
 *
 * The followings are the available model relations:
 * @property Governments $government
 * @property Parties $party
 */
class PartyParticipatesGovernment extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'party_participates_government';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('party_id, government_id', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('party_participates_government_id, party_id, government_id', 'safe', 'on'=>'search'),
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
			'government' => array(self::BELONGS_TO, 'Governments', 'government_id'),
			'party' => array(self::BELONGS_TO, 'Parties', 'party_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'party_participates_government_id' => 'Party Participates Government',
			'party_id' => 'Party',
			'government_id' => 'Government',
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

		$criteria->compare('party_participates_government_id',$this->party_participates_government_id,true);
		$criteria->compare('party_id',$this->party_id,true);
		$criteria->compare('government_id',$this->government_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PartyParticipatesGovernment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
