<?php

/**
 * This is the model class for table "minister_participates_government".
 *
 * The followings are the available columns in table 'minister_participates_government':
 * @property string $minister_participates_government_id
 * @property string $minister_id
 * @property string $government_id
 * @property string $start_timestamp
 * @property string $end_timestamp
 *
 * The followings are the available model relations:
 * @property Governments $government
 * @property Ministers $minister
 */
class MinisterParticipatesGovernment extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'minister_participates_government';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('minister_id, government_id', 'length', 'max'=>10),
			array('start_timestamp, end_timestamp', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('minister_participates_government_id, minister_id, government_id, start_timestamp, end_timestamp', 'safe', 'on'=>'search'),
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
			'minister' => array(self::BELONGS_TO, 'Ministers', 'minister_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'minister_participates_government_id' => Yii::t('app','model.ministerParticipatesGovernment.id'), //'Minister Participates Government',
			'minister_id' => Yii::t('app','model.ministerParticipatesGovernment.minister'), //'Minister',
			'government_id' => Yii::t('app','model.ministerParticipatesGovernment.government'), //'Government',
			'start_timestamp' => Yii::t('app','model.ministerParticipatesGovernment.startTimestamp'), //'Start Timestamp',
			'end_timestamp' => Yii::t('app','model.ministerParticipatesGovernment.endTimestamp'), //'End Timestamp',
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

		$criteria->compare('minister_participates_government_id',$this->minister_participates_government_id,true);
		$criteria->compare('minister_id',$this->minister_id,true);
		$criteria->compare('government_id',$this->government_id,true);
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
	 * @return MinisterParticipatesGovernment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
