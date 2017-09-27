<?php
use Migrations\AbstractMigration;

class Inicial extends AbstractMigration
{
    public function up()
    {

        $this->table('produtos')
            ->addColumn('nome', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('preco', 'decimal', [
                'default' => null,
                'null' => false,
                'precision' => 10,
                'scale' => 2,
            ])
            ->addColumn('descricao', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $this->table('users')
            ->addColumn('username', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('password', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->create();
    }

    public function down()
    {
        $this->dropTable('produtos');
        $this->dropTable('users');
    }
}
