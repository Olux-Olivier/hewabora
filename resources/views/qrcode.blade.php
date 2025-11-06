<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>QR Code du Menu</title>
  <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100 flex flex-col items-center justify-center min-h-screen p-10">


    <a href="#" class="text-2xl font-bold text-red-600">H<span class="text-red-400">ewa</span>Bora</a>
  <h1 class="text-3xl font-bold mb-8 text-center">Scannez pour voir le menu 📱</h1>

  <!-- QR Code centré -->
  <div class="flex items-center justify-center mb-6">
    {!! QrCode::size(250)->generate($menuUrl) !!}
  </div>

  <p class="text-gray-600 text-center">Ou ouvrez directement :
    <a href="{{ $menuUrl }}" class="text-blue-600 underline break-words">{{ $menuUrl }}</a>
  </p>

</body>
</html>

