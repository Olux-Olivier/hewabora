<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Offres de la semaine - Hewabora</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        body{
            font-family: 'Poppins', sans-serif;
        }

        .brand-font{
            font-family: 'Playfair Display', serif;
        }

        /* Background */
        .bg-overlay{
            background:
                linear-gradient(rgba(0,0,0,0.75), rgba(0,0,0,0.82)),
                url('https://images.unsplash.com/photo-1514933651103-005eec06c04b?q=80&w=1974&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        /* Glass */
        .glass{
            background: rgba(255,255,255,0.06);
            backdrop-filter: blur(14px);
            border: 1px solid rgba(255,255,255,0.08);
        }

        /* Animation */
        .fade-up{
            opacity: 0;
            transform: translateY(25px);
            animation: fadeUp .8s forwards;
        }

        @keyframes fadeUp{
            to{
                opacity: 1;
                transform: translateY(0);
            }
        }

        .delay-1{ animation-delay: .2s; }
        .delay-2{ animation-delay: .4s; }
        .delay-3{ animation-delay: .6s; }
        .delay-4{ animation-delay: .8s; }

        /* Offer Card */
        .offer-card{
            background: rgba(255,255,255,0.04);
            border: 1px solid rgba(255,255,255,0.08);
        }

        .offer-card:hover{
            transform: translateY(-4px);
            background: rgba(255,255,255,0.07);
        }
    </style>
</head>

<body class="bg-overlay text-white min-h-screen">

<div class="px-4 py-12">

    <div class="max-w-6xl mx-auto">

        <!-- HEADER -->
        <div class="text-center mb-14 fade-up delay-1">

            <h1 class="brand-font text-5xl md:text-6xl text-yellow-400 drop-shadow-lg">
                Hewabora
            </h1>

            <p class="text-gray-300 tracking-[4px] uppercase mt-4 text-sm md:text-base">
                Lounge Bar • Restaurant • Night Club
            </p>

            <!-- Bouton -->
            <div class="mt-8">

                <a href="{{ url('/lounge/foods') }}"
                   class="inline-flex items-center gap-3 px-7 py-3 rounded-full
                          bg-white/10 border border-white/20 backdrop-blur-md
                          hover:bg-yellow-400 hover:text-black
                          transition-all duration-300">

                    <span class="tracking-wide">
                        Nos Menus
                    </span>

                    <span>
                        →
                    </span>

                </a>

            </div>

        </div>

        <!-- TITLE -->
        <div class="text-center mb-12 fade-up delay-2">

            <h2 class="brand-font text-3xl md:text-4xl inline-block border border-yellow-400 px-8 py-3 rounded-full">
                OFFRES DE LA SEMAINE
            </h2>

        </div>

        <!-- OFFERS -->
        <div class="grid md:grid-cols-3 gap-8">

            <!-- LUNDI -->
            <div class="glass rounded-3xl p-8 shadow-2xl transition duration-300 offer-card fade-up delay-2">

                <div class="mb-6">
                    <span class="text-yellow-400 tracking-[3px] uppercase text-sm">
                        Chaque Lundi
                    </span>

                    <h3 class="text-4xl font-bold mt-2">
                        AFTER WORK
                    </h3>
                </div>

                <div class="space-y-5 text-gray-200">

                    <div class="border-b border-white/10 pb-4">
                        <p class="text-lg">
                            5 bières
                        </p>

                        <span class="text-yellow-400 text-2xl font-bold">
                            10$
                        </span>
                    </div>

                    <div class="border-b border-white/10 pb-4">
                        <p class="text-lg">
                            2 Shawarma
                        </p>

                        <span class="text-yellow-400 text-2xl font-bold">
                            10$
                        </span>
                    </div>

                    <div class="pt-2 text-sm text-gray-400">
                        Hype Music : DJ RM • DJ Kiss
                    </div>

                </div>

            </div>

            <!-- MARDI -->
            <div class="glass rounded-3xl p-8 shadow-2xl transition duration-300 offer-card fade-up delay-3">

                <div class="mb-6">
                    <span class="text-yellow-400 tracking-[3px] uppercase text-sm">
                        Chaque Mardi
                    </span>

                    <h3 class="text-4xl font-bold mt-2">
                        OLD SCHOOL
                    </h3>
                </div>

                <div class="space-y-5 text-gray-200">

                    <div class="border-b border-white/10 pb-4">
                        <p class="text-lg">
                            5 grandes bières
                        </p>

                        <span class="text-yellow-400 text-2xl font-bold">
                            20$
                        </span>
                    </div>

                    <div class="pt-2 text-sm text-gray-400">
                        Hype Music : DJ RM • DJ Kiss
                    </div>

                </div>

            </div>

            <!-- MERCREDI -->
            <div class="glass rounded-3xl p-8 shadow-2xl transition duration-300 offer-card fade-up delay-4">

                <div class="mb-6">
                    <span class="text-yellow-400 tracking-[3px] uppercase text-sm">
                        Chaque Mercredi
                    </span>

                    <h3 class="text-4xl font-bold mt-2">
                        LADIES NIGHT
                    </h3>
                </div>

                <div class="space-y-5 text-gray-200">

                    <div class="border-b border-white/10 pb-4">
                        <p class="text-lg">
                            Pizza 1+1
                        </p>
                    </div>

                    <div class="border-b border-white/10 pb-4">
                        <p class="text-lg">
                            Cocktail 1+1
                        </p>
                    </div>

                    <div class="pt-2 text-sm text-gray-400">
                        Hype Music : DJ RM • DJ Kiss
                    </div>

                </div>

            </div>

            <!-- JEUDI -->
            <div class="glass rounded-3xl p-8 shadow-2xl transition duration-300 offer-card fade-up delay-4">

                <div class="mb-6">
                    <span class="text-yellow-400 tracking-[3px] uppercase text-sm">
                        Chaque Jeudi
                    </span>

                    <h3 class="text-4xl font-bold mt-2">
                        THIRSTY THURSDAY
                    </h3>
                </div>

                <div class="space-y-5 text-gray-200">

                    <div class="border-b border-white/10 pb-4">
                        <p class="text-lg">
                            Jack Daniel - <strong>60$</strong>
                        </p>
                    </div>

                    <div class="border-b border-white/10 pb-4">
                        <p class="text-lg">
                            Black Label - <strong>60$</strong>
                        </p>
                    </div>

                    <div class="border-b border-white/10 pb-4">
                        <p class="text-lg">
                            Jagiermester - <strong>50$</strong>
                        </p>
                    </div>

                    <div class="border-b border-white/10 pb-4">
                        <p class="text-lg">
                            Jameson - <strong>50$</strong>
                        </p>
                    </div>

                     <div class="border-b border-white/10 pb-4">
                        <p class="text-lg">
                            Jameson Black - <strong>70$</strong>
                        </p>
                    </div>

                    <div class="pt-2 text-sm text-gray-400">
                        Hype Music : DJ RM • DJ Kiss
                    </div>

                </div>

            </div>

        </div>

        <!-- FOOTER -->
        <div class="text-center mt-16 border-t border-white/10 pt-8 fade-up delay-4">

            <p class="tracking-[3px] uppercase text-gray-300 text-sm">
                3ᵉ Niveau Bâtiment Hypnose
            </p>

            <p class="mt-5 text-yellow-400 font-semibold text-lg">
                BOOK NOW
            </p>

            <p class="mt-2 text-lg">
                +243 9000 60024
            </p>

            <div class="mt-8 text-gray-500 text-xs">
                © {{ date('Y') }} Synergie UP — Tous droits réservés
            </div>

        </div>

    </div>

</div>

</body>
</html>
