<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\oportunidades */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="oportunidades-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'group')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'branch')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sales_channel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'customer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'short_desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_lic_revenue')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_readers_revenue')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_serv_revenue')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_opp_revenue')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'opp_date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'exp_close_date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'close_date')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
