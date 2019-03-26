<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TbAgama */

$this->title = 'Create Tb Agama';
$this->params['breadcrumbs'][] = ['label' => 'Tb Agamas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-agama-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
