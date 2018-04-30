<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TestcasesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Testcases';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="testcases-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить тест-кейс', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'description',
            'steps',
            'expected_result',
            'actual_result',
            'created_at',
            'updated_at',
            'category_id',
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
