<nav class='  flex justify-between px-4 sm:px-12 xl:px-16 py-4 duration-500 z-50 '>

    <a href='{{ route('home.index') }}'
        class='text-3xl font-light text-white mt-1 lg:mt-0 flex justify-center items-center gap-1 font-heading'>
        {{-- <img src='{{asset('logo--navbar.png')}}' class='w-12 hidden sm:block ' width="48" height="36" /><span> --}}


        Willa <span class=' font-light'></span>Wiesia </span>
    </a>



    <x-nav.Mobile />


    <ul class='hidden lg:flex justify-center items-center gap-12 xl:gap-12 text-white text-lg'>
        <x-nav.nav-item-desktop href='/#oferta'>Oferta</x-nav.nav-item-desktop>
        <x-nav.nav-item-desktop href='/#okolica'>Okolica</x-nav.nav-item-desktop>

        <x-nav.nav-item-desktop href='/#kontakt'>Kontakt</x-nav.nav-item-desktop>
        <x-nav.nav-item-desktop href='https://www.nocowanie.pl/rezerwuj/1504253-willa-wiesia-koscielisko/'>Rezerwacja</x-nav.nav-item-desktop>

        <x-nav.language-switcher />
    </ul>
</nav>
