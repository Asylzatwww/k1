<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Phoneactivation */

$this->title = 'Update Phoneactivation: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Phoneactivations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="phoneactivation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
