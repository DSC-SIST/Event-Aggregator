<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%contact}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%event}}`
 * - `{{%user}}`
 * - `{{%user}}`
 */
class m210506_140320_create_contact_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%contact}}', [
            'id' => $this->primaryKey(),
            'event_id' => $this->integer(11),
            'p_name' => $this->string(512)->notNull(),
            'p_phone' => $this->string(30)->notNull(),
            'p_email' => $this->string(512)->notNull(),
            'created_at' => $this->integer(11),
            'created_by' => $this->integer(11),
            'updated_at' => $this->integer(11),
            'updated_by' => $this->integer(11),
        ]);

        // creates index for column `event_id`
        $this->createIndex(
            '{{%idx-contact-event_id}}',
            '{{%contact}}',
            'event_id'
        );

        // add foreign key for table `{{%event}}`
        $this->addForeignKey(
            '{{%fk-contact-event_id}}',
            '{{%contact}}',
            'event_id',
            '{{%event}}',
            'id',
            'CASCADE'
        );

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-contact-created_by}}',
            '{{%contact}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-contact-created_by}}',
            '{{%contact}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `updated_by`
        $this->createIndex(
            '{{%idx-contact-updated_by}}',
            '{{%contact}}',
            'updated_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-contact-updated_by}}',
            '{{%contact}}',
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
            '{{%fk-contact-event_id}}',
            '{{%contact}}'
        );

        // drops index for column `event_id`
        $this->dropIndex(
            '{{%idx-contact-event_id}}',
            '{{%contact}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-contact-created_by}}',
            '{{%contact}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-contact-created_by}}',
            '{{%contact}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-contact-updated_by}}',
            '{{%contact}}'
        );

        // drops index for column `updated_by`
        $this->dropIndex(
            '{{%idx-contact-updated_by}}',
            '{{%contact}}'
        );

        $this->dropTable('{{%contact}}');
    }
}
