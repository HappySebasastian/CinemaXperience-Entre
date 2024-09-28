<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('answers')->insert([[
            //Alchemy of Souls Question
            //question 1
            'question_id' => '1',
            'answer_text' => 'Alchemy of Souls: The Final Magic',
            'is_correct' => '0',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ],
        [
            'question_id' => '1',
            'answer_text' => 'Alchemy of Souls: Dark and Light',
            'is_correct' => '0',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ],
        [
            'question_id' => '1',
            'answer_text' => 'Alchemy of Souls: Light and Shadow',
            'is_correct' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ],
        [
            'question_id' => '1',
            'answer_text' => 'Alchemy of Souls: The Lost Kingdom',
            'is_correct' => '0',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ],[//question 2
            'question_id' => '2',
            'answer_text' => 'Time travel',
            'is_correct' => '0',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ],
        [
            'question_id' => '2',
            'answer_text' => 'Soul-swapping',
            'is_correct' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ],
        [
            'question_id' => '2',
            'answer_text' => 'Shape-shifting',
            'is_correct' => '0',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ],
        [
            'question_id' => '2',
            'answer_text' => 'Teleportation',
            'is_correct' => '0',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ],[//question 3
            'question_id' => '3',
            'answer_text' => 'Lee Jae-wook',
            'is_correct' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ],
        [
            'question_id' => '3',
            'answer_text' => 'Park Seo-joon',
            'is_correct' => '0',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ],
        [
            'question_id' => '3',
            'answer_text' => 'Lee Min-ho',
            'is_correct' => '0',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ],
        [
            'question_id' => '3',
            'answer_text' => 'Kim Jong-un',
            'is_correct' => '0',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]]
        );
    }
}
