<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>St Valentine – Hewa Bora</title>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Cormorant+Garamond:wght@400;500;600&family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">

<style>

body {
  margin: 0;
  font-family: 'Montserrat', sans-serif;
  color: #fff;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;

  /* IMAGE DE FOND SAINT VALENTIN */
  background:
    linear-gradient(rgba(0,0,0,0.65), rgba(139,0,0,0.75)),
    url('https://images.unsplash.com/photo-1518199266791-5375a83190b7?auto=format&fit=crop&w=1600&q=80');

  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  animation: fadeIn 1.2s ease-in-out;
}

.container {
  max-width: 900px;
  width: 100%;
  padding: 40px 20px;
  text-align: center;
  animation: slideUp 1.2s ease forwards;
  backdrop-filter: blur(6px);
}

h1 {
  font-family: 'Playfair Display', serif;
  font-size: 3.3rem;
  color: #ffd700;
  margin-bottom: 10px;
  letter-spacing: 3px;
  text-transform: uppercase;
  text-shadow: 0 0 15px rgba(255,215,0,0.4);
}

h2 {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1.7rem;
  margin-bottom: 30px;
  font-weight: 500;
}

.price {
  font-family: 'Playfair Display', serif;
  display: inline-block;
  border: 2px solid #ffd700;
  padding: 18px 35px;
  border-radius: 10px;
  font-size: 2rem;
  color: #ffd700;
  margin-bottom: 40px;
  letter-spacing: 1px;
  background: rgba(0,0,0,0.4);
}

.menu {
  background: rgba(0,0,0,0.55);
  border-radius: 15px;
  padding: 35px 25px;
}

.menu-section {
  margin-bottom: 35px;
  text-align: center;
}

.menu-section h3 {
  font-family: 'Playfair Display', serif;
  color: #ffd700;
  font-size: 1.7rem;
  margin-bottom: 15px;
}

.menu-section ul {
  list-style: disc;
  list-style-position: inside;
  padding: 0;
  margin: 0 auto;
  display: inline-block;
  text-align: left;
}

.menu-section li {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1.2rem;
  margin: 8px 0;
  font-style: italic;
}

.footer {
  margin-top: 40px;
}

.reservation span {
  color: #ffd700;
  font-weight: 500;
}

.signature strong {
  color: #ffd700;
  font-family: 'Playfair Display', serif;
}

.top-button {
  display: inline-block;
  padding: 10px 22px;
  border: 2px solid #ffd700;
  border-radius: 30px;
  color: #ffd700;
  text-decoration: none;
  font-size: 0.95rem;
  transition: all 0.3s ease;
  margin-bottom: 20px;
  background: rgba(0,0,0,0.4);
}

.top-button:hover {
  background: #ffd700;
  color: #2b0000;
}

@media (max-width: 600px) {
  h1 { font-size: 2.3rem; }
  .price { font-size: 1.6rem; }
}

@keyframes fadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}

@keyframes slideUp {
  from { opacity: 0; transform: translateY(30px); }
  to { opacity: 1; transform: translateY(0); }
}

</style>
</head>

<body>
<div class="container">

<a href="{{ url('/lounge/foods') }}" class="top-button">Menu principal</a>

<h2>Hewa Bora<br/>Lounge Bar & Restaurant</h2>
<h1>St Valentine</h1>

<div class="price">111$ / Couple</div>

<div class="menu">

<div class="menu-section">
<h3>Apéritif au choix</h3>
<ul>
<li>Vin rouge</li>
<li>Vin blanc</li>
<li>Champagne</li>
</ul>
</div>

<div class="menu-section">
<h3>Entrée</h3>
<ul>
<li>Saucisse chipolatas</li>
</ul>
</div>

<div class="menu-section">
<h3>Plat principal au choix</h3>
<ul>
<li>Filet mignon au poivre vert avec sa couronne de salade</li>
<li>Cordon bleu de volaille à la sauce vermouth</li>
</ul>
</div>

<div class="menu-section">
<h3>Dessert au choix</h3>
<ul>
<li>Red Lovers Panacotta</li>
</ul>
</div>

</div>

<div class="footer">
<p>📍 3ᵉ niveau, Bâtiment Hypnose<br/>Réf : Ex La Terrasse</p>
<p class="reservation">Réservation : <span>+243 9000 60024</span></p>
<p>by <strong>Synergie UP</strong></p>
<p>© 2026 Hewa Bora Lounge Bar & Restaurant</p>
</div>

</div>
</body>
</html>
