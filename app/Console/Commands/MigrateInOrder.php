<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MigrateInOrder extends Command
{
    protected $signature = 'migrate_in_order';
    protected $description = 'Execute the migrations in the order specified in the command.';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $migrations = [
            '2024_03_19_163526_create_roles_table.php',
            '2024_03_19_163536_create_groups_table.php',
            '2024_03_19_163940_create__robotics_kit_table.php',
            '2014_10_12_000000_create_users_table.php',
            '2024_03_19_164400_create_course_table.php',
            '2024_03_19_165436_create__group_course_table.php',
            '2024_03_19_164117_create__didactic_material_table.php',
        ];

        foreach ($migrations as $migration) {
            $basePath = 'database/migrations/';
            $migrationName = trim($migration);
            $path = $basePath . $migrationName;
            $this->call('migrate:refresh', [
                '--path' => $path,
            ]);
        }
    }
}
