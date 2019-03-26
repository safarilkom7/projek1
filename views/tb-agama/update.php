<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbAgama */

$this->title = 'Update Tb Agama: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Tb Agamas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-agama-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
