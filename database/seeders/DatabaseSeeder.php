<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            GenreSeeder::class,
            UserSeeder::class,
            MediaSeeder::class,
            FriendSeeder::class,
            WatchPartySeeder::class,
            WatchPartyParticipantsSeeder::class,
            QuizSeeder::class,
            QuestionSeeder::class,
            AnswerSeeder::class

        ]);
    }
}
