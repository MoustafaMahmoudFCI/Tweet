<?php

namespace App\Traits;

use App\User;

trait Followable
{
    public function follows()
    {
        return $this->belongsToMany('App\User', 'follows', 'user_id', 'following_user_id');
    }

    public function follow(User $user)
    {
        $this->follows()->save($user);
    }

    public function toggleFollow(User $user)
    {
        $this->follows()->toggle($user);
    }

    public function isFollowing(User $user)
    {
        return $this->follows()->where('following_user_id', $user->id)->exists();
    }
}
