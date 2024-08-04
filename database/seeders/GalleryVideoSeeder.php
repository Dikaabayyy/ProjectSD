<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GalleryVideo;

class GalleryVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $videos =[
            [
                'name' => 'Kegiatan Upacara 17 Agustus 2021',
                'desc' => 'Sekolah menyediakan UKS bagi para siswa dan juga guru ketika merasa tidak sehat selama di area sekolah',
                'slug' => 'upacara'
            ]
        ];

        foreach ($videos as $video){

            GalleryVideo::create([
                'name' => $video['name'],
                'desc' => $video['desc'],
                'slug' => $video['slug']
            ]);
        }
    }
}
