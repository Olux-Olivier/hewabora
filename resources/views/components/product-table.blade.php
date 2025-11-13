<tbody>
    @forelse ($products as $food)
        <tr class="hover:bg-white/10 transition">
            <td class="py-3">{{ $food[0]->name }}</td>
            <td>{{ $food[0]->price }}</td>
            <td>{{ $food[0]->category }}</td>
            <td class="flex gap-2">
                <!-- Modifier -->
                <a class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded-lg text-sm"
                   href="{{ route('products.edit', $food[0]->id) }}">
                   Modifier
                </a>

                <!-- Supprimer -->
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
            <td colspan="4" class="text-center py-4 text-gray-300">Aucun produit trouvé.</td>
        </tr>
    @endforelse
</tbody>
