<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Offres de la semaine</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .brand-font {
            font-family: 'Playfair Display', serif;
        }

        /* Animation fade + slide */
        .fade-slide {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeSlideIn 0.8s forwards;
        }

        @keyframes fadeSlideIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Délais progressifs pour staggered effect */
        .fade-slide-delay-1 { animation-delay: 0.2s; }
        .fade-slide-delay-2 { animation-delay: 0.4s; }
        .fade-slide-delay-3 { animation-delay: 0.6s; }
        .fade-slide-delay-4 { animation-delay: 0.8s; }
        .fade-slide-delay-5 { animation-delay: 1s; }
        .fade-slide-delay-6 { animation-delay: 1.2s; }
        .fade-slide-delay-7 { animation-delay: 1.4s; }
        .fade-slide-delay-8 { animation-delay: 1.6s; }
    </style>
</head>

<body class="relative text-white">

<!-- IMAGE DE FOND EN LIGNE -->
<div class="fixed inset-0 -z-10 bg-cover bg-center"
     style="background-image: url('https://images.unsplash.com/photo-1414235077428-338989a2e8c0?auto=format&fit=crop&w=1920&q=80');">
</div>

<div class="fixed inset-0 bg-black/70 -z-10"></div>

<div class="min-h-screen flex items-center justify-center px-4 py-12">

    <!-- CARTE EFFET GLACE -->
    <div class="w-full max-w-4xl backdrop-blur-lg bg-white/10 border border-white/20 rounded-3xl shadow-2xl p-8 md:p-12 fade-slide fade-slide-delay-1">

        <!-- MARQUE -->
        <div class="text-center mb-10 fade-slide fade-slide-delay-2">
            <h1 class="brand-font text-4xl md:text-5xl text-yellow-400 tracking-wide drop-shadow-lg">
                Hewabora
            </h1>
            <p class="text-gray-200 text-sm mt-2 tracking-widest uppercase">
                Lounge Bar et Restaurant
            </p>

            <p class="mt-8">
                <a href="{{ url('/lounge/foods') }}"
                class="text-sm px-4 py-1 border border-white/30 rounded-full
                        hover:border-yellow-400 hover:text-yellow-300
                        transition-all duration-300">
                    Menu principal
                </a>
            </p>
        </div>

        <!-- TITRE -->
        <div class="text-center mb-10 fade-slide fade-slide-delay-3">
            <h2 class="brand-font text-3xl md:text-4xl border border-yellow-400 px-8 py-3 rounded-full inline-block tracking-wide">
                OFFRES DE LA SEMAINE
            </h2>
        </div>

        <!-- OFFRES -->
        <div class="space-y-8 text-lg fade-slide fade-slide-delay-4">

            <div class="flex justify-between items-center border-b border-white/20 pb-4 fade-slide fade-slide-delay-5">
                <div>
                    <h3 class="text-yellow-400 text-xl font-semibold">Lundi</h3>
                    <p>Burger + 1 grande bière</p>
                </div>
                <span class="text-2xl font-bold">15$</span>
            </div>

            <div class="flex justify-between items-center border-b border-white/20 pb-4 fade-slide fade-slide-delay-6">
                <div>
                    <h3 class="text-yellow-400 text-xl font-semibold">Mardi</h3>
                    <p>Pizza (Margherita/Regina)</p>
                    <p>+ 6 petites bières</p>
                </div>
                <span class="text-2xl font-bold">25$</span>
            </div>

            <div class="flex justify-between items-center border-b border-white/20 pb-4 fade-slide fade-slide-delay-7">
                <div>
                    <h3 class="text-yellow-400 text-xl font-semibold">Mercredi</h3>
                    <p>Soirée Dames</p>
                </div>
                <span class="text-yellow-400 font-semibold">
                    50% sur tous les cocktails
                </span>
            </div>

            <div class="flex justify-between items-center border-b border-white/20 pb-4 fade-slide fade-slide-delay-8">
                <div>
                    <h3 class="text-yellow-400 text-xl font-semibold">Jeudi</h3>
                    <p>Shisha + 6 Shooters</p>
                </div>
                <span class="text-2xl font-bold">15$</span>
            </div>

            <div class="border-b border-white/20 pb-4 fade-slide fade-slide-delay-5">
                <h3 class="text-yellow-400 text-xl font-semibold">Vendredi</h3>
                <p>Achetez toute bouteille <strong>80$</strong></p>
                <p>Recevez une shisha</p>
            </div>

            <div class="border-b border-white/20 pb-4 fade-slide fade-slide-delay-6">
                <h3 class="text-yellow-400 text-xl font-semibold">Samedi</h3>
                <p>Achetez 3 bouteilles recevez 1 gratuite</p>
            </div>

            <div class="fade-slide fade-slide-delay-7">
                <h3 class="text-yellow-400 text-xl font-semibold">Dimanche</h3>
                <p>Achetez 1 bouteille de cognac</p>
                <p>Recevez 1 cigare offert</p>
            </div>

        </div>

        <!-- FOOTER -->
        <div class="text-center mt-12 border-t border-white/20 pt-6 text-sm text-gray-200 fade-slide fade-slide-delay-8">
            <p>3ᵉ NIVEAU BÂTIMENT HYPNOSE</p>

            <p class="mt-3 text-yellow-400 font-semibold text-base">
                BOOK NOW
            </p>

            <p class="mt-1">+243 9000 60024</p>

            <div class="mt-6 text-gray-400 text-xs">
                © {{ date('Y') }} Synergie UP — Tous droits réservés
             </div>
        </div>

    </div>
</div>
</body>
</html>
