<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <!-- Login and Google Login Button -->
        <div class="flex items-center justify-between mt-6">
            <x-primary-button>
                {{ __('Log in') }}
            </x-primary-button>

            <!-- Google Login Button -->
            <a href="{{ route('auth.redirect') }}" class="btn btn-danger">
                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 48 48" fill="currentColor">
                    <path d="M23.22 8.47c-1.03-.68-2.26-1.03-3.64-1.03s-2.61.35-3.64 1.03c-1.4.92-2.5 2.2-3.29 3.81-.23.42-.02.77.32 1.15l2.49 2.49c.13.13.3.22.48.22.18 0 .35-.09.48-.22l2.52-2.52c.37-.37.37-.63.32-1.15-.73-1.61-1.85-2.89-3.25-3.81zm-2.77 10.45c-1.6 0-2.98.57-4.08 1.5-.26.21-.38.5-.38.81v3.58h4.23c-.16 1-.65 1.83-1.34 2.5-.26.26-.37.63-.29 1 .23.91 1.05 1.57 2.02 1.57 1.16 0 2.12-.97 2.12-2.17v-.63h-1.35v.63c0 .68-.56 1.23-1.25 1.23-.63 0-1.13-.45-1.24-1.04l-.03-.12c-.24-.87-.78-1.61-1.6-2.11v-.04l-.88-.7c-.25-.22-.26-.6-.02-.84.24-.25.61-.26.85-.02l.86.68c.67-.34 1.45-.53 2.27-.53 1.9 0 3.58 1.3 4.08 3.15.09.38-.03.75-.29 1-1.12.92-2.5 1.5-4.1 1.5zm19.04-10.45c-1.4-.92-2.5-2.2-3.29-3.81-.23-.42-.02-.77.32-1.15l2.49-2.49c.13-.13.3-.22.48-.22.18 0 .35.09.48.22l2.52 2.52c.37.37.37.63.32 1.15-.73 1.61-1.85 2.89-3.25 3.81-1.03.68-2.26 1.03-3.64 1.03s-2.61-.35-3.64-1.03z"/>
                    <path fill="none" d="M0 0h48v48H0z"/>
                </svg>
                {{ __('Login with Google') }}
            </a>
        </div>

        <!-- Forgot Password Link -->
        @if (Route::has('password.request'))
            <div class="text-right mt-4">
                <a href="{{ route('password.request') }}" class="text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Forgot your password?') }}
                </a>
            </div>
        @endif
    </form>
</x-guest-layout>
