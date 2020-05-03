<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class FollowsController extends Controller
{
    public function store(User $user)
    {
        current_user()->toggleFollow($user);
        return back()->with('info', "You are currently follow/unfollow {$user->username}");
    }
}
