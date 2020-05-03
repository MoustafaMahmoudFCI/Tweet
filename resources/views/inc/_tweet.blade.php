@forelse ($tweets as $tweet)
<div class="tweet overflow-x-hidden relative flex my-4 p-4 {{ $loop->last ? '':'border-b border-gray-400'}}">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ current_user()->path('show') }}">
            <img src="{{ $tweet->user->avatar }}" width="50px"
            class="rounded-full mr-4" alt="">
        </a>
    </div>
	<div class="">
	    <h5 class="font-bold mb-3">
	    	<a href="{{ current_user()->path('show') }}">
	        	{{ $tweet->user->name }}
	    	</a>
	    </h5>
        <p class="text-sm">{{ $tweet->body }}</p>
        <x-like-button :tweet="$tweet"></x-like-button>
    </div>
    @can('delete' , $tweet)
		<form method="POST" action="{{ route('tweets.destroy' , $tweet->id) }}">
			@csrf
			<button type="submit" class="del_btn_tweet absolute border border-gray-200 transform transition ease-in-out rounded-full duration-300 px-3 translate-x-20 hover:bg-red-500 hover:text-white hover:border-transparent  hover:shadow"
		    style="top:10px; right: 6px;">
		delete
		</button>
		</form>
	@endcan
</div>
@empty
<p class="p-4">No Tweets Yet</p>
@endforelse
{{ $tweets->links() }}
