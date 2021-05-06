<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%backer_type}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 * - `{{%user}}`
 */
class m210506_144712_create_backer_type_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%backer_type}}', [
            'id' => $this->primaryKey(),
            'description' => $this->string(512)->notNull(),
            'created_at' => $this->integer(11),
            'created_by' => $this->integer(11),
            'updated_at' => $this->integer(11),
            'updated_by' => $this->integer(11),
        ]);

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-backer_type-created_by}}',
            '{{%backer_type}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-backer_type-created_by}}',
            '{{%backer_type}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `updated_by`
        $this->createIndex(
            '{{%idx-backer_type-updated_by}}',
            '{{%backer_type}}',
            'updated_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-backer_type-updated_by}}',
            '{{%backer_type}}',
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
            '{{%fk-backer_type-created_by}}',
            '{{%backer_type}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-backer_type-created_by}}',
            '{{%backer_type}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-backer_type-updated_by}}',
            '{{%backer_type}}'
        );

        // drops index for column `updated_by`
        $this->dropIndex(
            '{{%idx-backer_type-updated_by}}',
            '{{%backer_type}}'
        );

        $this->dropTable('{{%backer_type}}');
    }
}
