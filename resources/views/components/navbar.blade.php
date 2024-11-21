<nav class="bg-gray-50" x-data="{ isOpen: false, dropdownOpen: false, mobileDropdownOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <a href="/">
                        <img class="h-24 w-24" src="https://simponi.jabarprov.go.id/assets/media/img/logo/logo_disbun.png" alt="Dinas Perkebuhan Jawa Barat">
                    </a>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <div class="relative" @click.away="dropdownOpen = false">
                            <button @click="dropdownOpen = !dropdownOpen" 
                                class="flex items-center text-green-700 hover:bg-green-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                                Komoditas
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div x-show="dropdownOpen" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute left-0 mt-2 w-44 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100">
                                <ul class="py-2 text-sm text-gray-700">
                                    <li>
                                        <x-nav-link href="/komoditas-strategis" :active="request()->is('komoditas-strategis')" class="block px-4 py-2 hover:bg-green-100">Komoditas Strategis</x-nav-link>
                                    </li>
                                    <li>
                                        <x-nav-link href="/komoditas-prosfektif" :active="request()->is('komoditas-prosfektif')" class="block px-4 py-2 hover:bg-green-100">Komoditas Prosfektif</x-nav-link>
                                    </li>
                                    <li>
                                        <x-nav-link href="/komoditas-unggul-lokal" :active="request()->is('komoditas-unggul-lokal')" class="block px-4 py-2 hover:bg-green-100">Komoditas Unggul Lokal</x-nav-link>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <x-nav-link href="/posts" :active="request()->is('posts')">Produk</x-nav-link>
                        <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
                        <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                    </div>
                </div>
            </div>

            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">
                    <div class="relative ml-3">
                        <!-- Profile dropdown code... -->
                    </div>
                </div>
            </div>

            <div class="-mr-2 flex md:hidden">
                <button type="button" @click="isOpen = !isOpen" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <svg :class="{'hidden': isOpen, ' block': !isOpen }" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg :class="{'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div x-show="isOpen" class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <div class="relative">
                <button @click="mobileDropdownOpen = !mobileDropdownOpen" 
                    class="flex w-full items-center justify-between rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">
                    <span>Komoditas</span>
                    <svg class="w-4 h-4 ml-1" :class="{'rotate-180': mobileDropdownOpen}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="mobileDropdownOpen"
                    x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    class="mt-2 space-y-1">
                    <x-nav-link href="/komoditas-strategis" :active="request()->is('komoditas-strategis')" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white pl-6">Komoditas Strategis</x-nav-link>
                    <x-nav-link href="/komoditas-prosfektif" :active="request()->is('komoditas-prosfektif')" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white pl-6">Komoditas Prosfektif</x-nav-link>
                    <x-nav-link href="/komoditas-unggul-lokal" :active="request()->is('komoditas-unggul-lokal')" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white pl-6">Komoditas Unggul Lokal</x-nav-link>
                </div>
            </div>

            <x-nav-link href="/posts" :active="request()->is('posts')" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Produk</x-nav-link>
            <x-nav-link href="/about" :active="request()->is('about')" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About</x-nav-link>
            <x-nav-link href="/contact" :active="request()->is('contact')" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact</x-nav-link>
        </div>
    </div>
</nav>