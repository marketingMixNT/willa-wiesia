




<x-flex-section id="kontakt">
    {{-- IMG --}}
    <x-flex-img>
        <img src='{{ asset('assets/img/willa/willa-wiesia-4.webp') }}'
            alt='widok z lotu ptaka na Willa Wiesia w Kościelisku' width='702' height='702' loading='lazy'
            class='w-full  object-cover aspect-video lg:aspect-square max-h-[600px]' />
    </x-flex-img>

    {{-- TEXT --}}
    <x-flex-text>

        <x-heading>Kontakt</x-heading>
        <livewire:contact-form />

    </x-flex-text>

</x-flex-section>
