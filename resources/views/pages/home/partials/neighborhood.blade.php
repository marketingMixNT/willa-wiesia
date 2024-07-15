
<x-flex-section id="okolica">
    {{-- TEXT --}}
    <x-flex-text>

        <x-heading> {{__('home.neighborhood.heading')}}</x-heading>
        <x-text>
            {{__('home.neighborhood.text-one')}}
        </x-text>
        <div>
            <span class="text-base lg:text-lg 2xl:text-xl  font-text font-semibold ">    {{__('home.neighborhood.list-heading')}}</span>   
            <ul class="list-inside list-disc space-y-2 mt-4">
                <li class="text-base md:text-lg lg:text-base 2xl:text-lg  font-extralight font-text">   {{__('home.neighborhood.list-item-one')}}</li>
                <li class="text-base md:text-lg lg:text-base 2xl:text-lg  font-extralight font-text"> {{__('home.neighborhood.list-item-two')}}</li>
                <li class="text-base md:text-lg lg:text-base 2xl:text-lg  font-extralight font-text"> {{__('home.neighborhood.list-item-three')}}</li>
                <li class="text-base md:text-lg lg:text-base 2xl:text-lg  font-extralight font-text"> {{__('home.neighborhood.list-item-four')}}</li>
                <li class="text-base md:text-lg lg:text-base 2xl:text-lg  font-extralight font-text"> {{__('home.neighborhood.list-item-five')}}</li>
            </ul>
        </div>
      

    </x-flex-text>

    {{-- IMG --}}
    <x-flex-img>
        <img src='{{ asset('assets/img/dolina-pieciu-stawow.webp') }}'
            alt='Dolina Pięciu Stawów Polskich w Tatrach' width='702' height='702' loading='lazy'
            class='w-full  object-cover aspect-video lg:aspect-square max-h-[600px] ' />
    </x-flex-img>

</x-flex-section>




