<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Costumer;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Costumer::factory()->count(50)->create();
        User::factory()->count(50)->create();
    }
}
