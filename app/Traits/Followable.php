<?php

namespace App\Traits;

use App\Models\User;

trait Followable
{
    public function following()
    {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'follows_id');
    }

    public function followedBy()
    {
        return $this->belongsToMany(User::class, 'follows', 'follows_id', 'user_id');
    }

    public function follow(User $user)
    {
        return $this->following()->save($user);
    }
    public function unFollow(User $user)
    {
        return $this->following()->detach($user);
    }

    public function toggleFollow(User $user)
{
    $currentUser = auth()->user();

    if ($currentUser->isFollow($user)) {
        // User is already followed, so unfollow
        return $currentUser->unFollow($user);
    } else {
        // User is not followed, so follow
        return $currentUser->follow($user);
    }
}

    public function isFollow(User $user)
{
    return $this->following()->where('follows_id', $user->id)->exists();
}
}
