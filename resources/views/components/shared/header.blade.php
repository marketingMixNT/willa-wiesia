<header
			class="flex flex-col justify-between w-screen h-screen   relative z-50">
			<img src="{{asset('assets/img/hero2.webp')}}" alt="Piękny widok który mozna spotkac nieopodal Willa Wiesia w Kościelisku" class="w=full h-full object-cover object-top" width='1989' height="1060" >

            <div class="absolute inset-0 bg-black opacity-50"></div>
			<div class="fixed top-0 left-0 right-0  z-50 duration-500" id="navbar">
				
				
				<div id="marquee" class='border-b py-3 text-xs text-white flex flex-col gap-20 font-heading font-extralight'>
					<span class="mr-6">{{__('home.header.marquee-one')}}</span>
					<span class="mr-6">{{__('home.header.marquee-two')}}</span>
					<span class="mr-6">{{__('home.header.marquee-three')}}</span>
					<span class="mr-6">{{__('home.header.marquee-four')}}</span>
					<span class="mr-6">{{__('home.header.marquee-five')}}</span>
					<span class="mr-6">{{__('home.header.marquee-six')}}</span>
					<span class="mr-6">{{__('home.header.marquee-one')}}</span>
					<span class="mr-6">{{__('home.header.marquee-two')}}</span>
					<span class="mr-6">{{__('home.header.marquee-three')}}</span>
					<span class="mr-6">{{__('home.header.marquee-four')}}</span>
					<span class="mr-6">{{__('home.header.marquee-five')}}</span>
					<span class="mr-6">{{__('home.header.marquee-six')}}</span>
					<span class="mr-6">{{__('home.header.marquee-one')}}</span>
					<span class="mr-6">{{__('home.header.marquee-two')}}</span>
					<span class="mr-6">{{__('home.header.marquee-three')}}</span>
					<span class="mr-6">{{__('home.header.marquee-four')}}</span>
					<span class="mr-6">{{__('home.header.marquee-five')}}</span>
					<span class="mr-6">{{__('home.header.marquee-six')}}</span>
				</div> 
				

				<x-nav.navbar/>
			</div>

			{{$slot}}
			<div class='mx-auto px-6 pb-16 absolute bottom-5 left-1/2  transform -translate-x-1/2 text-white'>
				<a href='https://www.nocowanie.pl/rezerwuj/1504253-willa-wiesia-koscielisko/' class='link-btn'>
					{{__('home.nav.book')}}
				</a>
			</div>
		</header>



        