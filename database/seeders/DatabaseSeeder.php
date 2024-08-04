<?php

namespace Database\Seeders;

use App\Models\Announ;
use App\Models\Facility;
use App\Models\Students;
use App\Models\TeachersData;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'username' => 'admin',
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('#Admin2@13#OZ'),
            'role' => 'Admin'
        ]);

        $this->call(AboutSchSeeder::class);
        $this->call(GoalsSchSeeder::class);
        $this->call(GreetsSchSeeder::class);
        $this->call(VisiMisiSeeder::class);
        $this->call(ExtraSeeder::class);
        $this->call(ActivitySeeder::class);
        $this->call(FacilitySeeder::class);
        $this->call(TeacherSeeder::class);
        $this->call(PerformaceSeeder::class);
        $this->call(NewsSeeder::class);
        $this->call(AnnounSeeder::class);
        $this->call(AgendaSeeder::class);
        $this->call(GalleryPhotoSeeder::class);
        $this->call(GalleryVideoSeeder::class);
        $this->call(StudentsSeeder::class);
    }
}
