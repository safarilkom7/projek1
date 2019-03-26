<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TbStatusMhs */

$this->title = 'Create Tb Status Mhs';
$this->params['breadcrumbs'][] = ['label' => 'Tb Status Mhs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-status-mhs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
