<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Facility;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $facilitys =[
            [
                'name' => 'UKS Sekolah',
                'desc' => 'Sekolah menyediakan UKS bagi para siswa dan juga guru ketika merasa tidak sehat selama di area sekolah',
                'slug' => 'uks'
            ],
            [
                'name' => 'Kantin Sekolah',
                'desc' => 'Sekolah juga terdapat kantin sekolah yang sehat dan bersih bagi siswa yang akan membeli makanan dan minuman di saat jam istirahat',
                'slug' => 'kantin'
            ],
            [
                'name' => 'Toilet Sekolah',
                'desc' => 'Sekolah juga menyediakan toilet bersih yang dapat digunakan oleh para guru dan siswa.',
                'slug' => 'toilet'
            ],
            [
                'name' => 'Gedung Kelas',
                'desc' => 'Setiap kelas merupakan gedung yang digunakan selama proses pembelajaran yang aman dan nyaman bagi para siswa',
                'slug' => 'kelas'
            ],
            [
                'name' => 'Peralatan Musik',
                'desc' => 'Sekolah memiliki beberapa peralatan musik untuk menunjang kegiatan ekstrakurikuler Marching Band',
                'slug' => 'peralatan'
            ],
            [
                'name' => 'Kantor Sekolah',
                'desc' => 'Kantor sekolah merupakan pusat administrasi dan manajemen sekolah.',
                'slug' => 'kantor'
            ],
        ];

        foreach ($facilitys as $facility){

            Facility::create([
                'name' => $facility['name'],
                'desc' => $facility['desc'],
                'slug' => $facility['slug']
            ]);
        }
    }
}
