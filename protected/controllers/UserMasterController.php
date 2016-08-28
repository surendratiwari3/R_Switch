<?php

class UserMasterController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column1';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('index', 'create', 'update', 'admin', 'delete'),
                'users' => array('@'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new UserMaster;
        $balancemodel = new UserBalanceDetails;
        $userdetailmodel = new UserDetails;
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
        if (isset($_POST['UserMaster'])) {
            $model->attributes = $_POST['UserMaster'];
            if ($model->save()) {
            $balancemodel->user_id = $model->user_master_id;
            $userdetailmodel->users_id = $model->user_master_id;
            $userdetailmodel->first_name = $model->first_name;
            $userdetailmodel->last_name = $model->last_name;
            $userdetailmodel->country_id = 10;
            $userdetailmodel->user_address = "INDIA";
            $userdetailmodel->phone_number = "919724810967";
            $userdetailmodel->invoice_email_address = $model->invoice_email_address;
            $userdetailmodel->user_email_address = $model->user_email_address;
            $userdetailmodel->invoice_type = $model->invoice_type;
            $userdetailmodel->user_status = $model->user_status;
            if($model->account_type=="PREPAID")
            {
		 $balancemodel->prepaid_balance = $model->credit;
	    }
	    else
	    {
		  $balancemodel->postpaid_credit = $model->credit;
	    }
	    
	    print_r($userdetailmodel);
	   // die;
	    $balancemodel->save();
	    $userdetailmodel->save();
	    
            Yii::app()->user->setFlash("success", "You have created user successfully.");
            $this->redirect(array('admin', 'id' => $model->user_master_id));
            
            }
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);
        $balancemodel = UserBalanceDetails::model()->findByAttributes(array('user_id' => $id));
	$userdetailmodel = UserDetails::model()->findByAttributes(array('users_id' => $id));
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['UserMaster'])) {
            $model->attributes = $_POST['UserMaster'];
            if ($model->save()) {
		if($model->account_type=="PREPAID")
		{
			$balancemodel->prepaid_balance = $model->credit;
		}
		else
		{
			$balancemodel->postpaid_credit = $model->credit;
		}
		$balancemodel->save();
		$userdetailmodel->first_name = $model->first_name;
		$userdetailmodel->last_name = $model->last_name;
		$userdetailmodel->invoice_email_address = $model->invoice_email_address;
		$userdetailmodel->user_email_address = $model->user_email_address;
		$userdetailmodel->invoice_type = $model->invoice_type;
		$userdetailmodel->user_status = $model->user_status;
		$userdetailmodel->save();
                Yii::app()->user->setFlash("success", "You are updated user successfully.");
                $this->redirect(array('admin', 'id' => $model->user_master_id));
            }
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        //$this->loadModel($id)->delete();
	  $userdetailmodel = UserDetails::model()->findByAttributes(array('users_id' => $id));
	  $userdetailmodel->user_status =2;
	  if($userdetailmodel->save())
	  {
        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
       // if (!isset($_GET['ajax']))
            $this->redirect(array('admin', 'id' => $this->user_master_id));
            }
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('UserMaster');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new UserMaster('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['UserMaster']))
            $model->attributes = $_GET['UserMaster'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return UserMaster the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = UserMaster::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param UserMaster $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'user-master-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
