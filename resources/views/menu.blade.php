<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hewa Bora | Bienvenue</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* ---- Animations ---- */
    @keyframes fadeIn {
      from { opacity: 0; transform: scale(0.9); }
      to { opacity: 1; transform: scale(1); }
    }

    @keyframes bounce {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }

    .fade-in {
      animation: fadeIn 1.2s ease-out forwards;
    }

    .bounce {
      animation: bounce 1.5s infinite;
    }

    /* ---- Arrière-plan avec image + overlay ---- */
    body::before {
      content: "";
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=1920&q=80');
      background-size: cover;
      background-position: center;
      filter: brightness(0.5);
      z-index: -2;
    }

    body::after {
      content: "";
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(to bottom right, rgba(0,0,0,0.6), rgba(255,215,0,0.2));
      z-index: -1;
    }
  </style>
</head>
<body class="flex flex-col items-center justify-center min-h-screen text-center text-white">

  <!-- Logo + Texte -->
  <div class="fade-in">
    <img src="{{ asset('img/Hewa_Bora_Logo.png') }}" alt="Hewa Bora Logo"
         class="w-36 h-36 mx-auto mb-6 rounded-full shadow-2xl border-4 border-yellow-500/80">
    <h1 class="text-5xl font-bold mb-2 bg-gradient-to-r from-yellow-400 via-yellow-500 to-white bg-clip-text text-transparent drop-shadow-lg">
      Hewa Bora
    </h1>
    <p class="text-lg text-gray-200 font-light tracking-wide">Lubumbashi - Bienvenue 🍽️</p>
    <span class="block mt-2 text-sm font-semibold text-yellow-400 tracking-widest">CÉ LA VI</span>
  </div>

  <!-- Animation de chargement -->
  <div class="mt-10 flex justify-center">
    <div class="w-4 h-4 bg-yellow-400 rounded-full mx-1 bounce" style="animation-delay:0s"></div>
    <div class="w-4 h-4 bg-white rounded-full mx-1 bounce" style="animation-delay:0.2s"></div>
    <div class="w-4 h-4 bg-yellow-500 rounded-full mx-1 bounce" style="animation-delay:0.4s"></div>
  </div>

  <!-- Script de redirection -->
  <script>
    setTimeout(() => {
      window.location.href = "{{ url('/lounge/foods') }}";
    }, 3000); // redirige après 3 secondes
  </script>

</body>
</html>
