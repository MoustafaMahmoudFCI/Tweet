<x-master>
    <div class="container">
        <div class="flex justify-center max-w-sm mx-auto bg-gray-200 rounded-xl shadow-2xl">
            <div class="w-full px-6 py-4">
                <h2 class="text-center text-2xl font-bold text-gray-800">
                    {{ __('Register') }}
                </h2>

                <div class="">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-2">
                            <label for="name" class="form-label">{{ __('Name') }}</label>

                            <input id="name" type="text" class="form-input border-gray-400 @error('name') border-red-500 @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="error" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-2">
                            <label for="username" class="form-label">{{ __('username') }}</label>

                            <input id="username" type="text" class="form-input border-gray-400 @error('username') border-red-500 @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                            @error('username')
                                <span class="error" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-2">
                            <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>

                            <input id="email" type="email" class="form-input border-gray-400 @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="error" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-2">
                            <label for="password" class="form-label">{{ __('Password') }}</label>

                            <input id="password" type="password" class="form-input border-gray-400 @error('password') border-red-500 @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="error" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-2">
                            <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>

                            <input id="password-confirm" type="password" class="form-input" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="mb-0 flex items-center justify-between">
                                <button type="submit" class="btn btn-blue transition duration-300 ease-in-out">
                                    {{ __('Register') }}
                                </button>
                                <a class="text-blue-400 hover:text-blue-500 text-sm capitalize" href="/login">Already have account ? </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-master>
