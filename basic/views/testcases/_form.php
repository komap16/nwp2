<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor

/* @var $this yii\web\View */
/* @var $model app\models\Testcases */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="testcases-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'steps')->widget(CKEditor::className(), [

        'options' => ['rows' => 6],

        'preset' => 'basic'

]) ?>

    <?= $form->field($model, 'expected_result')->widget(CKEditor::className(), [

        'options' => ['rows' => 6],

        'preset' => 'basic'

]) ?>

    <?= $form->field($model, 'actual_result')->widget(CKEditor::className(), [

        'options' => ['rows' => 6],

        'preset' => 'basic'

]) ?>

    <?= $form->field($model, 'category_id')->dropDownList($model->categoryList()) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
