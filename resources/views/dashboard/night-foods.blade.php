<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foods Night - HewaBora Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="font-sans relative min-h-screen flex flex-col">

    <div class="absolute inset-0 bg-cover bg-center bg-no-repeat blur-sm opacity-60"
        style="background-image: url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=1950&q=80');">
    </div>
    <div class="absolute inset-0 bg-black opacity-45"></div>

    <main class="relative z-10 flex flex-col justify-center items-center flex-grow px-4 py-10 text-white">
        <header class="mb-10 text-center">
            <h1 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-green-400 via-yellow-500 to-green-600 bg-clip-text text-transparent">
                Foods Night
            </h1>
            <a href="{{ route('dashboard.home') }}" class="text-sm text-gray-200 hover:text-green-400 mt-2 inline-block">
                <i class="fa-solid fa-house"></i> Retour au Dashboard
            </a>
        </header>

        <div class="bg-white/20 backdrop-blur-lg rounded-xl p-6 w-full max-w-5xl shadow-lg border border-white/10">

            <!-- Bouton Ajouter -->
            <div class="mb-4 flex justify-start">
                <a href="{{ url('/form') }}" class="bg-green-500 hover:bg-green-600 text-white font-semibold px-4 py-2 rounded-lg flex items-center space-x-2 shadow-md">
                    <i class="fa-solid fa-plus"></i>
                    <span>Ajouter un article</span>
                </a>
            </div>

            {{-- tableau --}}
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
                        <td class="py-3">Brochette Hewa Bora</td>
                        <td>14</td>
                        <td>
                            <button class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded-lg text-sm mr-2">Modifier</button>
                            <button class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded-lg text-sm">Supprimer</button>
                        </td>
                    </tr>
                    <tr class="hover:bg-white/10 transition">
                        <td class="py-3">Burger Spécial Nuit</td>
                        <td>13</td>
                        <td>
                            <button class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded-lg text-sm mr-2">Modifier</button>
                            <button class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded-lg text-sm">Supprimer</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>
