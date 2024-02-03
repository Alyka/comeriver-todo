<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Tasks seed.
 */
class TasksSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Task 1',
                'description' => 'This is task 1 description.',
                'created' => new DateTime('now'),
                'modified' => new DateTime('now'),
            ],
            [
                'name' => 'Task 2',
                'description' => 'This is task 2 description.',
                'created' => new DateTime('now'),
                'modified' => new DateTime('now'),
            ],
        ];

        $table = $this->table('tasks');
        $table->insert($data)->save();
    }
}
