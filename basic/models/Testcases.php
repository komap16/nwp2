<?php

namespace app\models;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use Yii;
use yii\helpers\ArrayHelper;
use app\models\Category;


/**
 * This is the model class for table "testcases".
 *
 * @property int $id
 * @property string $description
 * @property string $steps
 * @property string $expected_result
 * @property string $actual_result
 * @property string $created_at
 * @property string $updated_at
 * @property int $category_id
 *
 * @property Category $category
 */
class Testcases extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'testcases';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description', 'steps', 'expected_result', 'actual_result', 'category_id'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['category_id'], 'integer'],
            [['description'], 'string', 'max' => 50],
            [['steps', 'expected_result', 'actual_result'], 'string', 'max' => 150],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'description' => 'Описание',
            'steps' => 'Шаги воспроизвидения',
            'expected_result' => 'Ожидаемый результат',
            'actual_result' => 'Фактический результат',
            'created_at' => 'Создано',
            'updated_at' => 'Обновлено',
            'category_id' => 'Категория',
        ];
    }
    
    public function behaviors() {

        return [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                'value' => new Expression('NOW()'),
            ],
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
    
    public function categoryList() {
        return ArrayHelper::map(Category::find()->all(), 'id', 'title');
    }
}
