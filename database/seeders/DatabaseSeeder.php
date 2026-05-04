<?php

namespace Database\Seeders;

use App\Domains\Users\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create SuperAdmin with ID = 1
        User::updateOrCreate(
            ['id' => 1],
            [
                'name' => 'SuperAdmin',
                'email' => 'superadmin@example.com',
                'password' => '$2y$12$5seIJTszouEPTfv55dfPdOgIn/v3FV805XsJOt.tDVmQq6JMi58qK',
            ]
        );
    }
}
