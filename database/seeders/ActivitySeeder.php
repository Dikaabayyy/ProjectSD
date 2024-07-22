<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Activity;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $activitys =[
            [
                'name' => 'Kegiatan Belajar',
                'desc' => 'Sekolah melakukan kegiatain rutinitas belajar-mengajar untuk meningkatkan penahaman dan pengetahuan siswa',
                'slug' => 'belajar'
            ],
            [
                'name' => 'Kegiatan Sekolah Berbagi',
                'desc' => 'Sekolah mengadakan satu kegiatan dan mengajarkan kepada siswa mengenai wujud dari rasa kemanusiaan antara sesama manusia.',
                'slug' => 'berbagi'
            ],
            [
                'name' => 'Senam Pagi',
                'desc' => 'Sekolah kami mengadakan senam pagi yang bertujuan meningkatkan kebugaran, konsentrasi, dan semangat belajar.',
                'slug' => 'senam'
            ],
            [
                'name' => 'Sholat Dhuha',
                'desc' => 'Sekolah melakukan kegiatan rutinitas bagi siswa untuk meningkatkan ibadah',
                'slug' => 'sholat'
            ],
            [
                'name' => 'Kegiatan Manasik Haji',
                'desc' => 'Sekolah mengadakan kegiatan untuk siswa belajar mengenai tata dan cara dalam pelaksanaan ibadah haji yang baik dan benar',
                'slug' => 'manasik'
            ],
            [
                'name' => 'Maulid Nabi',
                'desc' => 'Sekolah selalu mengadakan kegiatan - kegiatan dalam rangka memperingati hari besar Islam untuk meningkatkan rasa ketaqwaan siswa kepada Allah',
                'slug' => 'maulid'
            ],


        ];

        foreach ($activitys as $activity){

            Activity::factory()->create([
                'name' => $activity['name'],
                'desc' => $activity['desc'],
                'slug' => $activity['slug']
            ]);
        }
    }
}
