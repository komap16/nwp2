<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Testcases */

$this->title = $model->description;
$this->params['breadcrumbs'][] = ['label' => 'Testcases', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="testcases-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
