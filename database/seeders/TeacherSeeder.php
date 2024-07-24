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
                'nip' => '197712282015042001',
                'nuptk' => '3560755657300063',
                'position' => 'Guru Kelas',
                'gol' => 'II A',
                'ijazah' => 'SMEA',
                'subjects' => 'Wali Kelas',
                'ijazah_date' => 1996,
                'start_up_teaching' => Carbon::create(2003, 8, 1),
                'start_working' => Carbon::create(2003, 8, 1),
                'certificate_status' => 'Belum Lulus',
                'certificate_year' => 1945
            ],
            [
                'nip' => '-',
                'nuptk' => '-',
                'position' => 'Guru Bahasa Inggris',
                'gol' => '-',
                'ijazah' => 'S1',
                'subjects' => 'Guru Bahasa Inggris',
                'ijazah_date' => 2016,
                'start_up_teaching' => Carbon::create(2018, 7, 2),
                'start_working' => Carbon::create(2018, 7, 2),
                'certificate_status' => 'Belum Lulus',
                'certificate_year' => 1945
            ],
            [
                'nip' => '-',
                'nuptk' => '-',
                'position' => 'Guru Kelas',
                'gol' => '-',
                'ijazah' => 'S1',
                'subjects' => 'Wali Kelas',
                'ijazah_date' => 2013,
                'start_up_teaching' => Carbon::create(2018, 7, 2),
                'start_working' => Carbon::create(2018, 7, 2),
                'certificate_status' => 'Belum Lulus',
                'certificate_year' => 1945
            ],

        ];

        foreach ($teachers_Data as $teachers_data) {
            TeachersData::create($teachers_data);
        }

        $sunaryatin = TeachersData::where('nip', '197501061997112001')->first();
        $sadiyah = TeachersData::where('nip', '196303111984012001')->first();
        $jamini = TeachersData::where('nip', '196609081989042001')->first();
        $wahyuningsih = TeachersData::where('nip', '197001032000122005')->first();
        $jumaati = TeachersData::where('nip', '197106241996062002')->first();
        $sularni = TeachersData::where('nip', '196402081999102001')->first();
        $sugiyati = TeachersData::where('nip', '196710301999102001')->first();
        $ruslan = TeachersData::where('nip', '197204272001031001')->first();
        $janiba = TeachersData::where('nip', '197209152002122003')->first();
        $nurdia = TeachersData::where('nip', '197805122002122008')->first();
        $lasiban = TeachersData::where('nip', '196803151999101001')->first();
        $hely = TeachersData::where('nip', '197203142005012009')->first();
        $irkham = TeachersData::where('nip', '197203032015041001')->first();
        $yuninar = TeachersData::where('nip', '197002232015042001')->first();
        $eka = TeachersData::where('nip', '197712282015042001')->first();
        $winarsih = TeachersData::where('position', 'Guru Bahasa Inggris')->first();
        $ati = TeachersData::where('ijazah_date', 2013)->first();

        // Teacher's Profile
        $teachers =[
            [
                'name' => 'Sunaryatin, S.Pd.SD',
                'gender' => 'Perempuan',
                'brith_place' => 'Ngentrong',
                'birth_date' => Carbon::create(1975, 1, 6),
                'status' => 'Kawin',
                'teachers_datas_id'=> $sunaryatin->id
            ],
            [
                'name' => 'Sadiyah, S.Pd',
                'gender' => 'Perempuan',
                'brith_place' => 'Banyumas',
                'birth_date' => Carbon::create(1963, 3, 11),
                'status' => 'Kawin',
                'teachers_datas_id'=> $sadiyah->id
            ],
            [
                'name' => 'Jamini, S.Pd',
                'gender' => 'Perempuan',
                'brith_place' => 'Bukateja',
                'birth_date' => Carbon::create(1966, 9, 8),
                'status' => 'Kawin',
                'teachers_datas_id'=> $jamini->id
            ],
            [
                'name' => 'Wahyuningsih, S.Pd',
                'gender' => 'Perempuan',
                'brith_place' => 'Abepura',
                'birth_date' => Carbon::create(1970, 1, 3),
                'status' => 'Kawin',
                'teachers_datas_id'=> $wahyuningsih->id
            ],
            [
                'name' => 'Jumaati, S.Pd',
                'gender' => 'Perempuan',
                'brith_place' => 'Malang',
                'birth_date' => Carbon::create(1971, 6, 15),
                'status' => 'Kawin',
                'teachers_datas_id'=> $jumaati->id
            ],
            [
                'name' => 'Sularni, S.Pd',
                'gender' => 'Perempuan',
                'brith_place' => 'Sleman',
                'birth_date' => Carbon::create(1964, 2, 8),
                'status' => 'Kawin',
                'teachers_datas_id'=> $sularni->id
            ],
            [
                'name' => 'Sugiyati, S.Pd',
                'gender' => 'Perempuan',
                'brith_place' => 'Jember',
                'birth_date' => Carbon::create(1967, 10, 30),
                'status' => 'Kawin',
                'teachers_datas_id'=> $sugiyati->id
            ],
            [
                'name' => 'Ruslan, S.Pd',
                'gender' => 'Laki-Laki',
                'brith_place' => 'Purwodadi',
                'birth_date' => Carbon::create(1972, 4, 27),
                'status' => 'Kawin',
                'teachers_datas_id'=> $ruslan->id
            ],
            [
                'name' => 'Janiba Tomu, S.Pd',
                'gender' => 'Perempuan',
                'brith_place' => 'Leihitu',
                'birth_date' => Carbon::create(1972, 9, 15),
                'status' => 'Kawin',
                'teachers_datas_id'=> $janiba->id
            ],
            [
                'name' => 'Nurdia, S.Pd',
                'gender' => 'Perempuan',
                'brith_place' => 'Betaf',
                'birth_date' => Carbon::create(1978, 5, 12),
                'status' => 'Kawin',
                'teachers_datas_id'=> $nurdia->id
            ],
            [
                'name' => 'Lasiban, S.Pd',
                'gender' => 'Laki-Laki',
                'brith_place' => 'Blora',
                'birth_date' => Carbon::create(1968, 3, 15),
                'status' => 'Kawin',
                'teachers_datas_id'=> $lasiban->id
            ],
            [
                'name' => 'Hely Komiyatun, S.Pd.I',
                'gender' => 'Perempuan',
                'brith_place' => 'Semarang',
                'birth_date' => Carbon::create(1972, 3, 14),
                'status' => 'Kawin',
                'teachers_datas_id'=> $hely->id
            ],
            [
                'name' => 'Muh. Irkham, S.Pd.I',
                'gender' => 'Laki-Laki',
                'brith_place' => 'Semarang',
                'birth_date' => Carbon::create(1972, 3, 3),
                'status' => 'Kawin',
                'teachers_datas_id'=> $irkham->id
            ],
            [
                'name' => 'Yuninar Abasri, S.Pd',
                'gender' => 'Perempuan',
                'brith_place' => 'Surabaya',
                'birth_date' => Carbon::create(1970, 2, 23),
                'status' => 'Kawin',
                'teachers_datas_id'=> $yuninar->id
            ],
            [
                'name' => 'Eka Rini, S.Pd',
                'gender' => 'Perempuan',
                'brith_place' => 'Biak',
                'birth_date' => Carbon::create(1977, 12, 28),
                'status' => 'Kawin',
                'teachers_datas_id'=> $eka->id
            ],
            [
                'name' => 'Winarsih, S.Pd',
                'gender' => 'Perempuan',
                'brith_place' => 'Nganjuk',
                'birth_date' => Carbon::create(1983, 1, 2),
                'status' => 'Kawin',
                'teachers_datas_id'=> $winarsih->id
            ],
            [
                'name' => 'Ati Iriani, S.Pd',
                'gender' => 'Perempuan',
                'brith_place' => 'Sentani',
                'birth_date' => Carbon::create(1991, 7, 27),
                'status' => 'Kawin',
                'teachers_datas_id'=> $ati->id
            ],

        ];

        foreach ($teachers as $teacher) {
            Teacher::create($teacher);
        }

    }
}
