<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\money\MaskMoney;

/* @var $this yii\web\View */
/* @var $searchModel app\models\oportunidadesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Oportunidades';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="oportunidades-index">
    

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Oportunidades', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php  


    ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
