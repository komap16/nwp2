<?php

namespace app\models;


use Yii;

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
            [['description', 'steps', 'expected_result', 'actual_result', 'created_at', 'category_id'], 'required'],
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
            'description' => 'Description',
            'steps' => 'Steps',
            'expected_result' => 'Expected Result',
            'actual_result' => 'Actual Result',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'category_id' => 'Category ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}
