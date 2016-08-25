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
            array('username, password, user_ip, user_type, user_created_date, user_updated_date', 'required'),
            array('outbound_concurrent_call, user_cps, user_package_id', 'numerical', 'integerOnly' => true),
            array('username', 'length', 'max' => 100),
            array('password', 'length', 'max' => 50),
            array('user_ip', 'length', 'max' => 30),
            array('account_type', 'length', 'max' => 8),
            array('user_type', 'length', 'max' => 12),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('user_master_id, username, password, user_ip, account_type, user_type, outbound_concurrent_call, user_cps, user_package_id, user_created_date, user_updated_date', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'user_master_id' => 'User Master',
            'username' => 'Username',
            'password' => 'Password',
            'user_ip' => 'User Ip',
            'account_type' => 'Account Type',
            'user_type' => 'User Type',
            'outbound_concurrent_call' => 'Outbound Concurrent Call',
            'user_cps' => 'User Cps',
            'user_package_id' => 'User Package',
            'user_created_date' => 'User Created Date',
            'user_updated_date' => 'User Updated Date',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('user_master_id', $this->user_master_id);
        $criteria->compare('username', $this->username, true);
        $criteria->compare('password', $this->password, true);
        $criteria->compare('user_ip', $this->user_ip, true);
        $criteria->compare('account_type', $this->account_type, true);
        $criteria->compare('user_type', $this->user_type, true);
        $criteria->compare('outbound_concurrent_call', $this->outbound_concurrent_call);
        $criteria->compare('user_cps', $this->user_cps);
        $criteria->compare('user_package_id', $this->user_package_id);
        $criteria->compare('user_created_date', $this->user_created_date, true);
        $criteria->compare('user_updated_date', $this->user_updated_date, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'pagination' => array(
                'pageSize' => 20,
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

}
