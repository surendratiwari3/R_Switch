<?php

/**
 * This is the model class for table "rategroup".
 *
 * The followings are the available columns in table 'rategroup':
 * @property integer $rate_group_id
 * @property string $rate_group_name
 * @property string $rate_group_description
 * @property string $rategroup_status
 * @property string $rate_group_type
 */
class Rategroup extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'rategroup';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rate_group_name, rate_group_description, rategroup_status, rate_group_type', 'required'),
			array('rate_group_name, rate_group_description', 'length', 'max'=>100),
			array('rategroup_status', 'length', 'max'=>1),
			array('rate_group_type', 'length', 'max'=>4),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('rate_group_id, rate_group_name, rate_group_description, rategroup_status, rate_group_type', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'rate_group_id' => 'Rate Group',
			'rate_group_name' => 'Rate Group Name',
			'rate_group_description' => 'Rate Group Description',
			'rategroup_status' => 'Rategroup Status',
			'rate_group_type' => 'Rate Group Type',
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

		$criteria->compare('rate_group_id',$this->rate_group_id);
		$criteria->compare('rate_group_name',$this->rate_group_name,true);
		$criteria->compare('rate_group_description',$this->rate_group_description,true);
		$criteria->compare('rategroup_status',$this->rategroup_status,true);
		$criteria->compare('rate_group_type',$this->rate_group_type,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Rategroup the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
