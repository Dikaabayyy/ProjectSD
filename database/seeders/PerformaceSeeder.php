<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Performance;
use Carbon\Carbon;

class PerformaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $performances =[
            [
                'name' => 'Juara 1 Lomba',
                'desc' => 'Morbi laoreet eros vitae diam tempus tincidunt. Proin nec nisl scelerisque, gravida orci sed, vulputate dui.',
                'slug' => 'juara1',
                'level' => 'Kabupaten/Kota',
                'location' => 'Sentani',
                'performance_date' => 2019
            ],
            [
                'name' => 'Juara 2 Lomba',
                'desc' => 'Nunc tempor, sapien sed semper laoreet, arcu dolor varius purus, nec tincidunt ex diam nec lorem.',
                'slug' => 'juara2',
                'level' => 'Provinsi',
                'location' => 'Jayapura',
                'performance_date' => 2020
            ],
            [
                'name' => 'Juara 3 Lomba',
                'desc' => 'Sed odio erat, gravida ut enim nec, luctus faucibus turpis.',
                'slug' => 'juara3',
                'level' => 'Nasional',
                'location' => 'Surabaya',
                'performance_date' => 2021

            ],
        ];

        foreach ($performances as $performance){

            Performance::create([
                'name' => $performance['name'],
                'desc' => $performance['desc'],
                'slug' => $performance['slug'],
                'level' => $performance['level'],
                'location' => $performance['location'],
                'performance_date' => $performance['performance_date']
            ]);
        }
    }
}
