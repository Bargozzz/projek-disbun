{{-- resources/views/posts.blade.php --}}
<x-layout>
<x-slot:title> {{ $title }} </x-slot:title> 

<div class="py-4 px-4 mx-auto max-w-screen-xl lg:px-6">
      <div class="mx-auto max-w-screen-md sm:text-center">
                    <form>
              <div class="items-center mx-auto mb-1 space-y-4 max-w-screen-sm sm:flex sm:space-y-0">
                  <div class="relative w-full">
                      <label for="search" class="hidden mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Search</label>
                      <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                      <svg class="w-6 h-6 text-gray-800 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                             <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/></svg>
                        </div>
                      <input class="block p-3 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:rounded-none sm:rounded-l-lg focus:ring-primary-500 focus:border-primary-500 white:bg-gray-600 dark:border-gray-400 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Cari Produk Olahan" type="search" id="search" name="search" autocomplete="off">
                  </div>
                  <div>
                      <button type="submit" class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-lg border cursor-pointer bg-blue-700 border-primary-600 sm:rounded-none sm:rounded-r-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">search</button>
                  </div>
              </div>
          </form>
      </div>
  </div>




@if($posts->count() > 0)
    @foreach ($posts as $post)
        <article class="my-4 py-8 max-w-screen-md border-b border-green-700 px-4 pb-8">
            <a href="/posts/{{$post->slug}}" class="hover:underline">
                <h2 class="mb-1 text-3xl tracking-tight font bold text-gray-900">{{$post->title}}</h2>
            </a>
            <div class="text base text-gray-500">
                <a href="/varietas/{{$post->varietas->id_varietas}}" class="hover:underline">{{$post->varietas->nama_varietas}} </a> |
                <a href="/komoditas/{{$post->varietas->item->komoditas->id_komoditas}}" class="hover:underline">{{$post->varietas->item->komoditas->nama_komoditas}}</a> 
            </div>
            <p class="my-4 font-light">{{Str::limit($post->body, 150)}}</p>
            <a href="/posts/{{$post->slug}}" class="font-medium text-blue-500 hover:underline">Read More &raquo;</a>
        </article>
    @endforeach
@else
    <p class="py-8">Tidak ada post untuk komoditas ini.</p>
@endif

{{ $posts->links() }}


</x-layout>