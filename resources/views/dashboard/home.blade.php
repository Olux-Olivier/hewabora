<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - HewaBora</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="font-sans relative min-h-screen flex flex-col">

    <!-- Image d'arrière-plan -->
    <div class="absolute inset-0 bg-cover bg-center bg-no-repeat blur-sm opacity-60"
        style="background-image: url('https://images.unsplash.com/photo-1600891964599-f61ba0e24092?auto=format&fit=crop&w=1950&q=80');">
    </div>

    <!-- Superposition sombre -->
    <div class="absolute inset-0 bg-black opacity-40"></div>

    <!-- Contenu principal -->
    <main class="relative z-10 flex flex-col justify-center items-center flex-grow px-4 py-10 text-white">

        <!-- Header -->
        <header class="mb-10 text-center">
            <h1 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 bg-clip-text text-transparent">
                HewaBora Dashboard
            </h1>
            <p class="mt-2 text-gray-200 text-lg">Gestion du Lounge & Night</p>
        </header>

        <!-- Grille des sections -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

            <!-- Foods Lounge -->
            <a href="{{ route('dashboard.lounge.foods') }}" class="bg-white/20 hover:bg-white/30 backdrop-blur-lg rounded-xl p-6 text-center transition shadow-lg border border-white/10">
                <div class="text-5xl mb-3 text-yellow-400"><i class="fa-solid fa-utensils"></i></div>
                <h3 class="text-lg font-semibold text-white">Foods Lounge</h3>
            </a>

            <!-- Drinks Lounge -->
            <a href="{{ route('dashboard.lounge.drinks') }}" class="bg-white/20 hover:bg-white/30 backdrop-blur-lg rounded-xl p-6 text-center transition shadow-lg border border-white/10">
                <div class="text-5xl mb-3 text-blue-400"><i class="fa-solid fa-cocktail"></i></div>
                <h3 class="text-lg font-semibold text-white">Drinks Lounge</h3>
            </a>

            <!-- Drinks Night -->
            <a href="{{ route('dashboard.night.drinks') }}" class="bg-white/20 hover:bg-white/30 backdrop-blur-lg rounded-xl p-6 text-center transition shadow-lg border border-white/10">
                <div class="text-5xl mb-3 text-purple-400"><i class="fa-solid fa-martini-glass-citrus"></i></div>
                <h3 class="text-lg font-semibold text-white">Drinks Night</h3>
            </a>

            <!-- Foods Night -->
            <a href="{{ route('dashboard.night.foods') }}" class="bg-white/20 hover:bg-white/30 backdrop-blur-lg rounded-xl p-6 text-center transition shadow-lg border border-white/10">
                <div class="text-5xl mb-3 text-green-400"><i class="fa-solid fa-bowl-food"></i></div>
                <h3 class="text-lg font-semibold text-white">Foods Night</h3>
            </a>
        </div>
    </main>

</body>
</html>
