{{-- resources/views/socials.blade.php --}}

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hewabora Lounge Bar & Restaurant</title>

    {{-- Tailwind CSS --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Google Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

        body {
            font-family: 'Poppins', sans-serif;

            background:
                linear-gradient(rgba(0,0,0,0.78), rgba(0,0,0,0.82)),
                url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=2070&auto=format&fit=crop');

            background-size: cover;
            background-position: center;
            background-attachment: fixed;

            overflow-x: hidden;
        }

        /* Glow jaune */
        .gold-text {
            color: #facc15;
            text-shadow: 0 0 18px rgba(250, 204, 21, 0.35);
        }

        /* Cards glassmorphism */
        .glass {
            background: rgba(255,255,255,0.06);
            backdrop-filter: blur(14px);

            border: 1px solid rgba(250, 204, 21, 0.12);

            box-shadow:
                0 8px 32px rgba(0,0,0,0.35),
                0 0 20px rgba(250, 204, 21, 0.05);

            transition: all 0.4s ease;
        }

        .glass:hover {

            transform: translateY(-5px);

            border-color: rgba(250, 204, 21, 0.35);

            box-shadow:
                0 12px 40px rgba(0,0,0,0.45),
                0 0 25px rgba(250, 204, 21, 0.15);
        }

        /* Boutons réseaux */
        .social-btn {
            background: rgba(255,255,255,0.08);
            border: 1px solid rgba(255,255,255,0.08);

            transition:
                transform 0.3s ease,
                background 0.3s ease,
                border 0.3s ease,
                box-shadow 0.3s ease;
        }

        .social-btn:hover {

            background: rgba(250, 204, 21, 0.12);

            border-color: rgba(250, 204, 21, 0.35);

            transform: translateY(-3px);

            box-shadow:
                0 10px 25px rgba(0,0,0,0.25),
                0 0 18px rgba(250, 204, 21, 0.15);
        }

        /* Animation apparition */
        .fade-up {
            opacity: 0;
            transform: translateY(40px);
            animation: fadeUp 1s ease forwards;
        }

        .delay-1 {
            animation-delay: 0.2s;
        }

        .delay-2 {
            animation-delay: 0.4s;
        }

        .delay-3 {
            animation-delay: 0.6s;
        }

        .delay-4 {
            animation-delay: 0.8s;
        }

        @keyframes fadeUp {

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Bouton menu premium */
        .menu-btn {

            position: relative;
            overflow: hidden;
        }

        .menu-btn::before {

            content: '';

            position: absolute;

            top: 0;
            left: -120%;

            width: 100%;
            height: 100%;

            background: linear-gradient(
                120deg,
                transparent,
                rgba(255,255,255,0.25),
                transparent
            );

            transition: 0.7s;
        }

        .menu-btn:hover::before {
            left: 120%;
        }

    </style>
</head>

<body class="min-h-screen flex items-center justify-center px-4 py-10">

    <div class="w-full max-w-4xl">

        {{-- HEADER --}}
        <div class="text-center mb-10 fade-up">

            <h1 class="text-5xl md:text-6xl font-bold text-white tracking-wide">
                Hewa<span class="gold-text">bora</span>
            </h1>

            <p class="text-gray-300 mt-4 text-lg tracking-[3px] uppercase">
                Lounge Bar • Restaurant • Night Club
            </p>

            {{-- Bouton Menu --}}
            <div class="mt-8 fade-up delay-1">

                <a href="/offres"

                   class="menu-btn inline-flex items-center gap-3 px-8 py-4 rounded-full

                          bg-yellow-400/10
                          backdrop-blur-md

                          border border-yellow-400/20

                          text-yellow-300
                          font-medium
                          tracking-wide

                          hover:bg-yellow-400/20
                          hover:scale-105

                          transition duration-300

                          shadow-2xl">

                    <span>
                        Nos Menus
                    </span>

                    <span class="text-xl">
                        →
                    </span>

                </a>

            </div>

        </div>

        {{-- CARDS --}}
        <div class="grid md:grid-cols-2 gap-6">

            {{-- Lounge Bar --}}
            <div class="glass rounded-3xl p-8 fade-up delay-2">

                <h2 class="text-2xl font-semibold text-white mb-6">
                    Lounge Bar & Restaurant
                </h2>

                <div class="space-y-4">

                    {{-- Instagram --}}
                    <a href="https://www.instagram.com/hewaboraloungebar/?hl=fr"
                       target="_blank"

                       class="social-btn flex items-center justify-between
                              text-white px-5 py-4 rounded-2xl">

                        <span class="font-medium">
                            Instagram
                        </span>

                        <span class="text-xl text-yellow-300">
                            →
                        </span>

                    </a>

                    {{-- Facebook --}}
                    <a href="https://www.facebook.com/profile.php?id=61584432085080"
                       target="_blank"

                       class="social-btn flex items-center justify-between
                              text-white px-5 py-4 rounded-2xl">

                        <span class="font-medium">
                            Facebook
                        </span>

                        <span class="text-xl text-yellow-300">
                            →
                        </span>

                    </a>

                    {{-- TikTok --}}
                    <a href="https://www.tiktok.com/@hewaboraloungebar"
                       target="_blank"

                       class="social-btn flex items-center justify-between
                              text-white px-5 py-4 rounded-2xl">

                        <span class="font-medium">
                            TikTok
                        </span>

                        <span class="text-xl text-yellow-300">
                            →
                        </span>

                    </a>

                </div>

            </div>

            {{-- Night Club --}}
            <div class="glass rounded-3xl p-8 fade-up delay-3">

                <h2 class="text-2xl font-semibold text-white mb-6">
                    HB Night Club
                </h2>

                <div class="space-y-4">

                    {{-- Instagram --}}
                    <a href="https://www.instagram.com/hb_nightclub/?hl=fr"
                       target="_blank"

                       class="social-btn flex items-center justify-between
                              text-white px-5 py-4 rounded-2xl">

                        <span class="font-medium">
                            Instagram
                        </span>

                        <span class="text-xl text-yellow-300">
                            →
                        </span>

                    </a>

                    {{-- TikTok --}}
                    <a href="https://www.tiktok.com/search?q=hb%20night&t=1778265871258"
                       target="_blank"

                       class="social-btn flex items-center justify-between
                              text-white px-5 py-4 rounded-2xl">

                        <span class="font-medium">
                            TikTok
                        </span>

                        <span class="text-xl text-yellow-300">
                            →
                        </span>

                    </a>

                    {{-- Google reviews --}}
                    <a href="https://www.google.com/search?sca_esv=edd980de39096df0&sxsrf=ANbL-n59RG45Aj987WY-pAXHysrJbTl9Fg:1778265335604&q=hewa+bora+lounge+bar+lubumbashi&si=AL3DRZEsmMGCryMMFSHJ3StBhOdZ2-6yYkXd_doETEE1OR-qOV5sZdiyFQ2PpBKsACb01f980YBZzPvN027VPj7-IVxHN3b2IQ6AdiWaJ8snqxg7KPumKtbqQliADABUPO5bZ09CHVmA04n250L4abaJizdCg_-siA%3D%3D&sa=X&ved=2ahUKEwi_qpTNqqqUAxWoXEEAHZ7WIuIQrrQLegQIHRAA&biw=1536&bih=776&dpr=1.25"
                       target="_blank"

                       class="social-btn flex items-center justify-between
                              text-white px-5 py-4 rounded-2xl">

                        <span class="font-medium">
                            Google Reviews
                        </span>

                        <span class="text-xl text-yellow-300">
                            →
                        </span>

                    </a>

                </div>

            </div>

        </div>

        {{-- Footer --}}
        <div class="text-center mt-10 text-gray-400 text-sm fade-up delay-4">

            © {{ date('Y') }}
            Hewabora Lounge Bar & Restaurant —
            Tous droits réservés

        </div>

    </div>

</body>
</html>
