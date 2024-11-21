<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container mx-auto px-4 md:px-8 lg:px-40 pb-4">
        @if($varietas->count() > 0)
            <p>Terdapat {{ $varietas->count() }} varietas.</p>
            <p class="text-white"> _</p>
            @foreach ($varietas->chunk(4) as $chunk)
                <div class="flex flex-wrap justify-center mb-6">
                    @foreach ($chunk as $varietasItem)
                        <div class="w-full sm:w-1/2 md:w-1/4 px-2 mb-4">
                            <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-green-900 dark:border-gray-700">
                                <img class="rounded-t-lg w-full h-48 object-cover" 
                                     src="{{ $varietasItem->image_url ?? 'https://via.placeholder.com/400x300' }}"
                                     alt="{{ $varietasItem->nama_varietas }}"
                                     onerror="this.src='https://via.placeholder.com/400x300'">
                                <div class="p-4">
                                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        {{ $varietasItem->nama_varietas }}
                                    </h5>
                                    
                                    <a href="/varietas/{{ $varietasItem->id_varietas }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-yellow-700 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        @else
            <p class="py-8">Tidak ada varietas untuk item ini.</p>
        @endif
    </div>
</x-layout>