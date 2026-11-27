
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Gestion des Drinks - HewaBora</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* Barre de progression au chargement */
        @keyframes progressLoad {
            from {
                width: 0%;
            }
            to {
                width: 100%;
            }
        }

        .page-progress {
            height: 3px;
            width: 0;
            background: #2563eb;
            animation: progressLoad 1s ease-out forwards;
        }

        /* Apparition progressive */
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
                translate: 0 18px;
            }
            to {
                opacity: 1;
                translate: 0 0;
            }
        }

        .animate-fade {
            animation: fadeIn 0.6s ease both;
        }

        .animate-up {
            opacity: 0;
            animation: slideUp 0.65s cubic-bezier(0.22, 1, 0.36, 1) both;
        }

        .delay-1 { animation-delay: 0.1s; }
        .delay-2 { animation-delay: 0.2s; }
        .delay-3 { animation-delay: 0.3s; }
        .delay-4 { animation-delay: 0.4s; }

        /* Statistiques */
        .stat-card {
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .stat-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(15, 23, 42, 0.07);
        }

        /* Onglets catégories */
        .category-tab {
            transition:
                transform 0.2s ease,
                background-color 0.2s ease,
                color 0.2s ease,
                box-shadow 0.2s ease;
        }

        .category-tab:hover {
            transform: translateY(-2px);
        }

        /* Lignes du tableau */
        .product-row {
            transition: background-color 0.2s ease;
        }

        .product-row:hover {
            background-color: #f8fafc;
        }

        /* Boutons d'action */
        .action-button {
            transition: transform 0.2s ease, background-color 0.2s ease;
        }

        .action-button:hover {
            transform: scale(1.08);
        }

        .action-button:active {
            transform: scale(0.96);
        }

        /* Boutons principaux */
        .main-button {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .main-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(37, 99, 235, 0.15);
        }

        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                animation-duration: 0.01ms !important;
                transition-duration: 0.01ms !important;
            }

            .animate-up {
                opacity: 1;
            }
        }
    </style>
</head>

<body class="min-h-screen bg-slate-50 font-sans text-slate-800">

    <!-- Barre de progression -->
    <div class="fixed top-0 left-0 w-full z-50 bg-slate-200">
        <div class="page-progress"></div>
    </div>

    <div class="min-h-screen flex flex-col">

        <!-- En-tête -->
        <header class="bg-white border-b border-slate-200 animate-fade">
            <div class="max-w-7xl mx-auto px-5 sm:px-6 py-5">

                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">

                    <div>
                        <div class="flex items-center gap-3">

                            <div class="w-11 h-11 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center">
                                <i class="fa-solid fa-glass-water text-xl"></i>
                            </div>

                            <div>
                                <h1 class="text-xl sm:text-2xl font-bold text-slate-900">
                                    Gestion des Drinks
                                </h1>

                                <p class="text-sm text-slate-500 mt-1">
                                    Gestion des boissons du Lounge
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class="flex flex-wrap gap-3">

                        <a href="{{ route('dashboard.home') }}"
                           class="inline-flex items-center justify-center px-4 py-2.5 rounded-lg border border-slate-200 bg-white text-slate-600 text-sm font-medium hover:bg-slate-50 transition">

                            <i class="fa-solid fa-arrow-left mr-2"></i>
                            Accueil
                        </a>

                        <a href="{{ url('/form') }}"
                           class="main-button inline-flex items-center justify-center px-4 py-2.5 rounded-lg bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold">

                            <i class="fa-solid fa-plus mr-2"></i>
                            Ajouter une boisson
                        </a>

                    </div>

                    <div class="flex items-center gap-3">
                        <form action="{{ route('dashboard.logout') }}" method="POST">
                            @csrf

                            <button
                                type="submit"
                                class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg"
                            >
                                Déconnexion
                            </button>
                        </form>
                    </div>

                </div>

            </div>
        </header>

        <!-- Contenu principal -->
        <main class="flex-1 max-w-7xl w-full mx-auto px-5 sm:px-6 py-8">

            <!-- Statistiques -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-8">

                <!-- Total boissons -->
                <div class="stat-card animate-up delay-1 bg-white border border-slate-200 rounded-xl p-5">

                    <div class="flex items-center justify-between">

                        <div>
                            <p class="text-sm text-slate-500">
                                Total des boissons
                            </p>

                            <h2 class="text-3xl font-bold text-slate-900 mt-2">
                                {{ $totalDrinks }}
                            </h2>
                        </div>

                        <div class="w-12 h-12 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center">
                            <i class="fa-solid fa-glass-water text-xl"></i>
                        </div>

                    </div>

                </div>

                <!-- Catégories -->
                <div class="stat-card animate-up delay-2 bg-white border border-slate-200 rounded-xl p-5">

                    <div class="flex items-center justify-between">

                        <div>
                            <p class="text-sm text-slate-500">
                                Catégories disponibles
                            </p>

                            <h2 class="text-3xl font-bold text-slate-900 mt-2">
                                {{ $dishTypes->count() }}
                            </h2>
                        </div>

                        <div class="w-12 h-12 rounded-lg bg-indigo-50 text-indigo-600 flex items-center justify-center">
                            <i class="fa-solid fa-layer-group text-xl"></i>
                        </div>

                    </div>

                </div>

            </div>

            <!-- Tableau des boissons -->
            <section class="animate-up delay-3 bg-white border border-slate-200 rounded-xl overflow-hidden">

                <!-- Titre de la section -->
                <div class="p-5 border-b border-slate-200">

                    <h2 class="text-lg font-bold text-slate-900">
                        Liste des boissons
                    </h2>

                    <p class="text-sm text-slate-500 mt-1">
                        Sélectionnez une catégorie pour filtrer les boissons.
                    </p>

                </div>

                <!-- Catégories -->
                <div class="px-5 py-4 border-b border-slate-200">

                    <div class="flex flex-wrap gap-2">

                        <!-- Toutes -->
                        <a href="{{ request()->url() }}"
                           class="category-tab inline-flex items-center px-4 py-2 rounded-lg text-sm font-medium
                           {{ !$selectedType
                                ? 'bg-blue-600 text-white'
                                : 'bg-slate-100 text-slate-600 hover:bg-slate-200' }}">

                            <i class="fa-solid fa-border-all mr-2"></i>
                            Toutes

                            <span class="ml-2 {{ !$selectedType ? 'text-blue-100' : 'text-slate-400' }}">
                                {{ $totalDrinks }}
                            </span>

                        </a>

                        <!-- Catégories dynamiques -->
                        @foreach($dishTypes as $type)

                            <a href="{{ request()->url() }}?dish_type={{ urlencode($type) }}"
                               class="category-tab inline-flex items-center px-4 py-2 rounded-lg text-sm font-medium
                               {{ $selectedType === $type
                                    ? 'bg-blue-600 text-white'
                                    : 'bg-slate-100 text-slate-600 hover:bg-slate-200' }}">

                                {{ $type }}

                            </a>

                        @endforeach

                    </div>

                </div>

                <!-- Informations catégorie -->
                <div class="px-5 py-4 bg-slate-50 border-b border-slate-200 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2">

                    <div class="text-sm text-slate-600">

                        @if($selectedType)
                            Catégorie :
                            <span class="font-semibold text-slate-900">
                                {{ $selectedType }}
                            </span>
                        @else
                            <span class="font-semibold text-slate-900">
                                Toutes les catégories
                            </span>
                        @endif

                    </div>

                    <div class="text-sm text-slate-500">
                        {{ $drinkProducts->count() }} boisson(s)
                    </div>

                </div>

                <!-- Tableau -->
                <div class="overflow-x-auto">

                    <table class="w-full text-sm">

                        <thead class="bg-white text-slate-500 uppercase text-xs">
                            <tr>
                                <th class="text-left px-5 py-4 font-semibold">
                                    Boisson
                                </th>

                                <th class="text-left px-5 py-4 font-semibold">
                                    Catégorie
                                </th>

                                <th class="text-right px-5 py-4 font-semibold">
                                    Prix
                                </th>

                                <th class="text-center px-5 py-4 font-semibold">
                                    Actions
                                </th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-slate-100">

                            @forelse($drinkProducts as $product)

                                <tr class="product-row">

                                    <!-- Nom -->
                                    <td class="px-5 py-4">

                                        <div class="font-semibold text-slate-800">
                                            {{ $product->name }}
                                        </div>

                                        <div class="text-xs text-slate-400 mt-1">
                                            ID : {{ $product->id }}
                                        </div>

                                    </td>

                                    <!-- Catégorie -->
                                    <td class="px-5 py-4">

                                        @if($product->dish_type)

                                            <span class="inline-flex items-center px-3 py-1 rounded-md bg-blue-50 text-blue-700 text-xs font-medium">
                                                {{ $product->dish_type }}
                                            </span>

                                        @else

                                            <span class="text-slate-400 italic">
                                                Non catégorisé
                                            </span>

                                        @endif

                                    </td>

                                    <!-- Prix -->
                                    <td class="px-5 py-4 text-right whitespace-nowrap">

                                        <span class="font-semibold text-slate-900">
                                            {{ number_format($product->price, 0, ',', ' ') }}
                                        </span>

                                        <span class="text-slate-500">
                                            FC
                                        </span>

                                    </td>

                                    <!-- Actions -->
                                    <td class="px-5 py-4">

                                        <div class="flex items-center justify-center gap-2">

                                            <a href="{{ route('products.edit', $product->id) }}"
                                               class="action-button inline-flex items-center justify-center w-9 h-9 rounded-lg bg-blue-50 text-blue-600 hover:bg-blue-100"
                                               title="Modifier">

                                                <i class="fa-solid fa-pen-to-square"></i>

                                            </a>

                                            <form action="{{ route('products.destroy', $product->id) }}"
                                                  method="POST"
                                                  onsubmit="return confirm('Voulez-vous vraiment supprimer cette boisson ?')">

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit"
                                                        class="action-button inline-flex items-center justify-center w-9 h-9 rounded-lg bg-red-50 text-red-600 hover:bg-red-100"
                                                        title="Supprimer">

                                                    <i class="fa-solid fa-trash"></i>

                                                </button>

                                            </form>

                                        </div>

                                    </td>

                                </tr>

                            @empty

                                <tr>
                                    <td colspan="4" class="px-5 py-14 text-center">

                                        <div class="w-14 h-14 mx-auto rounded-full bg-slate-100 text-slate-400 flex items-center justify-center mb-4">
                                            <i class="fa-solid fa-glass-water text-2xl"></i>
                                        </div>

                                        <p class="font-semibold text-slate-700">
                                            Aucune boisson trouvée
                                        </p>

                                        <p class="text-sm text-slate-400 mt-1">
                                            Cette catégorie ne contient aucune boisson.
                                        </p>

                                        @if($selectedType)

                                            <a href="{{ request()->url() }}"
                                               class="inline-block mt-4 text-blue-600 hover:text-blue-700 font-medium">

                                                Voir toutes les boissons

                                            </a>

                                        @endif

                                    </td>
                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

                <!-- Pied du tableau -->
                <div class="px-5 py-4 border-t border-slate-200 bg-slate-50">

                    <p class="text-xs text-slate-500">
                        <i class="fa-solid fa-circle-info mr-1"></i>
                        Les catégories sont automatiquement récupérées depuis le champ dish_type.
                    </p>

                </div>

            </section>

        </main>

        <!-- Pied de page -->
        <footer class="mt-auto bg-white border-t border-slate-200">

            <div class="max-w-7xl mx-auto px-5 sm:px-6 py-5 flex flex-col sm:flex-row items-center justify-between gap-2">

                <p class="text-sm text-slate-500">
                    &copy; {{ date('Y') }} HewaBora Lounge & Night
                </p>

                <p class="text-xs text-slate-400">
                    Administration des boissons
                </p>

            </div>

        </footer>

    </div>

</body>
</html>
