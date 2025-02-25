<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouCode - Inscription</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.js"></script>
</head>
<body class="bg-black text-white">
    <!-- Navigation Bar -->
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
            <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                Inscris-toi
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </a>
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

    <!-- Hero Section -->
    <div class="relative h-screen">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 bg-black opacity-80 z-0">
            <div class="absolute inset-0 bg-gradient-to-b from-black to-transparent opacity-70"></div>
        </div>
        
        <!-- Hands on Keyboard -->
        <div class="absolute inset-0 z-0 overflow-hidden">
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('/api/placeholder/1920/1080'); filter: brightness(0.3);"></div>
        </div>
        
        <!-- Content -->
        <div class="relative z-10 flex flex-col items-center justify-center h-full text-center px-4">
            <div class="flex items-center justify-center mb-4">
                <div class="text-blue-500 text-8xl font-thin">『</div>
                <h1 class="text-5xl font-bold px-4">Inscription</h1>
                <div class="text-blue-500 text-8xl font-thin">』</div>
            </div>
            
            <!-- Code in Background -->
            <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0 opacity-20">
                <div class="text-blue-500 text-sm md:text-base font-mono whitespace-pre text-left p-4">
                    &lt;div class="code-snippet"&gt;
                      function learnToCode() {
                        const skills = ['HTML', 'CSS', 'JavaScript', 'React', 'Node.js'];
                        return skills.map(skill => `Learn ${skill}`);
                      }
                    &lt;/div&gt;
                </div>
            </div>
        </div>
    </div>
    
    <!-- Message Section -->
    <div class="bg-white text-gray-800 py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold uppercase tracking-wider">L'INSCRIPTION REPRENDRA BIENTÔT.</h2>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-black text-white py-8">
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
</body>
</html>