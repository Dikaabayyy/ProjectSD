<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newss =[
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

        foreach ($newss as $news){

            News::create([
                'name' => $news['name'],
                'desc' => $news['desc'],
                'slug' => $news['slug']
            ]);
        }
    }
}
