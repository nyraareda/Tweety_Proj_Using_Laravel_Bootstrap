<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    /**
     * Create a new policy instance.
     */
    public function edit(User $current_user,User $user){

        return $current_user->is($user);
    }
}
