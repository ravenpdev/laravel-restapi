<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    use TruncateTable;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // disable foreign key checks
        $this->toggleForeignKeyChecks(0);
        $this->truncate('users');

        User::factory(10)->create();

        // enable foreign key checks
        $this->toggleForeignKeyChecks(1);
    }
}
