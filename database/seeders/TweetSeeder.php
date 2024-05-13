<?php

namespace Database\Seeders;

use App\Models\Tweet; // Add this import statement
use Illuminate\Database\Seeder;

class TweetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tweet::factory(10)->create();
    }
}
