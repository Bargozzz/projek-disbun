<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white white:bg-white-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:my-6 lg:text-4xl dark:text-black">{{ $varietas->nama_varietas }}</h1>
                </header>
                <p class="my-4 font-light">{{ $varietas->deskripsi }}</p>
            </article>
        </div>

        <div class="container mx-auto px-4 md:px-8 lg:px-40 pb-4">
            <h2 class="text-2xl font-bold mb-4">Produk Terkait</h2>
            @if($posts->count() > 0)
                <div class="flex flex-wrap justify-center mb-6">
                    @foreach ($posts as $post)
                        <div class="w-full sm:w-1/2 md:w-1/4 px-2 mb-4">
                            <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-green-900 dark:border-gray-700">
                                <img class="rounded-t-lg w-full h-48 object-cover" 
                                     src="{{ $post->iamge_url ?? 'https://via.placeholder.com/400x300' }}"
                                     alt="{{ $post->title }}"
                                     onerror="this.src='https://via.placeholder.com/400x300'">
                                <div class="p-4">
                                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        {{ $post->title }}
                                    </h5>
                                    <a href="/posts/{{ $post->slug }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-yellow-700 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="py-8">Tidak ada produk terkait untuk varietas ini.</p>
            @endif
        </div>
    </main>
</x-layout>