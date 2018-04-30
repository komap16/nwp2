<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TestcasesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="testcases-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'steps') ?>

    <?= $form->field($model, 'expected_result') ?>

    <?= $form->field($model, 'actual_result') ?>

    <?php //echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

   <?php // echo $form->field($model, 'category_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
