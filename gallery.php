<?php include('partials/nav.php') ?>

    <section class="w-full h-50 bg-center bg-cover h-128 py-10 bg-gray-900 bg-opacity-50 hero" style="background-image: url(./Assets/bannergallery.jpg);">
      <div class="flex items-center justify-center w-full h-full">
          <div class="text-center">
            <h1 class="font-semibold text-white uppercase text-3xl hero-text md:text-8xl my-40">बिश्वेश्वर सुशीला प्रतिष्ठान</h1>
            <a href="#"><button class="btn btn-outline">Learn more &nbsp > </button></a>
          </div>
      </div>
    </section>

    <section class="gallery">
        <div class="px-10 md:px-40">
        <div class="grid grid-cols-1 grid-cols-12">
            <div class="col-span-12 md:col-span-9">
            <h2 class="text-4xl md:text-8xl color-bsf py-14">Photos</h2>
        <div x-data="{ imgModal : false, imgModalSrc : '', imgModalDesc : '' }">
        <template @img-modal.window="imgModal = true; imgModalSrc = $event.detail.imgModalSrc; imgModalDesc = $event.detail.imgModalDesc;" x-if="imgModal">
          <div x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90" x-on:click.away="imgModalSrc = ''" class="p-2 fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center bg-black bg-opacity-75">
            <div @click.away="imgModal = ''" class="flex flex-col max-w-3xl max-h-full overflow-auto">
              <div class="z-50">
                <button @click="imgModal = ''" class="float-right pt-2 pr-2 outline-none focus:outline-none">
                  <svg class="fill-current text-white " xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                    <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                    </path>
                  </svg>
                </button>
              </div>
              <div class="p-2">
                <img :alt="imgModalSrc" class="object-contain h-1/2-screen" :src="imgModalSrc">
                <p x-text="imgModalDesc" class="text-center text-white"></p>
              </div>
            </div>
          </div>
        </template>
      </div>
      
      <div x-data="{}" class="px-2">
        <div class="grid grid-flow-row grid-cols-6 grid-rows-2 md:grid-cols-12 gap-10">
          <div class="col-span-6 md:col-span-4 row-span-2 ">
            <div class="bg-gray-400">
              <a @click="$dispatch('img-modal', {  imgModalSrc: 'Assets/gallery1.jpg', imgModalDesc: 'Random Image One Description' })" class="cursor-pointer">
                <img alt="Placeholder" class="object-fit w-full" src="Assets/gallery1.jpg">
              </a>
            </div>
          </div>
      

          <div class="col-span-6 md:col-span-4 row-span-1 ">
            <div class="bg-gray-400">
              <a @click="$dispatch('img-modal', {  imgModalSrc: 'Assets/gallery2.png', imgModalDesc: '' })" class="cursor-pointer">
                <img alt="Placeholder" class="object-fit w-full" src="Assets/gallery2.png">
              </a>
            </div>
          </div>

          <div class="col-span-6 md:col-span-4 row-span-2  ">
            <div class="bg-gray-400">
              <a @click="$dispatch('img-modal', {  imgModalSrc: 'Assets/gallery4.jpg', imgModalDesc: 'Random Image One Description' })" class="cursor-pointer">
                <img alt="Placeholder" class="object-fit w-full" src="Assets/gallery4.jpg">
              </a>
            </div>
          </div>

        
      

          <div class="col-span-6 md:col-span-4 row-span-1 ">
            <div class="bg-gray-400">
              <a @click="$dispatch('img-modal', {  imgModalSrc: 'Assets/gallery3.jpg', imgModalDesc: '' })" class="cursor-pointer">
                <img alt="Placeholder" class="object-fit w-full" src="Assets/gallery3.jpg">
              </a>
            </div>
          </div>

          

          

          
          
          <!-- <div class="col-span-2 row-span-1 md:col-span-3">
            <div class="bg-gray-400">
              <a @click="$dispatch('img-modal', {  imgModalSrc: 'Assets/gallery3.jpg', imgModalDesc: '' })" class="cursor-pointer">
                <img alt="Placeholder" class="object-fit" src="Assets/gallery3.jpg">
              </a>
            </div>
          </div>
          <div class="col-span-2 md:col-span-3">
            <div class="bg-gray-400">
              <a @click="$dispatch('img-modal', {  imgModalSrc: 'Assets/gallery4.jpg', imgModalDesc: '' })" class="cursor-pointer">
                <img alt="Placeholder" class="object-fit w-full" src="Assets/gallery4.jpg">
              </a>
            </div>
          </div>
          <div class="col-span-2 md:col-span-3">
            <div class="bg-gray-400">
              <a @click="$dispatch('img-modal', {  imgModalSrc: 'Assets/gallery4.jpg', imgModalDesc: '' })" class="cursor-pointer">
                <img alt="Placeholder" class="object-fit w-full" src="Assets/gallery4.jpg">
              </a>
            </div>
          </div> -->


          <!-- <div class="w-1/6 px-2">
            <div class="bg-gray-400">
              <a @click="$dispatch('img-modal', {  imgModalSrc: 'https://picsum.photos/640/480', imgModalDesc: 'This one has description' })" class="cursor-pointer">
                <img alt="Placeholder" class="object-fit w-full" src="https://picsum.photos/640/480">
              </a>
            </div>
          </div>
          <div class="w-1/6 px-2">
            <div class="bg-gray-400">
              <a @click="$dispatch('img-modal', {  imgModalSrc: 'https://picsum.photos/640/480', imgModalDesc: '' })" class="cursor-pointer">
                <img alt="Placeholder" class="object-fit w-full" src="https://picsum.photos/640/480">
              </a>
            </div>
          </div> -->
        </div>
      </div>
<!-- Photos End -->
      <h2 class="text-4xl md:text-8xl color-bsf py-14 mt-16 gap-10 text-center md:text-left">Videos</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
        <div class="flex justify-center md:justify-start mb-10">
          <div id="responsiveVideoWrapper" className="relative h-0 pb-fluid-video">
            <iframe
              className="absolute top-0 left-0 w-full h-full"
              src="https://www.youtube.com/embed/zihoyz0u_cs"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowFullScreen>
            </iframe>
          </div>
        </div>
        <div class="flex justify-center md:justify-start mb-10">
          <div id="responsiveVideoWrapper" className="relative h-0 pb-fluid-video">
            <iframe
              className="absolute top-0 left-0 w-full h-full"
              src="https://www.youtube.com/embed/zihoyz0u_cs"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowFullScreen>
            </iframe>
          </div>
        </div>
        <div class="flex justify-center md:justify-start mb-10">
          <div id="responsiveVideoWrapper" className="relative h-0 pb-fluid-video">
            <iframe
              className="absolute top-0 left-0 w-full h-full"
              src="https://www.youtube.com/embed/zihoyz0u_cs"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowFullScreen>
            </iframe>
          </div>
        </div>
      </div>
      
            </div>
            <div class = "col-span-12 md:col-span-3 mt-20">
                <div class="notices p-7 bg-vividblue text-white">
                    <div class="text-center text-2xl">Notices</div>
                    <ul class = "leading-8">
                    <li class = "mb-3">
                        <a class = "leading-6" href="#">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit dolor sit amet ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </a>
                    <p class="text-right">10 Nov 2021</p> 
                    </li>
                    
                    <li class = "mb-3">
                        <a class = "leading-6" href="#">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit dolor sit amet ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </a>
                    <p class="text-right">10 Nov 2021</p> 
                    </li>
                    <li class = "mb-3">
                        <a class = "leading-6" href="#">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit dolor sit amet ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </a>
                    <p class="text-right">10 Nov 2021</p> 
                    </li>
                    </ul>
                </div>
                <div class="notices p-7 bg-red text-white mt-14">
            <div class="text-center text-2xl">Publication</div>
            <ul class = "leading-8">
              <li class = "mb-3">
                <a class = "leading-6" href="#">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit dolor sit amet ipsum dolor sit amet, consectetur adipiscing elit</p>
              </a>
              <p class="text-right">10 Nov 2021</p> 
              </li>
              
              <li class = "mb-3">
                <a class = "leading-6" href="#">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit dolor sit amet ipsum dolor sit amet, consectetur adipiscing elit</p>
              </a>
              <p class="text-right">10 Nov 2021</p> 
              </li>
              <li class = "mb-3">
                <a class = "leading-6" href="#">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit dolor sit amet ipsum dolor sit amet, consectetur adipiscing elit</p>
              </a>
              <p class="text-right">10 Nov 2021</p> 
              </li>
            </ul>
          </div>
            </div>
        </div>
        </div>
    </section>
    
    <?php include('partials/projslider.php') ?>
    <?php include('partials/footer.php') ?>