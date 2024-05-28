<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.links')
</head>
<body>
    @include('components.partials._nav')

    {{ $slot }}

    <div x-data="{ showScrollButton: false }" @scroll.window="showScrollButton = window.scrollY > 100 ? true : false">
        <!-- Scroll to Top Button -->
        <button x-show="showScrollButton" @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
            class="fixed bottom-20 right-10 z-10 rounded-full shadow-lg">
            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_873_240)">
                <path d="M24 4C35.04 4 44 12.96 44 24C44 35.04 35.04 44 24 44C12.96 44 4 35.04 4 24C4 12.96 12.96 4 24 4ZM26 24H32L24 16L16 24H22V32H26V24Z" fill="#00AA00"/>
                </g>
                <defs>
                <clipPath id="clip0_873_240">
                <rect width="48" height="48" fill=""/>
                </clipPath>
                </defs>
                </svg>

        </button>
    </div>
</body>
</html>
