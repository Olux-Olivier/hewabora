<table class="w-full text-left text-white border-collapse">
    <thead class="border-b border-white/20">
        <tr>
            <th class="py-3 px-2">Nom</th>
            <th class="py-3 px-2">Prix ($)</th>
            <th class="py-3 px-2">Catégorie</th>
            <th class="py-3 px-2">Image</th>
            <th class="py-3 px-2">Zone</th>
            <th class="py-3 px-2">Type de plat</th>
            <th class="py-3 px-2">Actions</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($products as $food)
            <tr class="hover:bg-white/10 transition">
                <!-- Nom -->
                <td class="py-3 px-2">{{ $food[0]->name }}</td>

                <!-- Prix -->
                <td class="py-3 px-2">{{ $food[0]->price }}</td>

                <!-- Catégorie -->
                <td class="py-3 px-2">{{ $food[0]->category }}</td>

                <!-- Image -->
                <td class="py-3 px-2">
                    @if($food[0]->image)
                        <img src="{{ asset('storage/' . $food[0]->image) }}" alt="{{ $food[0]->name }}" class="w-16 h-16 object-cover rounded-lg">
                    @else
                        <span class="text-gray-400">Pas d'image</span>
                    @endif
                </td>

                <!-- Zone -->
                <td class="py-3 px-2">{{ $food[0]->area }}</td>

                <!-- Type de plat -->
                <td class="py-3 px-2">{{ $food[0]->dish_type ?? '-' }}</td>

                <!-- Actions -->
                <td class="flex gap-2 py-3 px-2">
                    <!-- Modifier -->
                    <a class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded-lg text-sm mr-2" 
                       href="{{ route('products.edit', $food[0]->id) }}">
                       Modifier
                    </a>

                    <!-- Supprimer avec confirmation -->
                    <form action="{{ route('products.destroy', $food[0]->id) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer ce produit ?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded-lg text-sm">
                           Supprimer
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="7" class="text-center py-4 text-gray-300">Aucun produit trouvé.</td>
            </tr>
        @endforelse
    </tbody>
</table>
