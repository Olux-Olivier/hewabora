
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard - HewaBora</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                translate: 0 20px;
            }
            to {
                opacity: 1;
                translate: 0 0;
            }
        }

        .page-header {
            animation: fadeIn 0.6s ease both;
        }

        .dashboard-card {
            opacity: 0;
            animation: slideUp 0.7s ease both;

            transition:
                transform 0.25s ease,
                box-shadow 0.25s ease,
                border-color 0.25s ease;
        }

        .dashboard-card:hover {
            transform: translateY(-5px) scale(1.03);
            box-shadow: 0 12px 28px rgba(15, 23, 42, 0.08);
            border-color: #cbd5e1;
        }

        .dashboard-card:active {
            transform: translateY(-2px) scale(1.01);
        }

        .card-icon {
            transition: transform 0.25s ease;
        }

        .dashboard-card:hover .card-icon {
            transform: scale(1.08);
        }

        .delay-1 { animation-delay: 0.1s; }
        .delay-2 { animation-delay: 0.2s; }
        .delay-3 { animation-delay: 0.3s; }
        .delay-4 { animation-delay: 0.4s; }

        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                animation-duration: 0.01ms !important;
                transition-duration: 0.01ms !important;
            }

            .dashboard-card {
                opacity: 1;
            }
        }
    </style>
</head>

<body class="min-h-screen bg-slate-50 text-slate-800 font-sans">

    <div class="min-h-screen flex flex-col">

        <!-- En-tête -->
        <header class="bg-white border-b border-slate-200">
            <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">

                <div class="flex items-center gap-3">

                    <div class="w-12 h-12 rounded-full overflow-hidden border border-slate-200 bg-white flex items-center justify-center">

                        @if(file_exists(public_path('images/logo.png')))
                            <img
                                src="{{ asset('images/logo.png') }}"
                                alt="Logo HewaBora"
                                class="w-full h-full object-cover"
                            >
                        @else
                            <span class="text-lg font-bold text-slate-800">
                                HB
                            </span>
                        @endif

                    </div>

                    <div>
                        <h1 class="text-xl font-bold text-slate-900">
                            HewaBora
                        </h1>

                        <p class="text-xs text-slate-500">
                            Lounge & Night
                        </p>
                    </div>

                </div>

                <div class="hidden sm:flex items-center gap-2 text-sm text-slate-500">
                    <span class="w-2 h-2 rounded-full bg-green-500"></span>
                    Administration
                </div>

            </div>
        </header>

        <!-- Contenu -->
        <main class="flex-1 max-w-6xl w-full mx-auto px-6 py-12">

            <!-- Titre -->
            <div class="page-header mb-10">

                <p class="text-sm font-medium text-slate-500 mb-2">
                    Tableau de bord
                </p>

                <h2 class="text-3xl font-bold text-slate-900">
                    Gestion des produits
                </h2>

                <p class="text-slate-500 mt-3 max-w-xl">
                    Sélectionnez un espace pour consulter et gérer les produits.
                </p>

            </div>

            <!-- Blocs de navigation -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">

                <!-- Foods Lounge -->
                <a
                    href="{{ route('dashboard.lounge.foods') }}"
                    class="dashboard-card delay-1 group bg-white border border-slate-200 rounded-xl p-6"
                >

                    <div class="card-icon w-11 h-11 rounded-lg bg-amber-50 text-amber-600 flex items-center justify-center mb-5">
                        <i class="fa-solid fa-utensils text-lg"></i>
                    </div>

                    <h3 class="font-semibold text-slate-900">
                        Foods Lounge
                    </h3>

                    <p class="text-sm text-slate-500 mt-2 leading-relaxed">
                        Gestion des plats du Lounge.
                    </p>

                    <div class="mt-6 flex items-center justify-between text-sm">

                        <span class="font-medium text-slate-600 group-hover:text-slate-900">
                            Consulter
                        </span>

                        <i class="fa-solid fa-arrow-right text-slate-400 group-hover:text-slate-700 transition-colors"></i>

                    </div>

                </a>

                <!-- Drinks Lounge -->
                <a
                    href="{{ route('dashboard.lounge.drinks') }}"
                    class="dashboard-card delay-2 group bg-white border border-slate-200 rounded-xl p-6"
                >

                    <div class="card-icon w-11 h-11 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center mb-5">
                        <i class="fa-solid fa-martini-glass-citrus text-lg"></i>
                    </div>

                    <h3 class="font-semibold text-slate-900">
                        Drinks Lounge
                    </h3>

                    <p class="text-sm text-slate-500 mt-2 leading-relaxed">
                        Gestion des boissons du Lounge.
                    </p>

                    <div class="mt-6 flex items-center justify-between text-sm">

                        <span class="font-medium text-slate-600 group-hover:text-slate-900">
                            Consulter
                        </span>

                        <i class="fa-solid fa-arrow-right text-slate-400 group-hover:text-slate-700 transition-colors"></i>

                    </div>

                </a>

                <!-- Drinks Night -->
                <a
                    href="{{ route('dashboard.night.drinks') }}"
                    class="dashboard-card delay-3 group bg-white border border-slate-200 rounded-xl p-6"
                >

                    <div class="card-icon w-11 h-11 rounded-lg bg-violet-50 text-violet-600 flex items-center justify-center mb-5">
                        <i class="fa-solid fa-wine-glass text-lg"></i>
                    </div>

                    <h3 class="font-semibold text-slate-900">
                        Drinks Night
                    </h3>

                    <p class="text-sm text-slate-500 mt-2 leading-relaxed">
                        Gestion des boissons du Night.
                    </p>

                    <div class="mt-6 flex items-center justify-between text-sm">

                        <span class="font-medium text-slate-600 group-hover:text-slate-900">
                            Consulter
                        </span>

                        <i class="fa-solid fa-arrow-right text-slate-400 group-hover:text-slate-700 transition-colors"></i>

                    </div>

                </a>

                <!-- Foods Night -->
                <a
                    href="{{ route('dashboard.night.foods') }}"
                    class="dashboard-card delay-4 group bg-white border border-slate-200 rounded-xl p-6"
                >

                    <div class="card-icon w-11 h-11 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center mb-5">
                        <i class="fa-solid fa-burger text-lg"></i>
                    </div>

                    <h3 class="font-semibold text-slate-900">
                        Foods Night
                    </h3>

                    <p class="text-sm text-slate-500 mt-2 leading-relaxed">
                        Gestion des plats du Night.
                    </p>

                    <div class="mt-6 flex items-center justify-between text-sm">

                        <span class="font-medium text-slate-600 group-hover:text-slate-900">
                            Consulter
                        </span>

                        <i class="fa-solid fa-arrow-right text-slate-400 group-hover:text-slate-700 transition-colors"></i>

                    </div>

                </a>

            </div>

        </main>

        <!-- Pied de page -->
        <footer class="bg-white border-t border-slate-200">
            <div class="max-w-6xl mx-auto px-6 py-5 flex flex-col sm:flex-row items-center justify-between gap-2">

                <p class="text-sm text-slate-500">
                    &copy; {{ date('Y') }} HewaBora Lounge & Night
                </p>

                <p class="text-xs text-slate-400">
                    Espace d'administration
                </p>

            </div>
        </footer>

    </div>

</body>
</html>
