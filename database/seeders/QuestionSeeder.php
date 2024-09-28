<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('questions')->insert([[
            'quiz_id' => '1',
            'question_text' => 'What is the title of Part 2 of the K-drama Alchemy of Souls?',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]
        ]);
    }
}
