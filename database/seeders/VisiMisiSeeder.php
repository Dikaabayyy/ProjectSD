<?php

namespace Database\Seeders;

use App\Models\VisiMisi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VisiMisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VisiMisi::create([
            'name' => 'visimisi',
            'visi' => 'Memposisikan SD YPKP 2 SENTANI menjadi sekolah yang Unggul dalam prestasi,berkualitas dalam IMTAQ dan IPTEK Berkarakter dan berwawasan lingkungan',
            'misi' => '1.	Mengembangkan potensi belajar peserta didik di bidang akademik dan non akademik sebagai wujud prestasi belajar untuk mencapai cita-citanya.
2.	Meningkatkan mutu hasil belajar peserta didik sesuai dengan Pembelajaran yang aktif, efektif dan menyenangkan.
3.	Menyiapkan generasi yang berkualitas dan memiliki potensi di bidang IMTAQ dan IPTEK.
4.	Mengembangkan budaya giat belajar yang bertumpu pada karakter Jujur,disiplin,tertib,mandiri dan bertanggung jawab.
5.	Menumbuhkan rasa cinta kebersihan,keindahan, keamanan Sekolah dan lingkungan seuai situasi dan kondisi peserta didik.',
            'slug' => 'visimisi'
        ]);
    }
}
