<?php

/**
 * This is the model class for table "leads".
 *
 * The followings are the available columns in table 'leads':
 * @property string $leads_id
 * @property string $party_leader_id
 * @property string $party_id
 * @property string $start_timestamp
 * @property string $end_timestamp
 *
 * The followings are the available model relations:
 * @property Parties $party
 * @property PartyLeaders $partyLeader
 */
class Leads extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'leads';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('party_leader_id, party_id', 'length', 'max'=>10),
			array('start_timestamp, end_timestamp', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('leads_id, party_leader_id, party_id, start_timestamp, end_timestamp', 'safe', 'on'=>'search'),
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
			'party' => array(self::BELONGS_TO, 'Parties', 'party_id'),
			'partyLeader' => array(self::BELONGS_TO, 'PartyLeaders', 'party_leader_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'leads_id' => Yii::t('app','model.leads.id'), //'Leads',
			'party_leader_id' => Yii::t('app','model.leads.partyLeader'), //'Party Leader',
			'party_id' => Yii::t('app','model.leads.party'), //'Party',
			'start_timestamp' => Yii::t('app','model.leads.startTimestamp'), //'Start Timestamp',
			'end_timestamp' => Yii::t('app','model.leads.endTimestamp'), //'End Timestamp',
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

		$criteria->compare('leads_id',$this->leads_id,true);
		$criteria->compare('party_leader_id',$this->party_leader_id,true);
		$criteria->compare('party_id',$this->party_id,true);
		$criteria->compare('start_timestamp',$this->start_timestamp,true);
		$criteria->compare('end_timestamp',$this->end_timestamp,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Leads the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
