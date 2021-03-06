<?php
use Migrations\AbstractMigration;

class Perfis extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
            $this->table('perfis')
            ->addColumn('nome', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('flg_ativo', 'boolean', [
                'default' => true,
                'null' => false,
            ])
            ->create();

    }
}
