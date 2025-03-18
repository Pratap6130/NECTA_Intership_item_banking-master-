<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AddCodeColumn extends AbstractMigration
{
    /**
     * Up Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-up-method
     * @return void
     */
    public function up(): void
    {

        $this->table('roles')
            ->addColumn('code', 'string', [
                'after' => 'name',
                'collation' => 'latin1_swedish_ci',
                'default' => null,
                'length' => 16,
                'null' => false,
            ])
            ->update();
    }

    /**
     * Down Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-down-method
     * @return void
     */
    public function down(): void
    {

        $this->table('roles')
            ->removeColumn('code')
            ->update();
    }
}
