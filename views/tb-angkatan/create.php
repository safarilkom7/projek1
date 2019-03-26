<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TbAngkatan */

$this->title = 'Create Tb Angkatan';
$this->params['breadcrumbs'][] = ['label' => 'Tb Angkatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-angkatan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
