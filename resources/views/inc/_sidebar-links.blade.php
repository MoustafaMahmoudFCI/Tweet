<ul class="p-4 bg-gray-100 rounded-xl">
    <li>
        <a href="/tweets" class="link link-transition">
            Home
        </a>
    </li>
    <li>
        <a href="{{ route('explore') }}" class="link link-transition">
            Explore
        </a>
    </li>
    <li>
        <a href="#" class="link link-transition">
            Notifications
        </a>
    </li>
    <li>
        <a href="#" class="link link-transition">
            Messages
        </a>
    </li>
    <li>
        <a href="#" class="link link-transition">
            Bookmarks
        </a>
    </li>
    <li>
        <a href="{{ current_user()->path() }}" class="link link-transition">
            Profile
        </a>
    </li>
    <li>
        <a href="#" class="link link-transition">
            lists
        </a>
    </li>
    <li>
        <a href="#" class="link link-transition">
            More
        </a>
    </li>
    <li>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="link link-transition">Logout</button>
        </form>
    </li>
</ul>
