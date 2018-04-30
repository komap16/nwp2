<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Testcases */

$this->title = 'Create Testcases';
$this->params['breadcrumbs'][] = ['label' => 'Testcases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="testcases-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
