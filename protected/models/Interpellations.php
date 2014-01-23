<?php

/**
 * This is the model class for table "interpellations".
 *
 * The followings are the available columns in table 'interpellations':
 * @property string $interpellation_id
 * @property string $description
 * @property string $category
 * @property string $parliament_session_id
 * @property string $mp_id
 *
 * The followings are the available model relations:
 * @property AnsweredBy[] $answeredBies
 * @property Mps $mp
 * @property ParliamentSessions $parliamentSession
 */
class Interpellations extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'interpellations';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('description', 'length', 'max'=>300),
			array('category', 'length', 'max'=>50),
			array('parliament_session_id, mp_id', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('interpellation_id, description, category, parliament_session_id, mp_id', 'safe', 'on'=>'search'),
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
			'answeredBies' => array(self::HAS_MANY, 'AnsweredBy', 'interpellation_id'),
			'mp' => array(self::BELONGS_TO, 'Mps', 'mp_id'),
			'parliamentSession' => array(self::BELONGS_TO, 'ParliamentSessions', 'parliament_session_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'interpellation_id' => 'Interpellation',
			'description' => 'Description',
			'category' => 'Category',
			'parliament_session_id' => 'Parliament Session',
			'mp_id' => 'Mp',
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

		$criteria->compare('interpellation_id',$this->interpellation_id,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('category',$this->category,true);
		$criteria->compare('parliament_session_id',$this->parliament_session_id,true);
		$criteria->compare('mp_id',$this->mp_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Interpellations the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
