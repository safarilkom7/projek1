<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbStatusMhs */

$this->title = 'Update Tb Status Mhs: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Tb Status Mhs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-status-mhs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
