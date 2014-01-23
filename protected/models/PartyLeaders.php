<?php

/**
 * This is the model class for table "party_leaders".
 *
 * The followings are the available columns in table 'party_leaders':
 * @property string $party_leader_id
 * @property string $person_id
 *
 * The followings are the available model relations:
 * @property Leads[] $leads
 * @property Persons $person
 */
class PartyLeaders extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'party_leaders';
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
			array('party_leader_id, person_id', 'safe', 'on'=>'search'),
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
			'leads' => array(self::HAS_MANY, 'Leads', 'party_leader_id'),
			'person' => array(self::BELONGS_TO, 'Persons', 'person_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'party_leader_id' => Yii::t('app','model.partyLeader.id'), //'Party Leader',
			'person_id' => Yii::t('app','model.partyLeader.person'), //'Person',
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

		$criteria->compare('party_leader_id',$this->party_leader_id,true);
		$criteria->compare('person_id',$this->person_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PartyLeaders the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
