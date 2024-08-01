<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Agenda;
use Carbon\Carbon;

class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $agendas =[
            [
                'name' => 'Kegiatan Upacara Kemerdekaan',
                'desc' => 'Sekolah menyediakan UKS bagi para siswa dan juga guru ketika merasa tidak sehat selama di area sekolah',
                'agenda_start' => Carbon::create(2021, 8, 17, 7, 30, 0)->format('Y-m-d H:i:s'),
                'agenda_end' => Carbon::create(2021, 8, 17, 10, 0, 0)->format('Y-m-d H:i:s'),
                'location' => 'Sekolah',
                'slug' => 'upacara'
            ],
            [
                'name' => 'Kegiatan IHT',
                'desc' => 'Sekolah juga terdapat kantin sekolah yang sehat dan bersih bagi siswa yang akan membeli makanan dan minuman di saat jam istirahat',
                'agenda_start' => Carbon::create(2021, 5, 20, 8, 0, 0)->format('Y-m-d H:i:s'),
                'agenda_end' => Carbon::create(2021, 6, 21, 14, 30, 0)->format('Y-m-d H:i:s'),
                'location' => 'Sekolah',
                'slug' => 'iht'
            ],
            [
                'name' => 'Kegiatan Imuninasi Anak di Sekolah ',
                'desc' => 'Sekolah juga menyediakan toilet bersih yang dapat digunakan oleh para guru dan siswa.',
                'agenda_start' => Carbon::create(2022, 5, 13, 9, 0, 0)->format('Y-m-d H:i:s'),
                'agenda_end' => Carbon::create(2022, 5, 15, 12, 0, 0)->format('Y-m-d H:i:s'),
                'location' => 'Sekolah',
                'slug' => 'imunisasi'
            ],
        ];

        foreach ($agendas as $agenda){

            Agenda::create([
                'name' => $agenda['name'],
                'desc' => $agenda['desc'],
                'location' => $agenda['location'],
                'agenda_start' => $agenda['agenda_start'],
                'agenda_end' => $agenda['agenda_end'],
                'slug' => $agenda['slug']
            ]);
        }
    }
}
