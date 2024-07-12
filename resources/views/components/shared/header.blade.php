<header
			class="flex flex-col justify-between w-screen h-screen   relative z-50">
			<img src="{{asset('assets/img/hero1.jpg')}}" alt="" class="w=full h-full object-cover object-top" width='' height="" >

            <div class="absolute inset-0 bg-black opacity-50"></div>
			<div class="fixed top-0 left-0 right-0  z-50 duration-500" id="navbar">
				
				
				<div id="marquee" class='border-b py-3 text-xs text-white flex flex-col gap-20 font-heading font-extralight'>
					<span class="mr-6">Relaks</span>
					<span class="mr-6">Wypoczynek</span>
					<span class="mr-6">Góry</span>
					<span class="mr-6">Natura</span>
					<span class="mr-6">Tradycja</span>
					<span class="mr-6">Tatry</span>
					<span class="mr-6">Relaks</span>
					<span class="mr-6">Wypoczynek</span>
					<span class="mr-6">Góry</span>
					<span class="mr-6">Natura</span>
					<span class="mr-6">Tradycja</span>
					<span class="mr-6">Tatry</span>
					<span class="mr-6">Relaks</span>
					<span class="mr-6">Wypoczynek</span>
					<span class="mr-6">Góry</span>
					<span class="mr-6">Natura</span>
					<span class="mr-6">Tradycja</span>
					<span class="mr-6">Tatry</span>
				
				</div> 
				

				<x-nav.navbar/>
			</div>

			{{$slot}}
			<div class='mx-auto px-6 pb-16 absolute bottom-5 left-1/2  transform -translate-x-1/2 text-white'>
				<a href='https://www.nocowanie.pl/rezerwuj/1504253-willa-wiesia-koscielisko/' class='link-btn'>
					Zarezerwuj
				</a>
			</div>
		</header>



        