<?php

/**
 * This is the model class for table "elected".
 *
 * The followings are the available columns in table 'elected':
 * @property string $elected_id
 * @property string $mp_id
 * @property string $parliament_cycle_id
 * @property string $constituency
 * @property string $independence_timestamp
 *
 * The followings are the available model relations:
 * @property ParliamentCycles $parliamentCycle
 * @property Mps $mp
 */
class Elected extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'elected';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('mp_id, parliament_cycle_id', 'length', 'max'=>10),
			array('constituency', 'length', 'max'=>50),
			array('independence_timestamp', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('elected_id, mp_id, parliament_cycle_id, constituency, independence_timestamp', 'safe', 'on'=>'search'),
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
			'mp' => array(self::BELONGS_TO, 'Mps', 'mp_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'elected_id' => Yii::t('app','model.elected.id'), //'Elected',
			'mp_id' => Yii::t('app','model.elected.mp'), //'Mp',
			'parliament_cycle_id' => Yii::t('app','model.elected.parliamentCycle'), //'Parliament Cycle',
			'constituency' => Yii::t('app','model.elected.constituency'), //'The electoral district from where the Parliament member was elected.',
			'independence_timestamp' => Yii::t('app','model.elected.independenceTimestamp'), //'Independence timestamp',
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

		$criteria->compare('elected_id',$this->elected_id,true);
		$criteria->compare('mp_id',$this->mp_id,true);
		$criteria->compare('parliament_cycle_id',$this->parliament_cycle_id,true);
		$criteria->compare('constituency',$this->constituency,true);
		$criteria->compare('independence_timestamp',$this->independence_timestamp,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Elected the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
