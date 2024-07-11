<button type="button" class='lg:hidden cursor-pointer' aria-label='otwórz menu' id='hamburger' >
    <x-solar-hamburger-menu-broken class="w-12 text-white"/>
</button>




<div id='menu' class='menu-close fixed inset-0 flex flex-col justify-between items-center py-8 px-4 bg-black z-50'>

    <div class="flex justify-between w-full">
        
        <div >
            <x-nav.language-switcher/>
        </div>
        
        <button type="button" class='self-end cursor-pointer' aria-label='zamknij menu' id="close">
       
            <x-solar-close-circle-linear class="w-6 text-white" />


        </button>
    </div>

    <a href='{{route('home.index')}}'>
        <img src="{{asset('logo--white.png')}}" alt="logo Willa na Wzgórzu w Zakopanym" width="160" height="111" class='w-40 md:w-64' />
    </a>



    <ul class='flex flex-col justify-center  w-full text-3xl font-extralight text-white  '>
        <x-nav.nav-item-mobile href='/#pokoje'>
            {{__('home.header.nav-item-one')}}
        </x-nav.nav-item-mobile>
        <x-nav.nav-item-mobile href='/#okolica'>
            {{__('home.header.nav-item-two')}}
        </x-nav.nav-item-mobile>

        <x-nav.nav-item-mobile href='/#kontakt'>
            {{__('home.header.nav-item-three')}}
        </x-nav.nav-item-mobile>
    </ul>


    <div class='mb-4 mx-auto px-6 '>
        <a href='https://www.booking.com/hotel/pl/willa-pracus.pl.html' class='link-btn'>
            {{__('home.header.nav-item-four')}}
        </a>
    </div>
</div>