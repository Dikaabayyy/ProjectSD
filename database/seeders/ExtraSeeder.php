<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Extra;

class ExtraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $extras =[
            [
                'name' => 'Pramuka',
                'desc' => 'Siswa mengikuti kegiatan wajib pramuka setiap seminggu sekali',
                'slug' => 'pramuka'
            ],
            [
                'name' => 'Marching Band',
                'desc' => 'Siswa belajar mengenai hal yang berbau dengan musik dan alatnya',
                'slug' => 'marchingband'
            ],
            [
                'name' => 'Menari',
                'desc' => 'Siswa belajar mengenai kesenian dari tari berbagai macam daerah',
                'slug' => 'menari'
            ],


        ];

        foreach ($extras as $extra){

            Extra::factory()->create([
                'name' => $extra['name'],
                'desc' => $extra['desc'],
                'slug' => $extra['slug']
            ]);
        }
    }
}
