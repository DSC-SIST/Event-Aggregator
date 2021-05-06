<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%social_type}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 * - `{{%user}}`
 */
class m210506_135926_create_social_type_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%social_type}}', [
            'id' => $this->primaryKey(),
            'description' => $this->string(512)->notNull(),
            'created_at' => $this->integer(11),
            'created_by' => $this->integer(11),
            'updated_at' => $this->integer(11),
            'updated_by' => $this->integer(11),
        ]);

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-social_type-created_by}}',
            '{{%social_type}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-social_type-created_by}}',
            '{{%social_type}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `updated_by`
        $this->createIndex(
            '{{%idx-social_type-updated_by}}',
            '{{%social_type}}',
            'updated_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-social_type-updated_by}}',
            '{{%social_type}}',
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
        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-social_type-created_by}}',
            '{{%social_type}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-social_type-created_by}}',
            '{{%social_type}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-social_type-updated_by}}',
            '{{%social_type}}'
        );

        // drops index for column `updated_by`
        $this->dropIndex(
            '{{%idx-social_type-updated_by}}',
            '{{%social_type}}'
        );

        $this->dropTable('{{%social_type}}');
    }
}
