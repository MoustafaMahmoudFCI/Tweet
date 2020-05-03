<?php

namespace App\Http\Controllers;

use App\Models\Tweet;

class LikesController extends Controller {
	public function store(Tweet $tweet) {
		if ($tweet->isLikedBy(current_user())) {
			$tweet->unlike(current_user());
		} else {
			$tweet->like(current_user());
		}
		return back();
	}

	public function destroy(Tweet $tweet) {
		if ($tweet->isDisLikedBy(current_user())) {
			$tweet->unlike(current_user());
		} else {
			$tweet->dislike(current_user());
		}
		return back();
	}
}
