<ul class="p-4 bg-gray-100 rounded-xl">
    <li>
        <a href="" class="font-bold mb-4 text-lg block">
            Home
        </a>
    </li>
    <li>
        <a href="" class="font-bold mb-4 text-lg block">
            Explore
        </a>
    </li>
    <li>
        <a href="#" class="font-bold mb-4 text-lg block">
            Notifications
        </a>
    </li>
    <li>
        <a href="#" class="font-bold mb-4 text-lg block">
            Messages
        </a>
    </li>
    <li>
        <a href="#" class="font-bold mb-4 text-lg block">
            Bookmarks
        </a>
    </li>
    <li>
        <a href="" class="font-bold mb-4 text-lg block">
            Profile
        </a>
    </li>
    <li>
        <a href="#" class="font-bold mb-4 text-lg block">
            lists
        </a>
    </li>
    <li>
        <a href="#" class="font-bold mb-4 text-lg block">
            More
        </a>
    </li>
    <li>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="font-bold mb-4 text-lg block">Logout</button>
        </form>
    </li>
</ul>
