<form action="{{ route('follow' , $user->username) }}" method="post">
    @csrf
    <button type="submit" class="bg-blue-500 text-white rounded-full shadow text-xs px-4 py-2 hover:bg-blue-600 transition duration-300 ease-in-out">
        {{ current_user()->isFollowing($user) ? 'UnFollow Me' : 'Follow Me'}}
    </button>
</form>
