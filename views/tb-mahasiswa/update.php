<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbMahasiswa */

$this->title = 'Update Tb Mahasiswa: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Tb Mahasiswas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-mahasiswa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
