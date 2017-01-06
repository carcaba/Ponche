<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\oportunidadesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="oportunidades-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'op_id') ?>

    <?= $form->field($model, 'fy') ?>

    <?= $form->field($model, 'kam') ?>

    <?= $form->field($model, 'group') ?>

    <?= $form->field($model, 'branch') ?>

    <?php // echo $form->field($model, 'sales_channel') ?>

    <?php // echo $form->field($model, 'customer') ?>

    <?php // echo $form->field($model, 'short_desc') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'total_lic_revenue') ?>

    <?php // echo $form->field($model, 'total_readers_revenue') ?>

    <?php // echo $form->field($model, 'total_serv_revenue') ?>

    <?php // echo $form->field($model, 'total_opp_revenue') ?>

    <?php // echo $form->field($model, 'opp_date') ?>

    <?php // echo $form->field($model, 'exp_close_date') ?>

    <?php // echo $form->field($model, 'close_date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
