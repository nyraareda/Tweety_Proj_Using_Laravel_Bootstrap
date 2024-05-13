<?php
// File: database/seeders/FollowSeeder.php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Follow;
class FollowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Get all users
        $users = User::all();
    
        // Iterate over each user
        foreach ($users as $user) {
            // Randomly select a few other users to follow
            $followedUsers = User::where('id', '!=', $user->id)->inRandomOrder()->take(rand(1, 5))->get();
    
            // Debug the contents of $followedUsers
            // dd($followedUsers);
    
            // Attach the selected users as followed by the current user
            foreach ($followedUsers as $followedUser) {
                Follow::create([
                    'user_id' => $user->id,
                    'follows_id' => $followedUser->id,
                ]);
            }
        }
    }
    
}
