<x-master>
    <div class="container">
        <div class="bg-gray-200 flex justify-center mx-auto max-w-sm border border-gray-400 rounded-lg shadow-2xl">
            <div class="w-full px-6 py-3">
                <h2 class="mb-4 mt-2 text-2xl font-bold text-center capitalize text-gray-700">Login</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-6">
                        <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>

                        <input id="email" type="email"
                        class="form-input border-gray-400 @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="error" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="password" class="form-label">{{ __('Password') }}</label>

                            <input id="password" type="password" class="form-input border text-gray-400 @error('password') border-red-500 @enderror" name="password"  autocomplete="current-password">

                            @error('password')
                                <span class="error" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="mb-6">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="text-gray-700" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>

                    <div class="mb-2 flex items-center justify-between">
                            <button type="submit" class="btn btn-blue transition duration-200 ease-in-out">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="text-sm text-blue-400 hover:text-blue-500" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-master>
