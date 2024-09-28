<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('answers')->insert([[
            'question_id' => '1',
            'answer_text' => 'Alchemy of Souls: The Final Magic,
                              Alchemy of Souls: Dark and Light,
                              Alchemy of Souls: Light and Shadow,
                              Alchemy of Souls: The Lost Kingdom,',
            'is_correct' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]]
        );
    }
}
