<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Phoneactivation */

$this->title = 'Create Phoneactivation';
$this->params['breadcrumbs'][] = ['label' => 'Phoneactivations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phoneactivation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
