<!-- strategis.blade.php -->
<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    @php
        // Dapatkan semua item dengan id_komoditas = 2 dan eager load relasi komoditas
        $prosfektif = \App\Models\Item::with('komoditas')
            ->where('id_komoditas', 2)
            ->get();
    @endphp
    <div class="container mx-auto px-4 md:px-8 lg:px-40 pb-4">
        @foreach ($prosfektif->chunk(4) as $chunk)
            <div class="flex flex-wrap justify-center mb-6">
                @foreach ($chunk as $item)
                    <div class="w-full sm:w-1/2 md:w-1/4 px-2 mb-4">
                        <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-green-900 dark:border-gray-700">
                            <img class="rounded-t-lg w-full h-48 object-cover" 
                                 src="{{ $item->image_url ?? 'https://via.placeholder.com/400x300' }}"
                                 alt="{{ $item->nama_item }}"
                                 onerror="this.src='https://via.placeholder.com/400x300'">
                            <div class="p-4">
                                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{ $item->nama_item }}
                                </h5>
                                <p class="mb-4 text-xs text-white">{{ $item->latin_item }}</p>
                                <a href="/komoditas-prosfektif/item/{{$item->id_item}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-yellow-700 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</x-layout>