<?php

/**
 * This is the model class for table "user_master".
 *
 * The followings are the available columns in table 'user_master':
 * @property integer $user_master_id
 * @property string $username
 * @property string $password
 * @property string $user_ip
 * @property string $account_type
 * @property string $user_type
 * @property integer $outbound_concurrent_call
 * @property integer $user_cps
 * @property integer $user_package_id
 * @property string $user_created_date
 * @property string $user_updated_date
 */
class UserMaster extends CActiveRecord {

    public $pageSize;
    public $credit=0;
    public $first_name;
    public $last_name;
    public $phone_number;
    public $invoice_email_address;
    public $user_email_address;
    public $invoice_type;
    public $user_status;
    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'user_master';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('username, password, user_ip, user_type,account_type,credit,outbound_concurrent_call,first_name,last_name,invoice_email_address,user_email_address,user_status,invoice_type', 'required'),
            array('outbound_concurrent_call, user_cps, user_package_id', 'numerical', 'integerOnly' => true),
            array('credit', 'type', 'type'=>'float'),
            array('user_email_address,invoice_email_address','email'),
            array('username','unique', 'message'=>'This username already exists.'),
            array('username', 'length', 'min' => 12),
            array('password', 'length', 'min' => 10),
            array('username', 'length', 'max' => 100),
            array('password', 'length', 'max' => 50),
            array('user_ip', 'length', 'max' => 30),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('user_master_id, username, password, user_ip, account_type, user_type, outbound_concurrent_call, user_cps, user_package_id, user_created_date, user_updated_date', 'safe', 'on' => 'search'),
            array("pageSize,credit,first_name,last_name,invoice_email_address,user_email_address,user_status,invoice_type", "safe")
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
     return array(
                'user_balance' => array(self::HAS_ONE, 'UserBalanceDetails', array('user_id'=>'user_master_id')),
                'user_details' => array(self::HAS_ONE, 'UserDetails', array('users_id'=>'user_master_id')),
                );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'user_master_id' => 'User Master',
            'username' => 'USERNAME',
            'password' => 'PASSWORD',
            'user_ip' => 'USER IP',
            'account_type' => 'ACCOUNT TYPE',
            'user_type' => 'USER TYPE',
            'outbound_concurrent_call' => 'OUTCALL LIMIT',
            'user_cps' => 'CPS',
            'user_package_id' => 'PACKAGE',
            'user_created_date' => 'User Created Date',
            'user_updated_date' => 'User Updated Date',
            'credit' => 'CREDIT',
            'first_name'=> 'FIRST NAME',
	    'last_name'=> 'LAST NAME',
	    'phone_number'=> 'PHONE NUMBER',
	    'invoice_email_address'=> 'INVOICE EMAIL',
	    'user_email_address'=> 'USER EMAIL',
	    'invoice_type'=> 'INVOICE TYPE',
	    'user_status'=> 'USER STATUS',
        );
    }

    protected function beforeSave() {
        if ($this->isNewRecord):
            $this->user_created_date = common::getDateTime();
            $this->password = md5($this->password);
        else:
            $this->user_updated_date = common::getDateTime();
        endif;
        return parent::beforeSave();
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;
        $criteria->compare('username', $this->user_master_id, true, "OR");
        $criteria->compare('user_ip', $this->user_master_id, true, "OR");
        $criteria->compare('account_type', $this->user_master_id, true, "OR");
        $criteria->compare('user_type', $this->user_master_id, true, "OR");

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'pagination' => array(
                'pageSize' => !empty($this->pageSize)?$this->pageSize:Yii::app()->params->defaultPageSize,
            ),
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return UserMaster the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function getProviderList(){
        return CHtml::ListData(UserMaster::model()->findAllByAttributes(array("user_type"=>"provider")), 'user_master_id', 'username');
    }
    public function getUserList(){
        return CHtml::ListData(UserMaster::model()->findAllByAttributes(array("user_type"=>"customer")), 'user_master_id', 'username');
    }
    
}
