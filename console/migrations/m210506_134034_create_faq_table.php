<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%faq}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%event}}`
 * - `{{%user}}`
 * - `{{%user}}`
 */
class m210506_134034_create_faq_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%faq}}', [
            'id' => $this->primaryKey(),
            'event_id' => $this->integer(11),
            'question' => $this->string(256)->notNull(),
            'answer' => $this->text()->notNull(),
            'created_at' => $this->integer(11),
            'created_by' => $this->integer(11),
            'updated_at' => $this->integer(11),
            'updated_by' => $this->integer(11),
        ]);

        // creates index for column `event_id`
        $this->createIndex(
            '{{%idx-faq-event_id}}',
            '{{%faq}}',
            'event_id'
        );

        // add foreign key for table `{{%event}}`
        $this->addForeignKey(
            '{{%fk-faq-event_id}}',
            '{{%faq}}',
            'event_id',
            '{{%event}}',
            'id',
            'CASCADE'
        );

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-faq-created_by}}',
            '{{%faq}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-faq-created_by}}',
            '{{%faq}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `updated_by`
        $this->createIndex(
            '{{%idx-faq-updated_by}}',
            '{{%faq}}',
            'updated_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-faq-updated_by}}',
            '{{%faq}}',
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
            '{{%fk-faq-event_id}}',
            '{{%faq}}'
        );

        // drops index for column `event_id`
        $this->dropIndex(
            '{{%idx-faq-event_id}}',
            '{{%faq}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-faq-created_by}}',
            '{{%faq}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-faq-created_by}}',
            '{{%faq}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-faq-updated_by}}',
            '{{%faq}}'
        );

        // drops index for column `updated_by`
        $this->dropIndex(
            '{{%idx-faq-updated_by}}',
            '{{%faq}}'
        );

        $this->dropTable('{{%faq}}');
    }
}
