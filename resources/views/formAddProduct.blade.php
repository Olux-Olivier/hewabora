<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un produit</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 py-10">

<div class="w-full max-w-3xl mx-auto bg-white shadow-lg rounded-xl p-8">
    <h1 class="text-3xl font-bold text-center text-red-700 mb-8">Ajouter un Produit</h1>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="w-full space-y-4">
        @csrf

        <!-- Nom du produit -->
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-semibold mb-1">Nom du produit</label>
            <input type="text" name="name" id="name" class="w-2/3 border-gray-300 rounded-lg shadow-sm focus:ring-red-500 focus:border-red-500" required>
        </div>

        <!-- Prix -->
        <div class="mb-4">
            <label for="price" class="block text-gray-700 font-semibold mb-1">Prix ($)</label>
            <input type="number" name="price" id="price" class="w-1/3 border-gray-300 rounded-lg shadow-sm focus:ring-red-500 focus:border-red-500" required>
        </div>

        <!-- Image -->
        <div class="mb-4">
            <label for="image" class="block text-gray-700 font-semibold mb-1">Image</label>
            <input type="file" name="image" id="image" class="w-2/3 border-gray-300 rounded-lg shadow-sm focus:ring-red-500 focus:border-red-500">
        </div>

        <!-- Zone -->
        <div class="mb-4">
            <label for="area" class="block text-gray-700 font-semibold mb-1">Zone</label>
            <select name="area" id="area" class="w-1/3 border-gray-300 rounded-lg shadow-sm focus:ring-red-500 focus:border-red-500" required>
                <option value="">-- Choisir une zone --</option>
                <option value="lounge">Lounge Bar</option>
                <option value="night">Night Club</option>
            </select>
        </div>

        <!-- Catégorie -->
        <div class="mb-4">
            <label for="category" class="block text-gray-700 font-semibold mb-1">Catégorie</label>
            <select name="category" id="category" class="w-1/3 border-gray-300 rounded-lg shadow-sm focus:ring-red-500 focus:border-red-500" required>
                <option value="">-- Choisir une catégorie --</option>
                <option value="drink">Drink</option>
                <option value="food">Food</option>
            </select>
        </div>

        <!-- Type de plat dish -->
        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-1">Dish</label>
            <div class="flex flex-wrap gap-4" id="dish-options">
                <!-- Options dynamiques seront ici -->
            </div>
        </div>

        <!-- Bouton de soumission -->
        <div class="text-center">
            <button type="submit" class="bg-red-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-red-700 transition">
                Enregistrer
            </button>
        </div>
    </form>
</div>

<script>
    const categorySelect = document.getElementById('category');
    const dishContainer = document.getElementById('dish-options');

    const dishes = {
        drink: ['Cocktails', 'Mocktails', 'Juices', 'Smoothies'],
        food: ['Salades', 'Entrées', 'Soups', 'BBQ', 'Hamburgers', 'Pizza','Salades', 'Entrées', 'Soups', 'BBQ', 'Hamburgers', 'Pizza']
    };

    function updateDishOptions() {
        const selectedCategory = categorySelect.value;
        dishContainer.innerHTML = '';

        if(selectedCategory && dishes[selectedCategory]){
            dishes[selectedCategory].forEach(dish => {
                const label = document.createElement('label');
                label.classList.add('inline-flex', 'items-center', 'gap-1');

                const input = document.createElement('input');
                input.type = 'radio';
                input.name = 'dish_type';
                input.value = dish;
                input.classList.add('text-red-600', 'focus:ring-red-500');
                input.required = true;

                const span = document.createElement('span');
                span.classList.add('text-gray-700');
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
