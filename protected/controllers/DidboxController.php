<?php

class DidboxController extends Controller {

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
                'actions' => array('index', 'create', 'update', 'delete', 'import'),
                'users' => array('@'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new DidMaster('crud');

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['DidMaster'])) {
            $model->attributes = $_POST['DidMaster'];
            if ($model->save()) {
                Yii::app()->user->setFlash("success", common::translateText("ADD_SUCCESS"));
                $this->redirect(array('index'));
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
        $model->scenario = 'crud';
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['DidMaster'])) {
            $model->attributes = $_POST['DidMaster'];
            if ($model->save()) {
                Yii::app()->user->setFlash("success", common::translateText("UPDATE_SUCCESS"));
                $this->redirect(array('index'));
            }
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id = null) {
        if (Yii::app()->request->isAjaxRequest) {
            if (!empty($id)):
                $idsArr = array($id);
            else:
                $idsArr = !empty($_POST["idList"]) ? $_POST["idList"] : array();
            endif;
            $update = false;
            if (!empty($idsArr)) : foreach ($idsArr as $id):
                    $model = $this->loadModel($id, "DidMaster");
                    $model->status = $_REQUEST['status'];
                    $update = ($model->update(false)) ? true : false;
                endforeach;
            endif;

            if ($update) {
                Yii::app()->user->setFlash("success", common::translateText("UPDATE_SUCCESS"));
                echo common::getMessage("success", common::translateText("UPDATE_SUCCESS"));
            } else {
                Yii::app()->user->setFlash("danger", common::translateText("UPDATE_FAIL"));
                echo common::getMessage("danger", common::translateText("UPDATE_FAIL"));
            }
            exit;
        } else {
            throw new CHttpException(400, common::translateText("400_ERROR"));
        }
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $model = new DidMaster('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['DidMaster']))
            $model->attributes = $_GET['DidMaster'];

        $this->render('index', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return DidMaster the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = DidMaster::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param DidMaster $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'user-master-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionImport() {
        if (Yii::app()->request->isPostRequest) {
            $model = new DidMaster("import");
            if (isset($_POST['ajax']) && $_POST['ajax'] === 'import-form') {
                echo CActiveForm::validate($model);
                Yii::app()->end();
            }
            if (isset($_FILES['DidMaster'])) {
                $model->attributes = $_POST['Didmaster'];
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
                            $model = new DidMaster();
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
                            $model = new DidMaster();
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
