<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%prize}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%event}}`
 * - `{{%user}}`
 * - `{{%user}}`
 */
class m210506_141800_create_prize_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%prize}}', [
            'id' => $this->primaryKey(),
            'event_id' => $this->integer(11),
            'title' => $this->string(32)->notNull(),
            'prize' => $this->string(128)->notNull(),
            'caption' => $this->string(128)->notNull(),
            'created_at' => $this->integer(11),
            'created_by' => $this->integer(11),
            'updated_at' => $this->integer(11),
            'updated_by' => $this->integer(11),
        ]);

        // creates index for column `event_id`
        $this->createIndex(
            '{{%idx-prize-event_id}}',
            '{{%prize}}',
            'event_id'
        );

        // add foreign key for table `{{%event}}`
        $this->addForeignKey(
            '{{%fk-prize-event_id}}',
            '{{%prize}}',
            'event_id',
            '{{%event}}',
            'id',
            'CASCADE'
        );

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-prize-created_by}}',
            '{{%prize}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-prize-created_by}}',
            '{{%prize}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `updated_by`
        $this->createIndex(
            '{{%idx-prize-updated_by}}',
            '{{%prize}}',
            'updated_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-prize-updated_by}}',
            '{{%prize}}',
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
            '{{%fk-prize-event_id}}',
            '{{%prize}}'
        );

        // drops index for column `event_id`
        $this->dropIndex(
            '{{%idx-prize-event_id}}',
            '{{%prize}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-prize-created_by}}',
            '{{%prize}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-prize-created_by}}',
            '{{%prize}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-prize-updated_by}}',
            '{{%prize}}'
        );

        // drops index for column `updated_by`
        $this->dropIndex(
            '{{%idx-prize-updated_by}}',
            '{{%prize}}'
        );

        $this->dropTable('{{%prize}}');
    }
}
