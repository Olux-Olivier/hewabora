<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>St Valentine – Hewa Bora</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, sans-serif;
      background: radial-gradient(circle at top, #8b0000, #2b0000);
      color: #fff;
      animation: fadeIn 1.2s ease-in-out;
      display: flex;
      justify-content: center;
    }
    .container {
      max-width: 900px;
      margin: auto;
      padding: 40px 20px;
      text-align: center;
      animation: slideUp 1.2s ease forwards;
    }

    h1 {
      font-size: 3rem;
      color: #ffd700;
      margin-bottom: 10px;
      letter-spacing: 2px;
    }
    h2 {
      font-size: 1.4rem;
      margin-bottom: 30px;
      font-weight: 300;
    }
    .price {
      display: inline-block;
      border: 2px solid #ffd700;
      padding: 15px 30px;
      border-radius: 8px;
      font-size: 1.8rem;
      color: #ffd700;
      margin-bottom: 40px;
    }
    .menu {
      background: rgba(0,0,0,0.45);
      border-radius: 12px;
      padding: 30px 20px;
    }
    .menu-section {
      margin-bottom: 30px;
      animation: fadeSection 0.8s ease forwards;
    }
    .menu-section h3 {
      color: #ffd700;
      font-size: 1.6rem;
      margin-bottom: 10px;
    }
    .menu-section ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    .menu-section li {
      font-size: 1.05rem;
      margin: 6px 0;
    }
    .footer {
      margin-top: 40px;
      font-size: 0.95rem;
      opacity: 0.9;
    }
    .reservation {
      margin-top: 20px;
      font-size: 1.1rem;
    }
    .reservation span {
      color: #ffd700;
      font-weight: bold;
    }
    @media (max-width: 600px) {
      h1 { font-size: 2.2rem; }
      .price { font-size: 1.4rem; }
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
    }
    .top-button:hover {
      background: #ffd700;
      color: #2b0000;
    }
  @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }
    @keyframes slideUp {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .menu-section:nth-child(1) { animation-delay: 0.2s; }
    .menu-section:nth-child(2) { animation-delay: 0.4s; }
    .menu-section:nth-child(3) { animation-delay: 0.6s; }
    .menu-section:nth-child(4) { animation-delay: 0.8s; }
    @keyframes fadeSection {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
  <div class="container">
    <div style="margin-bottom:20px;">
      <a href="{{ url('/lounge/foods') }}" class="top-button">Menu principal / Autre menu</a>
    </div>
    <h2>Hewa Bora<br/>Lounge Bar & Restaurant</h2>
    <h1>ST VALENTINE</h1>
    <div class="price">111$ / Couple</div>

    <div class="menu">
      <div class="menu-section">
        <h3>Apéritif au choix</h3>
        <ul>
          <li>Vin rouge ou vin blanc</li>
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
      <div class="reservation">
        Réservation : <span>+243 9000 60024</span>
      </div>
    </div>
  </div>
</body>
</html>
