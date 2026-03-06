<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Menu Special - Journée de la Femme</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src="https://cdn.tailwindcss.com"></script>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

<style>

body{
font-family:'Poppins',sans-serif;
}

.brand{
font-family:'Playfair Display',serif;
}

/* Animation entrée */

.fade{
opacity:0;
transform:translateY(30px);
animation:fade 1s forwards;
}

@keyframes fade{
to{
opacity:1;
transform:translateY(0);
}
}

/* effet or */

.gold{
background:linear-gradient(45deg,#e7c35f,#f7e7a1,#c9a227);
-webkit-background-clip:text;
-webkit-text-fill-color:transparent;
}

/* hover plats */

.menu-item:hover{
transform:translateX(8px);
color:#facc15;
transition:0.3s;
}

/* badges prix */

.price-badge{
position:absolute;
right:-60px;
border-radius:16px;
padding:16px 22px;
font-weight:bold;
box-shadow:0 15px 35px rgba(0,0,0,0.5);
}

</style>

</head>

<body class="text-white">

<!-- background -->

<div class="fixed inset-0 -z-10 bg-cover bg-center"
style="background-image:url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=2000&q=80');">
</div>

<div class="fixed inset-0 bg-black/80 -z-10"></div>


<div class="min-h-screen flex items-center justify-center px-6 py-14">

<div class="relative w-full max-w-6xl backdrop-blur-xl bg-white/10 border border-white/20 rounded-3xl shadow-2xl p-12">


<!-- HEADER -->

<div class="text-center mb-12 fade">

<h1 class="brand text-5xl gold">
Hewa Bora
</h1>

<p class="tracking-widest text-sm text-gray-300">
LOUNGE BAR & RESTAURANT
</p>

<a href="{{ url('/lounge/foods') }}"
class="inline-block mt-6 px-6 py-2 border border-yellow-400 rounded-full hover:bg-yellow-400 hover:text-black transition">
Menu principal
</a>

</div>


<!-- TITLE -->

<div class="text-center mb-14 fade">

<h2 class="brand text-5xl">
Menu <span class="gold">Special</span>
</h2>

<p class="text-2xl mt-2 tracking-widest">
JOURNÉE DE LA FEMME
</p>

</div>



<!-- GRID MENU -->

<div class="grid md:grid-cols-2 gap-12 text-lg">


<!-- COL 1 -->

<div class="space-y-10 fade">

<div>

<h3 class="text-yellow-400 text-xl mb-3 font-semibold">
ENTRÉE
</h3>

<p class="menu-item">• Soupe de poulet au maïs</p>

</div>


<div>

<h3 class="text-yellow-400 text-xl mb-3 font-semibold">
PLAT PRINCIPAL
</h3>

<ul class="space-y-2">
<li class="menu-item">• Kambambale</li>
<li class="menu-item">• Poulet à la congolaise</li>
<li class="menu-item">• Tilapia à la congolaise</li>
<li class="menu-item">• Chèvre sauce congolaise</li>
<li class="menu-item">• Bœuf sauce tomate</li>
<li class="menu-item">• Poulet aux arachides</li>
</ul>

</div>


<div>

<h3 class="text-yellow-400 text-xl mb-3 font-semibold">
SALADE
</h3>

<p class="menu-item">• Salade Coleslaw</p>
<p class="menu-item">• Salade verte</p>

</div>

</div>



<!-- COL 2 -->

<div class="space-y-10 fade">

<div>

<h3 class="text-yellow-400 text-xl mb-3 font-semibold">
ACCOMPAGNEMENT
</h3>

<ul class="space-y-2">
<li class="menu-item">• Fufu</li>
<li class="menu-item">• Riz tanzanien</li>
<li class="menu-item">• Plantain banane</li>
<li class="menu-item">• Plantain vapeur</li>
<li class="menu-item">• Kwanga</li>
<li class="menu-item">• Pommes sautées</li>
</ul>

</div>


<div>

<h3 class="text-yellow-400 text-xl mb-3 font-semibold">
LÉGUMES
</h3>

<p class="menu-item">• Lengalenga</p>
<p class="menu-item">• Choux vert</p>
<p class="menu-item">• Sombe</p>
<p class="menu-item">• Aubergines locales</p>

</div>


<div>

<h3 class="text-yellow-400 text-xl mb-3 font-semibold">
DESSERT
</h3>

<p class="menu-item">• Salade de fruits</p>
<p class="menu-item">• Gâteau maison</p>

</div>

</div>

</div>



<!-- BADGES PRIX -->

<div class="price-badge bg-yellow-400 text-black top-48">
Adulte<br>
<span class="text-2xl">25$</span>
</div>

<div class="price-badge bg-yellow-400 text-black top-80">
Enfant<br>
<span class="text-2xl">15$</span>
</div>

<div class="price-badge bg-red-600 text-white top-[420px]">
Couple<br>
<span class="text-2xl">40$</span>
</div>



<!-- FOOTER -->

<div class="text-center mt-16 border-t border-white/20 pt-8">

<p class="text-lg">
Heure : <span class="text-yellow-400 font-semibold">12h - 18h</span>
</p>

<p class="mt-3">
Réservation
</p>

<p class="text-yellow-400 text-2xl font-semibold">
+243 9000 60024
</p>

<p class="mt-6 text-sm">
3ᵉ NIVEAU BÂTIMENT HYPNOSE
</p>


<a href="{{ url('/lounge/foods') }}"
class="inline-block mt-8 px-10 py-3 bg-yellow-400 text-black rounded-full hover:scale-105 transition">
Voir le menu complet
</a>


<div class="mt-6 text-xs text-gray-500">
© {{ date('Y') }} Synergie UP. Tous droits réservés.
</div>

</div>

</div>

</div>

</body>
</html>
