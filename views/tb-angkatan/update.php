<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbAngkatan */

$this->title = 'Update Tb Angkatan: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Tb Angkatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-angkatan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
