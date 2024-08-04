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
            class="fixed bottom-20 w-[5rem] h-[5rem] right-10 z-10 text-white bg-[#166AEA] rounded-full shadow-lg">
            <i class="fa-solid fa-2x fa-arrow-up"></i>
        </button>
    </div>
</body>
</html>
