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

        ],[//Deadpool and Wolverine Question 1
            'question_id' => '4',
            'answer_text' => 'Chris Evans',
            'is_correct' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ],
        [
            'question_id' => '4',
            'answer_text' => 'Johny Depp',
            'is_correct' => '0',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ],
        [
            'question_id' => '4',
            'answer_text' => 'Elijah Wood',
            'is_correct' => '0',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ],
        [
            'question_id' => '4',
            'answer_text' => 'Robert Downey Jr.',
            'is_correct' => '0',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ],[//Deadpool and Wolverine Question 2
            'question_id' => '5',
            'answer_text' => 'Red Skull',
            'is_correct' => '0',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ],
        [
            'question_id' => '5',
            'answer_text' => 'Thanos',
            'is_correct' => '0',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ],
        [
            'question_id' => '5',
            'answer_text' => 'Magneto',
            'is_correct' => '0',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ],
        [
            'question_id' => '5',
            'answer_text' => 'Cassandra Nova',
            'is_correct' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ],[//Deadpool and Wolverine Question 3
            'question_id' => '6',
            'answer_text' => 'Tom Holland',
            'is_correct' => '0',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ],
        [
            'question_id' => '6',
            'answer_text' => 'Tom Bradley',
            'is_correct' => '0',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ],
        [
            'question_id' => '6',
            'answer_text' => 'Henry Cavill',
            'is_correct' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ],
        [
            'question_id' => '6',
            'answer_text' => 'Hugh Jackman',
            'is_correct' => '0',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ],[//The Medium 1
            'question_id' => '7',
            'answer_text' => 'Thailand',
            'is_correct' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ],
        [
            'question_id' => '7',
            'answer_text' => 'Japan',
            'is_correct' => '0',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ],
        [
            'question_id' => '7',
            'answer_text' => 'Indonesia',
            'is_correct' => '0',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ],
        [
            'question_id' => '7',
            'answer_text' => 'South Korea',
            'is_correct' => '0',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ],[//The Medium 2
            'question_id' => '8',
            'answer_text' => 'Time travel',
            'is_correct' => '0',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ],
        [
            'question_id' => '8',
            'answer_text' => 'A family haunted by spirits',
            'is_correct' => '0',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ],
        [
            'question_id' => '8',
            'answer_text' => 'A cursed artifact',
            'is_correct' => '0',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ],
        [
            'question_id' => '8',
            'answer_text' => 'A shaman dealing with a possession',
            'is_correct' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ],[//The Medium 3
            'question_id' => '9',
            'answer_text' => 'Bong Joon-ho',
            'is_correct' => '0',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ],
        [
            'question_id' => '9',
            'answer_text' => 'Na Hong-jin',
            'is_correct' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ],
        [
            'question_id' => '9',
            'answer_text' => 'Kim Jee-woon',
            'is_correct' => '0',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ],
        [
            'question_id' => '9',
            'answer_text' => 'Park Chan-wook',
            'is_correct' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]]
        );
    }
}
