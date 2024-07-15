

<x-flex-section id="oferta">
    {{-- TEXT --}}
    <x-flex-text>

        <x-heading>{{__('home.offer.heading')}}</x-heading>
        <x-text>
            {{__('home.offer.text-one')}}
        </x-text>
        <x-text>
            {{__('home.offer.text-two')}}
        </x-text>
        <x-text>
            {{__('home.offer.text-three')}}
        </x-text>

    </x-flex-text>

    {{-- IMG --}}
    <x-flex-img>
        <img src='{{ asset('assets/img/willa/willa-wiesia-16.webp') }}'
            alt='widok z lotu ptaka na Willa Wiesia w Kościelisku' width='702' height='702' loading='lazy'
            class='w-full  object-cover aspect-video lg:aspect-square max-h-[600px] ' />
    </x-flex-img>

</x-flex-section>
