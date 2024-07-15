<button type="button" class='lg:hidden cursor-pointer' aria-label='otwórz menu' id='hamburger'>
    <x-solar-hamburger-menu-broken class="w-12 text-white" />
</button>




<div id='menu' class='menu-close fixed inset-0 flex flex-col justify-between items-center py-8 px-4 bg-third z-50'>

    <div class="flex justify-between w-full">

        <div>
            <x-nav.language-switcher />
        </div>

        <button type="button" class='self-end cursor-pointer' aria-label='zamknij menu' id="close">

            <x-solar-close-circle-linear class="w-10 text-white" />


        </button>
    </div>

    <a href='{{ route('home.index') }}'
        class='text-3xl font-light text-white mt-1 lg:mt-0 flex justify-center items-center gap-1 font-heading'>
        {{-- <img src='{{asset('logo--navbar.png')}}' class='w-12 hidden sm:block ' width="48" height="36" /><span> --}}


        Willa <span class=' font-light'></span>Wiesia </span>
    </a>



    <ul class='flex flex-col justify-center  w-full text-3xl font-extralight text-white  '>
        <x-nav.nav-item-mobile href='/#oferta'>
            {{__('home.nav.offer')}}
        </x-nav.nav-item-mobile>
        <x-nav.nav-item-mobile href='/#okolica'>
            {{__('home.nav.neighborhood')}}
        </x-nav.nav-item-mobile>

        <x-nav.nav-item-mobile href='/#kontakt'>
            {{__('home.nav.contact')}}
        </x-nav.nav-item-mobile>
    </ul>


    <div class='mb-4 mx-auto px-6 '>
        <a href='https://www.nocowanie.pl/rezerwuj/1504253-willa-wiesia-koscielisko/' target="_blank" rel="nofollow" class='link-btn'>
            {{__('home.nav.book')}}
        </a>
    </div>
</div>
