<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%timeline}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%event}}`
 * - `{{%user}}`
 * - `{{%user}}`
 */
class m210506_140829_create_timeline_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%timeline}}', [
            'id' => $this->primaryKey(),
            'event_id' => $this->integer(11),
            'd_o_e' => $this->string(64)->notNull(),
            'time' => $this->string(16)->notNull(),
            'description' => $this->string(256)->notNull(),
            'priority' => $this->integer(4)->notNull(),
            'created_at' => $this->integer(11),
            'created_by' => $this->integer(11),
            'updated_at' => $this->integer(11),
            'updated_by' => $this->integer(11),
        ]);

        // creates index for column `event_id`
        $this->createIndex(
            '{{%idx-timeline-event_id}}',
            '{{%timeline}}',
            'event_id'
        );

        // add foreign key for table `{{%event}}`
        $this->addForeignKey(
            '{{%fk-timeline-event_id}}',
            '{{%timeline}}',
            'event_id',
            '{{%event}}',
            'id',
            'CASCADE'
        );

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-timeline-created_by}}',
            '{{%timeline}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-timeline-created_by}}',
            '{{%timeline}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `updated_by`
        $this->createIndex(
            '{{%idx-timeline-updated_by}}',
            '{{%timeline}}',
            'updated_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-timeline-updated_by}}',
            '{{%timeline}}',
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
            '{{%fk-timeline-event_id}}',
            '{{%timeline}}'
        );

        // drops index for column `event_id`
        $this->dropIndex(
            '{{%idx-timeline-event_id}}',
            '{{%timeline}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-timeline-created_by}}',
            '{{%timeline}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-timeline-created_by}}',
            '{{%timeline}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-timeline-updated_by}}',
            '{{%timeline}}'
        );

        // drops index for column `updated_by`
        $this->dropIndex(
            '{{%idx-timeline-updated_by}}',
            '{{%timeline}}'
        );

        $this->dropTable('{{%timeline}}');
    }
}
