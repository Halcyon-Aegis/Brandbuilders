<x-header>
</x-header>
    <div class="w-full bg-[#00aa00cb] text-white justify-center flex h-[%20] text-4xl font-semibold items-center">
        <h1 class="p-10">Our Recent Works</h1>
    </div>
    <div class="hidden md:block">
    @include('components.cards')
</div>

    @include('components.projects')

    @include('components.reviews')
    @include('components.faq')
    @include('components.ready')
    @include('components.footer')