<div class="border border-blue-400 relative rounded-xl py-2 px-8">
    <form method="POST" action="{{ route('tweets.store') }}">
        @csrf
        <textarea id="tweet" name="body"
            class="w-full py-4 px-2 outline-none border-b-2 focus:border-blue-400 transition duration-300 ease-in-out"
            placeholder="What's up ?" required>
        </textarea>
        <span class="count text-gray-700 absolute text-sm" style="left:50%; bottom:25px"></span>
        @error('body')
            <p class="text-sm text-red-500">{{ $message }}</p>
        @enderror
        <footer class="flex justify-between my-2">
            <div class="flex items-center text-sm">
                <img src="{{ current_user()->avatar }}"
                class="rounded-full mr-4" alt="" width="40px">
            </div>
            <button type="submit" id="publish-tweet" class="bg-blue-500 hover:bg-blue-600 py-2 transition duration-300 ease-in-out rounded-full px-10 text-white shadow">tweet</button>
        </footer>
    </form>
</div>
