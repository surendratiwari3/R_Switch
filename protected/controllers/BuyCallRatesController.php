<?php

class BuyCallRatesController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column1';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
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
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','import'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new BuyCallRates;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['BuyCallRates']))
		{
			$model->attributes=$_POST['BuyCallRates'];
			if($model->save())
				$this->redirect(array('admin'));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['BuyCallRates']))
		{
			$model->attributes=$_POST['BuyCallRates'];
			if($model->save())
				$this->redirect(array('admin'));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('BuyCallRates');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new BuyCallRates('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['BuyCallRates']))
			$model->attributes=$_GET['BuyCallRates'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return BuyCallRates the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=BuyCallRates::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param BuyCallRates $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='buy-call-rates-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	 public function actionImport() {
        if (Yii::app()->request->isPostRequest) {
            $model = new BuyCallRates("import");
            if (isset($_POST['ajax']) && $_POST['ajax'] === 'import-form') {
                echo CActiveForm::validate($model);
                Yii::app()->end();
            }
            if (isset($_FILES['BuyCallRates'])) {
                $model->attributes = $_POST['BuyCallRates'];
                $file = CUploadedFile::getInstance($model, 'file');

                if (!empty($file)) {
                    $model->file = $file->getName();
                    $filePath = Yii::app()->params->uploadsPath . time() . $model->file;
                    $file->saveAs($filePath);
                    $fileHandler = fopen($filePath, 'r');
                    $records = array();
                    $error = null;
                    if ($fileHandler) {
                        $i = 1;
                        while ($line = fgetcsv($fileHandler, 1000)) {
                            $model = new BuyCallRates();
                            $model->did_number = $line[0];
                            $model->status = $line[1];
                            $model->provider_id = $line[2];
                            $model->provider_monthly_cost = $line[3];
                            $model->provider_per_minute_cost = $line[4];
                            $model->customer_monthly_cost = $line[5];
                            $model->customer_per_minute_cost = $line[6];
                            $records[] = $model->attributes;
                            if (!$model->validate()) {
                                $error = "Error in line # " . $i . ", Please correct and try again.";
                                break;
                            }
                            $i++;
                        }
                    }
                    if ($error) {
                        Yii::app()->user->setFlash("danger", $error);
                    } else {
                        foreach ($records as $record) {
                            $model = new BuyCallRates();
                            $model->attributes = $record;
                            $model->save(false);
                        }
                        Yii::app()->user->setFlash("success", "Records imported successfuly.");
                    }
                    unlink($filePath);
                } else {
                    Yii::app()->user->setFlash("danger", "Invalid file.");
                }
                $this->redirect(array("index"));
            }
            $outputJs = Yii::app()->request->isAjaxRequest;
            $this->renderPartial('_form_import', array('model' => $model), false, $outputJs);
        } else
            throw new CHttpException(400, common::translateText("400_ERROR"));
    }

}
