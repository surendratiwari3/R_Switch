<?php

/**
 * This is the model class for table "sell_call_rates".
 *
 * The followings are the available columns in table 'sell_call_rates':
 * @property integer $sell_call_rates_id
 * @property string $prefix
 * @property string $destination
 * @property double $connection_cost
 * @property double $disconnection_cost
 * @property integer $grace_duration
 * @property integer $min_duration
 * @property double $min_charge
 * @property integer $pulse_duration
 * @property double $pulse_rate
 * @property integer $rate_card_id
 * @property string $rate_status
 * @property string $created_date
 * @property string $updated_date
 */
class SellCallRates extends CActiveRecord
{
	public $pageSize = 10;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sell_call_rates';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('prefix, destination, connection_cost, disconnection_cost, grace_duration, min_duration, min_charge, pulse_duration, pulse_rate, rate_card_id, created_date, updated_date', 'required'),
			array('grace_duration, min_duration, pulse_duration, rate_card_id', 'numerical', 'integerOnly'=>true),
			array('connection_cost, disconnection_cost, min_charge, pulse_rate', 'numerical'),
			array('prefix', 'length', 'max'=>30),
			array('destination', 'length', 'max'=>100),
			array('rate_status', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('sell_call_rates_id, prefix, destination, connection_cost, disconnection_cost, grace_duration, min_duration, min_charge, pulse_duration, pulse_rate, rate_card_id, rate_status, created_date, updated_date', 'safe', 'on'=>'search'),
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
			'sell_call_rates_id' => 'Sell Call Rates',
			'prefix' => 'Prefix',
			'destination' => 'Destination',
			'connection_cost' => 'Connection Cost',
			'disconnection_cost' => 'Disconnection Cost',
			'grace_duration' => 'Grace Duration',
			'min_duration' => 'Min Duration',
			'min_charge' => 'Min Charge',
			'pulse_duration' => 'Pulse Duration',
			'pulse_rate' => 'Pulse Rate',
			'rate_card_id' => 'Rate Card',
			'rate_status' => 'Rate Status',
			'created_date' => 'Created Date',
			'updated_date' => 'Updated Date',
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

		$criteria->compare('sell_call_rates_id',$this->sell_call_rates_id);
		$criteria->compare('prefix',$this->prefix,true);
		$criteria->compare('destination',$this->destination,true);
		$criteria->compare('connection_cost',$this->connection_cost);
		$criteria->compare('disconnection_cost',$this->disconnection_cost);
		$criteria->compare('grace_duration',$this->grace_duration);
		$criteria->compare('min_duration',$this->min_duration);
		$criteria->compare('min_charge',$this->min_charge);
		$criteria->compare('pulse_duration',$this->pulse_duration);
		$criteria->compare('pulse_rate',$this->pulse_rate);
		$criteria->compare('rate_card_id',$this->rate_card_id);
		$criteria->compare('rate_status',$this->rate_status,true);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('updated_date',$this->updated_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SellCallRates the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
