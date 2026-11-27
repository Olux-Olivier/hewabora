
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Modifier un Produit | Hewa Bora</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background: #f8fafc;
            color: #1e293b;
        }

        /* Barre de progression */
        .page-progress {
            position: fixed;
            top: 0;
            left: 0;
            height: 3px;
            width: 100%;
            background: #f59e0b;
            transform-origin: left;
            animation: progress 1.2s ease-out forwards;
            z-index: 50;
        }

        @keyframes progress {
            from { transform: scaleX(0); }
            to { transform: scaleX(1); }
        }

        /* Apparition de la page */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
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

        .page-appear {
            animation: fadeIn 0.6s ease-out both;
        }

        .form-card {
            animation: slideUp 0.7s ease-out both;
        }

        .form-input {
            transition: border-color 0.2s ease,
                        box-shadow 0.2s ease,
                        background 0.2s ease;
        }

        .form-input:focus {
            border-color: #f59e0b;
            box-shadow: 0 0 0 3px rgba(245, 158, 11, 0.15);
            outline: none;
            background: #ffffff;
        }

        .dish-option {
            transition: background 0.2s ease,
                        border-color 0.2s ease,
                        box-shadow 0.2s ease,
                        translate 0.2s ease;
        }

        .dish-option:hover {
            background: #fffbeb;
            border-color: #fbbf24;
            translate: 0 -2px;
        }

        .dish-option:has(input:checked) {
            background: #fef3c7;
            border-color: #f59e0b;
            box-shadow: 0 0 0 2px rgba(245, 158, 11, 0.12);
        }

        .main-button {
            transition: translate 0.2s ease,
                        box-shadow 0.2s ease,
                        background 0.2s ease;
        }

        .main-button:hover {
            translate: 0 -2px;
            box-shadow: 0 8px 18px rgba(217, 119, 6, 0.2);
        }

        .main-button:active {
            translate: 0 0;
        }

        .back-button {
            transition: background 0.2s ease,
                        translate 0.2s ease;
        }

        .back-button:hover {
            translate: -2px 0;
        }

        .image-preview {
            transition: scale 0.25s ease,
                        box-shadow 0.25s ease;
        }

        .image-preview:hover {
            scale: 1.03;
            box-shadow: 0 8px 20px rgba(15, 23, 42, 0.12);
        }

        @media (max-width: 640px) {
            .form-card {
                padding: 1.25rem;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                animation-duration: 0.01ms !important;
                transition-duration: 0.01ms !important;
            }
        }
    </style>
</head>

<body class="min-h-screen font-sans page-appear">

    <div class="page-progress"></div>

    <div class="max-w-5xl mx-auto px-4 py-6 sm:py-10">

        <!-- En-tête -->
        <header class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-5 mb-8">

            <div class="flex items-center gap-4">
                <img
                    src="{{ asset('img/Hewa_Bora_Logo.png') }}"
                    alt="Hewa Bora Logo"
                    class="w-14 h-14 rounded-full object-cover border-2 border-amber-400 shadow-sm"
                >

                <div>
                    <h2 class="text-xl font-bold text-slate-800">
                        Hewa Bora
                    </h2>

                    <p class="text-sm text-slate-500">
                        Gestion des produits
                    </p>
                </div>
            </div>

            <a
                href="{{ url()->previous() }}"
                class="back-button inline-flex items-center justify-center gap-2
                       bg-white border border-slate-200 text-slate-600
                       hover:text-slate-900 hover:border-slate-300
                       font-medium px-4 py-2.5 rounded-xl shadow-sm"
            >
                <span>←</span>
                Retour au tableau de bord
            </a>

        </header>

        <!-- Titre -->
        <div class="mb-6">
            <p class="text-sm font-semibold text-amber-600 uppercase tracking-wider mb-2">
                Modification
            </p>

            <h1 class="text-2xl sm:text-3xl font-bold text-slate-800">
                Modifier un produit
            </h1>

            <p class="text-slate-500 mt-2">
                Modifiez les informations du produit puis enregistrez vos changements.
            </p>
        </div>

        <!-- Formulaire -->
        <div class="form-card bg-white border border-slate-200 rounded-2xl shadow-sm overflow-hidden">

            <!-- Bande décorative -->
            <div class="h-1 bg-gradient-to-r from-amber-400 via-amber-500 to-yellow-300"></div>

            <div class="p-5 sm:p-8">

                <form
                    action="{{ route('products.update', $product->id) }}"
                    method="POST"
                    enctype="multipart/form-data"
                    class="space-y-6"
                >

                    @csrf
                    @method('PUT')

                    <!-- Messages d'erreur -->
                    @if ($errors->any())
                        <div class="bg-red-50 border border-red-200 text-red-700 rounded-xl p-4">
                            <p class="font-semibold mb-2">
                                Veuillez corriger les erreurs suivantes :
                            </p>

                            <ul class="list-disc pl-5 text-sm space-y-1">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Informations générales -->
                    <div>
                        <div class="flex items-center gap-2 mb-4">
                            <span class="w-8 h-8 rounded-lg bg-amber-50 text-amber-600
                                         flex items-center justify-center font-bold text-sm">
                                01
                            </span>

                            <h2 class="font-semibold text-slate-800">
                                Informations du produit
                            </h2>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                            <!-- Nom -->
                            <div>
                                <label
                                    for="name"
                                    class="block text-sm font-medium text-slate-700 mb-2"
                                >
                                    Nom du produit
                                </label>

                                <input
                                    type="text"
                                    name="name"
                                    id="name"
                                    value="{{ old('name', $product->name ?? '') }}"
                                    placeholder="Ex : Mojito Spécial"
                                    required
                                    class="form-input w-full rounded-xl border border-slate-200
                                           bg-slate-50 px-4 py-3 text-slate-800
                                           placeholder:text-slate-400"
                                >
                            </div>

                            <!-- Prix -->
                            <div>
                                <label
                                    for="price"
                                    class="block text-sm font-medium text-slate-700 mb-2"
                                >
                                    Prix ($)
                                </label>

                                <div class="relative">
                                    <input
                                        type="number"
                                        name="price"
                                        id="price"
                                        value="{{ old('price', $product->price ?? '') }}"
                                        placeholder="Ex : 12"
                                        min="0"
                                        step="0.01"
                                        required
                                        class="form-input w-full rounded-xl border border-slate-200
                                               bg-slate-50 px-4 py-3 pr-12 text-slate-800
                                               placeholder:text-slate-400"
                                    >

                                    <span class="absolute right-4 top-1/2 -translate-y-1/2
                                                 text-sm font-semibold text-slate-400">
                                        $
                                    </span>
                                </div>
                            </div>

                            <!-- Zone -->
                            <div>
                                <label
                                    for="area"
                                    class="block text-sm font-medium text-slate-700 mb-2"
                                >
                                    Zone
                                </label>

                                <select
                                    name="area"
                                    id="area"
                                    required
                                    class="form-input w-full rounded-xl border border-slate-200
                                           bg-slate-50 px-4 py-3 text-slate-800"
                                >
                                    <option value="">-- Choisir une zone --</option>

                                    <option
                                        value="lounge"
                                        {{ old('area', $product->area ?? '') == 'lounge' ? 'selected' : '' }}
                                    >
                                        Lounge Bar
                                    </option>

                                    <option
                                        value="night"
                                        {{ old('area', $product->area ?? '') == 'night' ? 'selected' : '' }}
                                    >
                                        Night Club
                                    </option>
                                </select>
                            </div>

                            <!-- Catégorie -->
                            <div>
                                <label
                                    for="category"
                                    class="block text-sm font-medium text-slate-700 mb-2"
                                >
                                    Catégorie
                                </label>

                                <select
                                    name="category"
                                    id="category"
                                    required
                                    class="form-input w-full rounded-xl border border-slate-200
                                           bg-slate-50 px-4 py-3 text-slate-800"
                                >
                                    <option value="">-- Choisir une catégorie --</option>

                                    <option
                                        value="drink"
                                        {{ old('category', $product->category ?? '') == 'drink' ? 'selected' : '' }}
                                    >
                                        Drink
                                    </option>

                                    <option
                                        value="food"
                                        {{ old('category', $product->category ?? '') == 'food' ? 'selected' : '' }}
                                    >
                                        Food
                                    </option>
                                </select>
                            </div>

                        </div>
                    </div>

                    {{-- <!-- Image -->
                    <div class="border-t border-slate-100 pt-6">

                        <div class="flex items-center gap-2 mb-4">
                            <span class="w-8 h-8 rounded-lg bg-amber-50 text-amber-600
                                         flex items-center justify-center font-bold text-sm">
                                02
                            </span>

                            <h2 class="font-semibold text-slate-800">
                                Image du produit
                            </h2>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 items-start">

                            <div>
                                <label
                                    for="image"
                                    class="block text-sm font-medium text-slate-700 mb-2"
                                >
                                    Choisir une nouvelle image
                                </label>

                                <input
                                    type="file"
                                    name="image"
                                    id="image"
                                    accept="image/*"
                                    class="form-input w-full rounded-xl border border-slate-200
                                           bg-slate-50 px-3 py-3 text-sm text-slate-600"
                                >

                                <p class="text-xs text-slate-400 mt-2">
                                    Laissez ce champ vide pour conserver l'image actuelle.
                                </p>
                            </div>

                            @if(isset($product) && $product->image)
                                <div>
                                    <p class="text-sm font-medium text-slate-700 mb-2">
                                        Image actuelle
                                    </p>

                                    <img
                                        id="image-preview"
                                        src="{{ asset('storage/' . $product->image) }}"
                                        alt="Image actuelle du produit"
                                        class="image-preview w-24 h-24 sm:w-28 sm:h-28
                                               object-cover rounded-xl border border-slate-200"
                                    >
                                </div>
                            @else
                                <div>
                                    <p class="text-sm font-medium text-slate-700 mb-2">
                                        Aperçu
                                    </p>

                                    <img
                                        id="image-preview"
                                        src=""
                                        alt="Aperçu de la nouvelle image"
                                        class="image-preview hidden w-24 h-24 sm:w-28 sm:h-28
                                               object-cover rounded-xl border border-slate-200"
                                    >
                                </div>
                            @endif

                        </div>
                    </div> --}}

                    <!-- Type de produit -->
                    <div class="border-t border-slate-100 pt-6">

                        <div class="flex items-center justify-between gap-3 mb-4">
                            <div class="flex items-center gap-2">
                                <span class="w-8 h-8 rounded-lg bg-amber-50 text-amber-600
                                             flex items-center justify-center font-bold text-sm">
                                    03
                                </span>

                                <h2 class="font-semibold text-slate-800">
                                    Type de produit
                                </h2>
                            </div>

                            <span
                                id="dish-counter"
                                class="text-xs text-slate-400"
                            ></span>
                        </div>

                        <p class="text-sm text-slate-500 mb-4">
                            Sélectionnez le type correspondant à votre produit.
                        </p>

                        <div
                            id="dish-options"
                            class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3"
                        ></div>

                        <p
                            id="dish-message"
                            class="hidden text-sm text-amber-600 mt-3"
                        >
                            Veuillez d'abord choisir une catégorie.
                        </p>

                    </div>

                    <!-- Boutons -->
                    <div class="border-t border-slate-100 pt-6 flex flex-col-reverse
                                sm:flex-row sm:justify-end gap-3">

                        <a
                            href="{{ url()->previous() }}"
                            class="inline-flex items-center justify-center px-5 py-3
                                   rounded-xl border border-slate-200 text-slate-600
                                   hover:bg-slate-50 font-medium transition"
                        >
                            Annuler
                        </a>

                        <button
                            type="submit"
                            class="main-button inline-flex items-center justify-center gap-2
                                   bg-amber-500 hover:bg-amber-400 text-slate-900
                                   font-semibold px-6 py-3 rounded-xl shadow-sm"
                        >
                            <span>✓</span>
                            Mettre à jour le produit
                        </button>

                    </div>

                </form>
            </div>
        </div>

        <p class="text-center text-xs text-slate-400 mt-6">
            Hewa Bora Lounge & Night — Gestion des produits
        </p>

    </div>

    <!-- Script dynamique -->
    <script>
        const categorySelect = document.getElementById('category');
        const dishContainer = document.getElementById('dish-options');
        const dishCounter = document.getElementById('dish-counter');
        const dishMessage = document.getElementById('dish-message');

        const currentDish = @json(old('dish_type', $product->dish_type ?? ''));

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
                'Petit  Beers',
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
            dishCounter.textContent = '';

            if (!selectedCategory || !dishes[selectedCategory]) {
                dishMessage.classList.remove('hidden');
                return;
            }

            dishMessage.classList.add('hidden');

            const selectedDishes = dishes[selectedCategory];

            dishCounter.textContent = selectedDishes.length + ' types disponibles';

            selectedDishes.forEach((dish, index) => {
                const label = document.createElement('label');

                label.className =
                    'dish-option flex items-center gap-3 p-3 rounded-xl ' +
                    'border border-slate-200 bg-slate-50 cursor-pointer';

                label.style.animation = 'slideUp 0.35s ease-out both';
                label.style.animationDelay = (index * 15) + 'ms';

                const input = document.createElement('input');

                input.type = 'radio';
                input.name = 'dish_type';
                input.value = dish;
                input.required = true;

                input.className =
                    'w-4 h-4 accent-amber-500 shrink-0';

                if (currentDish === dish) {
                    input.checked = true;
                }

                const span = document.createElement('span');

                span.className = 'text-sm font-medium text-slate-700';
                span.textContent = dish;

                label.appendChild(input);
                label.appendChild(span);

                dishContainer.appendChild(label);
            });
        }

        categorySelect.addEventListener('change', updateDishOptions);

        updateDishOptions();

        // Aperçu de la nouvelle image
        const imageInput = document.getElementById('image');
        const imagePreview = document.getElementById('image-preview');

        imageInput.addEventListener('change', function () {
            const file = this.files[0];

            if (file) {
                imagePreview.src = URL.createObjectURL(file);
                imagePreview.classList.remove('hidden');
            }
        });
    </script>

</body>
</html>
