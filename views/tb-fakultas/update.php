<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbFakultas */

$this->title = 'Update Tb Fakultas: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Tb Fakultas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-fakultas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
