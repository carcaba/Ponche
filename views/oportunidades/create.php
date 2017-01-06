<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\oportunidades */

$this->title = 'Create Oportunidades';
$this->params['breadcrumbs'][] = ['label' => 'Oportunidades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oportunidades-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
