<?php include('partials/nav.php') ?>

    <section class="w-full h-50 bg-center bg-cover h-128 py-10 bg-gray-900 bg-opacity-50 hero" style="background-image: url(./Assets/bannercontact.jpg);">
      <div class="flex items-center justify-center w-full h-full">
          <div class="text-center">
            <h1 class="font-semibold text-white uppercase text-3xl hero-text md:text-8xl my-40">बिश्वेश्वर सुशीला प्रतिष्ठान</h1>
            <a href="#"><button class="btn btn-outline">Learn more &nbsp > </button></a>
          </div>
      </div>
    </section>

    <section class="contact">
        <div class="px-10 md:px-40">
          <h2 class="text-4xl md:text-8xl color-bsf py-14">Contact Us</h2>
          <div class="container px-auto md:px-20">
          <form action="">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <div> 
              <div class="form-control mb-6">
                <label class="label">
                  <span class="label-text">Name:</span>
                </label> 
                <input type="text" placeholder="Your name" class="input input-bordered">
              </div>
              <div class="form-control mb-6">
                <label class="label">
                  <span class="label-text">Email:</span>
                </label> 
                <input type="email" placeholder="Your Email" class="input input-bordered">
              </div>
              <div class="form-control mb-6">
                <label class="label">
                  <span class="label-text">Subject:</span>
                </label> 
                <input type="text" placeholder="Subject" class="input input-bordered">
              </div>
            </div>
          
          <div> 
          <div class="form-control">
  <!-- <label class="label">
    <span class="label-text">M</span>
  </label>  -->
  <textarea class="textarea h-64 textarea-bordered textarea-info md:my-10" placeholder="Your Message here"></textarea>
</div> 
            </div>
          </div>
          <button class="btn btn-bsf-2 md:btn-sm lg:btn-md xl:btn-lg w-full md:w-1/2 mt-8 md:mt-0">Send &nbsp <i class="fas fa-paper-plane"></i></button>
        </form>
        <div class="flex my-14 text-center justify-start">
          <div class="w-full md:w-1/3">
          <p class = "color-bsf font-bold text-2xl mb-4">
          Our address
          </p class = "color-bsf font-bold text-2xl">
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus, quia?</p>
          </div>
          <div class="w-full md:w-1/3">
          <p class = "color-bsf font-bold text-2xl">
          Phone Number
            </p>
            <p>9812345678</p>
          </div>
          <div class="w-full md:w-1/3">
            <p class = "color-bsf font-bold text-2xl mb-4">
            Email Address
            </p>
            <p>email@email.com</p>
          </div>
          </div>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57155.69444036941!2d87.23678772166652!3d26.448285030804445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef744704331cc5%3A0x6d9a85e45c54b3fc!2sBiratnagar%2056613!5e0!3m2!1sen!2snp!4v1637829854242!5m2!1sen!2snp" width="100%" height="650" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
    </section>

    <?php include('partials/projslider.php') ?>
    <?php include('partials/footer.php') ?>


