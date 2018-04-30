<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Testcases */

$this->title = $model->description;
$this->params['breadcrumbs'][] = ['label' => 'Testcases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="testcases-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'description',
            'steps',
            'expected_result',
            'actual_result',
            'created_at',
            'updated_at',
            'category_id',
        ],
    ]) ?>
    
   

</div>
