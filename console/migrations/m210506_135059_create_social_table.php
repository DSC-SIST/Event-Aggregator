<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%social}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%event}}`
 * - `{{%user}}`
 * - `{{%user}}`
 */
class m210506_135059_create_social_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%social}}', [
            'id' => $this->primaryKey(),
            'event_id' => $this->integer(11),
            'type' => $this->integer(6)->notNull(),
            'link' => $this->string(512)->notNull(),
            'img_link' => $this->string(512)->notNull(),
            'created_at' => $this->integer(11),
            'created_by' => $this->integer(11),
            'updated_at' => $this->integer(11),
            'updated_by' => $this->integer(11),
        ]);

        // creates index for column `event_id`
        $this->createIndex(
            '{{%idx-social-event_id}}',
            '{{%social}}',
            'event_id'
        );

        // add foreign key for table `{{%event}}`
        $this->addForeignKey(
            '{{%fk-social-event_id}}',
            '{{%social}}',
            'event_id',
            '{{%event}}',
            'id',
            'CASCADE'
        );

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-social-created_by}}',
            '{{%social}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-social-created_by}}',
            '{{%social}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `updated_by`
        $this->createIndex(
            '{{%idx-social-updated_by}}',
            '{{%social}}',
            'updated_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-social-updated_by}}',
            '{{%social}}',
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
            '{{%fk-social-event_id}}',
            '{{%social}}'
        );

        // drops index for column `event_id`
        $this->dropIndex(
            '{{%idx-social-event_id}}',
            '{{%social}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-social-created_by}}',
            '{{%social}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-social-created_by}}',
            '{{%social}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-social-updated_by}}',
            '{{%social}}'
        );

        // drops index for column `updated_by`
        $this->dropIndex(
            '{{%idx-social-updated_by}}',
            '{{%social}}'
        );

        $this->dropTable('{{%social}}');
    }
}
