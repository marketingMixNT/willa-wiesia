<x-flex-section>

{{-- IMG --}}
    <x-flex-img>
        <img src='{{ asset('assets/img/willa/willa-wiesia-3.webp') }}'
            alt='widok z zewnątrz na Willa Wiesia w Kościelisku' width='702' height='702' loading='lazy'
            class='w-full  object-cover aspect-video lg:aspect-square max-h-[600px] ' />
    </x-flex-img>
    
{{-- TEXT --}}
    <x-flex-text>

        <x-heading> {{__('home.offer-second.heading')}}
        </x-heading>
        <x-text>
            {{__('home.offer-second.text-one')}}
        </x-text>
        <x-text>
            {{__('home.offer-second.text-two')}}
        </x-text>


    </x-flex-text>

</x-flex-section>
