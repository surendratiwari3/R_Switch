<?php

/**
 * This is the model class for table "did_subscription".
 *
 * The followings are the available columns in table 'did_subscription':
 * @property integer $did_subscription_id
 * @property integer $user_id
 * @property integer $did_id
 * @property string $did_user_ip
 * @property string $subscription_type
 * @property string $subcription_status
 * @property integer $max_inbound_call
 */
class DidSubscription extends CActiveRecord {

    public $pageSize, $provider_id;

    const DEACTIVE = 0;
    const ACTIVE = 1;
    const DELETED = 2;

    public $statusArr = array(self::DEACTIVE => "Deactive", self::ACTIVE => "Active", self::DELETED => "Deleted");
    public $subscriptionType = array('FREE_DID' => 'FREE_DID', 'MONTHLY_DID' => 'MONTHLY_DID', 'TOLLFREE_DID' => 'TOLLFREE_DID', 'PER_MINUTE_DID' => 'PER_MINUTE_DID');

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return DidSubscription the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'did_subscription';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('user_id, did_id, subscription_type,subcription_status,did_user_ip,max_inbound_call', 'required'),
            array('user_id, did_id, max_inbound_call', 'numerical', 'integerOnly' => true),
            array('did_user_ip', 'length', 'max' => 100),
            array('subscription_type', 'length', 'max' => 14),
            array('subcription_status', 'length', 'max' => 1),
            array('pageSize', 'safe'),
            array('provider_id', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('did_subscription_id, user_id, did_id, did_user_ip, subscription_type, subcription_status, max_inbound_call', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'didRel' => array(self::BELONGS_TO, 'DidMaster', 'did_id'),
            'userRel' => array(self::BELONGS_TO, 'UserMaster', 'user_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'did_subscription_id' => 'Did Subscription',
            'user_id' => 'User',
            'did_id' => 'Did',
            'did_user_ip' => 'Did User Ip',
            'subscription_type' => 'Subscription Type',
            'subcription_status' => 'Status',
            'max_inbound_call' => 'Max Inbound Call',
            'provider_id' => 'Provider'
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('t.did_subscription_id', $this->did_subscription_id);
        $criteria->compare('t.user_id', $this->user_id);
        $criteria->compare('t.did_id', $this->did_id);
        $criteria->compare("didRel.provider_id", $this->provider_id);
        $criteria->compare('t.did_user_ip', $this->did_user_ip);
        $criteria->compare('t.subscription_type', $this->subscription_type);
        $criteria->compare('t.subcription_status', $this->subcription_status);
        $criteria->compare('t.did_user_ip', $this->did_user_ip, true);

        $criteria->with = array("didRel", "userRel");
        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'pagination' => array(
                'pageSize' => !empty($this->pageSize) ? $this->pageSize : Yii::app()->params->defaultPageSize,
            ),
        ));
    }

}
