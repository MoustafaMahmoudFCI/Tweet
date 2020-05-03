<x-app>
    <div>
        <form action="{{ $user->path('update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="lg:grid lg:grid-cols-2 lg:gap-4">
                <div class="mb-4">
                    <label for="name" class="form-label">
                        Name
                    </label>
                    <input type="text" name="name" class="form-input text-gray-500 @error('name') text-red-500 @enderror" value="{{ $user->name }}">
                    @error('name')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="username" class="form-label">
                        username
                    </label>
                    <input type="text" name="username" class="form-input text-gray-500 @error('username') text-red-500 @enderror" value="{{ $user->username }}">
                    @error('username')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-4">
                <label for="email" class="form-label">
                    email
                </label>
                <input type="text" name="email" class="form-input text-gray-500 @error('email') text-red-500 @enderror" value="{{ $user->email }}">
                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="avatar" class="form-label">
                    avatar
                </label>
                <div class="flex">
                    <input type="file" name="avatar" class="form-input text-gray-500 @error('avatar') text-red-500 @enderror">
                    <img src="{{ $user->avatar }}" alt="{{ $user->name }}'s avatar" width="40px">
                </div>
                @error('avatar')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="profile_img" class="form-label">
                    profile image
                </label>
                <div class="flex">
                    <input type="file" name="profile_img" class="form-input text-gray-500 @error('profile_img') text-red-500 @enderror">
                    <img src="{{ $user->profile_img }}" alt="{{ $user->name }}'s avatar" width="40px">
                </div>
                @error('profile_img')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="biography" class="form-label">
                    biography
                </label>
                <textarea name="biography" class="form-input text-gray-500 @error('biography') text-red-500 @enderror">
                {{ $user->biography }}
                </textarea>
                @error('biography')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="lg:grid lg:grid-cols-2 lg:gap-4">
                <div class="mb-4">
                    <label for="password" class="form-label">
                        password
                    </label>
                    <input type="text" name="password" class="form-input text-gray-500 @error('password') text-red-500 @enderror">
                    @error('password')
                    <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="form-label">
                        password_confirmation
                    </label>
                    <input type="text" name="password_confirmation" class="form-input text-gray-500 @error('password_confirmation') text-red-500 @enderror">
                    @error('password_confirmation')
                    <div class="error">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="text-center mx-auto flex justify-center items-center">
                <button type="submit" class="btn btn-blue mr-4">Save</button>
                <a href="{{ $user->path() }}" class="hover:underline capitalize">back</a>
            </div>
        </form>
    </div>
</x-app>
