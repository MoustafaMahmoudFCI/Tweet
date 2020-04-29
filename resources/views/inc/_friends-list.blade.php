<div class="bg-blue-100 p-4 rounded-xl">
    <h2 class="font-bold text-2xl mb-4">Following</h2>
    <ul>
        {{-- @forelse (current_user()->follows as $follower)
            <li class="{{ $loop->last ? '' : 'mb-4' }}">
                <div class="flex items-center text-sm">
                    <a href="{{ route('profile' , $follower->username) }}">
                        <img src="{{ $follower->avatar }}" width="50px"
                        class="rounded-full mr-4" alt="">
                    </a>
                    <h5>
                        <a href="{{ route('profile' , $follower->username) }}">
                        {{ $follower->name }}
                        </a>
                    </h5>
                </div>
            </li>
        @empty
            <p class="p-4">No Friends Yet</p>
        @endforelse --}}
    </ul>
</div>
