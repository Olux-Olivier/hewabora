<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foods Lounge - HewaBora Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="font-sans relative min-h-screen flex flex-col">

    <!-- Image d'arrière-plan -->
    <div class="absolute inset-0 bg-cover bg-center bg-no-repeat blur-sm opacity-60"
        style="background-image: url('https://images.unsplash.com/photo-1600891964599-f61ba0e24092?auto=format&fit=crop&w=1950&q=80');">
    </div>
    <div class="absolute inset-0 bg-black opacity-40"></div>

    <!-- Contenu principal -->
    <main class="relative z-10 flex flex-col justify-center items-center flex-grow px-4 py-10 text-white">
        <header class="mb-10 text-center">
            <h1 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 bg-clip-text text-transparent">
                Foods Lounge
            </h1>
            <a href="{{ route('dashboard.home') }}" class="text-sm text-gray-200 hover:text-yellow-400 mt-2 inline-block">
                <i class="fa-solid fa-house"></i> Retour au Dashboard
            </a>
        </header>

        <div class="bg-white/20 backdrop-blur-lg rounded-xl p-6 w-full max-w-5xl shadow-lg border border-white/10">

            <!-- Bouton Ajouter -->
            <div class="mb-4 flex justify-start">
                <a href="{{ url('/form') }}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold px-4 py-2 rounded-lg flex items-center space-x-2 shadow-md">
                    <i class="fa-solid fa-plus"></i>
                    <span>Ajouter un article</span>
                </a>
            </div>

            {{-- tableau --}}

            <table class="w-full">
                <thead>
                    <tr>
                        <th class="text-left py-2">Nom</th>
                        <th class="text-left py-2">Type</th>
                        <th class="text-right py-2">Prix</th>
                        <th class="text-center py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($foodProducts as $dishType => $products)
                        @foreach($products as $product)
                            <tr>
                                <td class="py-2">{{ $product->name }}</td>
                                <td class="py-2">{{ $dishType }}</td>
                                <td class="py-2 text-right">
                                    {{ number_format($product->price, 0, ',', ' ') }} FC
                                </td>

                                <td class="py-2 text-center space-x-2">
                                <a href="{{ route('products.edit', $product->id) }}"
                                class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded">
                                    Modifier
                                </a>

                                <form action="{{ route('products.destroy', $product->id) }}"
                                    method="POST"
                                    class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            onclick="return confirm('Supprimer cet article ?')"
                                            class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded">
                                        Supprimer
                                    </button>
                                </form>
                            </td>
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>
            </table>

        </div>
    </main>
</body>
</html>
