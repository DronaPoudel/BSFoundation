<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.16.2/dist/full.css" rel="stylesheet" type="text/css" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css"/>
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="./style.css">
</head>
<body>


<nav class="flex items-center bg-white p-1 shadow flex-wrap px-10 md:px-40">
      <a href="#" class="mr-4 inline-flex items-center">
        <img class = "h-24" src="./Assets/bsf-logo.png" alt="">
      </a>
      <button
        class="text-black inline-flex p-3 hover:bg-gray-900 rounded lg:hidden ml-auto hover:text-white outline-none nav-toggler"
        data-target="#navigation"
      >
        <i class="material-icons">menu</i>
      </button>
      <div
        class="hidden top-navbar w-full lg:inline-flex lg:flex-grow lg:w-auto"
        id="navigation"
      >
        <div
          class="lg:inline-flex lg:flex-row lg:ml-auto lg:w-auto w-full lg:items-center items-start  flex flex-col lg:h-auto"
        >
          <a
            href="./index.php"
            class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-black items-center justify-center hover:bg-gray-900 hover:text-white text-center"
          >
            <span>Home</span>
          </a>
          <a
            href="./about-us.php"
            class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-black items-center justify-center hover:bg-gray-900 hover:text-white text-center"
          >
            <span>About Us</span>
          </a>
          <a
            href="bpkoirala.php"
            class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-black items-center justify-center hover:bg-gray-900 hover:text-white text-center"
          >
            <span>Bisheshwar P. Koirala</span>
          </a>
          <a
            href="sushilak.php"
            class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-black items-center justify-center hover:bg-gray-900 hover:text-white text-center"
          >
            <span>Sushila Koirala</span>
          </a>
          <a
            href="gallery.php"
            class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-black items-center justify-center hover:bg-gray-900 hover:text-white text-center"
          >
            <span>Gallery</span>
          </a>
          <a
            href="./contact.php"
            class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-black items-center justify-center hover:bg-gray-900 hover:text-white text-center"
          >
            <span>Contact</span>
          </a>
          <a
            href="./publications-main.php"
            class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-black items-center justify-center hover:bg-gray-900 hover:text-white text-center"
          >
            <span>Publications</span>
          </a>
          <a
            href="#my-modal"
            class="lg:inline-flex lg:w-auto w-full ml-3 px-6 py-2 rounded text-white items-center justify-center bg-red-600 btn-bsf hover:text-white text-center"
          >
            <span>Donate</span>
            <!-- <a href="" class="btn btn-primary"></a>  -->
          </a>
          <div id="my-modal" class="modal">
            <div class="modal-box mt-96">
              <p>Name : <b>BSFoundation</b></p> 
              <p>Bank : <b>NIC Asia, Chakrapath branch</b></p> 
              <p>Name : <b>A/C No. 00234560000469</b></p> 
              <div class="modal-action">
                <!-- <a href="/components/modal#" class="btn btn-primary">Accept</a>  -->
                <a href="#" class="btn">Close</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <script>
  $(document).ready(function() {
  $(".nav-toggler").each(function(_, navToggler) {
    var target = $(navToggler).data("target");
    $(navToggler).on("click", function() {
      $(target).animate({
        height: "toggle"
      });
    });
  });
});
</script>