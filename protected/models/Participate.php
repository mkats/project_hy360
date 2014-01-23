<?php

/**
 * This is the model class for table "participate".
 *
 * The followings are the available columns in table 'participate':
 * @property string $participate_id
 * @property string $party_id
 * @property string $parliament_cycle_id
 * @property double $electoral_percentage
 *
 * The followings are the available model relations:
 * @property ParliamentCycles $parliamentCycle
 * @property Parties $party
 */
class Participate extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'participate';
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
			array('party_id, parliament_cycle_id', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('participate_id, party_id, parliament_cycle_id, electoral_percentage', 'safe', 'on'=>'search'),
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
			'parliamentCycle' => array(self::BELONGS_TO, 'ParliamentCycles', 'parliament_cycle_id'),
			'party' => array(self::BELONGS_TO, 'Parties', 'party_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'participate_id' => Yii::t('app','model.participate.id'), //'Participate',
			'party_id' => Yii::t('app','model.participate.party'), //'Party',
			'parliament_cycle_id' => Yii::t('app','model.participate.parliamentCycle'), //'Parliament Cycle',
			'electoral_percentage' => Yii::t('app','model.participate.electoralPercentage'), //'Electoral Percentage',
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

		$criteria->compare('participate_id',$this->participate_id,true);
		$criteria->compare('party_id',$this->party_id,true);
		$criteria->compare('parliament_cycle_id',$this->parliament_cycle_id,true);
		$criteria->compare('electoral_percentage',$this->electoral_percentage);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Participate the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
