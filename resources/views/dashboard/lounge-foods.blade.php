
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Gestion des Foods - HewaBora</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gray-100 min-h-screen font-sans text-gray-800">

    <!-- En-tête -->
    <header class="bg-white border-b border-gray-200 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 py-5">

            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">

                <div>
                    <h1 class="text-2xl font-bold text-gray-800">
                        <i class="fa-solid fa-utensils text-yellow-500 mr-2"></i>
                        Gestion des Foods
                    </h1>

                    <p class="text-sm text-gray-500 mt-1">
                        Gestion des nourritures du Lounge
                    </p>
                </div>

                <div class="flex flex-wrap gap-3">

                    <a href="{{ route('dashboard.home') }}"
                       class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-4 py-2 rounded-lg font-medium transition">

                        <i class="fa-solid fa-arrow-left mr-2"></i>
                        Dashboard
                    </a>

                    <a href="{{ url('/form') }}"
                       class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg font-semibold shadow-sm transition">

                        <i class="fa-solid fa-plus mr-2"></i>
                        Ajouter un article
                    </a>

                </div>

            </div>
        </div>
    </header>


    <!-- Contenu principal -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 py-8">

        <!-- Informations -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">

            <div class="bg-white rounded-xl border border-gray-200 p-5 shadow-sm">

                <div class="flex items-center justify-between">

                    <div>
                        <p class="text-sm text-gray-500">
                            Total des nourritures
                        </p>

                        <h2 class="text-3xl font-bold text-gray-800 mt-2">
                            {{ $foodProducts->count() }}
                        </h2>
                    </div>

                    <div class="bg-yellow-100 text-yellow-600 rounded-xl p-4">
                        <i class="fa-solid fa-bowl-food text-2xl"></i>
                    </div>

                </div>

            </div>


            <div class="bg-white rounded-xl border border-gray-200 p-5 shadow-sm">

                <div class="flex items-center justify-between">

                    <div>
                        <p class="text-sm text-gray-500">
                            Catégories disponibles
                        </p>

                        <h2 class="text-3xl font-bold text-gray-800 mt-2">
                            {{ $dishTypes->count() }}
                        </h2>
                    </div>

                    <div class="bg-blue-100 text-blue-600 rounded-xl p-4">
                        <i class="fa-solid fa-layer-group text-2xl"></i>
                    </div>

                </div>

            </div>

        </div>


        <!-- Tableau de gestion -->
        <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">

            <!-- Titre -->
            <div class="p-5 border-b border-gray-200">

                <h2 class="text-lg font-bold text-gray-800">
                    Liste des nourritures
                </h2>

                <p class="text-sm text-gray-500 mt-1">
                    Sélectionnez une catégorie pour afficher ses articles.
                </p>

            </div>


            <!-- Onglets des catégories -->
            <div class="px-5 pt-5 pb-4 border-b border-gray-200">

                <div class="flex flex-wrap gap-2">

                    <!-- Tous -->
                    <a href="{{ request()->url() }}"
                       class="px-4 py-2 rounded-lg text-sm font-semibold transition
                       {{ !$selectedType
                            ? 'bg-yellow-500 text-white shadow-sm'
                            : 'bg-gray-100 text-gray-600 hover:bg-gray-200' }}">

                        <i class="fa-solid fa-border-all mr-2"></i>
                        Tous

                        <span class="ml-1">
                            ({{ $totalFoods }})
                        </span>
                    </a>


                    <!-- Catégories dynamiques -->
                    @foreach($dishTypes as $type)

                        <a href="{{ request()->url() }}?dish_type={{ urlencode($type) }}"
                           class="px-4 py-2 rounded-lg text-sm font-semibold transition
                           {{ $selectedType === $type
                                ? 'bg-yellow-500 text-white shadow-sm'
                                : 'bg-gray-100 text-gray-600 hover:bg-gray-200' }}">

                            {{ $type }}

                        </a>

                    @endforeach

                </div>

            </div>


            <!-- Résultat de la catégorie -->
            <div class="px-5 py-4 bg-gray-50 border-b border-gray-200">

                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2">

                    <div class="text-sm text-gray-600">

                        @if($selectedType)

                            Catégorie :
                            <span class="font-semibold text-gray-800">
                                {{ $selectedType }}
                            </span>

                        @else

                            <span class="font-semibold text-gray-800">
                                Toutes les catégories
                            </span>

                        @endif

                    </div>

                    <div class="text-sm text-gray-500">
                        {{ $foodProducts->count() }}
                        article(s)
                    </div>

                </div>

            </div>


            <!-- Tableau -->
            <div class="overflow-x-auto">

                <table class="w-full text-sm">

                    <thead class="bg-white text-gray-500 uppercase text-xs">

                        <tr>
                            <th class="text-left px-5 py-4">
                                Article
                            </th>

                            <th class="text-left px-5 py-4">
                                Catégorie
                            </th>

                            <th class="text-right px-5 py-4">
                                Prix
                            </th>

                            <th class="text-center px-5 py-4">
                                Actions
                            </th>
                        </tr>

                    </thead>


                    <tbody class="divide-y divide-gray-100">

                        @forelse($foodProducts as $product)

                            <tr class="hover:bg-gray-50 transition">

                                <!-- Nom -->
                                <td class="px-5 py-4">

                                    <div class="font-semibold text-gray-800">
                                        {{ $product->name }}
                                    </div>

                                    <div class="text-xs text-gray-400 mt-1">
                                        ID : {{ $product->id }}
                                    </div>

                                </td>


                                <!-- Catégorie -->
                                <td class="px-5 py-4">

                                    @if($product->dish_type)

                                        <span class="inline-flex items-center px-3 py-1 rounded-full bg-yellow-100 text-yellow-700 text-xs font-semibold">
                                            {{ $product->dish_type }}
                                        </span>

                                    @else

                                        <span class="text-gray-400 italic">
                                            Non catégorisé
                                        </span>

                                    @endif

                                </td>


                                <!-- Prix -->
                                <td class="px-5 py-4 text-right">

                                    <span class="font-bold text-gray-800">
                                        {{ number_format($product->price, 0, ',', ' ') }}
                                    </span>

                                    <span class="text-gray-500">
                                        FC
                                    </span>

                                </td>


                                <!-- Actions -->
                                <td class="px-5 py-4">

                                    <div class="flex items-center justify-center gap-2">

                                        <a href="{{ route('products.edit', $product->id) }}"
                                           class="bg-blue-50 hover:bg-blue-100 text-blue-600 px-3 py-2 rounded-lg transition"
                                           title="Modifier">

                                            <i class="fa-solid fa-pen-to-square"></i>

                                        </a>


                                        <form action="{{ route('products.destroy', $product->id) }}"
                                              method="POST"
                                              onsubmit="return confirm('Voulez-vous vraiment supprimer cet article ?')">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    class="bg-red-50 hover:bg-red-100 text-red-600 px-3 py-2 rounded-lg transition"
                                                    title="Supprimer">

                                                <i class="fa-solid fa-trash"></i>

                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="4" class="px-5 py-12 text-center">

                                    <div class="text-gray-400 mb-3">
                                        <i class="fa-solid fa-bowl-food text-4xl"></i>
                                    </div>

                                    <p class="font-semibold text-gray-600">
                                        Aucun article trouvé
                                    </p>

                                    <p class="text-sm text-gray-400 mt-1">
                                        Cette catégorie ne contient aucune nourriture.
                                    </p>

                                    @if($selectedType)

                                        <a href="{{ request()->url() }}"
                                           class="inline-block mt-4 text-yellow-600 hover:text-yellow-700 font-semibold">

                                            Voir toutes les nourritures

                                        </a>

                                    @endif

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>


            <!-- Pied du tableau -->
            <div class="px-5 py-4 border-t border-gray-200 bg-gray-50">

                <p class="text-xs text-gray-500">
                    <i class="fa-solid fa-circle-info mr-1"></i>
                    Les catégories sont automatiquement récupérées depuis le champ dish_type.
                </p>

            </div>

        </div>

    </main>

</body>
</html>
