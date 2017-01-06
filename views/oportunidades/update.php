<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\oportunidades */

$this->title = 'Update Oportunidades: ' . $model->op_id;
$this->params['breadcrumbs'][] = ['label' => 'Oportunidades', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->op_id, 'url' => ['view', 'id' => $model->op_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="oportunidades-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
