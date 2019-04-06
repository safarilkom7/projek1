<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TbFakultas */

$this->title = 'Create Tb Fakultas';
$this->params['breadcrumbs'][] = ['label' => 'Tb Fakultas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-fakultas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>