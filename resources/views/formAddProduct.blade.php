
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ajouter un Produit | Hewa Bora</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* Progression au chargement */
        @keyframes progressLoad {
            from { width: 0; }
            to { width: 100%; }
        }

        .page-progress {
            height: 3px;
            width: 0;
            background: #d97706;
            animation: progressLoad 0.9s ease-out forwards;
        }

        /* Apparition de la page */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
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

        .form-card {
            opacity: 0;
            animation: slideUp 0.7s cubic-bezier(0.22, 1, 0.36, 1) both;
        }

        .delay-1 { animation-delay: 0.1s; }
        .delay-2 { animation-delay: 0.2s; }
        .delay-3 { animation-delay: 0.3s; }

        /* Champs */
        .form-input {
            transition:
                border-color 0.2s ease,
                box-shadow 0.2s ease,
                background-color 0.2s ease;
        }

        .form-input:focus {
            border-color: #d97706;
            box-shadow: 0 0 0 3px rgba(217, 119, 6, 0.12);
            background-color: #fff;
            outline: none;
        }

        /* Choix des catégories */
        .dish-option {
            transition:
                background-color 0.2s ease,
                border-color 0.2s ease,
                transform 0.2s ease;
        }

        .dish-option:hover {
            transform: translateY(-2px);
            border-color: #f59e0b;
            background-color: #fffbeb;
        }

        .dish-option:has(input:checked) {
            background-color: #fffbeb;
            border-color: #d97706;
            color: #92400e;
        }

        /* Boutons */
        .main-button {
            transition:
                transform 0.2s ease,
                box-shadow 0.2s ease,
                background-color 0.2s ease;
        }

        .main-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 18px rgba(217, 119, 6, 0.18);
        }

        .main-button:active {
            transform: scale(0.98);
        }

        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                animation-duration: 0.01ms !important;
                transition-duration: 0.01ms !important;
            }

            .form-card {
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
        <header class="page-header bg-white border-b border-slate-200">

            <div class="max-w-6xl mx-auto px-5 sm:px-6 py-4">

                <div class="flex items-center justify-between gap-4">

                    <div class="flex items-center gap-3">

                        <img
                            src="{{ asset('img/Hewa_Bora_Logo.png') }}"
                            alt="Hewa Bora"
                            class="w-12 h-12 rounded-full border border-slate-200 object-cover"
                        >

                        <div>
                            <h1 class="text-lg font-bold text-slate-900">
                                Hewa Bora
                            </h1>

                            <p class="text-xs text-slate-500">
                                Lounge & Night
                            </p>
                        </div>

                    </div>

                    <a href="{{ url()->previous() }}"
                       class="inline-flex items-center gap-2 px-4 py-2 rounded-lg border border-slate-200 text-sm font-medium text-slate-600 hover:bg-slate-50 transition">

                        <i class="fa-solid fa-arrow-left"></i>
                        <span class="hidden sm:inline">Dashboard</span>

                    </a>

                </div>

            </div>

        </header>

        <!-- Contenu -->
        <main class="flex-1 max-w-6xl w-full mx-auto px-5 sm:px-6 py-8">

            <!-- Titre -->
            <div class="page-header mb-7">

                <p class="text-sm font-medium text-amber-600 mb-2">
                    Catalogue des produits
                </p>

                <h2 class="text-2xl sm:text-3xl font-bold text-slate-900">
                    Ajouter un produit
                </h2>

                <p class="text-sm text-slate-500 mt-2">
                    Complétez les informations ci-dessous pour enregistrer un nouvel article.
                </p>

            </div>

            <!-- Formulaire -->
            <div class="form-card delay-1 bg-white border border-slate-200 rounded-2xl shadow-sm overflow-hidden">

                <form action="{{ route('products.store') }}"
                      method="POST"
                      enctype="multipart/form-data">

                    @csrf

                    <!-- En-tête du formulaire -->
                    <div class="px-6 py-5 border-b border-slate-200 bg-slate-50">

                        <h3 class="font-semibold text-slate-900">
                            Informations du produit
                        </h3>

                        <p class="text-xs text-slate-500 mt-1">
                            Les champs marqués d'un astérisque sont obligatoires.
                        </p>

                    </div>

                    <div class="p-6">

                        <!-- Deux colonnes -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-5">

                            <!-- Nom -->
                            <div>
                                <label for="name"
                                       class="block text-sm font-medium text-slate-700 mb-2">
                                    Nom du produit <span class="text-red-500">*</span>
                                </label>

                                <input
                                    type="text"
                                    name="name"
                                    id="name"
                                    value="{{ old('name') }}"
                                    class="form-input w-full rounded-lg border border-slate-300 px-4 py-3 text-sm text-slate-800 placeholder-slate-400"
                                    placeholder="Ex : Mojito Spécial"
                                    required
                                >

                                @error('name')
                                    <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Prix -->
                            <div>
                                <label for="price"
                                       class="block text-sm font-medium text-slate-700 mb-2">
                                    Prix ($) <span class="text-red-500">*</span>
                                </label>

                                <div class="relative">

                                    <input
                                        type="number"
                                        name="price"
                                        id="price"
                                        value="{{ old('price') }}"
                                        min="0"
                                        step="1"
                                        class="form-input w-full rounded-lg border border-slate-300 px-4 py-3 pr-14 text-sm text-slate-800 placeholder-slate-400"
                                        placeholder="Ex : 15"
                                        required
                                    >

                                    <span class="absolute right-4 top-1/2 -translate-y-1/2 text-xs font-semibold text-slate-400">
                                        USD
                                    </span>

                                </div>

                                @error('price')
                                    <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Zone -->
                            <div>
                                <label for="area"
                                       class="block text-sm font-medium text-slate-700 mb-2">
                                    Zone <span class="text-red-500">*</span>
                                </label>

                                <select
                                    name="area"
                                    id="area"
                                    class="form-input w-full rounded-lg border border-slate-300 px-4 py-3 text-sm text-slate-700 bg-white"
                                    required
                                >
                                    <option value="">Choisir une zone</option>

                                    <option value="lounge" {{ old('area') === 'lounge' ? 'selected' : '' }}>
                                        Lounge Bar
                                    </option>

                                    <option value="night" {{ old('area') === 'night' ? 'selected' : '' }}>
                                        Night Club
                                    </option>
                                </select>

                                @error('area')
                                    <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Catégorie -->
                            <div>
                                <label for="category"
                                       class="block text-sm font-medium text-slate-700 mb-2">
                                    Catégorie <span class="text-red-500">*</span>
                                </label>

                                <select
                                    name="category"
                                    id="category"
                                    class="form-input w-full rounded-lg border border-slate-300 px-4 py-3 text-sm text-slate-700 bg-white"
                                    required
                                >
                                    <option value="">Choisir une catégorie</option>

                                    <option value="drink" {{ old('category') === 'drink' ? 'selected' : '' }}>
                                        Drink
                                    </option>

                                    <option value="food" {{ old('category') === 'food' ? 'selected' : '' }}>
                                        Food
                                    </option>
                                </select>

                                @error('category')
                                    <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                                @enderror
                            </div>


                            {{--  <!-- Image -->

                            <div class="md:col-span-2">

                                <label for="image"
                                       class="block text-sm font-medium text-slate-700 mb-2">
                                    Image du produit
                                </label>

                                <input
                                    type="file"
                                    name="image"
                                    id="image"
                                    accept="image/*"
                                    class="form-input w-full rounded-lg border border-slate-300 px-4 py-2.5 text-sm text-slate-600 bg-white"
                                >

                                <p class="text-xs text-slate-400 mt-1">
                                    Choisissez une image pour illustrer le produit.
                                </p>

                                @error('image')
                                    <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                                @enderror

                            </div>
                            --}}

                        </div>

                        <!-- Type de produit -->
                        <div class="mt-7 pt-6 border-t border-slate-200">

                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2 mb-4">

                                <div>
                                    <label class="block text-sm font-semibold text-slate-800">
                                        Type de produit <span class="text-red-500">*</span>
                                    </label>

                                    <p class="text-xs text-slate-500 mt-1">
                                        Choisissez le type correspondant à la catégorie.
                                    </p>
                                </div>

                                <span id="dish-counter"
                                      class="text-xs text-slate-400">
                                    Aucun type sélectionné
                                </span>

                            </div>

                            <div id="dish-options"
                                 class="flex flex-wrap gap-2">

                                <p class="text-sm text-slate-400">
                                    Sélectionnez d'abord une catégorie.
                                </p>

                            </div>

                            @error('dish_type')
                                <p class="text-xs text-red-600 mt-2">{{ $message }}</p>
                            @enderror

                        </div>

                    </div>

                    <!-- Boutons -->
                    <div class="px-6 py-4 bg-slate-50 border-t border-slate-200 flex flex-col-reverse sm:flex-row sm:justify-end gap-3">

                        <a href="{{ url()->previous() }}"
                           class="inline-flex items-center justify-center px-5 py-2.5 rounded-lg border border-slate-300 bg-white text-slate-600 text-sm font-medium hover:bg-slate-100 transition">

                            Annuler

                        </a>

                        <button type="submit"
                                class="main-button inline-flex items-center justify-center px-6 py-2.5 rounded-lg bg-amber-600 hover:bg-amber-700 text-white text-sm font-semibold">

                            <i class="fa-solid fa-check mr-2"></i>
                            Enregistrer le produit

                        </button>

                    </div>

                </form>

            </div>

        </main>

        <!-- Pied de page -->
        <footer class="bg-white border-t border-slate-200">

            <div class="max-w-6xl mx-auto px-5 sm:px-6 py-4">

                <p class="text-xs text-slate-400 text-center">
                    &copy; {{ date('Y') }} Hewa Bora Lounge & Night
                </p>

            </div>

        </footer>

    </div>

    <!-- Types dynamiques -->
    <script>
        const categorySelect = document.getElementById('category');
        const dishContainer = document.getElementById('dish-options');
        const dishCounter = document.getElementById('dish-counter');

        const oldDishType = @json(old('dish_type'));

        const dishes = {
            drink: [
                'Boissons Gazeuses et Eau',
                'Jus Frais Naturel',
                'Smoothies',
                'Milk Shakes',
                'Boissons Chaudes',
                'Classique Cocktail',
                'Cocktail Maison',
                'Mocktails non-Alcool',
                'Petit Beers',
                'Grandes Beers',
                'Beers Importes',
                'Vodka',
                'Whisky',
                'RUM',
                'GIN',
                'Tequila',
                'Liqueur',
                'Cognac',
                'Champangne',
                'Vin Rouge',
                'Vin Blanc',
                'Crème Liquer',
                'Shots Measures 30ml',
                'Shot Special',
                'CIGARETTES/Cigars',
                'Sheesha'
            ],

            food: [
                'Salades',
                'Entrées',
                'Soups',
                'BBQ',
                'Hamburgers',
                'Pizza',
                'Pain Plat',
                'Shawarma',
                'Pain Sandwich',
                'Plat Congolais',
                'Pasta',
                'Plat Principal',
                'Fruits de Mer',
                'Accompagnment',
                'Sauce au choix',
                'Desserts',
                'Night one',
                'Night two'
            ]
        };

        function updateDishOptions() {
            const selectedCategory = categorySelect.value;

            dishContainer.innerHTML = '';
            dishCounter.textContent = 'Aucun type sélectionné';

            if (!selectedCategory || !dishes[selectedCategory]) {
                dishContainer.innerHTML = `
                    <p class="text-sm text-slate-400">
                        Sélectionnez d'abord une catégorie.
                    </p>
                `;
                return;
            }

            dishes[selectedCategory].forEach((dish, index) => {

                const label = document.createElement('label');

                label.className =
                    'dish-option inline-flex items-center gap-2 px-3 py-2 rounded-lg border border-slate-200 bg-white text-sm text-slate-600 cursor-pointer';

                const input = document.createElement('input');

                input.type = 'radio';
                input.name = 'dish_type';
                input.value = dish;
                input.required = true;

                input.className =
                    'text-amber-600 focus:ring-amber-500';

                if (oldDishType === dish) {
                    input.checked = true;
                    dishCounter.textContent = '1 type sélectionné';
                }

                input.addEventListener('change', () => {
                    dishCounter.textContent = '1 type sélectionné';
                });

                const span = document.createElement('span');
                span.textContent = dish;

                label.appendChild(input);
                label.appendChild(span);

                dishContainer.appendChild(label);
            });
        }

        categorySelect.addEventListener('change', updateDishOptions);

        // Restaurer les choix après une erreur de validation
        if (categorySelect.value) {
            updateDishOptions();
        }
    </script>

</body>
</html>
