<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GoalsSch;

class GoalsSchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GoalsSch::create([
            'name' => 'Tujuan SD YPKP 2 Sentani',
            'goals' => '1.	Menguasai dasar-dasar ilmu pengetahuan dan teknologi serta meraih prestasi akademik dan non akademik
2.	Terwujudnya peningkatan mutu keimanan dan ketaqwaan peserta didik melalui kegiatan keagamaan dan pembiasaan.
3.	Terbentuknya sikap sopan, santun, yang dijiwai nilai-nilai karakter bangsa dalam kehidupan sehari-hari di sekolah Dan di lingkungan sekitar
4.	Meningkatkan kesadaran peserta didik dalam berperilaku sesuai dengan wawasan lingkungan.
5.	Mewujudkan sekolah yang peduli dan berbudaya lingkungan.',
            'slug' => 'goalssch'
        ]);
    }
}
