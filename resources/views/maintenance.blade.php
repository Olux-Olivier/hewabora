<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Maintenance | Hewabora</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        body{
            font-family:'Poppins',sans-serif;
        }

        .brand-font{
            font-family:'Playfair Display',serif;
        }

        .bg-overlay{
            background:
                linear-gradient(rgba(0,0,0,0.78), rgba(0,0,0,0.85)),
                url('https://images.unsplash.com/photo-1514933651103-005eec06c04b?q=80&w=1974&auto=format&fit=crop');
            background-size:cover;
            background-position:center;
            background-attachment:fixed;
        }

        .glass{
            background:rgba(255,255,255,0.05);
            backdrop-filter:blur(16px);
            border:1px solid rgba(255,255,255,0.08);
        }

        .fade-up{
            animation:fadeUp 1s ease forwards;
        }

        @keyframes fadeUp{
            from{
                opacity:0;
                transform:translateY(30px);
            }
            to{
                opacity:1;
                transform:translateY(0);
            }
        }
    </style>
</head>

<body class="bg-overlay min-h-screen text-white">

<div class="min-h-screen flex items-center justify-center px-5 py-10">

    <div class="max-w-3xl w-full glass rounded-[35px] p-8 md:p-14 text-center shadow-2xl fade-up">

        <!-- LOGO -->
        <div class="mb-8">

            <!-- Remplace par ton logo -->
            <!-- <img src="{{ asset('images/logo.png') }}" class="h-24 mx-auto mb-6"> -->

            <h1 class="brand-font text-5xl md:text-7xl text-yellow-400">
                Hewabora
            </h1>

            <p class="uppercase tracking-[5px] text-gray-300 mt-4 text-sm">
                Lounge Bar • Restaurant • Night Club
            </p>

        </div>

        <!-- ICON -->
        <div class="mb-8">

            <div class="w-28 h-28 mx-auto rounded-full border border-yellow-400/40 flex items-center justify-center bg-white/5">

                <i class="fa-solid fa-screwdriver-wrench text-yellow-400 text-4xl"></i>

            </div>

        </div>

        <!-- TITLE -->
        <h2 class="text-3xl md:text-5xl font-semibold mb-6">
            Maintenance en cours
        </h2>

        <!-- TEXT -->
        <p class="text-gray-300 text-lg leading-8">
            Notre plateforme numérique est actuellement en maintenance afin de vous offrir une expérience encore plus agréable.
        </p>

        <p class="text-gray-300 text-lg leading-8 mt-6">
            Pour consulter notre menu ou effectuer une commande, veuillez demander le menu physique auprès de nos serveurs.
        </p>

        <p class="text-gray-300 text-lg leading-8 mt-6">
            Notre équipe reste à votre entière disposition pour vous accompagner.
        </p>

        <!-- INFO BOX -->
        <div class="mt-10 border border-yellow-400/20 rounded-2xl p-5 bg-white/5">

            <div class="flex items-center justify-center gap-3 text-yellow-400">

                <i class="fa-solid fa-utensils"></i>

                <span class="font-semibold">
                    Menu disponible auprès de nos serveurs
                </span>

            </div>

        </div>

        <!-- WHATSAPP -->
        <div class="mt-10">

            <a href="https://wa.me/243900060024"
               target="_blank"
               class="inline-flex items-center gap-3 bg-green-600 hover:bg-green-700 px-8 py-4 rounded-full font-semibold transition duration-300">

                <i class="fab fa-whatsapp text-xl"></i>

                Contacter un serveur

            </a>

        </div>

        <!-- CONTACT -->
        <div class="mt-12 border-t border-white/10 pt-8">

            <p class="text-yellow-400 font-semibold text-lg">
                Merci de votre compréhension
            </p>

            <p class="text-gray-400 mt-3">
                L'équipe Hewabora
            </p>

            <div class="mt-6 text-gray-300">

                <p>3ᵉ Niveau Bâtiment Hypnose</p>

                <p class="mt-2">
                    +243 900 060 024
                </p>

            </div>

        </div>

    </div>

</div>

</body>
</html>
