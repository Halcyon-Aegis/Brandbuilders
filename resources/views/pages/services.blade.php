<x-header>
</x-header>
    <div class="w-full bg-[#2B2D42] text-white justify-center flex h-[%20] text-4xl font-semibold items-center">
        <h1 class="p-10">Our Services</h1>
    </div>
    
    @include('components.cards')

<div class="hidden md:block">
    @include('components.projects')
</div>
    @include('components.reviews')
    @include('components.faq')
    @include('components.ready')
    @include('components.footer')