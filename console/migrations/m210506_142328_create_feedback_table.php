<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%feedback}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%event}}`
 * - `{{%user}}`
 * - `{{%user}}`
 */
class m210506_142328_create_feedback_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%feedback}}', [
            'id' => $this->primaryKey(),
            'event_id' => $this->integer(11),
            'feedback' => $this->text()->notNull(),
            'rating' => $this->integer(5)->notNull(),
            'status' => $this->integer(4)->notNull(),
            'created_at' => $this->integer(11),
            'created_by' => $this->integer(11),
            'updated_at' => $this->integer(11),
            'updated_by' => $this->integer(11),
        ]);

        // creates index for column `event_id`
        $this->createIndex(
            '{{%idx-feedback-event_id}}',
            '{{%feedback}}',
            'event_id'
        );

        // add foreign key for table `{{%event}}`
        $this->addForeignKey(
            '{{%fk-feedback-event_id}}',
            '{{%feedback}}',
            'event_id',
            '{{%event}}',
            'id',
            'CASCADE'
        );

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-feedback-created_by}}',
            '{{%feedback}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-feedback-created_by}}',
            '{{%feedback}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `updated_by`
        $this->createIndex(
            '{{%idx-feedback-updated_by}}',
            '{{%feedback}}',
            'updated_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-feedback-updated_by}}',
            '{{%feedback}}',
            'updated_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%event}}`
        $this->dropForeignKey(
            '{{%fk-feedback-event_id}}',
            '{{%feedback}}'
        );

        // drops index for column `event_id`
        $this->dropIndex(
            '{{%idx-feedback-event_id}}',
            '{{%feedback}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-feedback-created_by}}',
            '{{%feedback}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-feedback-created_by}}',
            '{{%feedback}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-feedback-updated_by}}',
            '{{%feedback}}'
        );

        // drops index for column `updated_by`
        $this->dropIndex(
            '{{%idx-feedback-updated_by}}',
            '{{%feedback}}'
        );

        $this->dropTable('{{%feedback}}');
    }
}
