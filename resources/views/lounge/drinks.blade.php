<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foody - Lounge Food</title>
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
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .fadeIn { animation: fadeIn 0.5s ease-in-out; }
    </style>
</head>
<body class="bg-gray-50 font-sans">

    <header class="bg-white shadow w-full z-50 py-4">
        <div class="container mx-auto flex justify-center items-center space-x-6">
            <!-- Texte HewaBora avec dégradé doré -->
            <h1 class="text-3xl font-bold bg-clip-text text-transparent
                    bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600">
                HewaBora
            </h1>

            <!-- Lien Home -->
            <a href="{{ url('/menu') }}"
            class="text-gray-700 hover:text-black-600 font-semibold text-lg mt-2">
                Home
            </a>
        </div>
    </header>

    <!-- Page Header -->
    <section class="relative pt-24 pb-12 text-center text-white overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('img/hero_bg.jpg') }}');"></div>
        <div class="absolute inset-0 bg-black opacity-60"></div>
        <div class="relative z-10">
            <h1 class="font-[Playfair Display] text-5xl mb-3">Lounge Bar — Menu Drinks</h1>
            <a href="{{route('night.drinks')}}">Voir pour Night Club</a>
        </div>
    </section>

     <div class="flex justify-center space-x-6 my-6">
        <a href="{{ route('lounge.drinks') }}"
        class="px-6 py-2 font-semibold rounded transition
           {{ Route::currentRouteName() == 'lounge.drinks' ? 'bg-red-600 text-white' : 'bg-red-100 text-red-600 hover:bg-red-200' }}">
        Drinks
        </a>
        <a href="{{ route('lounge.foods') }}"
        class="px-6 py-2 font-semibold rounded transition
           {{ Route::currentRouteName() == 'lounge.foods' ? 'bg-red-600 text-white' : 'bg-red-100 text-red-600 hover:bg-red-200' }}">
        Foods
        </a>
    </div>

    <!-- Liste des produits Food -->
    <section class="container mx-auto py-12 px-4 fadeIn">
        @forelse($drinkProducts as $dishType => $products)
            <!-- Nom du type de plat -->
            <div class="dish-type-section mb-4 bg-red-50 py-2 rounded">
                <h3 class="text-xl font-semibold text-red-600 text-center">{{ $dishType }}</h3>
            </div>

            <!-- Grille de produits -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                @foreach($products as $product)
                    <div class="product-card bg-white shadow rounded overflow-hidden hover:scale-105 transform transition duration-300">
                        <img src="{{ $product->image ? asset('storage/' . $product->image) : asset('img/hero_bg.jpg') }}"
                            alt="{{ $product->name }}" class="w-full h-48 object-cover">

                        <div class="p-4 text-center">
                            <h2 class="font-semibold text-lg">{{ $product->name }}</h2>
                            <p class="text-red-600 font-bold">${{ number_format($product->price, 2) }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        @empty
            <p class="text-center text-gray-600">Aucun plat disponible pour le moment.</p>
        @endforelse
    </section>

    <!-- Script -->
    <script>
        window.addEventListener('load', () => {
            document.body.classList.add('loaded');
        });
    </script>

</body>
</html>
