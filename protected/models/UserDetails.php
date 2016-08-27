<?php

/**
 * This is the model class for table "user_details".
 *
 * The followings are the available columns in table 'user_details':
 * @property integer $users_id
 * @property string $first_name
 * @property string $last_name
 * @property integer $country_id
 * @property string $user_address
 * @property string $phone_number
 * @property string $invoice_email_address
 * @property string $user_email_address
 * @property string $invoice_start_date
 * @property string $invoice_type
 * @property string $user_status
 */
class UserDetails extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user_details';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('first_name, last_name, country_id, user_address, phone_number, invoice_email_address, user_email_address, invoice_start_date', 'required'),
			array('country_id', 'numerical', 'integerOnly'=>true),
			array('first_name, last_name, user_address, invoice_email_address, user_email_address', 'length', 'max'=>100),
			array('phone_number', 'length', 'max'=>30),
			array('invoice_type', 'length', 'max'=>11),
			array('user_status', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('users_id, first_name, last_name, country_id, user_address, phone_number, invoice_email_address, user_email_address, invoice_start_date, invoice_type, user_status', 'safe', 'on'=>'search'),
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
			'users_id' => 'Users',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'country_id' => 'Country',
			'user_address' => 'User Address',
			'phone_number' => 'Phone Number',
			'invoice_email_address' => 'Invoice Email Address',
			'user_email_address' => 'User Email Address',
			'invoice_start_date' => 'Invoice Start Date',
			'invoice_type' => 'Invoice Type',
			'user_status' => 'User Status',
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

		$criteria->compare('users_id',$this->users_id);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('country_id',$this->country_id);
		$criteria->compare('user_address',$this->user_address,true);
		$criteria->compare('phone_number',$this->phone_number,true);
		$criteria->compare('invoice_email_address',$this->invoice_email_address,true);
		$criteria->compare('user_email_address',$this->user_email_address,true);
		$criteria->compare('invoice_start_date',$this->invoice_start_date,true);
		$criteria->compare('invoice_type',$this->invoice_type,true);
		$criteria->compare('user_status',$this->user_status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UserDetails the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
