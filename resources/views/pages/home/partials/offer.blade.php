

<x-flex-section id="oferta">
    {{-- TEXT --}}
    <x-flex-text>

        <x-heading>Twoje Idealne Miejsce na Wypoczynek w Kościelisku</x-heading>
        <x-text>
            Willa Wiesia to urokliwe miejsce położone <span class="font-semibold">w sercu Kościeliska</span>,
            oferujące komfortowe noclegi w
            pokojach 1, 2, 3 i 4 osobowych. Nasze 37 miejsc noclegowych zostało zaprojektowane z myślą o różnych
            potrzebach Gości.
        </x-text>
        <x-text>
            Z myślą o Państwa potrzebach, przygotowaliśmy pokoje w dwóch standardach: <span
                class="font-semibold">wysoki</span>, który obejmuje nowoczesne łazienki w pokojach oraz telewizory,
            oraz <span class="font-semibold">turystyczny</span>, z pokojami korzystającymi ze wspólnych łazienek.
            Niezależnie od wyboru, każdy pokój wyposażony jest w telewizor i czajnik, a ciepła i zimna woda jest
            dostępna przez całą dobę. Dodatkowo, Goście mają dostęp do w pełni wyposażonego aneksu kuchennego, co
            zapewnia pełen komfort podczas pobytu.
        </x-text>
        <x-text>
            Ceny kształtują się w zależności od standartu pokoi od <span class="font-semibold">40-60</span> zł od
            osoby.
        </x-text>

    </x-flex-text>

    {{-- IMG --}}
    <x-flex-img>
        <img src='{{ asset('assets/img/willa/willa-wiesia-16.webp') }}'
            alt='widok z lotu ptaka na Willa Wiesia w Kościelisku' width='702' height='702' loading='lazy'
            class='w-full  object-cover aspect-video lg:aspect-square max-h-[600px] ' />
    </x-flex-img>

</x-flex-section>
