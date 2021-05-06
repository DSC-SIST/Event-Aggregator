<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m210506_094204_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user}}', [
            'id' => $this->integer()->notNull(),
            'username' => $this->string()->notNull()->unique(),
            'email' => $this->string()->notNull()->unique(),
            'role' => $this->integer()->notNull()->defaultValue(10),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),

            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'verification_token' => $this->string()->defaultValue(null),

            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);

        $this->addPrimaryKey('PK_users_id', '{{%user}}', 'id');

        // creates index for column `role`
        $this->createIndex(
            '{{%idx-users-role}}',
            '{{%user}}',
            'role'
        );

        // add foreign key for table `{{%role}}`
        $this->addForeignKey(
            '{{%fk-users-role}}',
            '{{%user}}',
            'role',
            '{{%role}}',
            'role_code',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%role}}`
        $this->dropForeignKey(
            '{{%fk-users-role}}',
            '{{%user}}'
        );

        // drops index for column `role`
        $this->dropIndex(
            '{{%idx-users-role}}',
            '{{%user}}'
        );

        $this->dropTable('{{%user}}');
    }
}
