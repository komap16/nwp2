<?php

use yii\db\Migration;

/**
 * Handles the creation of table `testcases`.
 */
class m180430_200332_create_testcases_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('testcases', [
            'id' => $this->primaryKey(),
	    'description' => $this->string(50)->notNull(),
	    'steps' => $this->string(150)->notNull(),
	    'expected_result' => $this->string(150)->notNull(),
	    'actual_result' => $this->string(150)->notNull(),
	    'created_at' => $this->datetime(),
	    'updated_at' => $this->datetime(),
            'category_id' => $this->integer(),
            'user_id' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('testcases');
    }
}
