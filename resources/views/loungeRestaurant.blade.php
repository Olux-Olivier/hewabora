<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foody - Lounge Menu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&display=swap" rel="stylesheet">

    <style>
        body {
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }
        body.loaded {
            opacity: 1;
        }
        .tab-content { display: none; }
        .tab-active { display: block; animation: fadeIn 0.5s ease-in-out; }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="bg-gray-50 font-sans">

    <!-- Navbar -->
    <header class="bg-white shadow fixed w-full z-50">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <a href="#" class="text-2xl font-bold text-red-600">H<span class="text-red-400">ewa</span>Bora</a>
            <nav class="space-x-4 hidden md:flex">
                <a href="{{ url('/menu') }}" class="text-gray-700 hover:text-red-600">Home</a>
                <a href="#" class="text-gray-700 hover:text-red-600">About</a>
                <a href="#" class="text-gray-700 hover:text-red-600 font-semibold">Products</a>
                <a href="#" class="text-gray-700 hover:text-red-600">Contact</a>
            </nav>
            <div class="md:hidden">
                <button id="menu-btn"><i class="fas fa-bars text-xl"></i></button>
            </div>
        </div>
    </header>

    <!-- Page Header -->
    <section class="relative pt-24 pb-12 text-center text-white overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('img/hero_bg.jpg') }}');"></div>
        <div class="absolute inset-0 bg-black opacity-60"></div>
        <div class="relative z-10">
            <h1 class="font-[Playfair Display] text-5xl mb-3">Lounge Bar & Restaurant Menu</h1>
        </div>
    </section>

    <!-- Onglets Food / Drink -->
    <section class="container mx-auto py-6 px-4 text-center">
        <button class="tab-btn bg-red-600 text-white px-6 py-2 rounded font-semibold mr-4 tab-active" data-tab="food-tab">Food</button>
        <button class="tab-btn bg-red-100 text-red-600 px-6 py-2 rounded font-semibold" data-tab="drink-tab">Drink</button>
    </section>

    <!-- Contenu onglets -->
    <section class="container mx-auto py-12 px-4">
        <!-- FOOD TAB -->
        <div id="food-tab" class="tab-content tab-active">
            @forelse($foodProducts as $dishType => $products)
                <div class="dish-type-section mb-4 bg-red-50 py-2 rounded">
                    <h3 class="text-xl font-semibold text-red-600 text-center">{{ $dishType }}</h3>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    @foreach($products as $product)
                        <div class="product-card bg-white shadow rounded overflow-hidden">
                            <img src="{{ $product->image ? asset($product->image) : asset('img/default.jpg') }}"
                                 alt="{{ $product->name }}" class="w-full h-48 object-cover">
                            <div class="p-4 text-center">
                                <h2 class="font-semibold text-lg">{{ $product->name }}</h2>
                                <p class="text-red-600 font-bold">${{ number_format($product->price, 2) }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @empty
                <p class="text-center text-gray-600">Aucun produit Food disponible pour le moment.</p>
            @endforelse
        </div>

        <!-- DRINK TAB -->
        <div id="drink-tab" class="tab-content">
            @forelse($drinkProducts as $dishType => $products)
                <div class="dish-type-section mb-4 bg-red-50 py-2 rounded">
                    <h3 class="text-xl font-semibold text-red-600 text-center">{{ $dishType }}</h3>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    @foreach($products as $product)
                        <div class="product-card bg-white shadow rounded overflow-hidden">
                            <img src="{{ $product->image ? asset($product->image) : asset('img/default.jpg') }}"
                                 alt="{{ $product->name }}" class="w-full h-48 object-cover">
                            <div class="p-4 text-center">
                                <h2 class="font-semibold text-lg">{{ $product->name }}</h2>
                                <p class="text-red-600 font-bold">${{ number_format($product->price, 2) }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @empty
                <p class="text-center text-gray-600">Aucun produit Drink disponible pour le moment.</p>
            @endforelse
        </div>
    </section>

    <!-- Script Onglets -->
    <script>
        window.addEventListener('load', () => {
            document.body.classList.add('loaded');

            const tabs = document.querySelectorAll('.tab-btn');
            const contents = document.querySelectorAll('.tab-content');

            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    // retirer les classes actives
                    tabs.forEach(t => t.classList.remove('tab-active', 'bg-red-600', 'text-white'));
                    tab.classList.add('tab-active', 'bg-red-600', 'text-white');

                    // afficher le bon contenu
                    contents.forEach(c => c.classList.remove('tab-active'));
                    document.getElementById(tab.dataset.tab).classList.add('tab-active');
                });
            });
        });
    </script>

</body>
</html>
