<?php

/**
 * This is the model class for table "rategroup_to_ratecard_map".
 *
 * The followings are the available columns in table 'rategroup_to_ratecard_map':
 * @property integer $rategroup_to_ratecard_map_id
 * @property integer $rate_group_id
 * @property integer $ratecard_id
 * @property string $start_date
 * @property string $end_date
 * @property string $start_time
 * @property string $end_time
 * @property integer $gateway_id
 * @property integer $gateway_priority
 * @property integer $gateway_percentage
 */
class RategroupToRatecardMap extends CActiveRecord
{
	public $pageSize = 10;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'rategroup_to_ratecard_map';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rate_group_id, ratecard_id, start_date, end_date, start_time, end_time, gateway_id, gateway_priority, gateway_percentage', 'required'),
			array('rate_group_id, ratecard_id, gateway_id, gateway_priority, gateway_percentage', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('rategroup_to_ratecard_map_id, rate_group_id, ratecard_id, start_date, end_date, start_time, end_time, gateway_id, gateway_priority, gateway_percentage', 'safe', 'on'=>'search'),
			array("pageSize", "safe")
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
			'rategroup_to_ratecard_map_id' => 'Rategroup To Ratecard Map',
			'rate_group_id' => 'Rate Group',
			'ratecard_id' => 'Ratecard',
			'start_date' => 'Start Date',
			'end_date' => 'End Date',
			'start_time' => 'Start Time',
			'end_time' => 'End Time',
			'gateway_id' => 'Gateway',
			'gateway_priority' => 'Gateway Priority',
			'gateway_percentage' => 'Gateway Percentage',
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

		$criteria->compare('rategroup_to_ratecard_map_id',$this->rategroup_to_ratecard_map_id);
		$criteria->compare('rate_group_id',$this->rate_group_id);
		$criteria->compare('ratecard_id',$this->ratecard_id);
		$criteria->compare('start_date',$this->start_date,true);
		$criteria->compare('end_date',$this->end_date,true);
		$criteria->compare('start_time',$this->start_time,true);
		$criteria->compare('end_time',$this->end_time,true);
		$criteria->compare('gateway_id',$this->gateway_id);
		$criteria->compare('gateway_priority',$this->gateway_priority);
		$criteria->compare('gateway_percentage',$this->gateway_percentage);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RategroupToRatecardMap the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
