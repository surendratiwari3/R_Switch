<?php

/**
 * This is the model class for table "did_master".
 *
 * The followings are the available columns in table 'did_master':
 * @property integer $did_id
 * @property string $did_number
 * @property integer $provider_id
 * @property string $status
 * @property string $did_availability
 * @property double $provider_monthly_cost
 * @property double $provider_per_minute_cost
 * @property double $customer_monthly_cost
 * @property double $customer_per_minute_cost
 */
class DidMaster extends CActiveRecord {

    public $pageSize;

    const DEACTIVE = 0;
    const ACTIVE = 1;
    const DELETED = 2;

    public $statusArr = array(self::DEACTIVE => "Deactive", self::ACTIVE => "Active", self::DELETED => "Deleted");
    public $availabilityArr = array(1 => "Weekly", 2 => "Monthly", 3 => "Yearly");
    public $file;

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return DidMaster the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'did_master';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('file', 'file', 'allowEmpty' => false, 'types' => 'csv', 'on' => 'import'),
            array('did_number, provider_id, status, provider_monthly_cost, provider_per_minute_cost, customer_monthly_cost, customer_per_minute_cost', 'required','on'=>'crud'),
            array('provider_id', 'numerical', 'integerOnly' => true),
            array('provider_monthly_cost, provider_per_minute_cost, customer_monthly_cost, customer_per_minute_cost', 'numerical'),
            array('did_number', 'length', 'max' => 30),
            array('status, did_availability', 'length', 'max' => 1),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('pageSize', 'safe'),
            array('file', 'safe'),
            array('did_id, did_number, provider_id, status, did_availability, provider_monthly_cost, provider_per_minute_cost, customer_monthly_cost, customer_per_minute_cost', 'safe', 'on' => 'search'),
        );
    }

    /**
     * Default scope whilefetching results
     */
    public function defaultScope() {
        $alias = $this->getTableAlias(false, false);
        if ($alias == '' || $alias == 't') {
            return array(
                'condition' => "t.status= " . self::DELETED,
            );
        } else {
            return array(
                'condition' => $alias . ".status=" . self::DELETED,
            );
        }
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'providerRel' => array(self::BELONGS_TO, 'UserMaster', 'provider_id')
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'did_id' => 'Did',
            'did_number' => 'Did Number',
            'provider_id' => 'Provider Name',
            'status' => 'Status',
            'did_availability' => 'Availability',
            'provider_monthly_cost' => 'Provider Monthly Cost',
            'provider_per_minute_cost' => 'Provider Per Minute Cost',
            'customer_monthly_cost' => 'Customer Monthly Cost',
            'customer_per_minute_cost' => 'Customer Per Minute Cost',
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

        $criteria->compare('did_number', $this->did_id, true, "OR");
        $criteria->compare('providerRel.username', $this->did_id, true, "OR");
        $criteria->compare('did_availability', $this->did_id, true, "OR");
        $criteria->compare('provider_monthly_cost', $this->did_id, true, "OR");
        $criteria->compare('provider_per_minute_cost', $this->did_id, true, "OR");
        $criteria->compare('customer_monthly_cost', $this->did_id, true, "OR");
        $criteria->compare('customer_per_minute_cost', $this->did_id, true, "OR");
        $criteria->with = array("providerRel");
        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'pagination' => array(
                'pageSize' => !empty($this->pageSize) ? $this->pageSize : Yii::app()->params->defaultPageSize,
            ),
        ));
    }

    public function getDidList($status = null) {
        $criteria = new CDbCriteria();
        $criteria->compare("status", $status);
        return CHtml::ListData(self::findAll($criteria), "did_id", "did_number");
    }

}
