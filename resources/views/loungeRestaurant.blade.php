<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foody - Menu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        body.loaded {
            opacity: 1;
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
    <section class="bg-red-100 pt-24 pb-12 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-red-700 mb-3">Lounge bar & Restaurant Menu</h1>
        <p class="text-gray-700 max-w-xl mx-auto">Découvrez nos produits frais, bio et délicieux, préparés avec soin pour vous.</p>
    </section>

    <!-- Products Tabs -->
    <section class="container mx-auto py-12 px-4">
        <div class="flex flex-wrap justify-center gap-2 mb-8">
            <a href="{{ url('/lounge-restaurant') }}"
            class="px-4 py-2 rounded shadow font-semibold
            {{ Request::is('lounge-restaurant') ? 'bg-red-600 text-white' : 'bg-white text-red-600 hover:bg-red-100' }}">
            Lounge bar & Restaurant
            </a>

            <a href="{{ url('/night-club') }}"
            class="px-4 py-2 rounded shadow font-semibold
            {{ Request::is('night-club') ? 'bg-red-600 text-white' : 'bg-white text-red-600 hover:bg-red-100' }}">
            Night Club
            </a>

            {{-- <a href="{{ url('/fresh') }}"
            class="px-4 py-2 rounded shadow font-semibold
            {{ Request::is('fresh') ? 'bg-red-600 text-white' : 'bg-white text-red-600 hover:bg-red-100' }}">
            Fresh
            </a> --}}
        </div>

        {{-- Fin liens type menu --}}


        <!-- Products Grid -->
        <div id="vegetable" class="tab-content grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @for ($i = 1; $i <= 4; $i++)
                <div class="bg-white shadow rounded overflow-hidden">
                    <img src="{{ asset('img/product-'.$i.'.jpg') }}" alt="Product {{$i}}" class="w-full h-48 object-cover">
                    <div class="p-4 text-center">
                        <h2 class="font-semibold text-lg">Fresh Tomato</h2>
                        <p class="text-red-600 font-bold">$19.00 <span class="line-through text-gray-400">$29.00</span></p>
                    </div>
                    <div class="flex border-t">
                        <a href="#" class="w-1/2 py-2 text-center border-r text-gray-600 hover:text-red-600"><i class="fas fa-eye me-1"></i>View</a>
                        <a href="#" class="w-1/2 py-2 text-center text-gray-600 hover:text-red-600"><i class="fas fa-shopping-bag me-1"></i>Add</a>
                    </div>
                </div>
            @endfor
        </div>

        <div id="fruits" class="tab-content hidden grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @for ($i = 1; $i <= 4; $i++)
                <div class="bg-white shadow rounded overflow-hidden">
                    <img src="{{ asset('img/product-'.$i.'.jpg') }}" alt="Product {{$i}}" class="w-full h-48 object-cover">
                    <div class="p-4 text-center">
                        <h2 class="font-semibold text-lg">Fresh Apple</h2>
                        <p class="text-red-600 font-bold">$15.00</p>
                    </div>
                    <div class="flex border-t">
                        <a href="#" class="w-1/2 py-2 text-center border-r text-gray-600 hover:text-red-600"><i class="fas fa-eye me-1"></i>View</a>
                        <a href="#" class="w-1/2 py-2 text-center text-gray-600 hover:text-red-600"><i class="fas fa-shopping-bag me-1"></i>Add</a>
                    </div>
                </div>
            @endfor
        </div>

        <div id="fresh" class="tab-content hidden grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @for ($i = 1; $i <= 4; $i++)
                <div class="bg-white shadow rounded overflow-hidden">
                    <img src="{{ asset('img/product-'.$i.'.jpg') }}" alt="Product {{$i}}" class="w-full h-48 object-cover">
                    <div class="p-4 text-center">
                        <h2 class="font-semibold text-lg">Fresh Carrot</h2>
                        <p class="text-red-600 font-bold">$12.00</p>
                    </div>
                    <div class="flex border-t">
                        <a href="#" class="w-1/2 py-2 text-center border-r text-gray-600 hover:text-red-600"><i class="fas fa-eye me-1"></i>View</a>
                        <a href="#" class="w-1/2 py-2 text-center text-gray-600 hover:text-red-600"><i class="fas fa-shopping-bag me-1"></i>Add</a>
                    </div>
                </div>
            @endfor
        </div>
    </section>

    <!-- Scripts -->
    <script>
         window.addEventListener('load', () => {
            document.body.classList.add('loaded');
        });
        const tabs = document.querySelectorAll('.tab-btn');
        const contents = document.querySelectorAll('.tab-content');

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                contents.forEach(c => c.classList.add('hidden'));
                document.getElementById(tab.dataset.tab).classList.remove('hidden');
            });
        });
    </script>
</body>
</html>
