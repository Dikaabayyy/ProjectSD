<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call(AboutSchSeeder::class);
        $this->call(GoalsSchSeeder::class);
        $this->call(GreetsSchSeeder::class);
        $this->call(VisiMisiSeeder::class);
        $this->call(ExtraSeeder::class);
        $this->call(ActivitySeeder::class);
    }
}
