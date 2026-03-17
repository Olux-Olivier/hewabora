<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>HB Club - Lubumbashi Night Experience</title>

<script src="https://cdn.tailwindcss.com"></script>

<style>

body{
    background:#000;
    color:white;
    font-family:Arial, Helvetica, sans-serif;
}

/* overlay */
.overlay{
    background:rgba(0,0,0,0.85);
}

/* animation chargement */
.page-load{
    animation:fadeUp 1.4s ease-out;
}

@keyframes fadeUp{
    from{
        opacity:0;
        transform:translateY(40px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

/* titre neon */
.title{
    font-size:60px;
    color:red;
    font-weight:bold;
    text-shadow:0 0 15px red;
    animation:neon 2s infinite alternate;
}

@keyframes neon{
    from{
        text-shadow:0 0 10px red,0 0 20px red;
    }
    to{
        text-shadow:0 0 30px red,0 0 60px red;
    }
}

/* badge open */
.open-badge{
    background:red;
    padding:6px 18px;
    border-radius:20px;
    font-weight:bold;
    letter-spacing:2px;
    animation:pulse 1.5s infinite;
}

@keyframes pulse{
    0%{opacity:0.7;}
    50%{opacity:1;}
    100%{opacity:0.7;}
}

/* cartes soirées */
.event-card{
    background:#111;
    border:1px solid red;
    border-radius:12px;
    padding:22px;
    transition:0.3s;
}

.event-card:hover{
    transform:translateY(-6px);
    box-shadow:0 0 20px red;
}

/* carte horaires */
.schedule-card{
    background:#0f0f0f;
    border:1px solid red;
    border-radius:14px;
    padding:24px;
    margin-bottom:40px;
    box-shadow:0 0 15px rgba(255,0,0,0.3);
}

/* responsive */
@media(max-width:768px){

.title{
    font-size:42px;
}

}

</style>

</head>

<body>

<div class="overlay min-h-screen flex items-center justify-center py-12 px-6">

<div class="text-center page-load max-w-3xl">

<h2 class="text-gray-400 tracking-widest mb-2">
HB CLUB
</h2>

<h1 class="title mb-4">
LUBUMBASHI NIGHT EXPERIENCE
</h1>

<div class="flex justify-center mb-4">
<span class="open-badge">
OPEN NOW 🔥
</span>
</div>

<p class="text-gray-300 mb-10">
DJ • Lounge • Cocktails • Dancefloor
</p>

<!-- boutons -->

<div class="flex flex-wrap justify-center gap-4 mb-12">

<a href="{{ url('/lounge/foods') }}"
class="px-8 py-3 border-2 border-yellow-400 text-yellow-400 rounded-full
hover:bg-yellow-400 hover:text-black transition shadow-lg">

Voir le Menu

</a>

<a href="https://wa.me/243990867502"
class="px-8 py-3 border-2 border-green-500 text-green-400 rounded-full
hover:bg-green-500 hover:text-black transition shadow-lg">

Réserver une table

</a>

</div>

<!-- horaires -->

<div class="schedule-card">

<h2 class="text-2xl font-bold text-red-400 mb-6">
⏰ Horaires & Soirées
</h2>

<div class="grid md:grid-cols-3 gap-6">

<div>
<h3 class="text-red-400 font-bold text-lg">
THURSDAY
</h3>
<p class="text-gray-300">
Lounge Night<br>
Cocktails • Chill vibes
</p>
</div>

<div>
<h3 class="text-red-400 font-bold text-lg">
FRIDAY
</h3>
<p class="text-gray-300">
Afro Night<br>
Afrobeats • Amapiano
</p>
</div>

<div>
<h3 class="text-red-400 font-bold text-lg">
SATURDAY
</h3>
<p class="text-gray-300">
Urban Party<br>
Hip Hop • Dancehall
</p>
</div>

</div>

<p class="text-yellow-400 font-bold text-xl mt-6">
Ouverture à partir de 21H
</p>

</div>

<!-- adresse -->

<p class="text-gray-400 mb-2">
3ᵉ Niveau Bâtiment Hypnose
</p>

<p class="text-gray-400 mb-2">
826 Av Mama Yemo, Lubumbashi
</p>

<p class="text-gray-500 mb-6">
0990867502 • 0992499384
</p>

<p class="text-gray-600 text-sm">
© {{ date('Y') }} Synergie UP. Tous droits réservés.
</p>

</div>

</div>

</body>
</html>
