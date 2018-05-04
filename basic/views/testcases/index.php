<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TestcasesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Тестовые сценарии';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="testcases-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить тест-кейс', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'description:html',
            'steps:html',
            'expected_result:html',
            'actual_result:html',
            'created_at',
            'updated_at',
            [
                'attribute' => 'category_id',
                'label' => 'Категория',
                'value' => function ($model) {

                    return $model->category->title;
                },
            ],
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
