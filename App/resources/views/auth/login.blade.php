<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouCode - Login</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-black text-white">

    <style>
        .bg-code {
            background-color: rgba(0, 0, 0, 0.9);
        }

        body {
            overflow-x: hidden; /* Prevent horizontal scrollbars */
        }

        .code-rain {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none; /* Allow interaction with elements below */
            z-index: -1; /* Place behind other content */
        }

        .code-line {
            position: absolute;
            white-space: nowrap;
            color: #00ff00; /* Green code */
            font-family: monospace;
            font-size: 14px;
            animation: rain 5s linear infinite;
        }

        @keyframes rain {
            0% {
                transform: translateY(-100%);
            }
            100% {
                transform: translateY(100vh);
            }
        }
    </style>

    <nav class="bg-black py-4 px-6 flex justify-between items-center">
        <div class="flex items-center">
            <a href="#" class="text-2xl font-bold"><span class="text-white">You</span><span class="text-blue-500">Code</span><span class="text-white">.</span></a>
        </div>
        <div class="hidden md:flex space-x-6 items-center">
            <a href="#" class="hover:text-blue-500">Accueil</a>
            <div class="relative group">
                <a href="#" class="flex items-center hover:text-blue-500">
                    Campus
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>
            </div>
            <a href="#" class="hover:text-blue-500">Principes pédagogiques</a>
            <div class="relative group">
                <a href="#" class="flex items-center hover:text-blue-500">
                    Programmes
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>
            </div>
            <a href="#" class="hover:text-blue-500">Où nous trouver</a>
            <div class="relative group">
                <a href="#" class="flex items-center hover:text-blue-500">
                    Langue
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>
            </div>

            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                        >
                            Dashboard
                        </a>
                    @else
                        <!-- <a
                            href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                        >
                            Log in
                        </a> -->
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                            Inscris-toi
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </a>
                    @endif
                    @endauth
                </nav>
            @endif
        </div>
        <!-- Mobile Menu Button -->
        <div class="md:hidden">
            <button class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </nav>

    <div class="container mx-auto px-4 py-8">
        <form method="POST" action="{{ route('login') }}" class="max-w-md mx-auto bg-black p-6 rounded-md shadow-md">
        @csrf

        <div class="mb-4">
            <label for="email" class="block text-white text-sm font-bold mb-2">Email</label>
            <input id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
            @error('email')
                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password" class="block text-white text-sm font-bold mb-2">Password</label>
            <input id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                type="password" name="password" required autocomplete="current-password">
            @error('password')
                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center justify-between mb-6">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="form-checkbox rounded text-blue-500 focus:ring-blue-500" name="remember">
                <span class="ml-2 text-sm text-gray-400">Remember me</span>
            </label>
            @if (Route::has('password.request'))
                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{ route('password.request') }}">
                    Forgot Password?
                </a>
            @endif
        </div>

        <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Log In
            </button>
            <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{ route('register') }}">
                Register
            </a>
        </div>
        </form>
    </div>

    <footer class="bg-black text-white py-8">
        <div class="code-rain"></div>
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-6 md:mb-0">
                    <a href="#" class="text-2xl font-bold"><span class="text-white">You</span><span class="text-blue-500">Code</span><span class="text-white">.</span></a>
                    <p class="text-sm text-gray-400 mt-2">Apprenez le codage. Changez votre avenir.</p>
                </div>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="mt-8 border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between">
                <p class="text-sm text-gray-400">© 2025 YouCode. Tous droits réservés.</p>
                <div class="mt-4 md:mt-0">
                    <a href="#" class="text-sm text-gray-400 hover:text-white mr-4">Politique de confidentialité</a>
                    <a href="#" class="text-sm text-gray-400 hover:text-white">Conditions d'utilisation</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        function createCodeLine() {
            const codeLine = document.createElement('div');
            codeLine.classList.add('code-line');
            codeLine.style.left = Math.random() * 100 + 'vw';
            codeLine.style.animationDuration = (Math.random() * 4 + 3) + 's';
            const characters = 'abcdefghijklmnopqrstuvwxyz0123456789$!#';
            let content = '';
            for (let i = 0; i < Math.random() * 30 + 10; i++) {
                content += characters.charAt(Math.floor(Math.random() * characters.length));
            }
            codeLine.textContent = content;

            document.querySelector('.code-rain').appendChild(codeLine);
            codeLine.addEventListener('animationend', () => {
                codeLine.remove();
            });
        }
        setInterval(createCodeLine, 100);
    </script>

</body>
</html>
