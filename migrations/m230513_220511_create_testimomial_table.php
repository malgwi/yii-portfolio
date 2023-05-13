<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%testimomial}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%project}}`
 * - `{{%file}}`
 */
class m230513_220511_create_testimomial_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%testimomial}}', [
            'id' => $this->primaryKey(),
            'project_id' => $this->integer()->notNull(),
            'customer_image_id' => $this->integer()->notNull(),
            'title' => $this->string()->notNull(),
            'customer_name' => $this->string()->notNull(),
            'review' => $this->text()->notNull(),
            'rating' => $this->integer()->notNull(),
        ]);

        // creates index for column `project_id`
        $this->createIndex(
            '{{%idx-testimomial-project_id}}',
            '{{%testimomial}}',
            'project_id'
        );

        // add foreign key for table `{{%project}}`
        $this->addForeignKey(
            '{{%fk-testimomial-project_id}}',
            '{{%testimomial}}',
            'project_id',
            '{{%project}}',
            'id',
            'CASCADE'
        );

        // creates index for column `customer_image_id`
        $this->createIndex(
            '{{%idx-testimomial-customer_image_id}}',
            '{{%testimomial}}',
            'customer_image_id'
        );

        // add foreign key for table `{{%file}}`
        $this->addForeignKey(
            '{{%fk-testimomial-customer_image_id}}',
            '{{%testimomial}}',
            'customer_image_id',
            '{{%file}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%project}}`
        $this->dropForeignKey(
            '{{%fk-testimomial-project_id}}',
            '{{%testimomial}}'
        );

        // drops index for column `project_id`
        $this->dropIndex(
            '{{%idx-testimomial-project_id}}',
            '{{%testimomial}}'
        );

        // drops foreign key for table `{{%file}}`
        $this->dropForeignKey(
            '{{%fk-testimomial-customer_image_id}}',
            '{{%testimomial}}'
        );

        // drops index for column `customer_image_id`
        $this->dropIndex(
            '{{%idx-testimomial-customer_image_id}}',
            '{{%testimomial}}'
        );

        $this->dropTable('{{%testimomial}}');
    }
}
