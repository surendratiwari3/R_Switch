<?php

class DidsubscriptionController extends Controller {

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
                'actions' => array('index', 'create', 'update', 'delete'),
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
        $model = new DidSubscription;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['DidSubscription'])) {
            $model->attributes = $_POST['DidSubscription'];
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

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['DidSubscription'])) {
            $model->attributes = $_POST['DidSubscription'];
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
                    $model = $this->loadModel($id, "DidSubscription");
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
        $model = new DidSubscription('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['DidSubscription']))
            $model->attributes = $_GET['DidSubscription'];

        $this->render('index', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return DidSubscription the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = DidSubscription::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param DidSubscription $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'data-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
