<x-layouts.app title="Willa Wiesia - Komfortowe Noclegi w Kościelisku z Widokiem na Tatry"
    description="Oferujemy przytulne pokoje w Kościelisku, idealne dla turystów ceniących tradycję i spokój. Bliskość szlaków turystycznych i piękne widoki gwarantowane.">

    <x-slot:header>
        <h1
            class='text-5xl sm:text-6xl text-center font-normal text-white px-6 absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2'>
            Przytulne pokoje <br>
            <span class='pt-12 font-extralight ml-3'>i niezapomniane widoki</span>
        </h1>
    </x-slot:header>

    <x-slot:main>
        @include('pages.home.partials.offer')
        @include('pages.home.partials.offer-second')
        @include('pages.home.partials.hero-carousel')
        @include('pages.home.partials.neighborhood')
        @include('pages.home.partials.neighborhood-second')
        @include('pages.home.partials.cta')
        @include('pages.home.partials.contact')
    </x-slot:main>
</x-layouts.app>
