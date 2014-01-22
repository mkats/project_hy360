<?php

/**
 * This is the model class for table "answered_by".
 *
 * The followings are the available columns in table 'answered_by':
 * @property string $answered_by_id
 * @property string $interpellation_id
 * @property string $minister_id
 * @property string $timestamp
 * @property string $answer
 *
 * The followings are the available model relations:
 * @property Interpellations $interpellation
 * @property Ministers $minister
 */
class AnsweredBy extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'answered_by';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('interpellation_id, minister_id', 'length', 'max'=>10),
			array('answer', 'length', 'max'=>300),
			array('timestamp', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('answered_by_id, interpellation_id, minister_id, timestamp, answer', 'safe', 'on'=>'search'),
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
			'interpellation' => array(self::BELONGS_TO, 'Interpellations', 'interpellation_id'),
			'minister' => array(self::BELONGS_TO, 'Ministers', 'minister_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'answered_by_id' => 'Answered By',
			'interpellation_id' => 'Interpellation',
			'minister_id' => 'Minister',
			'timestamp' => 'Timestamp',
			'answer' => 'Answer',
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

		$criteria->compare('answered_by_id',$this->answered_by_id,true);
		$criteria->compare('interpellation_id',$this->interpellation_id,true);
		$criteria->compare('minister_id',$this->minister_id,true);
		$criteria->compare('timestamp',$this->timestamp,true);
		$criteria->compare('answer',$this->answer,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AnsweredBy the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
