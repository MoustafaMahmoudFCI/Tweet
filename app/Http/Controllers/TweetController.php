<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller {
	public function index() {
		return view('tweets.index', [
			'tweets' => current_user()->timeline(),
		]);
	}

	public function store() {
		$data = request()->validate([
			'body' => ['required', 'string', 'min:2', 'max:255'],
		]);

		Tweet::create([
			'user_id' => auth()->id(),
			'body' => $data['body'],
		]);

		return back()->with('info', 'Tweet Is Published');
	}

	public function destroy(Tweet $tweet) {
		$this->authorize('delete', $tweet);
		$tweet->delete();
		// dd(current_user()->can('delete', $tweet));
		// if (current_user()->can('delete', $tweet)) {
		// 	$tweet->delete();
		// }

		return back();
	}
}
