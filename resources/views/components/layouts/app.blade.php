<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    {{-- Navigation --}}
    <nav class="bg-white dark:bg-neutral-900 shadow-sm border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                {{-- Logo --}}
                <div class="flex items-center">
                    <a href="{{ route('properties.index') }}" class="flex items-center space-x-2">
                        <span class="text-2xl">🏠</span>
                        <span class="text-xl font-bold text-gray-900 dark:text-gray-200">Zlínské reality</span>
                    </a>
                </div>

                {{-- Navigation Links --}}
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('properties.index') }}"
                        class="text-gray-600 dark:text-gray-200 hover:text-gray-900 dark:hover:text-gray-300 px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('properties.index') ? 'text-blue-600 ' : '' }}">
                        Všechny nemovitosti
                    </a>
                    <a href="{{ route('properties.index', ['listingType' => 'sale']) }}"
                        class="text-gray-600 dark:text-gray-200 hover:text-gray-900 dark:hover:text-gray-300 px-3 py-2 rounded-md text-sm font-medium">
                        Na prodej
                    </a>
                    <a href="{{ route('properties.index', ['listingType' => 'rent']) }}"
                        class="text-gray-600 dark:text-gray-200 hover:text-gray-900 dark:hover:text-gray-300 px-3 py-2 rounded-md text-sm font-medium">
                        K pronájmu
                    </a>
                    <a href="{{ route('properties.index', ['featuredOnly' => true]) }}"
                        class="text-gray-600 dark:text-gray-200 hover:text-gray-900 dark:hover:text-gray-300 px-3 py-2 rounded-md text-sm font-medium">
                        Doporučené
                    </a>
                </div>

                {{-- Mobile menu button --}}
                <div class="md:hidden">
                    <button type="button" id="mobile-menu-button"
                        class="text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500 p-2 rounded-md">
                        <span class="sr-only">Otevři hlavní menu</span>
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        {{-- Mobile menu --}}
        <div class="md:hidden" id="mobile-menu" style="display: none;">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white dark:bg-neutral-900 border-t border-gray-200">
                <a href="{{ route('properties.index') }}"
                    class="text-gray-600 hover:text-gray-900 dark:hover:text-gray-300 block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('properties.index') ? 'text-blue-600 bg-blue-50' : '' }}">
                    Všechny nemovitosti
                </a>
                <a href="{{ route('properties.index', ['listingType' => 'sale']) }}"
                    class="text-gray-600 hover:text-gray-900 dark:hover:text-gray-300 block px-3 py-2 rounded-md text-base font-medium">
                    Na prodej
                </a>
                <a href="{{ route('properties.index', ['listingType' => 'rent']) }}"
                    class="text-gray-600 hover:text-gray-900 dark:hover:text-gray-300 block px-3 py-2 rounded-md text-base font-medium">
                    K pronájmu
                </a>
                <a href="{{ route('properties.index', ['featuredOnly' => true]) }}"
                    class="text-gray-600 hover:text-gray-900 dark:hover:text-gray-300 block px-3 py-2 rounded-md text-base font-medium">
                    Doporučené
                </a>
            </div>
        </div>
    </nav>
    {{ $slot }}
    {{-- Footer --}}
    <footer class="bg-gray-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                {{-- Company Info --}}
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center space-x-2 mb-4">
                        <span class="text-2xl">🏠</span>
                        <span class="text-xl font-bold">Zlínské reality</span>
                    </div>
                    <p class="text-gray-300 mb-4">
                        Váš partner v hledání prémiových a luxusních nemovitostí ve Zlíně a okolí.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-white">📘 Facebook</a>
                        <a href="#" class="text-gray-300 hover:text-white">📷 Instagram</a>
                        <a href="#" class="text-gray-300 hover:text-white">🐦 Twitter</a>
                    </div>
                </div>

                {{-- Quick Links --}}
                <div>
                    <h3 class="text-lg font-semibold mb-4">Rychlé odkazy</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="{{ route('properties.index') }}" class="hover:text-white">Všechny nemovitosti</a></li>
                        <li><a href="{{ route('properties.index', ['listingType' => 'sale']) }}"
                                class="hover:text-white">Na prodej</a></li>
                        <li><a href="{{ route('properties.index', ['listingType' => 'rent']) }}"
                                class="hover:text-white">K pronájmu</a></li>
                        <li><a href="{{ route('properties.index', ['featuredOnly' => true]) }}"
                                class="hover:text-white">Doporučené</a></li>
                    </ul>
                </div>

                {{-- Contact Info --}}
                <div>
                    <h3 class="text-lg font-semibold mb-4">Kontaktujte nás</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li>📍 tř. Tomáše Bati 4066</li>
                        <li>📞 +420 525 621 145</li>
                        <li>✉️ don.hlobil@reality.cz</li>
                        <li>🕐 Pon - Pá: 9 - 16</li>
                    </ul>
                </div>
            </div>

            {{-- Bottom Footer --}}
            <div class="border-t border-gray-700 pt-8 mt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-400 text-sm">
                        © {{ date('Y') }} Zlínské reality a nemovitosti.
                    </p>
                    <div class="flex space-x-6 mt-4 md:mt-0">
                        <a href="#" class="text-gray-400 hover:text-white text-sm">Obchodní podmínky</a>
                        <a href="#" class="text-gray-400 hover:text-white text-sm">Podmínky a ochrana pro GDPR</a>
                        <a href="#" class="text-gray-400 hover:text-white text-sm">Kontakt</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
