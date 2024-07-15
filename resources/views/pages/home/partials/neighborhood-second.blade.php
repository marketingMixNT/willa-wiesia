<x-flex-section id="oferta">
    {{-- IMG --}}
    <x-flex-img>
        <img src='{{ asset('assets/img/dolina-koscieliska.webp') }}' alt='Dolina Kościeliska w Tatrach' width='702'
            height='702' loading='lazy' class='w-full  object-cover aspect-video lg:aspect-square max-h-[600px] ' />
    </x-flex-img>

    {{-- TEXT --}}
    <x-flex-text>

        <x-heading> {{__('home.neighborhood-second.heading')}}</x-heading>
     
        <div>
            <span class="text-base lg:text-lg 2xl:text-xl  font-text font-semibold ">{{__('home.neighborhood-second.list-heading')}}</span>
            <ul class="list-inside list-disc space-y-2 mt-4">
                <li class="text-base md:text-lg lg:text-base 2xl:text-lg  font-extralight font-text"><span class='font-semibold'>{{__('home.neighborhood-second.list-item-one-title')}}</span> {{__('home.neighborhood-second.list-item-one')}}</li>
                <li class="text-base md:text-lg lg:text-base 2xl:text-lg  font-extralight font-text"> <span class='font-semibold'> {{__('home.neighborhood-second.list-item-two-title')}} </span> {{__('home.neighborhood-second.list-item-two')}}</li>
                <li class="text-base md:text-lg lg:text-base 2xl:text-lg  font-extralight font-text"> <span class='font-semibold'> {{__('home.neighborhood-second.list-item-three-title')}} </span> {{__('home.neighborhood-second.list-item-three')}}</li>
               
            </ul>
        </div>

        <x-text>
            {{__('home.neighborhood-second.text-one')}}
        </x-text>

    </x-flex-text>

</x-flex-section>
