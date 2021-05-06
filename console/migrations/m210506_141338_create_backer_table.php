<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%backer}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%event}}`
 * - `{{%user}}`
 * - `{{%user}}`
 */
class m210506_141338_create_backer_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%backer}}', [
            'id' => $this->primaryKey(),
            'event_id' => $this->integer(11),
            'type' => $this->integer(6)->notNull(),
            'link' => $this->string(512)->notNull(),
            'img_link' => $this->string(512)->notNull(),
            'b_type' => $this->integer(4)->notNull(),
            'created_at' => $this->integer(11),
            'created_by' => $this->integer(11),
            'updated_at' => $this->integer(11),
            'updated_by' => $this->integer(11),
        ]);

        // creates index for column `event_id`
        $this->createIndex(
            '{{%idx-backer-event_id}}',
            '{{%backer}}',
            'event_id'
        );

        // add foreign key for table `{{%event}}`
        $this->addForeignKey(
            '{{%fk-backer-event_id}}',
            '{{%backer}}',
            'event_id',
            '{{%event}}',
            'id',
            'CASCADE'
        );

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-backer-created_by}}',
            '{{%backer}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-backer-created_by}}',
            '{{%backer}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `updated_by`
        $this->createIndex(
            '{{%idx-backer-updated_by}}',
            '{{%backer}}',
            'updated_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-backer-updated_by}}',
            '{{%backer}}',
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
            '{{%fk-backer-event_id}}',
            '{{%backer}}'
        );

        // drops index for column `event_id`
        $this->dropIndex(
            '{{%idx-backer-event_id}}',
            '{{%backer}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-backer-created_by}}',
            '{{%backer}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-backer-created_by}}',
            '{{%backer}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-backer-updated_by}}',
            '{{%backer}}'
        );

        // drops index for column `updated_by`
        $this->dropIndex(
            '{{%idx-backer-updated_by}}',
            '{{%backer}}'
        );

        $this->dropTable('{{%backer}}');
    }
}
