<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class LikesController extends Controller
{
    public function store(Tweet $tweet)
    {
        $tweet->like(current_user());
        return back();
    }

    public function destroy(Tweet $tweet)
    {
        $tweet->disLike(current_user());
        return back();
    }
}
