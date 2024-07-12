<section class=" w-screen overflow-x-hidden py-12">
    <div class="swiper- hero-carousel">
        <div class="swiper-wrapper">
          
           
        @foreach ($images as $img)
            
        <x-hero-carousel-item :img="$img"/>
        @endforeach
           
          
         
        </div>
    </div>
</section>