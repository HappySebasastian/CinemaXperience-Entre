<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB; // Import the DB facade
class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('questions')->insert([[ //AOS
            'quiz_id' => 1,
            'question_text' => 'What is the title of Part 2 of the K-drama Alchemy of Souls?',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'quiz_id' => 1,
            'question_text' => 'In Alchemy of Souls, what magical ability is central to the story plot?',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'quiz_id' => 1,
            'question_text' => 'Which actor plays the male lead character, Jang Uk, in Alchemy of Souls?',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],[ //Deadpool n Wolverine
            'quiz_id' => 2,
            'question_text' => 'Which actor portrays Johnny Storm in the Deadpool & Wolverine movies?',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'quiz_id' => 2,
            'question_text' => 'Who is the main antagonist of the movie ?',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'quiz_id' => 2,
            'question_text' => 'Which actor plays the Wolverine alternative "Calverine" ?',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],[ //The Medium
            'quiz_id' => 3,
            'question_text' => 'The Medium is a horror movie from which country?',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'quiz_id' => 3,
            'question_text' => 'What is the main theme of the movie The Medium?',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'quiz_id' => 3,
            'question_text' => 'The Medium was co-produced by which famous South Korean filmmaker?',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]
        ]);
    }
}
