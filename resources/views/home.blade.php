<x-layout>
    <x-slot:title> {{ $title }} </x-slot:title>  

    <div class="relative bg-gray-100">
        <div class="flex flex-col items-center justify-center min-h-screen">
            <div class="relative w-full h-full">
                <img src="https://images.pexels.com/photos/1151418/pexels-photo-1151418.jpeg" alt="Gambar Acak" class="object-cover w-full h-full">
                <div class="absolute inset-0 bg-gradient-to-t from-green-900 to-transparent"></div>
                <div class="absolute inset-0 flex flex-col items-center justify-center text-center">
                    <h1 class="text-white text-4xl font-bold">Selamat Datang di Dinas Perkebunan</h1>
                    <p class="text-white text-lg mt-4 max-w-md">
                        Temukan berbagai informasi mengenai Komoditas, Varietas dan Produk Olahan dari setiap Varietas, yang dapat membantu Anda.
                    </p>
                </div>
            </div>
        </div>
    </div>

</x-layout>