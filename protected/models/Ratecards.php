<?php

/**
 * This is the model class for table "ratecards".
 *
 * The followings are the available columns in table 'ratecards':
 * @property integer $ratecard_id
 * @property string $ratecard_name
 * @property string $ratecard_description
 * @property string $created_date
 * @property string $updated_date
 * @property string $ratecard_status
 */
class Ratecards extends CActiveRecord
{
	public $pageSize = 10;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ratecards';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ratecard_name, ratecard_description,ratecard_status', 'required'),
			array('ratecard_name', 'length', 'max'=>100),
			array('ratecard_status', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ratecard_id, ratecard_name, ratecard_description, created_date, updated_date, ratecard_status', 'safe', 'on'=>'search'),
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
			'ratecard_id' => 'Ratecard',
			'ratecard_name' => 'Ratecard Name',
			'ratecard_description' => 'Ratecard Description',
			'created_date' => 'Created Date',
			'updated_date' => 'Updated Date',
			'ratecard_status' => 'Ratecard Status',
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
		$criteria->compare('ratecard_name',$this->ratecard_name,true,"OR");
		$criteria->compare('ratecard_description',$this->ratecard_description,true,"OR");
		//$criteria->compare('created_date',$this->created_date,true);
		//$criteria->compare('updated_date',$this->updated_date,true);
		//$criteria->compare('ratecard_status',$this->ratecard_status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ratecards the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
