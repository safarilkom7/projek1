<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbAgamaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Agamas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-agama-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tb Agama', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'agama',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
