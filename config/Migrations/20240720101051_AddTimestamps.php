<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AddTimestamps extends AbstractMigration
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

        $this->table('exam_types')
            ->addColumn('created', 'datetime', [
                'after' => 'code',
                'default' => null,
                'length' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'after' => 'created',
                'default' => null,
                'length' => null,
                'null' => true,
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

        $this->table('exam_types')
            ->removeColumn('created')
            ->removeColumn('modified')
            ->update();
    }
}
