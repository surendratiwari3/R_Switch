<?php

/**
 * This is the model class for table "package_master".
 *
 * The followings are the available columns in table 'package_master':
 * @property integer $package_id
 * @property string $package_name
 * @property string $package_description
 * @property integer $call_rategroup_id
 * @property integer $sms_rategroup_id
 * @property string $created_date
 * @property string $updated_date
 * @property string $package_status
 */
class PackageMaster extends CActiveRecord
{
	public $pageSize = 10;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'package_master';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('package_name, package_description, call_rategroup_id', 'required'),
			array('call_rategroup_id', 'numerical', 'integerOnly'=>true),
			array('package_name', 'length', 'max'=>100),
			array('package_status', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('package_id, package_name, package_description, call_rategroup_id,package_status', 'safe', 'on'=>'search'),
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
		'rategroup' => array(self::BELONGS_TO, 'Rategroup', array('call_rategroup_id'=>'rate_group_id')),
		);
		
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'package_id' => 'Package',
			'package_name' => 'Package Name',
			'package_description' => 'Package Description',
			'call_rategroup_id' => 'Call Rategroup',
			'sms_rategroup_id' => 'Sms Rategroup',
			'created_date' => 'Created Date',
			'updated_date' => 'Updated Date',
			'package_status' => 'Package Status',
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
		$criteria->compare('package_name',$this->package_id,true,"OR");
		$criteria->compare('package_description',$this->package_id,true,"OR");
		$criteria->compare('call_rategroup_id',$this->package_id,true,"OR");
		$criteria->compare('package_status',$this->package_id,true,"OR");

		 return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'pagination' => array(
                'pageSize' => $this->pageSize,
            ),
        ));
	}
	public function getstatus() 
	{
		if ($this->package_status == "0") 
		{
			return "Inactive";
		} 
		else if ($this->package_status == "1") 
		{
			return "Active";
		} 
		else if ($this->package_status == "2") 
		{
			return "Deleted";
		}
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PackageMaster the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
