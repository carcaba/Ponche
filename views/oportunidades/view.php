<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\oportunidades */

$this->title = $model->op_id;
$this->params['breadcrumbs'][] = ['label' => 'Oportunidades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oportunidades-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->op_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->op_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'op_id',
            'fy',
            'kam',
            'group',
            'branch',
            'sales_channel',
            'customer',
            'short_desc',
            'status',
            'total_lic_revenue',
            'total_readers_revenue',
            'total_serv_revenue',
            'total_opp_revenue',
            'opp_date',
            'exp_close_date',
            'close_date',
        ],
    ]) ?>

</div>
