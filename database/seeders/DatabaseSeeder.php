<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User_cards;
use App\Models\Card;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::factory(10)->create();
        Card::factory(10)->create();

        for($i = 1; $i <= 10; $i++) {
            for($j = 1; $j <= 10; $j++) {
                User_cards::factory()->create([
                    'user_id' => $i,
                    'card_id' => $j,
                    'quantity' => rand(1, 100),                    
                ]);
            }
        }

    }
}
    