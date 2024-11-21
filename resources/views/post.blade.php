<x-layout>
<x-slot:title> {{ $title }} </x-slot:title> 

<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white white:bg-white-900 antialiased">
  <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
      <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
          <header class="mb-4 lg:mb-6 not-format">
            <a href="javascript:void(0);" onclick="window.history.back();" class="font-medium text-sm text-blue-600 hover:underline">&laquo; Back</a>
            <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:my-6 lg:text-4xl dark:text-black">{{$post['title']}}</h1>  
            <address class="flex items-center mb-6 not-italic"> <!-- Menambahkan margin bottom -->
                  <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-black">
                      <div>
                      <a>{{$post->varietas->nama_varietas}} </a> |
                      <a>{{$post->varietas->item->komoditas->nama_komoditas}}</a>
                      </div>
                  </div>
              </address>
              <figure class="max-auto mx-auto text-center mb-6"> <!-- Menambahkan margin bottom -->
                  <img class="w-1/2 h-auto rounded-lg" src="{{ $post->iamge_url ?? 'https://via.placeholder.com/400x300' }}" alt="{{ $post->title }}" class="mb-4">
            </figure>
          </header>
          <p class="my-4 font-light">{{$post ['body']}}</p>
      </article>
  </div>
</main>

</x-layout>