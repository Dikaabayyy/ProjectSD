<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GalleryPhoto;

class GalleryPhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $photos =[
            [
                'name' => 'Kegiatan Upacara 17 Agustus 2021',
                'desc' => 'Sekolah menyediakan UKS bagi para siswa dan juga guru ketika merasa tidak sehat selama di area sekolah',
                'slug' => 'upacara'
            ],
            [
                'name' => 'Kegiatan IHT 2021/2022',
                'desc' => 'Sekolah juga terdapat kantin sekolah yang sehat dan bersih bagi siswa yang akan membeli makanan dan minuman di saat jam istirahat',
                'slug' => 'iht'
            ],
            [
                'name' => 'Kegiatan Imuninasi Anak di Sekolah ',
                'desc' => 'Sekolah juga menyediakan toilet bersih yang dapat digunakan oleh para guru dan siswa.',
                'slug' => 'imunisasi'
            ],
            [
                'name' => 'Kegiatan Upacara 17 Agustus 2021',
                'desc' => 'Sekolah menyediakan UKS bagi para siswa dan juga guru ketika merasa tidak sehat selama di area sekolah',
                'slug' => 'upacara'
            ],
            [
                'name' => 'Kegiatan IHT 2021/2022',
                'desc' => 'Sekolah juga terdapat kantin sekolah yang sehat dan bersih bagi siswa yang akan membeli makanan dan minuman di saat jam istirahat',
                'slug' => 'iht'
            ],
            [
                'name' => 'Kegiatan Imuninasi Anak di Sekolah ',
                'desc' => 'Sekolah juga menyediakan toilet bersih yang dapat digunakan oleh para guru dan siswa.',
                'slug' => 'imunisasi'
            ],
            [
                'name' => 'Kegiatan Upacara 17 Agustus 2021',
                'desc' => 'Sekolah menyediakan UKS bagi para siswa dan juga guru ketika merasa tidak sehat selama di area sekolah',
                'slug' => 'upacara'
            ],
            [
                'name' => 'Kegiatan IHT 2021/2022',
                'desc' => 'Sekolah juga terdapat kantin sekolah yang sehat dan bersih bagi siswa yang akan membeli makanan dan minuman di saat jam istirahat',
                'slug' => 'iht'
            ],
            [
                'name' => 'Kegiatan Imuninasi Anak di Sekolah ',
                'desc' => 'Sekolah juga menyediakan toilet bersih yang dapat digunakan oleh para guru dan siswa.',
                'slug' => 'imunisasi'
            ],
        ];

        foreach ($photos as $photo){

            GalleryPhoto::create([
                'name' => $photo['name'],
                'desc' => $photo['desc'],
                'slug' => $photo['slug']
            ]);
        }
    }
}
