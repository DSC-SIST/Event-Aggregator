<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%instruction}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%event}}`
 * - `{{%user}}`
 * - `{{%user}}`
 */
class m210506_134511_create_instruction_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%instruction}}', [
            'id' => $this->primaryKey(),
            'event_id' => $this->integer(11),
            'description' => $this->string(256)->notNull(),
            'priority' => $this->integer(4)->notNull(),
            'created_at' => $this->integer(11),
            'created_by' => $this->integer(11),
            'updated_at' => $this->integer(11),
            'updated_by' => $this->integer(11),
        ]);

        // creates index for column `event_id`
        $this->createIndex(
            '{{%idx-instruction-event_id}}',
            '{{%instruction}}',
            'event_id'
        );

        // add foreign key for table `{{%event}}`
        $this->addForeignKey(
            '{{%fk-instruction-event_id}}',
            '{{%instruction}}',
            'event_id',
            '{{%event}}',
            'id',
            'CASCADE'
        );

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-instruction-created_by}}',
            '{{%instruction}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-instruction-created_by}}',
            '{{%instruction}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `updated_by`
        $this->createIndex(
            '{{%idx-instruction-updated_by}}',
            '{{%instruction}}',
            'updated_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-instruction-updated_by}}',
            '{{%instruction}}',
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
            '{{%fk-instruction-event_id}}',
            '{{%instruction}}'
        );

        // drops index for column `event_id`
        $this->dropIndex(
            '{{%idx-instruction-event_id}}',
            '{{%instruction}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-instruction-created_by}}',
            '{{%instruction}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-instruction-created_by}}',
            '{{%instruction}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-instruction-updated_by}}',
            '{{%instruction}}'
        );

        // drops index for column `updated_by`
        $this->dropIndex(
            '{{%idx-instruction-updated_by}}',
            '{{%instruction}}'
        );

        $this->dropTable('{{%instruction}}');
    }
}
