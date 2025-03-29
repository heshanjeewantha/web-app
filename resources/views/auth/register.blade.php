<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <!-- Custom CSS -->
        <style>
            form {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: 0 auto;
            }

            .block {
            font-family: Arial, sans-serif;
            font-size: 14px;
            color: #333;
            }

            .mt-1 {
            margin-top: 0.25rem;
            }

            .mt-4 {
            margin-top: 1rem;
            }

            .w-full {
            width: 100%;
            }

            .underline {
            text-decoration: underline;
            }

            .text-sm {
            font-size: 0.875rem;
            }

            .text-gray-600 {
            color: #718096;
            }

            .hover\:text-gray-900:hover {
            color: #1a202c;
            }

            .rounded-md {
            border-radius: 0.375rem;
            }

            .focus\:outline-none:focus {
            outline: none;
            }

            .focus\:ring-2:focus {
            box-shadow: 0 0 0 2px rgba(99, 102, 241, 0.5);
            }

            .focus\:ring-offset-2:focus {
            box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.5);
            }

            .focus\:ring-indigo-500:focus {
            border-color: #6366f1;
            }

            .ms-4 {
            margin-left: 1rem;
            }

            .flex {
            display: flex;
            }

            .items-center {
            align-items: center;
            }

            .justify-end {
            justify-content: flex-end;
            }
        </style>
        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
