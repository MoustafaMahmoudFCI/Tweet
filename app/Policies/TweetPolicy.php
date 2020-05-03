<?php

namespace App\Policies;

use App\Models\Tweet;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TweetPolicy {
	use HandlesAuthorization;

	/**
	 * Determine if the given tweet can be deleted by the user.
	 *
	 * @param  \App\User  $user
	 * @param  \App\Models\Tweet  $tweet
	 * @return bool
	 */
	public function delete(User $user, Tweet $tweet) {
		return $user->id == $tweet->user_id;
	}
}
