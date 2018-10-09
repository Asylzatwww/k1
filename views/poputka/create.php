<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Poputka */

$this->title = 'Create Poputka';
$this->params['breadcrumbs'][] = ['label' => 'Poputkas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="poputka-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

    <input id="searchTextField" type="text" size="50" placeholder="Enter a location" autocomplete="on">

</div>
