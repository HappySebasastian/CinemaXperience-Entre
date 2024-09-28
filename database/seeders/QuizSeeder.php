<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('quizzes')->insert([[
            'media_id' => '1',
            'title' => 'Alchemy of Souls Quizzes',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()


        ]
        ]);
    }
}
