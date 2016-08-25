<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>
<div class="row-fluid">
    <div class="login-box">
        <div class="icons">
            <a href="index.html"><i class="halflings-icon home"></i></a>
            <a href="#"><i class="halflings-icon cog"></i></a>
        </div>
        <h2>Login to your account</h2>

        <div class="form-horizontal ">
            <?php $form = $this->beginWidget('CActiveForm', array(
                'id' => 'login-form',
                'enableClientValidation' => true,
                /*'clientOptions' => array(
                    'validateOnSubmit' => true,
                ),*/
            )); ?>

            <div class="input-prepend" title="Username">
                <span class="add-on"><i class="halflings-icon user"></i></span>
                <?php echo $form->textField($model, 'username', array('class' => 'input-large span10', 'placeholder' => 'enter username')); ?>
                <?php echo $form->error($model, 'username'); ?>
            </div>
            <div class="clearfix"></div>

            <div class="input-prepend" title="Password">
                <span class="add-on"><i class="halflings-icon lock"></i></span>
                <?php echo $form->passwordField($model, 'password', array('class' => 'input-large span10', 'placeholder' => 'enter password')); ?>
                <?php echo $form->error($model, 'password'); ?>
            </div>
            <div class="clearfix"></div>

<!--            <label class="remember" for="remember">--><?php //echo $form->checkBox($model, 'rememberMe'); ?><!--Remember me</label>-->

            <div class="button-login">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
            <div class="clearfix"></div>

            <?php $this->endWidget(); ?>
            <hr>
            <h3>Forgot Password?</h3>

            <p>
                No problem, <a href="#">click here</a> to get a new password.
            </p>
        </div>
        <!--/span-->
    </div>
    <!--/row-->
</div>
	
</body>
</html>
