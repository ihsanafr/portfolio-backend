{{-- <x-guest-layout>
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

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login To Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/general-sans" rel="stylesheet">

</head>

<body class="font-['General Sans'] bg-[#f5f5f5] flex flex-col items-center justify-center align-center h-screen">


    <div class="bg-white p-10 shadow-md rounded-2xl w-[30rem]">
        <p class="font-bold">Selamat Datang!</p>

        <p class="font-regular text-lg">Masuk Kedalam Dashboard</p>
        <div class="h-10"></div>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <p class="text-sm">Email</p>
            <input name="email" :value="old('email')" required autofocus autocomplete="username" id="email"  type="email" class="mt-2 p-3 bg-gray-100 border border-gray-300 rounded-xl w-full"
                placeholder="Email">
            <div class="h-5"></div>
            <p class="text-sm">Password</p>
            <input type="password" name="password" required autocomplete="current-password" type="password" class="mt-2 p-3 bg-gray-100 border border-gray-300 rounded-xl w-full" placeholder="Password">
            <div class="h-10"></div>
            <button type="submit"
                class="bg-blue-700 hover:bg-blue-500 font-semibold text-white py-2 px-10 rounded-lg transition transform duration-300">{{ __('Log in') }}
            </button>
        </form>
    </div>

</body>

</html>
