<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ajouter un Produit | Hewa Bora</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* ---- Arrière-plan doré/luxueux ---- */
    body::before {
      content: "";
      position: fixed;
      inset: 0;
      background-image: url('https://images.unsplash.com/photo-1600891964599-f61ba0e24092?auto=format&fit=crop&w=1920&q=80');
      background-size: cover;
      background-position: center;
      filter: brightness(0.45);
      z-index: -2;
    }

    body::after {
      content: "";
      position: fixed;
      inset: 0;
      background: linear-gradient(to bottom right, rgba(0,0,0,0.75), rgba(255,215,0,0.15));
      z-index: -1;
    }

    /* ---- Animation d’apparition ---- */
    @keyframes fadeIn {
      from { opacity: 0; transform: scale(0.9); }
      to { opacity: 1; transform: scale(1); }
    }

    .fade-in {
      animation: fadeIn 1s ease-out forwards;
    }
  </style>
</head>

<body class="flex flex-col items-center justify-center min-h-screen text-white font-sans relative">

  <div class="fade-in bg-white/10 backdrop-blur-md border border-yellow-500/20 rounded-2xl shadow-2xl p-10 w-full max-w-3xl">

    <!-- Logo -->
    <div class="text-center mb-6">
      <img src="{{ asset('img/Hewa_Bora_Logo.png') }}" alt="Hewa Bora Logo"
           class="w-24 h-24 mx-auto mb-2 rounded-full shadow-lg border-4 border-yellow-500/70">
      <h2 class="text-lg tracking-widest text-yellow-400 font-semibold">Hewa Bora</h2>
    </div>

    <!-- Titre + Bouton retour -->
    <div class="flex justify-center items-center mb-8 space-x-6 w-full">
    <h1 class="text-3xl md:text-4xl font-bold bg-gradient-to-r from-yellow-400 via-yellow-500 to-white bg-clip-text text-transparent drop-shadow-lg text-center">
        Ajouter un Produit
    </h1>
    <a href="{{ route('dashboard.home') }}"
        class="bg-yellow-500/80 hover:bg-yellow-500 text-black font-semibold px-4 py-2 rounded-lg shadow-md transition">
        ⬅ Retour
    </a>
    </div>


    <!-- Formulaire centré -->
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data"
          class="flex flex-col items-center space-y-6 w-full">
      @csrf

      <!-- Nom -->
      <div class="w-3/4">
        <label for="name" class="block text-yellow-400 font-semibold mb-1 text-center">Nom du produit</label>
        <input type="text" name="name" id="name"
               class="w-full rounded-lg border-gray-300 focus:ring-yellow-500 focus:border-yellow-500 bg-white/20 text-white placeholder-gray-300 p-2 text-center"
               placeholder="Ex: Mojito Spécial" required>
      </div>

      <!-- Prix -->
      <div class="w-3/4">
        <label for="price" class="block text-yellow-400 font-semibold mb-1 text-center">Prix ($)</label>
        <input type="number" name="price" id="price"
               class="w-full rounded-lg border-gray-300 focus:ring-yellow-500 focus:border-yellow-500 bg-white/20 text-white placeholder-gray-300 p-2 text-center"
               placeholder="Ex: 12" required>
      </div>

      <!-- Image -->
      <div class="w-3/4">
        <label for="image" class="block text-yellow-400 font-semibold mb-1 text-center">Image</label>
        <input type="file" name="image" id="image"
               class="w-full text-white bg-white/10 border border-gray-300 rounded-lg p-2 focus:ring-yellow-500 focus:border-yellow-500">
      </div>

      <!-- Zone -->
      <div class="w-3/4">
        <label for="area" class="block text-yellow-400 font-semibold mb-1 text-center">Zone</label>
        <select name="area" id="area"
                class="w-full bg-white/20 text-white border-gray-300 rounded-lg p-2 text-center focus:ring-yellow-500 focus:border-yellow-500" required>
          <option value="">-- Choisir une zone --</option>
          <option value="lounge">Lounge Bar</option>
          <option value="night">Night Club</option>
        </select>
      </div>

      <!-- Catégorie -->
      <div class="w-3/4">
        <label for="category" class="block text-yellow-400 font-semibold mb-1 text-center">Catégorie</label>
        <select name="category" id="category"
                class="w-full bg-white/20 text-white border-gray-300 rounded-lg p-2 text-center focus:ring-yellow-500 focus:border-yellow-500" required>
          <option value="">-- Choisir une catégorie --</option>
          <option value="drink">Drink</option>
          <option value="food">Food</option>
        </select>
      </div>

      <!-- Type de plat -->
      <div class="w-3/4 text-center">
        <label class="block text-yellow-400 font-semibold mb-2">Dish</label>
        <div class="flex flex-wrap justify-center gap-4" id="dish-options"></div>
      </div>

      <!-- Bouton -->
      <div class="text-center mt-6">
        <button type="submit"
                class="bg-gradient-to-r from-yellow-500 to-yellow-600 text-black font-semibold px-6 py-2 rounded-lg shadow-lg hover:from-yellow-400 hover:to-yellow-500 transition">
          Enregistrer
        </button>
      </div>
    </form>
  </div>

  <!-- Script dynamique -->
  <script>
    const categorySelect = document.getElementById('category');
    const dishContainer = document.getElementById('dish-options');

    const dishes = {
      drink: ['Cocktails', 'Mocktails', 'Juices', 'Smoothies'],
      food: ['Salades', 'Entrées', 'Soups', 'BBQ', 'Hamburgers', 'Pizza']
    };

    function updateDishOptions() {
      const selectedCategory = categorySelect.value;
      dishContainer.innerHTML = '';

      if (selectedCategory && dishes[selectedCategory]) {
        dishes[selectedCategory].forEach(dish => {
          const label = document.createElement('label');
          label.classList.add('inline-flex', 'items-center', 'gap-2', 'bg-white/10', 'px-3', 'py-1.5', 'rounded-lg', 'cursor-pointer', 'hover:bg-white/20', 'transition');

          const input = document.createElement('input');
          input.type = 'radio';
          input.name = 'dish_type';
          input.value = dish;
          input.classList.add('text-yellow-500', 'focus:ring-yellow-500');
          input.required = true;

          const span = document.createElement('span');
          span.classList.add('text-white');
          span.textContent = dish;

          label.appendChild(input);
          label.appendChild(span);
          dishContainer.appendChild(label);
        });
      }
    }

    categorySelect.addEventListener('change', updateDishOptions);
  </script>

</body>
</html>
