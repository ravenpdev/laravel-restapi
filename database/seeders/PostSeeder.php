<?php

namespace Database\Seeders;

use App\Models\Post;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    use TruncateTable;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->toggleForeignKeyChecks(0);
        $this->truncate('posts');

        Post::factory(50)->create();

        $this->toggleForeignKeyChecks(1);
    }
}
