 <?php include 'includes/header.php' ?>

 <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_2.jpg);">
   <div class="container">
     <div class="row align-items-center justify-content-center site-hero-inner">
       <div class="col-md-8 text-center">

         <div class="mb-5 element-animate">
           <div class="block-17">
             <h1 class="heading mb-4">Contact Us</h1>
           </div>
         </div>

       </div>
     </div>
   </div>
 </section>
 <!-- END section -->

 <section class="site-section bg-light">
   <div class="container">
     <div class="row">
       <div class="col-md-8 pr-md-5">
         <form action="#" method="post">
           <div class="row">
             <div class="col-md-4 form-group">
               <label for="name">Name</label>
               <input type="text" id="name" class="form-control py-2">
             </div>
             <div class="col-md-4 form-group">
               <label for="phone">Phone</label>
               <input type="text" id="phone" class="form-control py-2">
             </div>
             <div class="col-md-4 form-group">
               <label for="email">Email</label>
               <input type="email" id="email" class="form-control py-2">
             </div>
           </div>
           <div class="row">
             <div class="col-md-12 form-group">
               <label for="message">Write Message</label>
               <textarea name="message" id="message" class="form-control py-2" cols="30" rows="8"></textarea>
             </div>
           </div>
           <div class="row">
             <div class="col-md-6 form-group">
               <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
             </div>
           </div>
         </form>
       </div>
       <div class="col-md-4">

         <div class="block-23">
           <h3 class="heading mb-5">Contact Information</h3>
           <ul>
             <li>
               <a href="#map">
                  <span class="fa fa-map-marker px-3"></span>
                  <span class="text">P.O BOX 416, MASENO, KENYA</span>
               </a>
              </li>
             <li>
               <a href="tel:+254-797-484-904">
                 <span class="fa fa-phone px-3"></span>
                 <span class="text">+254-797-484-904</span>
                </a>
              </li>
             <li>
               <a href="mailto:masenocu015@gmail.com">
                 <span class="fa fa-envelope px-3"></span>
                 <span class="text">masenocu015@gmail.com</span>
                </a>
              </li>
              <li>
               <a href="https://www.facebook.com/masenocu/">
               <i class="fa fa-facebook px-3" aria-hidden="true"></i>
                 <span class="text">The Christian Union Maseno University</span>
                </a>
              </li>
              <li>
               <a href="https://twitter.com/maseno_cu">
                 <i class="fa fa-twitter px-3" aria-hidden="true"></i>
                 <span class="text">@maseno_cu</span>
                </a>
              </li>
           </ul>
         </div>
       </div>

     </div>

   </div>
 </section>
 <!-- END section -->

 <div id="map"></div>

 <?php include("includes/footer.php"); ?>
 <!-- END footer -->

 </div>

 <!-- loader -->
 <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
     <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
     <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214" /></svg></div>

 <script src="js/jquery-3.2.1.min.js"></script>
 <script src="js/jquery-migrate-3.0.0.js"></script>
 <script src="js/popper.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/owl.carousel.min.js"></script>
 <script src="js/jquery.waypoints.min.js"></script>
 <script src="js/jquery.stellar.min.js"></script>
 <script src="js/jquery.animateNumber.min.js"></script>
 <script src="js/jquery.magnific-popup.min.js"></script>
 <script src="js/main.js"></script>

 <!-- Maps API -->
 <script>
   "use strict";
   function initMap() {
     var hq = {
       lat: -0.0048,
       lng: 34.6004
     };
     var map = new google.maps.Map(
       document.getElementById('map'), {
         zoom: 14,
         center: hq
       });
     var marker = new google.maps.Marker({
       position: hq,
       map: map
     });
   }
 </script>
 <?php $apiKey = "AIzaSyAYV_46rKLC9XAyVJteBHnlCpQiEAmCibA"; ?>
 <script async defer src="https://maps.googleapis.com/maps/api/js?key=<?= $apiKey; ?>&callback=initMap">
 </script>
 </body>

 </html>