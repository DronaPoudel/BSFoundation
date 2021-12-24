<section class="swiper mySwiper our-projs">
      <h2 class = "topic text-6xl color-bsf text-center my-6">Our Projects</h2>
      <div class="swiper-wrapper mx-10 md:mx-40 grid grid-cols-1 md:grid-cols-4 pb-24">
        <div class="swiper-slide col-span-2 md:col-span-1">
          <img
            class="object-cover w-full h-64"
            src="https://source.unsplash.com/user/erondu/3000x900"
            alt="apple watch photo"
          />
          <div class="absolute opacity-0 fd-sh hover:opacity-100 top-0 right-0 bottoom-0 left-0 h-full">
          <span class="text-3xl font-bold text-white tracking-wider leading-relaxed font-sans">Education project</span> 
            <div class="pt-8 text-center">
              <button class="text-center rounded-lg p-4 bg-white  text-gray-700 font-bold text-lg">Learn more</button>
           </div>
          </div>

        </div>
        <div class="swiper-slide col-span-2 md:col-span-1">
          <img
            class="object-cover w-full h-64"
            src="https://source.unsplash.com/collection/190727/3000x900"
            alt="apple watch photo"
          />
          <div class="absolute opacity-0 fd-sh hover:opacity-100 top-0 right-0 bottoom-0 left-0 h-full">
          <span class="text-3xl font-bold text-white tracking-wider leading-relaxed font-sans">Education project</span> 
            <div class="pt-8 text-center">
              <button class="text-center rounded-lg p-4 bg-white  text-gray-700 font-bold text-lg">Learn more</button>
           </div>
          </div>
        </div>
        <div class="swiper-slide col-span-2 md:col-span-1">
          <img
            class="object-cover w-full h-64"
            src="https://source.unsplash.com/collection/190728/3000x900"
            alt="apple watch photo"
          />
          <div class="absolute opacity-0 fd-sh hover:opacity-100 top-0 right-0 bottoom-0 left-0 h-full">
          <span class="text-3xl font-bold text-white tracking-wider leading-relaxed font-sans">Education project</span> 
            <div class="pt-8 text-center">
              <button class="text-center rounded-lg p-4 bg-white  text-gray-700 font-bold text-lg">Learn more</button>
           </div>
          </div>
        </div>
        <div class="swiper-slide col-span-2 md:col-span-1">
          <img
            class="object-cover w-full h-64"
            src="https://source.unsplash.com/collection/190727/3000x900"
            alt="apple watch photo"
          />
          <div class="absolute opacity-0 fd-sh hover:opacity-100 top-0 right-0 bottoom-0 left-0 h-full">
          <span class="text-3xl font-bold text-white tracking-wider leading-relaxed font-sans">Education project</span> 
            <div class="pt-8 text-center">
              <button class="text-center rounded-lg p-4 bg-white  text-gray-700 font-bold text-lg">Learn more</button>
           </div>
          </div>
        </div>
        <div class="swiper-slide col-span-2 md:col-span-1">
          <img
            class="object-cover w-full h-64"
            src="https://source.unsplash.com/collection/190727/3000x900"
            alt="apple watch photo"
          />
          <div class="absolute opacity-0 fd-sh hover:opacity-100 top-0 right-0 bottoom-0 left-0 h-full">
          <span class="text-3xl font-bold text-white tracking-wider leading-relaxed font-sans">Education project</span> 
            <div class="pt-8 text-center">
              <button class="text-center rounded-lg p-4 bg-white  text-gray-700 font-bold text-lg">Learn more</button>
           </div>
          </div>
        </div>
        <div class="swiper-slide col-span-2 md:col-span-1">
          <img
            class="object-cover w-full h-64"
            src="https://source.unsplash.com/collection/190728/3000x900"
            alt="apple watch photo"
          />
          <div class="absolute opacity-0 fd-sh hover:opacity-100 top-0 right-0 bottoom-0 left-0 h-full">
          <span class="text-3xl font-bold text-white tracking-wider leading-relaxed font-sans">Education project</span> 
            <div class="pt-8 text-center">
              <button class="text-center rounded-lg p-4 bg-white  text-gray-700 font-bold text-lg">Learn more</button>
           </div>
          </div>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
</section>
 
 <!-- Swiper JS -->
 <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper('.mySwiper', {
        slidesPerView: 4,
        spaceBetween: 30,
        loop        : true,
        // centeredSlides: true,
        autoplay: {
          delay: 99500,
          disableOnInteraction: false,
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });
    </script>