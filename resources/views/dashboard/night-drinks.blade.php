<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drinks Night - HewaBora Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Forcer l'image à couvrir tout l'écran */
        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://images.unsplash.com/photo-1570931986061-7a7c1a6eac87?auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            opacity: 0.6;
            z-index: -2;
        }
        /* Couche sombre au-dessus de l'image */
        body::after {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: -1;
        }
    </style>
</head>
<body class="font-sans relative min-h-screen flex flex-col text-white">

    <main class="relative z-10 flex flex-col justify-center items-center flex-grow px-4 py-10">
        <header class="mb-10 text-center">
            <h1 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-purple-400 via-purple-500 to-purple-700 bg-clip-text text-transparent drop-shadow-lg">
                Drinks Night
            </h1>
            <a href="{{ route('dashboard.home') }}" class="text-sm text-gray-200 hover:text-purple-400 mt-2 inline-block">
                <i class="fa-solid fa-house"></i> Retour au Dashboard
            </a>
        </header>

        <div class="bg-white/20 backdrop-blur-lg rounded-xl p-6 w-full max-w-5xl shadow-lg border border-white/10">

            <!-- Bouton Ajouter -->
            <div class="mb-4 flex justify-start">
                <a href="{{ url('/form') }}" class="bg-purple-500 hover:bg-purple-600 text-white font-semibold px-4 py-2 rounded-lg flex items-center space-x-2 shadow-md">
                    <i class="fa-solid fa-plus"></i>
                    <span>Ajouter une boisson</span>
                </a>
            </div>

            <!-- Tableau -->
            <table class="w-full text-left text-white">
                <thead class="border-b border-white/20">
                    <tr>
                        <th class="py-3">Nom</th>
                        <th class="py-3">Prix ($)</th>
                        <th class="py-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-white/10 transition">
                        <td class="py-3">Whisky Double</td>
                        <td>15</td>
                        <td>
                            <button class="bg-purple-500 hover:bg-purple-600 text-white px-3 py-1 rounded-lg text-sm mr-2">
                                <i class="fa-solid fa-pen-to-square"></i> Modifier
                            </button>
                            <button class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded-lg text-sm">
                                <i class="fa-solid fa-trash"></i> Supprimer
                            </button>
                        </td>
                    </tr>
                    <tr class="hover:bg-white/10 transition">
                        <td class="py-3">Vodka Energy</td>
                        <td>12</td>
                        <td>
                            <button class="bg-purple-500 hover:bg-purple-600 text-white px-3 py-1 rounded-lg text-sm mr-2">
                                <i class="fa-solid fa-pen-to-square"></i> Modifier
                            </button>
                            <button class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded-lg text-sm">
                                <i class="fa-solid fa-trash"></i> Supprimer
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>

