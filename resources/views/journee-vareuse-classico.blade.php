
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#080d25">
    <meta name="description" content="Journée Vareuse Classico au Hewa Bora Lounge Bar & Restaurant. Real Madrid contre Barcelone sur écran géant.">
    <title>Journée Vareuse Classico | Hewa Bora</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&family=Cinzel:wght@500;600;700&display=swap" rel="stylesheet">

    <style>
        * { box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body {
            margin: 0;
            background: #080d25;
            color: #fff;
            font-family: 'Montserrat', sans-serif;
        }
        .gold { color: #e9c77b; }
        .gold-bg { background: #e9c77b; color: #101329; }
        .cinzel { font-family: 'Cinzel', serif; }
        .hero {
            background:
                linear-gradient(90deg, rgba(5,9,32,.94), rgba(5,9,32,.55)),
                linear-gradient(0deg, #080d25 0%, transparent 38%),
                url('/img/fond-match.jfif') center 25% / cover no-repeat;
        }
        .glass {
            background: rgba(255,255,255,.045);
            border: 1px solid rgba(233,199,123,.22);
            backdrop-filter: blur(12px);
        }
        .gold-line {
            height: 1px;
            background: linear-gradient(90deg, transparent, #e9c77b, transparent);
        }
        .reveal {
            opacity: 0;
            transform: translateY(24px);
            transition: opacity .7s ease, transform .7s ease;
        }
        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }
        .timer-box {
            background: rgba(255,255,255,.055);
            border: 1px solid rgba(233,199,123,.3);
        }
        .btn-gold {
            transition: .25s ease;
        }
        .btn-gold:hover {
            background: #f8dfa3;
            transform: translateY(-2px);
        }
        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
                scroll-behavior: auto !important;
                transition: none !important;
            }
        }
    </style>
</head>

<body>

<!-- NAVIGATION -->
<header class="absolute top-0 left-0 w-full z-20">
    <nav class="max-w-7xl mx-auto px-5 md:px-10 py-6 flex justify-between items-center">
        <a href="#accueil" class="leading-tight">
            <span class="cinzel gold text-xl md:text-2xl">HEWA BORA</span>
            <span class="block text-[9px] tracking-[.25em] text-gray-300">
                LOUNGE BAR & RESTAURANT
            </span>
        </a>

        <a href="#reservation"
           class="border border-[#e9c77b] text-[#e9c77b] px-4 py-2 text-xs md:text-sm font-bold hover:bg-[#e9c77b] hover:text-[#080d25] transition">
            RÉSERVER
        </a>
    </nav>
</header>


<!-- HERO -->
<section id="accueil" class="hero min-h-screen flex items-center relative">
    <div class="max-w-7xl mx-auto w-full px-6 md:px-12 pt-32 pb-20">
        <div class="max-w-3xl reveal text-center md:text-left mx-auto md:mx-0">

            <p class="text-sm md:text-base tracking-[.2em] text-gray-300 mb-3">
                25 OCTOBRE 2026
            </p>

            <h1 class="font-black uppercase leading-[.92] tracking-tight">
                <span class="block text-5xl sm:text-7xl md:text-8xl">
                    Journée
                </span>
                <span class="block text-5xl sm:text-7xl md:text-8xl mt-3">
                    Vareuse
                </span>
                <span class="cinzel gold block text-5xl sm:text-7xl md:text-8xl mt-3">
                    Classico
                </span>
            </h1>

            <div class="flex items-center justify-center md:justify-start gap-3 my-7">
                <span class="h-px w-12 bg-[#e9c77b]"></span>
                <p class="text-sm md:text-base font-semibold tracking-wider">
                    REAL MADRID <span class="gold mx-2">VS</span> BARCELONE
                </p>
                <span class="h-px w-12 bg-[#e9c77b] md:hidden"></span>
            </div>

            <p class="text-gray-300 max-w-lg mx-auto md:mx-0 leading-7 text-sm md:text-base">
                Enfile ta vareuse, retrouve les passionnés de football et
                vis le choc des géants dans une ambiance exceptionnelle
                au Hewa Bora Lounge Bar & Restaurant.
            </p>

            <div class="flex flex-col sm:flex-row justify-center md:justify-start gap-4 mt-9">
                <a href="#reservation"
                   class="btn-gold gold-bg px-7 py-4 text-center font-extrabold text-sm">
                    RÉSERVER MA PLACE
                </a>

                <a href="#experience"
                   class="border border-white/30 px-7 py-4 text-center font-bold text-sm hover:border-[#e9c77b] transition">
                    DÉCOUVRIR L'ÉVÉNEMENT
                </a>
            </div>
        </div>
    </div>

    <div class="absolute bottom-0 left-0 w-full gold-line"></div>
</section>



<!-- COUNTDOWN -->
<section class="max-w-5xl mx-auto px-5 py-14 md:py-20 text-center">

    <p class="gold text-xs uppercase tracking-[.35em] font-bold mb-4">
        Le compte à rebours est lancé
    </p>

    <h2 class="cinzel text-2xl md:text-4xl mb-6">
        Le Classico approche
    </h2>

    <!-- OUVERTURE DES PORTES -->
    <div class="inline-flex items-center gap-3 border border-[#e9c77b]/40 bg-[#e9c77b]/5 px-5 py-3 rounded-lg mb-9">
        <span class="gold text-xl">◷</span>
        <div class="text-left">
            <p class="text-[9px] md:text-xs text-gray-400 uppercase tracking-[.2em]">
                Rendez-vous le dimanche 25 octobre
            </p>
            <p class="gold font-extrabold text-sm md:text-base tracking-wider">
                OUVERTURE DES PORTES À 15H00
            </p>
        </div>
    </div>

    <!-- COMPTE À REBOURS -->
    <div id="countdown" class="grid grid-cols-4 gap-2 md:gap-5 max-w-2xl mx-auto">

        <div class="timer-box py-5 rounded-lg">
            <p id="days" class="gold text-3xl md:text-5xl font-black">--</p>
            <p class="text-[9px] md:text-xs tracking-widest mt-3 text-gray-400">JOURS</p>
        </div>

        <div class="timer-box py-5 rounded-lg">
            <p id="hours" class="gold text-3xl md:text-5xl font-black">--</p>
            <p class="text-[9px] md:text-xs tracking-widest mt-3 text-gray-400">HEURES</p>
        </div>

        <div class="timer-box py-5 rounded-lg">
            <p id="minutes" class="gold text-3xl md:text-5xl font-black">--</p>
            <p class="text-[9px] md:text-xs tracking-widest mt-3 text-gray-400">MINUTES</p>
        </div>

        <div class="timer-box py-5 rounded-lg">
            <p id="seconds" class="gold text-3xl md:text-5xl font-black">--</p>
            <p class="text-[9px] md:text-xs tracking-widest mt-3 text-gray-400">SECONDES</p>
        </div>

    </div>

    <p id="countdown-message" class="text-gray-400 text-sm mt-6">
        Prépare la vareuse de ton choix !
    </p>

</section>


<!-- EXPERIENCE -->
<section id="experience" class="py-20 md:py-28 bg-[#0d1431]">
    <div class="max-w-7xl mx-auto px-6 md:px-12">
        <div class="text-center max-w-2xl mx-auto mb-14 reveal">
            <p class="gold text-xs uppercase tracking-[.35em] font-bold mb-4">
                Plus qu'un match
            </p>
            <h2 class="cinzel text-3xl md:text-5xl leading-tight">
                Vis le Classico <span class="gold">autrement.</span>
            </h2>
            <p class="text-gray-400 text-sm md:text-base leading-7 mt-5">
                Du football, une ambiance conviviale et un cadre idéal
                pour partager chaque action avec les vrais passionnés.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-5">
            <article class="glass p-7 md:p-9 rounded-xl reveal">
                <span class="gold text-3xl">01</span>
                <h3 class="font-extrabold text-lg mt-6 mb-3">ÉCRAN GÉANT</h3>
                <p class="text-gray-400 text-sm leading-7">
                    Suis les moments forts de la rencontre grâce à la
                    projection du match sur écran géant.
                </p>
            </article>

            <article class="glass p-7 md:p-9 rounded-xl reveal">
                <span class="gold text-3xl">02</span>
                <h3 class="font-extrabold text-lg mt-6 mb-3">TA VAREUSE, TON CLUB</h3>
                <p class="text-gray-400 text-sm leading-7">
                    Madridista ou Blaugrana, porte les couleurs de ton équipe
                    et viens défendre ton club dans la bonne humeur.
                </p>
            </article>

            <article class="glass p-7 md:p-9 rounded-xl reveal">
                <span class="gold text-3xl">03</span>
                <h3 class="font-extrabold text-lg mt-6 mb-3">AMBIANCE CLASSICO</h3>
                <p class="text-gray-400 text-sm leading-7">
                    Partage la passion du football dans le cadre du
                    Hewa Bora Lounge Bar & Restaurant.
                </p>
            </article>
        </div>
    </div>
</section>

<!-- ESPACES -->
<section class="py-20 md:py-24">
    <div class="max-w-6xl mx-auto px-6 md:px-12">
        <div class="text-center mb-12 reveal">
            <p class="gold text-xs uppercase tracking-[.35em] font-bold mb-4">
                Ton expérience
            </p>
            <h2 class="cinzel text-3xl md:text-4xl">
                Choisis ton <span class="gold">espace.</span>
            </h2>
        </div>

        <div class="grid md:grid-cols-2 gap-6">
            <div class="relative overflow-hidden rounded-xl border border-[#e9c77b]/30 p-8 md:p-12 reveal">
                <p class="gold text-xs tracking-[.3em] font-bold">EXPÉRIENCE PRIVILÉGIÉE</p>
                <h3 class="cinzel text-3xl mt-5 mb-4">VIP Room</h3>
                <p class="text-gray-400 text-sm leading-7">
                    Un espace pour profiter du Classico dans un cadre plus intime.
                </p>
                <a href="#reservation" class="inline-block gold mt-8 text-sm font-bold">
                    Demander une réservation →
                </a>
            </div>

            <div class="relative overflow-hidden rounded-xl border border-[#e9c77b]/30 p-8 md:p-12 reveal">
                <p class="gold text-xs tracking-[.3em] font-bold">MOMENTS DE CONVIVIALITÉ</p>
                <h3 class="cinzel text-3xl mt-5 mb-4">La Terrasse</h3>
                <p class="text-gray-400 text-sm leading-7">
                    Retrouve tes amis, porte tes couleurs et profite de l'ambiance.
                </p>
                <a href="#reservation" class="inline-block gold mt-8 text-sm font-bold">
                    Demander une réservation →
                </a>
            </div>
        </div>
    </div>
</section>

<!-- RESERVATION -->
<section id="reservation" class="bg-[#0d1431] py-20 md:py-28">
    <div class="max-w-4xl mx-auto px-6 text-center reveal">
        <p class="gold text-xs uppercase tracking-[.35em] font-bold mb-5">
            25 octobre 2026
        </p>

        <h2 class="cinzel text-3xl md:text-5xl leading-tight">
            Le rendez-vous est pris.
        </h2>

        <p class="text-gray-400 text-sm md:text-base max-w-xl mx-auto mt-6 leading-7">
            Ne manque pas la Journée Vareuse Classico au Hewa Bora.
            Contacte notre équipe pour les informations et les réservations.
        </p>

        <div class="gold-line max-w-xs mx-auto my-9"></div>

        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="https://wa.me/243992167274?text=Bonjour%20Hewa%20Bora%2C%20je%20souhaite%20des%20informations%20sur%20la%20Journ%C3%A9e%20Vareuse%20Classico%20du%2025%20octobre%202026."
               target="_blank" rel="noopener noreferrer"
               class="btn-gold gold-bg px-7 py-4 font-extrabold text-sm">
                RÉSERVER SUR WHATSAPP
            </a>

            <a href="tel:+243813333051"
               class="border border-white/30 px-7 py-4 font-bold text-sm hover:border-[#e9c77b] transition">
                APPELER LE 813 333 051
            </a>
        </div>

        <p class="text-gray-500 text-sm mt-7">
            +243 992 167 274 &nbsp;·&nbsp; +243 813 333 051
        </p>
    </div>
</section>

<!-- FOOTER -->
<footer class="py-8 px-5 border-t border-white/10 text-center">
    <p class="cinzel gold text-lg">HEWA BORA</p>
    <p class="text-gray-500 text-xs mt-2">
        Lounge Bar & Restaurant · Batiment Hypnose · 3ème Niveau
    </p>
    <p class="text-gray-600 text-xs mt-5">
        © {{ date('Y') }} Synergie UP.
        Tous droits réservés.
    </p>

</footer>

<script>
    // Date indicative : 25 octobre 2026 à 15h, heure de Lubumbashi.
    // Modifie l'heure si le programme officiel est différent.
    const eventDate = new Date('2026-10-25T15:00:00+02:00').getTime();

    const countdownTimer = setInterval(() => {
        const now = Date.now();
        const distance = eventDate - now;

        if (distance <= 0) {
            clearInterval(countdownTimer);

            document.getElementById('countdown').classList.add('hidden');
            document.getElementById('countdown-message').textContent =
                distance < -86400000
                    ? 'Merci d’avoir partagé cet événement avec nous.'
                    : 'Le rendez-vous est arrivé !';

            return;
        }

        document.getElementById('days').textContent =
            Math.floor(distance / 86400000);

        document.getElementById('hours').textContent =
            Math.floor((distance % 86400000) / 3600000);

        document.getElementById('minutes').textContent =
            Math.floor((distance % 3600000) / 60000);

        document.getElementById('seconds').textContent =
            Math.floor((distance % 60000) / 1000);
    }, 1000);

    // Apparition progressive des sections
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12 });

    document.querySelectorAll('.reveal').forEach(element => {
        observer.observe(element);
    });
</script>

</body>
</html>
