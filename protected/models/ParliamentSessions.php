<?php

/**
 * This is the model class for table "parliament_sessions".
 *
 * The followings are the available columns in table 'parliament_sessions':
 * @property string $parliament_session_id
 * @property string $timestamp
 * @property string $parliament_cycle_id
 *
 * The followings are the available model relations:
 * @property Interpellations[] $interpellations
 * @property ParliamentCycles $parliamentCycle
 */
class ParliamentSessions extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'parliament_sessions';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('parliament_cycle_id', 'length', 'max'=>10),
			array('timestamp', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('parliament_session_id, timestamp, parliament_cycle_id', 'safe', 'on'=>'search'),
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
			'interpellations' => array(self::HAS_MANY, 'Interpellations', 'parliament_session_id'),
			'parliamentCycle' => array(self::BELONGS_TO, 'ParliamentCycles', 'parliament_cycle_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'parliament_session_id' => Yii::t('app','model.parliamentSession.id'), //'Parliament Session',
			'timestamp' => Yii::t('app','model.parliamentSession.timestamp'), //'Timestamp',
			'parliament_cycle_id' => Yii::t('app','model.parliamentSession.parliamentCycle'), //'Parliament Cycle',
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

		$criteria->compare('parliament_session_id',$this->parliament_session_id,true);
		$criteria->compare('timestamp',$this->timestamp,true);
		$criteria->compare('parliament_cycle_id',$this->parliament_cycle_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ParliamentSessions the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
