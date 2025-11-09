<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foody - Drinks Menu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50 font-sans">

<header class="bg-white shadow fixed w-full z-50">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
        <a href="#" class="text-2xl font-bold text-red-600">H<span class="text-red-400">ewa</span>Bora</a>
        <nav class="space-x-4 hidden md:flex">
            <a href="{{ url('/menu/lounge') }}" class="text-gray-700 hover:text-red-600 font-semibold">Drinks</a>
            <a href="{{ url('/menu/night') }}" class="text-gray-700 hover:text-red-600">Foods</a>
        </nav>
    </div>
</header>

<section class="relative pt-24 pb-12 text-center text-white overflow-hidden">
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('img/hero_bg.jpg') }}');"></div>
    <div class="absolute inset-0 bg-black opacity-60"></div>
    <div class="relative z-10">
        <h1 class="font-[Parisienne] text-5xl mb-3">Drinks Menu</h1>
    </div>
</section>

<section class="container mx-auto py-12 px-4">
    @foreach($products as $category => $dishGroups)
        <div class="col-span-1 sm:col-span-2 lg:col-span-4 mb-4 bg-red-100 py-3">
            <h2 class="text-2xl font-bold text-red-700 text-center">{{ $category }}</h2>
        </div>

        @foreach($dishGroups as $dishType => $items)
            @if($dishType)
                <div class="col-span-1 sm:col-span-2 lg:col-span-4 mb-2 bg-red-50 py-2">
                    <h3 class="text-xl font-semibold text-red-600 text-center">{{ $dishType }}</h3>
                </div>
            @endif

            @foreach($items as $product)
                <div class="bg-white shadow rounded overflow-hidden">
                    <img src="{{ $product->image ? asset($product->image) : asset('img/default.jpg') }}"
                         alt="{{ $product->name }}" class="w-full h-48 object-cover">
                    <div class="p-4 text-center">
                        <h2 class="font-semibold text-lg">{{ $product->name }}</h2>
                        <p class="text-red-600 font-bold">${{ number_format($product->price, 2) }}</p>
                    </div>
                </div>
            @endforeach
        @endforeach
    @endforeach
</section>

</body>
</html>
