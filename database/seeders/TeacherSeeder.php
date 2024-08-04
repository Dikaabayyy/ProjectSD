<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teacher;
use App\Models\TeachersData;
use Carbon\Carbon;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Teacher's Data
        $teachers_Data =[
            [
                'slug' => 'sunaryatin',
                'nip' => '197501061997112001',
                'nuptk' => '0438753654300032',
                'position' => 'Kepala Sekolah',
                'gol' => 'IV B',
                'ijazah' => 'S1',
                'subjects' => 'PPkn',
                'ijazah_date' => 2006,
                'start_up_teaching' => Carbon::create(1995, 2, 1),
                'start_working' => Carbon::create(2019, 10, 11),
                'certificate_status' => 'Lulus',
                'certificate_year' => 2008
            ],
            [
                'slug' => 'sadiyah',
                'nip' => '196303111984012001',
                'nuptk' => '1643741643300022',
                'position' => 'Guru Kelas',
                'gol' => 'IV B',
                'ijazah' => 'D2',
                'subjects' => 'Wali Kelas',
                'ijazah_date' => 1999,
                'start_up_teaching' => Carbon::create(1984, 1, 1),
                'start_working' => Carbon::create(1993, 11, 1),
                'certificate_status' => 'Lulus',
                'certificate_year' => 2011
            ],
            [
                'slug' => 'jamini',
                'nip' => '196609081989042001',
                'nuptk' => '1240744648300023',
                'position' => 'Guru Kelas',
                'gol' => 'IV B',
                'ijazah' => 'S1',
                'subjects' => 'Wali Kelas',
                'ijazah_date' => 2012,
                'start_up_teaching' => Carbon::create(1989, 1, 4),
                'start_working' => Carbon::create(1995, 1, 12),
                'certificate_status' => 'Lulus',
                'certificate_year' => 2013
            ],
            [
                'slug' => 'wahyuningsih',
                'nip' => '197001032000122005',
                'nuptk' => '1435748650300042',
                'position' => 'Guru Kelas',
                'gol' => 'IV A',
                'ijazah' => 'S1',
                'subjects' => 'Wali Kelas',
                'ijazah_date' => 2011,
                'start_up_teaching' => Carbon::create(2000, 12, 1),
                'start_working' => Carbon::create(2000, 12, 1),
                'certificate_status' => 'Lulus',
                'certificate_year' => 2012
            ],
            [
                'slug' => 'jumaati',
                'nip' => '197106241996062002',
                'nuptk' => '0956749652300022',
                'position' => 'Guru Kelas',
                'gol' => 'IV A',
                'ijazah' => 'S1',
                'subjects' => 'Wali Kelas',
                'ijazah_date' => 2014,
                'start_up_teaching' => Carbon::create(1996, 9, 1),
                'start_working' => Carbon::create(1996, 9, 1),
                'certificate_status' => 'Lulus',
                'certificate_year' => 2015
            ],
            [
                'slug' => 'sularni',
                'nip' => '196402081999102001',
                'nuptk' => '2540742644300032',
                'position' => 'Guru Kelas',
                'gol' => 'IV A',
                'ijazah' => 'S1',
                'subjects' => 'Wali Kelas',
                'ijazah_date' => 2012,
                'start_up_teaching' => Carbon::create(1999, 10, 1),
                'start_working' => Carbon::create(2001, 5, 8),
                'certificate_status' => 'Lulus',
                'certificate_year' => 2014
            ],
            [
                'slug' => 'sugiyati',
                'nip' => '196710301999102001',
                'nuptk' => '2362745650300003',
                'position' => 'Guru Kelas',
                'gol' => 'IV A',
                'ijazah' => 'S1',
                'subjects' => 'Wali Kelas',
                'ijazah_date' => 2011,
                'start_up_teaching' => Carbon::create(1999, 10, 1),
                'start_working' => Carbon::create(2001, 3, 1),
                'certificate_status' => 'Lulus',
                'certificate_year' => 2012
            ],
            [
                'slug' => 'ruslan',
                'nip' => '197204272001031001',
                'nuptk' => '8759750652200012',
                'position' => 'Guru PJOK',
                'gol' => 'III D',
                'ijazah' => 'S1',
                'subjects' => 'Penjaskes',
                'ijazah_date' => 2011,
                'start_up_teaching' => Carbon::create(2001, 3, 1),
                'start_working' => Carbon::create(2003, 3, 1),
                'certificate_status' => 'Lulus',
                'certificate_year' => 2012
            ],
            [
                'slug' => 'janiba',
                'nip' => '197209152002122003',
                'nuptk' => '5247750652300043',
                'position' => 'Guru Kelas',
                'gol' => 'III D',
                'ijazah' => 'S1',
                'subjects' => 'Wali Kelas',
                'ijazah_date' => 2014,
                'start_up_teaching' => Carbon::create(2003, 8, 1),
                'start_working' => Carbon::create(2003, 8, 13),
                'certificate_status' => 'Lulus',
                'certificate_year' => 2015
            ],
            [
                'slug' => 'nurdia',
                'nip' => '197805122002122008',
                'nuptk' => '9844756657300022',
                'position' => 'Guru Kelas',
                'gol' => 'III C',
                'ijazah' => 'S1',
                'subjects' => 'Wali Kelas',
                'ijazah_date' => 2010,
                'start_up_teaching' => Carbon::create(2003, 8, 1),
                'start_working' => Carbon::create(2003, 8, 13),
                'certificate_status' => 'Lulus',
                'certificate_year' => 2012
            ],
            [
                'slug' => 'lasiban',
                'nip' => '196803151999101001',
                'nuptk' => '7647746649200032',
                'position' => 'Guru Kelas',
                'gol' => 'III D',
                'ijazah' => 'S1',
                'subjects' => 'Wali Kelas',
                'ijazah_date' => 2012,
                'start_up_teaching' => Carbon::create(1999, 10, 1),
                'start_working' => Carbon::create(2003, 11, 3),
                'certificate_status' => 'Lulus',
                'certificate_year' => 2014
            ],
            [
                'slug' => 'hely',
                'nip' => '197203142005012009',
                'nuptk' => '7646750652300032',
                'position' => 'Guru Agama',
                'gol' => 'III B',
                'ijazah' => 'S1',
                'subjects' => 'Agama Islam',
                'ijazah_date' => 2010,
                'start_up_teaching' => Carbon::create(2005, 1, 1),
                'start_working' => Carbon::create(2009, 1, 2),
                'certificate_status' => 'Lulus',
                'certificate_year' => 2013
            ],
            [
                'slug' => 'irkham',
                'nip' => '197203032015041001',
                'nuptk' => '2635750653200012',
                'position' => 'Guru Agama',
                'gol' => 'III B',
                'ijazah' => 'S1',
                'subjects' => 'Agama Islam',
                'ijazah_date' => 2000,
                'start_up_teaching' => Carbon::create(2005, 9, 1),
                'start_working' => Carbon::create(2009, 9, 1),
                'certificate_status' => 'Lulus',
                'certificate_year' => 2009
            ],
            [
                'slug' => 'yuninar',
                'nip' => '197002232015042001',
                'nuptk' => '4555748649300012',
                'position' => 'Guru Kelas',
                'gol' => 'III A',
                'ijazah' => 'S1',
                'subjects' => 'Wali Kelas',
                'ijazah_date' => 2010,
                'start_up_teaching' => Carbon::create(2000, 8, 1),
                'start_working' => Carbon::create(2000, 7, 1),
                'certificate_status' => 'Lulus',
                'certificate_year' => 2013
            ],
            [
                'slug' => 'eka',
                'nip' => '197712282015042001',
                'nuptk' => '3560755657300063',
                'position' => 'Guru Kelas',
                'gol' => 'II A',
                'ijazah' => 'SMEA',
                'subjects' => 'Wali Kelas',
                'ijazah_date' => 1996,
                'start_up_teaching' => Carbon::create(2003, 8, 1),
                'start_working' => Carbon::create(2003, 8, 1),
            ],
            [
                'slug' => 'winarsih',
                'nip' => '-',
                'nuptk' => '-',
                'position' => 'Guru Bahasa Inggris',
                'gol' => '-',
                'ijazah' => 'S1',
                'subjects' => 'Guru Bahasa Inggris',
                'ijazah_date' => 2016,
                'start_up_teaching' => Carbon::create(2018, 7, 2),
                'start_working' => Carbon::create(2018, 7, 2),
            ],
            [
                'slug' => 'ati',
                'nip' => '-',
                'nuptk' => '-',
                'position' => 'Guru Kelas',
                'gol' => '-',
                'ijazah' => 'S1',
                'subjects' => 'Wali Kelas',
                'ijazah_date' => 2013,
                'start_up_teaching' => Carbon::create(2018, 7, 2),
                'start_working' => Carbon::create(2018, 7, 2),
            ],
            [
                'slug' => 'gazali',
                'nip' => '-',
                'nuptk' => '-',
                'position' => 'Guru Kelas',
                'gol' => '-',
                'ijazah' => 'S1',
                'subjects' => 'Wali Kelas',
                'ijazah_date' => 2016,
                'start_up_teaching' => Carbon::create(2018, 7, 2),
                'start_working' => Carbon::create(2018, 7, 2),
            ],
            [
                'slug' => 'lia',
                'nip' => '-',
                'nuptk' => '-',
                'position' => 'Guru Kelas',
                'gol' => '-',
                'ijazah' => 'S1',
                'subjects' => 'Wali Kelas',
                'ijazah_date' => 2015,
                'start_up_teaching' => Carbon::create(2019, 1, 7),
                'start_working' => Carbon::create(2019, 1, 7),
            ],
            [
                'slug' => 'suarni',
                'nip' => '-',
                'nuptk' => '-',
                'position' => 'TU',
                'gol' => '-',
                'ijazah' => 'S1',
                'subjects' => 'Wali Kelas',
                'ijazah_date' => 2017,
                'start_up_teaching' => Carbon::create(2019, 3, 1),
                'start_working' => Carbon::create(2019, 3, 1),
            ],
            [
                'slug' => 'heti',
                'nip' => '-',
                'nuptk' => '-',
                'position' => 'Guru PJOK',
                'gol' => '-',
                'ijazah' => 'S1',
                'subjects' => 'Penjaskes',
                'ijazah_date' => 2006,
                'start_up_teaching' => Carbon::create(2020, 7, 1),
                'start_working' => Carbon::create(2020, 7, 1),
            ],
            [
                'slug' => 'rusya',
                'nip' => '-',
                'nuptk' => '-',
                'position' => 'Guru Kelas',
                'gol' => '-',
                'ijazah' => 'S1',
                'subjects' => 'Wali Kelas',
                'ijazah_date' => 2017,
                'start_up_teaching' => Carbon::create(2020, 11, 1),
                'start_working' => Carbon::create(2020, 11, 1),
            ],
            [
                'slug' => 'lukman',
                'nip' => '-',
                'nuptk' => '-',
                'position' => 'Guru Kelas',
                'gol' => '-',
                'ijazah' => 'S1',
                'subjects' => 'Wali Kelas',
                'ijazah_date' => 2017,
                'start_up_teaching' => Carbon::create(2021, 7, 1),
                'start_working' => Carbon::create(2021, 7, 1),
            ],

        ];

        foreach ($teachers_Data as $teachers_data) {
            TeachersData::create($teachers_data);
        }

        $sunaryatin = TeachersData::where('slug', 'sunaryatin')->first();
        $sadiyah = TeachersData::where('slug', 'sadiyah')->first();
        $jamini = TeachersData::where('slug', 'jamini')->first();
        $wahyuningsih = TeachersData::where('slug', 'wahyuningsih')->first();
        $jumaati = TeachersData::where('slug', 'jumaati')->first();
        $sularni = TeachersData::where('slug', 'sularni')->first();
        $sugiyati = TeachersData::where('slug', 'sugiyati')->first();
        $ruslan = TeachersData::where('slug', 'ruslan')->first();
        $janiba = TeachersData::where('slug', 'janiba')->first();
        $nurdia = TeachersData::where('slug', 'nurdia')->first();
        $lasiban = TeachersData::where('slug', 'lasiban')->first();
        $hely = TeachersData::where('slug', 'hely')->first();
        $irkham = TeachersData::where('slug', 'irkham')->first();
        $yuninar = TeachersData::where('slug', 'yuninar')->first();
        $eka = TeachersData::where('slug', 'eka')->first();
        $winarsih = TeachersData::where('slug', 'winarsih')->first();
        $ati = TeachersData::where('slug', 'ati')->first();
        $gazali = TeachersData::where('slug', 'gazali')->first();
        $lia = TeachersData::where('slug', 'lia')->first();
        $suarni = TeachersData::where('slug', 'suarni')->first();
        $heti = TeachersData::where('slug', 'heti')->first();
        $rusya = TeachersData::where('slug', 'rusya')->first();
        $lukman = TeachersData::where('slug', 'lukman')->first();

        // Teacher's Profile
        $teachers =[
            [
                'name' => 'Sunaryatin, S.Pd.SD',
                'gender' => 'Perempuan',
                'birth_place' => 'Ngentrong',
                'birth_date' => Carbon::create(1975, 1, 6),
                'status' => 'Kawin',
                'slug' => 'sunaryatin',
                'teachers_datas_id'=> $sunaryatin->id
            ],
            [
                'name' => 'Sadiyah, S.Pd',
                'gender' => 'Perempuan',
                'birth_place' => 'Banyumas',
                'birth_date' => Carbon::create(1963, 3, 11),
                'status' => 'Kawin',
                'slug' => 'sadiyah',
                'teachers_datas_id'=> $sadiyah->id
            ],
            [
                'name' => 'Jamini, S.Pd',
                'gender' => 'Perempuan',
                'birth_place' => 'Bukateja',
                'birth_date' => Carbon::create(1966, 9, 8),
                'status' => 'Kawin',
                'slug' => 'jamini',
                'teachers_datas_id'=> $jamini->id
            ],
            [
                'name' => 'Wahyuningsih, S.Pd',
                'gender' => 'Perempuan',
                'birth_place' => 'Abepura',
                'birth_date' => Carbon::create(1970, 1, 3),
                'status' => 'Kawin',
                'slug' => 'wahyuningsih',
                'teachers_datas_id'=> $wahyuningsih->id
            ],
            [
                'name' => 'Jumaati, S.Pd',
                'gender' => 'Perempuan',
                'birth_place' => 'Malang',
                'birth_date' => Carbon::create(1971, 6, 15),
                'status' => 'Kawin',
                'slug' => 'jumaati',
                'teachers_datas_id'=> $jumaati->id
            ],
            [
                'name' => 'Sularni, S.Pd',
                'gender' => 'Perempuan',
                'birth_place' => 'Sleman',
                'birth_date' => Carbon::create(1964, 2, 8),
                'status' => 'Kawin',
                'slug' => 'sularni',
                'teachers_datas_id'=> $sularni->id
            ],
            [
                'name' => 'Sugiyati, S.Pd',
                'gender' => 'Perempuan',
                'birth_place' => 'Jember',
                'birth_date' => Carbon::create(1967, 10, 30),
                'status' => 'Kawin',
                'slug' => 'sugiyati',
                'teachers_datas_id'=> $sugiyati->id
            ],
            [
                'name' => 'Ruslan, S.Pd',
                'gender' => 'Laki-Laki',
                'birth_place' => 'Purwodadi',
                'birth_date' => Carbon::create(1972, 4, 27),
                'status' => 'Kawin',
                'slug' => 'ruslan',
                'teachers_datas_id'=> $ruslan->id
            ],
            [
                'name' => 'Janiba Tomu, S.Pd',
                'gender' => 'Perempuan',
                'birth_place' => 'Leihitu',
                'birth_date' => Carbon::create(1972, 9, 15),
                'status' => 'Kawin',
                'slug' => 'janiba',
                'teachers_datas_id'=> $janiba->id
            ],
            [
                'name' => 'Nurdia, S.Pd',
                'gender' => 'Perempuan',
                'birth_place' => 'Betaf',
                'birth_date' => Carbon::create(1978, 5, 12),
                'status' => 'Kawin',
                'slug' => 'nurdia',
                'teachers_datas_id'=> $nurdia->id
            ],
            [
                'name' => 'Lasiban, S.Pd',
                'gender' => 'Laki-Laki',
                'birth_place' => 'Blora',
                'birth_date' => Carbon::create(1968, 3, 15),
                'status' => 'Kawin',
                'slug' => 'lasiban',
                'teachers_datas_id'=> $lasiban->id
            ],
            [
                'name' => 'Hely Komiyatun, S.Pd.I',
                'gender' => 'Perempuan',
                'birth_place' => 'Semarang',
                'birth_date' => Carbon::create(1972, 3, 14),
                'status' => 'Kawin',
                'slug' => 'hely',
                'teachers_datas_id'=> $hely->id
            ],
            [
                'name' => 'Muh. Irkham, S.Pd.I',
                'gender' => 'Laki-Laki',
                'birth_place' => 'Semarang',
                'birth_date' => Carbon::create(1972, 3, 3),
                'status' => 'Kawin',
                'slug' => 'irkham',
                'teachers_datas_id'=> $irkham->id
            ],
            [
                'name' => 'Yuninar Abasri, S.Pd',
                'gender' => 'Perempuan',
                'birth_place' => 'Surabaya',
                'birth_date' => Carbon::create(1970, 2, 23),
                'status' => 'Kawin',
                'slug' => 'yuninar',
                'teachers_datas_id'=> $yuninar->id
            ],
            [
                'name' => 'Eka Rini, S.Pd',
                'gender' => 'Perempuan',
                'birth_place' => 'Biak',
                'birth_date' => Carbon::create(1977, 12, 28),
                'status' => 'Kawin',
                'slug' => 'eka',
                'teachers_datas_id'=> $eka->id
            ],
            [
                'name' => 'Winarsih, S.Pd',
                'gender' => 'Perempuan',
                'birth_place' => 'Nganjuk',
                'birth_date' => Carbon::create(1983, 1, 2),
                'status' => 'Kawin',
                'slug' => 'winarsih',
                'teachers_datas_id'=> $winarsih->id
            ],
            [
                'name' => 'Ati Iriani, S.Pd',
                'gender' => 'Perempuan',
                'birth_place' => 'Sentani',
                'birth_date' => Carbon::create(1991, 7, 27),
                'status' => 'Kawin',
                'slug' => 'ati',
                'teachers_datas_id'=> $ati->id
            ],
            [
                'name' => 'Muh. Gazali, S.Pd',
                'gender' => 'Laki-Laki',
                'birth_place' => 'Popalia',
                'birth_date' => Carbon::create(1992, 6, 11),
                'status' => 'Lajang',
                'slug' => 'gazali',
                'teachers_datas_id'=> $gazali->id
            ],
            [
                'name' => 'Lia Kustianingsih, S.Pd',
                'gender' => 'Perempuan',
                'birth_place' => 'Rembang',
                'birth_date' => Carbon::create(1989, 12, 14),
                'status' => 'Kawin',
                'slug' => 'lia',
                'teachers_datas_id'=> $lia->id
            ],
            [
                'name' => 'Suarni, S.E',
                'gender' => 'Perempuan',
                'birth_place' => 'Rembang',
                'birth_date' => Carbon::create(1991, 3, 31),
                'status' => 'Kawin',
                'slug' => 'suarni',
                'teachers_datas_id'=> $suarni->id
            ],
            [
                'name' => 'Heti R. Hidayah, S.Pd',
                'gender' => 'Perempuan',
                'birth_place' => 'Kediri',
                'birth_date' => Carbon::create(1984, 2, 21),
                'status' => 'Kawin',
                'slug' => 'heti',
                'teachers_datas_id'=> $heti->id
            ],
            [
                'name' => 'Rusyawati, S.Pd',
                'gender' => 'Perempuan',
                'birth_place' => 'Timika',
                'birth_date' => Carbon::create(1996, 4, 2),
                'status' => 'Kawin',
                'slug' => 'rusya',
                'teachers_datas_id'=> $rusya->id
            ],
            [
                'name' => 'Lukman Latarissa, S.Pd',
                'gender' => 'Laki-Laki',
                'birth_place' => 'Haruo',
                'birth_date' => Carbon::create(1992, 1, 30),
                'status' => 'Lajang',
                'slug' => 'lukman',
                'teachers_datas_id'=> $lukman->id
            ],

        ];

        foreach ($teachers as $teacher) {
            Teacher::create($teacher);
        }

    }
}
