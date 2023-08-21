<?php

namespace Database\Seeders\Traits;

use Illuminate\Support\Facades\DB;

trait TruncateTable
{
    protected function toggleForeignKeyChecks(int $status)
    {
        DB::statement("SET FOREIGN_KEY_CHECKS=$status");
    }

    protected function truncate(string $table)
    {
        DB::table($table)->truncate();
    }
}
