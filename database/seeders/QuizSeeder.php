<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Import the DB facade
use Carbon\Carbon; // Import Carbon for date and time handling

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('quizzes')->insert([
            [
                'media_id' => 1,
                'title' => 'Alchemy of Souls Quizzes',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'media_id' => 10,
                'title' => 'Deadpool & Wolverine Quizzes',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'media_id' => 11,
                'title' => 'The Medium Quizzes',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
