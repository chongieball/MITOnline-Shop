<?php

use Phinx\Migration\AbstractMigration;

class CreateAuthorTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $author = $this->table('author');
        $author->addColumn('name', 'string')
               ->addColumn('update_at', 'timestamp')
               ->addColumn('create_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
               ->addColumn('deleted', 'integer', ['limit' => 1, 'default' => 0])
               ->create();
    }
}
