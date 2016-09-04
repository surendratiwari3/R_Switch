<?php

/**
 * This is the model class for table "buy_call_rates".
 *
 * The followings are the available columns in table 'buy_call_rates':
 * @property integer $buy_call_rates_id
 * @property string $prefix
 * @property string $destination
 * @property double $connection_cost
 * @property double $disconnection_cost
 * @property integer $grace_duration
 * @property integer $min_duration
 * @property double $per_second_charge
 * @property integer $pulse_rate
 * @property integer $pulse_duration
 * @property integer $rate_card_id
 * @property string $rate_status
 * @property string $created_date
 * @property string $updated_date
 */
class BuyCallRates extends CActiveRecord
{
	public $pageSize = 10;
	public $file;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'buy_call_rates';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('file', 'file', 'allowEmpty' => false, 'types' => 'csv', 'on' => 'import'),
			array('prefix, destination, connection_cost, disconnection_cost,rate_status,grace_duration, min_duration, pulse_rate, pulse_duration, rate_card_id', 'required'),
			array('grace_duration, min_duration, pulse_duration, rate_card_id', 'numerical', 'integerOnly'=>true),
			array('connection_cost, disconnection_cost, pulse_rate,', 'numerical'),
			array('prefix', 'length', 'max'=>30),
			array('destination', 'length', 'max'=>100),
			array('rate_status', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('buy_call_rates_id, prefix, destination, connection_cost, disconnection_cost, grace_duration, min_duration, pulse_rate, pulse_duration, rate_card_id, rate_status', 'safe', 'on'=>'search'),
			array("pageSize", "safe"),
			array('file', 'safe'),
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
		'ratecardRelation' => array(self::BELONGS_TO, 'Ratecards', array('rate_card_id'=>'ratecard_id')),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'buy_call_rates_id' => 'Buy Call Rates',
			'prefix' => 'Prefix',
			'destination' => 'Destination',
			'connection_cost' => 'Connection Cost',
			'disconnection_cost' => 'Disconnection Cost',
			'grace_duration' => 'Grace Duration',
			'min_duration' => 'Min Duration',
			'pulse_rate' => 'Pulse Rate',
			'pulse_duration' => 'Pulse Duration',
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

		$criteria->compare('buy_call_rates_id',$this->buy_call_rates_id);
		$criteria->compare('prefix',$this->prefix,true);
		$criteria->compare('destination',$this->destination,true);
		$criteria->compare('connection_cost',$this->connection_cost);
		$criteria->compare('disconnection_cost',$this->disconnection_cost);
		$criteria->compare('grace_duration',$this->grace_duration);
		$criteria->compare('min_duration',$this->min_duration);
		$criteria->compare('pulse_rate',$this->pulse_rate);
		$criteria->compare('pulse_duration',$this->pulse_duration);
		$criteria->compare('rate_card_id',$this->rate_card_id);
		$criteria->compare('rate_status',$this->rate_status,true);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('updated_date',$this->updated_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination' => array(
                'pageSize' => !empty($this->pageSize) ? $this->pageSize : Yii::app()->params->defaultPageSize,
            ),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return BuyCallRates the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	public function getRatecard()
	{ 
		//this function returns the list of categories to use in a dropdown        
		return CHtml::listData(Ratecards::model()->findAll(), 'ratecard_id', 'ratecard_name');
	}
}
