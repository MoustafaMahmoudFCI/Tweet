@forelse ($tweets as $tweet)
<div class="flex my-4 p-4 {{ $loop->last ? '':'border-b border-gray-400'}}">
    <div class="mr-2 flex-shrink-0">
        <a href="">
            <img src="{{ $tweet->user->avatar }}" width="50px"
            class="rounded-full mr-4" alt="">
        </a>
    </div>
    <div>
        <a href="">
            <h5 class="font-bold mb-3">{{ $tweet->user->name }}</h5>
        </a>
        <p class="text-sm">{{ $tweet->body }}</p>
    </div>
</div>
@empty
<p class="p-4">No Tweets Yet</p>
@endforelse
{{ $tweets->links() }}
