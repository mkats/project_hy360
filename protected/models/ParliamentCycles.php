<?php

/**
 * This is the model class for table "parliament_cycles".
 *
 * The followings are the available columns in table 'parliament_cycles':
 * @property string $parliament_cycle_id
 * @property string $title
 *
 * The followings are the available model relations:
 * @property Elected[] $electeds
 * @property Governments[] $governments
 * @property ParliamentSessions[] $parliamentSessions
 * @property Participate[] $participates
 */
class ParliamentCycles extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'parliament_cycles';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('parliament_cycle_id, title', 'safe', 'on'=>'search'),
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
			'electeds' => array(self::HAS_MANY, 'Elected', 'parliament_cycle_id'),
			'governments' => array(self::HAS_MANY, 'Governments', 'parliament_cycle_id'),
			'parliamentSessions' => array(self::HAS_MANY, 'ParliamentSessions', 'parliament_cycle_id'),
			'participates' => array(self::HAS_MANY, 'Participate', 'parliament_cycle_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'parliament_cycle_id' => 'Parliament Cycle',
			'title' => 'Title',
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

		$criteria->compare('parliament_cycle_id',$this->parliament_cycle_id,true);
		$criteria->compare('title',$this->title,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ParliamentCycles the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
