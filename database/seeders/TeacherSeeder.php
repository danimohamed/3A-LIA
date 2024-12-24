<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teachers = [
            'Mr SALAHI',
            'Mme Hafsa',
            'Mme Hansali',
            'Mr Ibrahim',
            'Mr DAAIF',
            'Mr Himmich',
        ];

        foreach ($teachers as $teacher) {
            DB::table('teachers')->insert([
                'teacher_name' => $teacher,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
