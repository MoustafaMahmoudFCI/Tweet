<x-app>
<div class="grid grid-cols-2">
@foreach ($users as $user)
<div class="flex items-center text-sm mb-4">
    <a href="{{ route('profile' , $user->username) }}">
        <img src="{{ $user->avatar }}" width="50px"
        class="rounded-full mr-4" alt="">
    </a>
    <h5>
        <a href="{{ route('profile' , $user->username) }}">
        {{ $user->name }}
        </a>
    </h5>
</div>
@endforeach
</div>
</x-app>
