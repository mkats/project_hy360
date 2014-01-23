<?php

/**
 * This is the model class for table "portfolios".
 *
 * The followings are the available columns in table 'portfolios':
 * @property string $portfolio_id
 * @property string $subject
 * @property string $start_timestamp
 * @property string $end_timestamp
 * @property string $minister_id
 *
 * The followings are the available model relations:
 * @property Ministers $minister
 */
class Portfolios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'portfolios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('subject', 'length', 'max'=>50),
			array('minister_id', 'length', 'max'=>10),
			array('start_timestamp, end_timestamp', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('portfolio_id, subject, start_timestamp, end_timestamp, minister_id', 'safe', 'on'=>'search'),
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
			'minister' => array(self::BELONGS_TO, 'Ministers', 'minister_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'portfolio_id' => Yii::t('app','model.portfolio.id'), //'Portfolio',
			'subject' => Yii::t('app','model.portfolio.subject'), //'Subject',
			'start_timestamp' => Yii::t('app','model.portfolio.startTimestamp'), //'Start Timestamp',
			'end_timestamp' => Yii::t('app','model.portfolio.endTimestamp'), //'End Timestamp',
			'minister_id' => Yii::t('app','model.portfolio,minister'), //'Minister',
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

		$criteria->compare('portfolio_id',$this->portfolio_id,true);
		$criteria->compare('subject',$this->subject,true);
		$criteria->compare('start_timestamp',$this->start_timestamp,true);
		$criteria->compare('end_timestamp',$this->end_timestamp,true);
		$criteria->compare('minister_id',$this->minister_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Portfolios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
