<x-app>
    <header class="mb-4 ">
        <div class="relative">
            <img class="rounded-xl"
                src="{{ $user->profile_img }}"
                alt="profile picture">
            <img src="{{ $user->avatar }}"
            class="rounded-full absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
            style="left:50%" alt="profile picture" width="150px" height="150px">
        </div>
        <div class="flex justify-between items-center my-2">
            <div style="max-width:270px">
                <h2 class="font-bold text-2xl capitalize">{{ $user->name }}</h2>
                <span class="text-sm text-gray-500">
                    Joined {{ $user->created_at->diffForhumans() }}
                </span>
            </div>
            <div class="flex">
                @can('edit', $user)
                    <a href="{{ $user->path('edit') }}" class="text-black border border-gray-300 mr-2 rounded-full text-xs px-4 py-2 hover:bg-gray-200 transition duration-200 ease-in-out">Edit Profile</a>
                @endcan

                @if (current_user()->isNot($user))
                    <x-follow-button :user="$user"></x-follow-button>
                @endif
            </div>
        </div>
        <p class="text-sm mt-4">
            {{ $user->biography }}
        </p>
    </header>

    <div class="border border-gray-300 rounded-lg mt-6">
        @include('inc._tweet' , ['tweets' => $tweets])
    </div>
</x-app>
