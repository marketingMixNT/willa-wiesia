<footer
    class='  px-12 md:px-32 py-12 bg-third flex flex-col justify-center items-center xl:justify-start xl:items-start gap-12 xl:gap-0 xl:grid grid-cols-4 text-white'>


    <div class='col-span-1'>
        <div class='relative flex flex-col items-center justify-center gap-2 text-center max:pl-12'>

            <a href='{{ route('home.index') }}'
                class='text-3xl font-light text-white mt-1 lg:mt-0 flex justify-center items-center gap-1 font-heading'>
                {{-- <img src='{{asset('logo--navbar.png')}}' class='w-12 hidden sm:block ' width="48" height="36" /><span> --}}


                Willa <span class=' font-light'></span>Wiesia </span>
            </a>
            <span>  {{__('home.footer.seo')}}</span>
        </div>
    </div>


    <div class='flex flex-col  text-center xl:text-left mx-auto gap-4 '>
        <a href='{{route('privacy-policy')}}' class="link-hover uppercase w-full lg:w-fit">{{__('home.footer.privacy-policy')}}
        </a>
        <a href='{{route('regulations')}}' class="link-hover  uppercase w-full lg:w-fit">
            {{__('home.footer.regulations')}}
        </a>
    </div>


    <div class='flex flex-col  text-center xl:text-left mx-auto gap-4'>
        <h2 class='uppercase text-xl'>{{__('home.footer.address')}}</h2>
        <a href='https://maps.app.goo.gl/YKsAFyzvQatukwAMA' class="link-hover">

            Karpielówka 121<br>

            34-511 Kościelisko

        </a>
    </div>


    <div class='flex flex-col items-end '>
        <div class='flex flex-col justify-center xl:justify-start items-center xl:items-start gap-4 '>
            <h2 class='uppercase text-xl'>{{__('home.footer.contact')}}</h2>
            <a class='link-hover' href='mailto:staszel@staszel.pl'>
                staszel@staszel.pl
            </a>
            <a class='link-hover' href='tel:+48664360200'>
                +48  664 360 200
            </a>
            
        </div>
    </div>


    <div class='col-span-4 flex flex-col items-center  xl:items-end gap-4 lg:mt-12'>
        <span class='uppercase text-wrap text-center xs:text-left'>© Willa Wiesia <span id="footerYear"></span></span>
        <a href='https://marketingmix.pl'>
            <img src='{{ asset('assets/img/marketingmix.svg') }}' alt='logo wykonawcy - MarketingMix.pl'
                class='w-28 hover:scale-105 duration-500' />
        </a>
    </div>
</footer>
