<x-flex-section id="oferta">
    {{-- IMG --}}
    <x-flex-img>
        <img src='{{ asset('assets/img/dolina-koscieliska.webp') }}' alt='Dolina Kościeliska w Tatrach' width='702'
            height='702' loading='lazy' class='w-full  object-cover aspect-video lg:aspect-square max-h-[600px] ' />
    </x-flex-img>

    {{-- TEXT --}}
    <x-flex-text>

        <x-heading>Odkryj Uroki Tatr Zachodnich z Willą Wiesia</x-heading>
     
        <div>
            <span class="text-base lg:text-lg 2xl:text-xl  font-text font-semibold "> Do największych atrakcji naszego regionu należą:</span>
            <ul class="list-inside list-disc space-y-2 mt-4">
                <li class="text-base md:text-lg lg:text-base 2xl:text-lg  font-extralight font-text"><span class='font-semibold'> Dolina Kościeliska</span> - uważana za najpiękniejszą dolinę Tatr
                    Zachodnich, ma długość 9 km i zajmuje 34 km kwadratowe powierzchni.</li>
                <li class="text-base md:text-lg lg:text-base 2xl:text-lg  font-extralight font-text"> <span class='font-semibold'> Dolina Kościeliska </span>- uważana za najpiękniejszą dolinę Tatr Zachodnich, ma długość 9 km i
                    zajmuje 34 km kwadratowe powierzchni.</li>
                <li class="text-base md:text-lg lg:text-base 2xl:text-lg  font-extralight font-text"> <span class='font-semibold'> Dolina Chochołowska </span> - najdłuższa, mierząca 10 km trasa, leży po lewej stronie trasy łączącej
                    Chochołów z Zakopanem.</li>
                <li class="text-base md:text-lg lg:text-base 2xl:text-lg  font-extralight font-text"> <span class='font-semibold'> Dolina Małej Łąki </span> - najbardziej urocza w Tatrach, mierzy około 2,5 km długości.</li>
               
            </ul>
        </div>

        <x-text>
            Dodatkowo, nasz teren jest pełen zabytków kultury ludowej i pasterskiej, które otaczają nas na
            każdym kroku. Zapewniamy łatwy dojazd własnym samochodem, komunikacją PKS lub TAXI, a nasza willa
            znajduje się zaledwie <span class="font-semibold"> 3 km od centrum Zakopanego i 1 km od Sanktuarium Matki Bożej Fatimskiej na
            Krzeptówkach.</span>
        </x-text>

    </x-flex-text>

</x-flex-section>
