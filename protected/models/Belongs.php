<?php

/**
 * This is the model class for table "belongs".
 *
 * The followings are the available columns in table 'belongs':
 * @property string $belongs_id
 * @property string $mp_id
 * @property string $party_id
 * @property string $start_timestamp
 * @property string $end_timestamp
 *
 * The followings are the available model relations:
 * @property Parties $party
 * @property Mps $mp
 */
class Belongs extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'belongs';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('mp_id, party_id', 'length', 'max'=>10),
			array('start_timestamp, end_timestamp', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('belongs_id, mp_id, party_id, start_timestamp, end_timestamp', 'safe', 'on'=>'search'),
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
			'mp' => array(self::BELONGS_TO, 'Mps', 'mp_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'belongs_id' => Yii::t('app','model.belongs.id'), //'Belongs',
			'mp_id' => Yii::t('app','model.belongs.mp'), //'Mp',
			'party_id' => Yii::t('app','model.belongs.party'), //'Party',
			'start_timestamp' => Yii::t('app','model.belongs.startTimestamp'), //'Start Timestamp',
			'end_timestamp' => Yii::t('app','model.belongs.endTimestamp'), //'End Timestamp',
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

		$criteria->compare('belongs_id',$this->belongs_id,true);
		$criteria->compare('mp_id',$this->mp_id,true);
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
	 * @return Belongs the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
