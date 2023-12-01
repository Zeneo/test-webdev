<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Users;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $j = 10;
        $users = Users::factory()->count($j)->create();

        echo "USERS SEEDER: finished seeding $j user".($j>1?"'s":"").". Operation successfully";
    }
}
