<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hewa Bora | Lounge Food</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&display=swap" rel="stylesheet">

  <style>
    /* --- Fond doré élégant --- */
    body::before {
      content: "";
      position: fixed;
      inset: 0;
      background-image: url('https://images.unsplash.com/photo-1600891964599-f61ba0e24092?auto=format&fit=crop&w=1920&q=80');
      background-size: cover;
      background-position: center;
      filter: brightness(0.45);
      z-index: -2;
    }

    body::after {
      content: "";
      position: fixed;
      inset: 0;
      background: linear-gradient(to bottom right, rgba(0,0,0,0.75), rgba(255,215,0,0.15));
      z-index: -1;
    }

    /* --- Apparition fluide --- */
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    body {
      opacity: 0;
      transition: opacity 1s ease-in-out;
    }
    body.loaded {
      opacity: 1;
    }

    .fadeIn {
      animation: fadeIn 0.8s ease-in-out;
    }
  </style>
</head>

<body class="min-h-screen text-white font-sans relative">

  <!-- Header -->
  <header class="backdrop-blur-md bg-black/40 border-b border-yellow-500/30 shadow-lg py-4 fixed top-0 left-0 w-full z-50">
    <div class="container mx-auto flex justify-center items-center space-x-6">
      <img src="{{ asset('img/Hewa_Bora_Logo.png') }}" alt="Hewa Bora Logo"
           class="w-12 h-12 rounded-full border-2 border-yellow-500/70 shadow-md">
      <h1 class="text-2xl font-bold bg-gradient-to-r from-yellow-400 via-yellow-500 to-white bg-clip-text text-transparent">
        Hewa Bora
      </h1>
      <a href="{{ url('/menu') }}"
         class="text-yellow-400 hover:text-white transition  text-lg">
         home
      </a>
    </div>
  </header>

  <!-- Page Header -->
  <section class="relative pt-32 pb-16 text-center text-white fadeIn">
    <h1 class="font-[Playfair Display] text-5xl mb-3 bg-gradient-to-r from-yellow-400 via-yellow-500 to-white bg-clip-text text-transparent drop-shadow-lg">
      Lounge Bar — Menu Food
    </h1>
    <p class="text-gray-300 mb-6">Découvrez nos spécialités gastronomiques raffinées 🍽️</p>
    <a href="{{ route('night.drinks') }}"
       class="text-yellow-400 hover:text-white transition font-semibold">
       Voir le menu du Night Club
    </a>
  </section>

  <!-- Navigation boutons -->
  <div class="flex justify-center space-x-6 my-6 fadeIn">
    <a href="{{ route('lounge.drinks') }}"
       class="px-6 py-2 font-semibold rounded-lg border border-yellow-500/40 backdrop-blur-sm
              {{ Route::currentRouteName() == 'lounge.drinks'
                ? 'bg-yellow-500/80 text-black'
                : 'bg-white/10 text-yellow-400 hover:bg-yellow-500/30' }}
              transition duration-300">
      Drinks
    </a>
    <a href="{{ route('lounge.foods') }}"
       class="px-6 py-2 font-semibold rounded-lg border border-yellow-500/40 backdrop-blur-sm
              {{ Route::currentRouteName() == 'lounge.foods'
                ? 'bg-yellow-500/80 text-black'
                : 'bg-white/10 text-yellow-400 hover:bg-yellow-500/30' }}
              transition duration-300">
      Foods
    </a>
  </div>

  <!-- Liste des produits -->
  <section class="container mx-auto py-12 px-6 fadeIn">
    @forelse($foodProducts as $dishType => $products)
      <!-- Type de plat -->
      <div class="mb-6 bg-white/10 border border-yellow-500/20 rounded-xl text-center py-3 shadow-lg">
        <h3 class="text-2xl font-semibold text-yellow-400">{{ $dishType }}</h3>
      </div>

      <!-- Grille de produits -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
        @foreach($products as $product)
          <div class="bg-white/10 backdrop-blur-md border border-yellow-500/20 rounded-2xl overflow-hidden shadow-xl hover:scale-105 transform transition duration-300">
            <img src="{{ $product->image ? asset('storage/' . $product->image) : asset('img/hero_bg.jpg') }}"
                 alt="{{ $product->name }}" class="w-full h-48 object-cover opacity-90 hover:opacity-100 transition">
            <div class="p-4 text-center">
              <h2 class="font-semibold text-lg text-white">{{ $product->name }}</h2>
              <p class="text-yellow-400 font-bold">${{ number_format($product->price, 2) }}</p>
            </div>
          </div>
        @endforeach
      </div>
    @empty
      <p class="text-center text-gray-300">Aucun plat disponible pour le moment.</p>
    @endforelse
  </section>

    <!-- FOOTER -->
    <footer class="backdrop-blur-md bg-black/50 border-t border-yellow-500/30 text-white py-10 mt-12">
    <div class="container mx-auto px-6 md:px-12">
        <div class="flex flex-col md:flex-row justify-between items-center md:items-start space-y-6 md:space-y-0 md:space-x-6">

        <!-- Section Contact -->
        <div class="text-center md:text-left">
            <h3 class="text-xl font-semibold text-yellow-400 mb-2">Hewa Bora</h3>
            <p class="text-gray-300 mb-2">Préservez vos moments avec nous.</p>
            <p class="text-gray-400 text-sm">📍 Av. kapenda, Batiment Hypnose 3è niveau, Lubumbashi, RDC</p>
            <p class="text-gray-400 text-sm">📞 +243 900 060 024</p>
            <p class="text-gray-400 text-sm">✉️ contact@hewabora.com</p>
        </div>

        <!-- Section Liens -->
        <div class="text-center md:text-left">
            <h4 class="text-yellow-400 font-semibold mb-2">Liens</h4>
            <ul class="space-y-1">
            <li><a href="{{ url('/menu') }}" class="hover:text-yellow-300 transition">Accueil</a></li>
            <li><a href="{{ route('lounge.foods') }}" class="hover:text-yellow-300 transition">Foods Lounge Bar</a></li>
            <li><a href="{{ route('lounge.drinks') }}" class="hover:text-yellow-300 transition">Drinks Lounge Bar</a></li>
            <li><a href="{{ route('night.foods') }}" class="hover:text-yellow-300 transition"> Foods Night club</a></li>
            <li><a href="{{ route('night.drinks') }}" class="hover:text-yellow-300 transition">Drinks Night club</a></li>
            </ul>
        </div>

        <!-- Section Réseaux Sociaux -->
        <div class="text-center md:text-left">
            <h4 class="text-yellow-400 font-semibold mb-2">Suivez-nous</h4>
            <div class="flex justify-center md:justify-start space-x-4 text-xl">
            <a href="#" class="hover:text-yellow-300 transition"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="hover:text-yellow-300 transition"><i class="fab fa-instagram"></i></a>
            <a href="#" class="hover:text-yellow-300 transition"><i class="fab fa-twitter"></i></a>
            <a href="#" class="hover:text-yellow-300 transition"><i class="fab fa-youtube"></i></a>
            </div>
        </div>

        </div>

        <!-- Copyright -->
        <div class="mt-10 border-t border-yellow-500/20 pt-4 text-center text-gray-400 text-sm">
        &copy; {{ date('Y') }} Synergie UP. Tous droits réservés.
        </div>
    </div>
    </footer>


  <script>
    window.addEventListener('load', () => {
      document.body.classList.add('loaded');
    });
  </script>

</body>
</html>
