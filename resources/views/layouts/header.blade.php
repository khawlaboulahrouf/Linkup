<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LinkUp - L'Écosystème des Réseaux Professionnels</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-slate-100 text-slate-900 antialiased font-sans">

    <header class="bg-white border-b border-slate-200 sticky top-0 z-50 shadow-sm/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-14">

                <div class="flex items-center space-x-3 flex-1">
                    <div class="flex items-center justify-center w-9 h-9 rounded-md bg-blue-600 text-white font-bold text-xl tracking-wider shadow-sm">
                        L<span class="text-xs font-light">U</span>
                    </div>
                    <div class="relative w-full max-w-xs hidden md:block">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-search text-slate-400 text-sm"></i>
                        </div>
                        <input type="text" placeholder="Rechercher des profils, posts..." class="block w-full pl-9 pr-3 py-1.5 bg-slate-100 border border-transparent rounded-md text-sm placeholder-slate-500 focus:outline-none focus:bg-white focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition duration-150">
                    </div>
                </div>

                <nav class="flex items-center space-x-1 sm:space-x-4 md:space-x-6">
                    <a href="" class="flex flex-col items-center justify-center {{ request()->routeIs('feed') ? 'text-slate-900 border-b-2 border-slate-900' : 'text-slate-500 hover:text-slate-900' }} px-1 pt-1 text-xs font-medium min-w-[64px] h-14 transition duration-150">
                        <i class="fas fa-home text-lg mb-0.5"></i>
                        <span class="hidden sm:block text-[10px]">Accueil</span>
                    </a>
                    <a href="#" class="flex flex-col items-center justify-center text-slate-500 hover:text-slate-900 px-1 pt-1 text-xs font-medium min-w-[64px] h-14 transition duration-150">
                        <i class="fas fa-users text-lg mb-0.5"></i>
                        <span class="hidden sm:block text-[10px]">Réseau</span>
                    </a>
                    <a href="#" class="flex flex-col items-center justify-center text-slate-500 hover:text-slate-900 px-1 pt-1 text-xs font-medium min-w-[64px] h-14 transition duration-150">
                        <i class="fas fa-briefcase text-lg mb-0.5"></i>
                        <span class="hidden sm:block text-[10px]">Emplois</span>
                    </a>
                    <a href="#" class="flex flex-col items-center justify-center text-slate-500 hover:text-slate-900 px-1 pt-1 text-xs font-medium min-w-[64px] h-14 transition duration-150 relative">
                        <i class="fas fa-comment-dots text-lg mb-0.5"></i>
                        <span class="absolute top-2 right-4 bg-red-500 text-white text-[9px] font-bold rounded-full h-4 w-4 flex items-center justify-center">3</span>
                        <span class="hidden sm:block text-[10px]">Messagerie</span>
                    </a>

                    <div class="flex flex-col items-center justify-center px-1 border-l border-slate-200 pl-4 h-14 cursor-pointer">
                        <img class="h-6 w-6 rounded-full object-cover ring-1 ring-slate-200" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=100&q=80" alt="Votre Profil">
                        <span class="hidden sm:flex items-center text-[10px] text-slate-500 mt-0.5">
                            Vous <i class="fas fa-caret-down ml-1 text-[8px]"></i>
                        </span>
                    </div>
                </nav>

            </div>
        </div>
    </header>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
     {{-- ktjib lina hadak file dyal aside --}}
            @include('layouts.aside')

            <main class="md:col-span-2 lg:col-span-2 space-y-4">

                {{-- resrver had lblasa bach atji fiha chi haja ncha2lah --}}
                @yield('content')
            </main>

            <aside class="space-y-4 hidden lg:block lg:col-span-1">
                <div class="bg-white rounded-xl border border-slate-200 p-4 shadow-sm">
                    <div class="flex items-center justify-between mb-3">
                        <h3 class="font-bold text-xs text-slate-900 uppercase tracking-wider">Suggestions de réseau</h3>
                        <i class="fas fa-info-circle text-slate-400 cursor-pointer text-xs"></i>
                    </div>
                    <div class="flex items-start space-x-3 py-2">
                        <img class="h-9 w-9 rounded-full object-cover" src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=100&q=80" alt="Recruteur">
                        <div class="text-xs">
                            <h4 class="font-bold text-slate-900">Meriem Bensalah</h4>
                            <p class="text-slate-500 line-clamp-1">Recruteuse Tech / Spécialiste IT</p>
                            <button class="mt-1.5 border border-slate-500 hover:border-slate-800 hover:bg-slate-50 text-slate-700 font-bold px-3 py-1 rounded-full text-[11px] flex items-center space-x-1 transition duration-150">
                                <i class="fas fa-user-plus text-[10px]"></i> <span>Se connecter</span>
                            </button>
                        </div>
                    </div>
                </div>
            </aside>

        </div>
    </div>

</body>
</html>
