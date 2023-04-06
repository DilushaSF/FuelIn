<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\User $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="user-form well">

    <?php $form = ActiveForm::begin(); ?>
 
    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'username')->textInput() ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>
        </div>

        <div class="col-md-4">
            <?= $form->field($model, 'email')->textInput() ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'user_type_id')->dropDownList([
                '1' => 'Admin', 
                '2' => 'Customer', 
                '3' => 'End User'], 
                ['prompt' => 'Select User Type']) ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'created_date')->passwordInput(['readonly' => true]) ?>
        </div>
    </div>

    <br><br>
    <div class="form-group">
        <?= Html::submitButton('Create user', [
            'class' => $model->isNewRecord ? 'btn btn-block btn-primary' : 'btn btn-block btn-warning',
            'data' => ['confirm' => 'Are you sure want to Save?']
        ]) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php 

$this->registerCss("

    .well {
        border: 1px solid black !important;

    }


    
    h1 {
        font-weight: bold !important;
        text-transform: uppercase !important;
    }



") ?>
