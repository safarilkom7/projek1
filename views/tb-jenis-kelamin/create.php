<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TbJenisKelamin */

$this->title = 'Create Tb Jenis Kelamin';
$this->params['breadcrumbs'][] = ['label' => 'Tb Jenis Kelamins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-jenis-kelamin-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
