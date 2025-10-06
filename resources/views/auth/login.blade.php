<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8">
        <div class="flex flex-col items-center mb-4">
            <img src="{{ asset('images/LOGO-SMA-TARUNA-NUSANTARA-1.png') }}" alt="Logo SMA TN" class="w-40 h-40 mb-5">
            <h1 class="text-2xl font-bold text-gray-700 mb-3">SMA TARUNA NUSANTARA</h1>
        </div>
        <h2 class="text2xl font-bold text-center text-gray-700 mb-6">
            @if($errors->any())
            <div class="mb-4 p-3 rounded bg-red-100 text-red-600">
                <ul class="list-disc list-inside text-sm">
                    @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form method="POST" action="{{ route('login.post') }}" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-gray-600 text-sm mb-1 text-left">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
                <div>
                    <label class="block text-gray-600 text-sm mb-1 text-left">Password</label>
                    <div class="relative">
                        <input id="password" type="password" name="password" required
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 pr-10">
                        <button type="button" onclick="togglePassword()"
                            class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-500 hover:text-gray-700">

                            <svg id="eyeOpen" xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268
                                    2.943 9.542 7-1.274 4.057-5.065 7-9.542
                                    7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            <svg id="eyeClosed" xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7
                                    a10.05 10.05 0 012.478-4.362m2.12-2.12A9.956 9.956 0 0112 5c4.478
                                    0 8.268 2.943 9.543 7a9.964 9.964 0 01-4.043
                                    5.411M15 12a3 3 0 11-6 0 3 3 0 016
                                    0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3l18 18" />
                            </svg>
                        </button>
                    </div>
                </div>

                <script>
                function togglePassword() {
                    const input = document.getElementById("password");
                    const eyeOpen = document.getElementById("eyeOpen");
                    const eyeClosed = document.getElementById("eyeClosed");

                    if (input.type === "password") {
                        input.type = "text";
                        eyeOpen.classList.add("hidden");
                        eyeClosed.classList.remove("hidden");
                    } else {
                        input.type = "password";
                        eyeOpen.classList.remove("hidden");
                        eyeClosed.classList.add("hidden");
                    }
                }
                </script>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember" type="checkbox" name="remember"
                        class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="remember" class="ml-2 block text-sm text-gray-600">Remember me</label>
                    </div>
                    <a href="#" class="text-sm text-blue-500 hover:underLine">Lupa password</a>
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition">Login</button>
            </form>
        </h2>
    </div>
</body>
</body>
</html>
