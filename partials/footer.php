

<footer class = "py-10 px-10 md:px-40 bg-gray-400 mt-20">
    <div class="grid grid-cols-1 md:grid-cols-4">
    <img class = 'col-span-1' src="Assets/bsf-logo.png" alt="">
    <div class="col-span-1 md:col-span-2 contact-us justify-center flex md:block">
      <div class = "w-full">
        <h4 class = "text-3xl">Contact Us</h4>
        <br>
        <form action="">
          <!-- <label class="label">
            <span class="label-text">Name</span>
          </label>  -->
          <input type="text" placeholder="Name" class="input h-10 w-80 mb-4">
          <input type="text" placeholder="Address" class="input h-10 w-80 mb-4">
          <input type="number" placeholder="Phone No." class="input h-10 w-80 mb-4">
          <input type="email" placeholder="Email" class="input h-10 w-80 mb-4">
          <input type="text" placeholder="Occupation" class="input h-10 w-80 mb-4">
          <br>
          <div class = "grid gap-6 lg:grid-flow-col lg:gap-0">
          <textarea class="textarea h-24 w-80" placeholder="Message"></textarea>
          <div class = "-translate-x-32 ftr-btn"> 
            <button class = "btn btn-lg btn-wide btn-bsf-2"> Send &nbsp <i class="fas fa-paper-plane"></i> </button> 
          </div>
          </div>
        </form>
      </div>
      <br>
    </div>
    <div class="col-span-1 contact flex justify-center md:block col-start-2 row-start-1 md:col-start-4 md:row-start-1">
     <div>
      <h4 class = "text-3xl text-center md:text-left">Contact</h4>
        <br>
        <p>Tamour Marg -3</p>
        <p>Maharajung Chakrapath, <br> Kathmandu, Nepal</p>
        <p>Email <b>email@email.com</b></p>
        <p> Phone No. <a href="#">9847263316 / 9851196201</a></p>
     </div>
    </div>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine.js"></script>
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


</body>
</html>