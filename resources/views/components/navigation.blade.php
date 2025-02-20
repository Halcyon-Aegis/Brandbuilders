<nav class="fixed top-0 left-0 right-0 z-50 bg-white shadow-sm" x-data="{ isOpen: false }">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="/" class="flex items-center">
                    <span class="text-4xl font-bold">
                        <span class="text-gray-900">Brand</span><span class="text-green-500">Builders</span>
                    </span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="items-center hidden space-x-8 md:flex">
                <a href="/" class="px-1 py-2 text-green-500 border-b-2 border-green-500">Home</a>
                <a href="/about" class="px-1 py-2 text-gray-600 hover:text-green-500">About</a>
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex items-center px-1 py-2 text-gray-600 hover:text-green-500">
                        Services
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div x-show="open" @click.away="open = false" class="absolute left-0 w-48 mt-2 bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5">
                        <div class="py-1">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Service 1</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Service 2</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Service 3</a>
                        </div>
                    </div>
                </div>
                <a href="/portfolio" class="px-1 py-2 text-gray-600 hover:text-green-500">Portfolio</a>
                <a href="/blog" class="px-1 py-2 text-gray-600 hover:text-green-500">Blog</a>
                <a href="/contact" class="inline-flex items-center px-4 py-2 ml-8 text-sm font-medium text-white bg-green-500 border border-transparent rounded-md hover:bg-green-600">
                    CONTACT US
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button @click="isOpen = !isOpen" class="text-gray-600 hover:text-green-500">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path :class="{'hidden': isOpen, 'inline-flex': !isOpen }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        <path :class="{'hidden': !isOpen, 'inline-flex': isOpen }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <div :class="{'block': isOpen, 'hidden': !isOpen}" class="md:hidden">
        <div class="fixed inset-0 z-40 bg-gray-800 bg-opacity-50" @click="isOpen = false"></div>
        <div class="fixed inset-y-0 left-0 w-[70%] bg-white z-50 transform transition-transform duration-300 ease-in-out"
             :class="{'translate-x-0': isOpen, '-translate-x-full': !isOpen}">
            <div class="px-4 pt-5 pb-3 space-y-1">
                <a href="/" class="block px-3 py-2 font-medium text-green-500 border-l-4 border-green-500">Home</a>
                <a href="/about" class="block px-3 py-2 font-medium text-gray-600 hover:text-green-500">About</a>
                <div x-data="{ open: false }">
                    <button @click="open = !open" class="flex items-center justify-between w-full px-3 py-2 font-medium text-gray-600 hover:text-green-500">
                        Services
                        <svg class="w-4 h-4" :class="{'rotate-180': open}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div x-show="open" class="pl-4">
                        <a href="#" class="block px-3 py-2 text-gray-600 hover:text-green-500">Service 1</a>
                        <a href="#" class="block px-3 py-2 text-gray-600 hover:text-green-500">Service 2</a>
                        <a href="#" class="block px-3 py-2 text-gray-600 hover:text-green-500">Service 3</a>
                    </div>
                </div>
                <a href="/portfolio" class="block px-3 py-2 font-medium text-gray-600 hover:text-green-500">Portfolio</a>
                <a href="/blog" class="block px-3 py-2 font-medium text-gray-600 hover:text-green-500">Blog</a>
                <a href="/contact" class="block px-3 py-2 font-medium text-green-500">Contact Us</a>
            </div>
        </div>
    </div>
</nav>
