<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Students;
use Carbon\Carbon;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students =[
            [
                'name' => 'Example1a',
                'nis' => '12345678',
                'nisn' => '123456789',
                'gender' => 'Laki-Laki',
                'birth_place' => 'Sentani',
                'birth_date' => Carbon::create(2024, 8, 13),
                'class' => '1',
                'category' => 'A',
                'slug' => 'upacara'
            ],
            [
                'name' => 'Example1b',
                'nis' => '12345678',
                'nisn' => '123456789',
                'gender' => 'Laki-Laki',
                'birth_place' => 'Sentani',
                'birth_date' => Carbon::create(2024, 8, 13),
                'class' => '1',
                'category' => 'B',
                'slug' => 'upacara'
            ],
            [
                'name' => 'Example1c',
                'nis' => '12345678',
                'nisn' => '123456789',
                'gender' => 'Laki-Laki',
                'birth_place' => 'Sentani',
                'birth_date' => Carbon::create(2024, 8, 13),
                'class' => '1',
                'category' => 'C',
                'slug' => 'upacara'
            ],
            [
                'name' => 'Example2a',
                'nis' => '12345678',
                'nisn' => '123456789',
                'gender' => 'Laki-Laki',
                'birth_place' => 'Sentani',
                'birth_date' => Carbon::create(2024, 8, 13),
                'class' => '2',
                'category' => 'A',
                'slug' => 'upacara'
            ],
            [
                'name' => 'Example2b',
                'nis' => '12345678',
                'nisn' => '123456789',
                'gender' => 'Laki-Laki',
                'birth_place' => 'Sentani',
                'birth_date' => Carbon::create(2024, 8, 13),
                'class' => '2',
                'category' => 'B',
                'slug' => 'upacara'
            ],
            [
                'name' => 'Example2c',
                'nis' => '12345678',
                'nisn' => '123456789',
                'gender' => 'Laki-Laki',
                'birth_place' => 'Sentani',
                'birth_date' => Carbon::create(2024, 8, 13),
                'class' => '2',
                'category' => 'C',
                'slug' => 'upacara'
            ],
            [
                'name' => 'Example3a',
                'nis' => '12345678',
                'nisn' => '123456789',
                'gender' => 'Laki-Laki',
                'birth_place' => 'Sentani',
                'birth_date' => Carbon::create(2024, 8, 13),
                'class' => '3',
                'category' => 'A',
                'slug' => 'upacara'
            ],
            [
                'name' => 'Example3b',
                'nis' => '12345678',
                'nisn' => '123456789',
                'gender' => 'Laki-Laki',
                'birth_place' => 'Sentani',
                'birth_date' => Carbon::create(2024, 8, 13),
                'class' => '3',
                'category' => 'B',
                'slug' => 'upacara'
            ],
            [
                'name' => 'Example3c',
                'nis' => '12345678',
                'nisn' => '123456789',
                'gender' => 'Laki-Laki',
                'birth_place' => 'Sentani',
                'birth_date' => Carbon::create(2024, 8, 13),
                'class' => '3',
                'category' => 'C',
                'slug' => 'upacara'
            ],
            [
                'name' => 'Example4a',
                'nis' => '12345678',
                'nisn' => '123456789',
                'gender' => 'Laki-Laki',
                'birth_place' => 'Sentani',
                'birth_date' => Carbon::create(2024, 8, 13),
                'class' => '4',
                'category' => 'A',
                'slug' => 'upacara'
            ],
            [
                'name' => 'Example4b',
                'nis' => '12345678',
                'nisn' => '123456789',
                'gender' => 'Laki-Laki',
                'birth_place' => 'Sentani',
                'birth_date' => Carbon::create(2024, 8, 13),
                'class' => '4',
                'category' => 'B',
                'slug' => 'upacara'
            ],
            [
                'name' => 'Example4c',
                'nis' => '12345678',
                'nisn' => '123456789',
                'gender' => 'Laki-Laki',
                'birth_place' => 'Sentani',
                'birth_date' => Carbon::create(2024, 8, 13),
                'class' => '4',
                'category' => 'C',
                'slug' => 'upacara'
            ],
            [
                'name' => 'Example5a',
                'nis' => '12345678',
                'nisn' => '123456789',
                'gender' => 'Laki-Laki',
                'birth_place' => 'Sentani',
                'birth_date' => Carbon::create(2024, 8, 13),
                'class' => '5',
                'category' => 'A',
                'slug' => 'upacara'
            ],
            [
                'name' => 'Example5b',
                'nis' => '12345678',
                'nisn' => '123456789',
                'gender' => 'Laki-Laki',
                'birth_place' => 'Sentani',
                'birth_date' => Carbon::create(2024, 8, 13),
                'class' => '5',
                'category' => 'B',
                'slug' => 'upacara'
            ],
            [
                'name' => 'Example5c',
                'nis' => '12345678',
                'nisn' => '123456789',
                'gender' => 'Laki-Laki',
                'birth_place' => 'Sentani',
                'birth_date' => Carbon::create(2024, 8, 13),
                'class' => '5',
                'category' => 'C',
                'slug' => 'upacara'
            ],
            [
                'name' => 'Example6a',
                'nis' => '12345678',
                'nisn' => '123456789',
                'gender' => 'Laki-Laki',
                'birth_place' => 'Sentani',
                'birth_date' => Carbon::create(2024, 8, 13),
                'class' => '6',
                'category' => 'A',
                'slug' => 'upacara'
            ],
            [
                'name' => 'Example6b',
                'nis' => '12345678',
                'nisn' => '123456789',
                'gender' => 'Laki-Laki',
                'birth_place' => 'Sentani',
                'birth_date' => Carbon::create(2024, 8, 13),
                'class' => '6',
                'category' => 'B',
                'slug' => 'upacara'
            ],
            [
                'name' => 'Example6c',
                'nis' => '12345678',
                'nisn' => '123456789',
                'gender' => 'Laki-Laki',
                'birth_place' => 'Sentani',
                'birth_date' => Carbon::create(2024, 8, 13),
                'class' => '6',
                'category' => 'C',
                'slug' => 'upacara'
            ],
        ];

        foreach ($students as $student){

            Students::create([
                'name' => $student['name'],
                'nis' => $student['nis'],
                'nisn' => $student['nisn'],
                'gender' => $student['gender'],
                'birth_place' => $student['birth_place'],
                'birth_date' => $student['birth_date'],
                'class' => $student['class'],
                'category' => $student['category'],
                'slug' => $student['slug']
            ]);
        }
    }
}
