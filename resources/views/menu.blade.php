<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hewa Bora | Bienvenue</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Animation du texte et du logo */
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
  </style>
</head>
<body class="bg-red-50 flex flex-col items-center justify-center min-h-screen text-center">

  <!-- Logo + Texte -->
  <div class="fade-in">
    <img src="{{ asset('img/Hewa_Bora_Logo.png') }}" alt="Hewa Bora Logo" class="w-32 h-32 mx-auto mb-4 rounded-full shadow-lg">
    <h1 class="text-4xl font-bold text-red-700 mb-2">Hewa Bora</h1>
    <p class="text-gray-700 text-lg">Lubumbashi - Bienvenue 🍽️</p>
    <Span>CÉ LA VIE</Span>
  </div>

  <!-- Animation de chargement -->
  <div class="mt-10 flex justify-center">
    <div class="w-4 h-4 bg-red-600 rounded-full mx-1 bounce" style="animation-delay:0s"></div>
    <div class="w-4 h-4 bg-red-600 rounded-full mx-1 bounce" style="animation-delay:0.2s"></div>
    <div class="w-4 h-4 bg-red-600 rounded-full mx-1 bounce" style="animation-delay:0.4s"></div>
  </div>

  <!-- Script de redirection -->
  <script>
    setTimeout(() => {
      window.location.href = "{{ url('/lounge/foods') }}";
    }, 3000); // redirige après 3 secondes
  </script>

</body>
</html>
