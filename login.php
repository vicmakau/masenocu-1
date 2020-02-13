    <?php
      include 'includes/header.php';
    ?>
<!-- Body -->
<body class="mt-5">
<div class="row">
 <div class="col-md-2">
 </div>
  <div class="col-md-8">
    <div class="right">
      <div class="row">
         <div class="col-md-7">
          </div>
           <div class="col-md-5">
             <div class="banner">
               <span class="sign-in-banner">Sign In</span>
               <span class="sign-up-banner">
                  <a href="sign-up.php">Sign up</a>
               </span>
               </div>
            </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="header-label">
              <span class="sign-in-text">Sign In </span>
              <span class="sign-in-text-or">or</span>
              <span class="sign-up-text">
              <a href="sign-up.php">Sign Up</a>
              </span>
          </div>
        </div>
        <div class="col-md-6">

        </div>
      </div>
     <div class="row">
       <div class="col-md-8 col-xs-12">
         <form  action="includes/connection.php" method="post" autocomplete="off">
         <div class="forms">
             <label class="label">EMAIL</label><br>
             <input name="loginemail" class="text-area" type="email" placeholder="eg example@masenocu.com" required> <br>
             <label class="label">PASSWORD</label><br>
             <input  name="loginpassword" class="text-area" type="password" placeholder="use a strong passsword" required> <br>
         </div>
        </div>
      </div>
       <div class="row">
         <div class="col-md-4 col-xs-12">
           <div class="refuses">
             <button type="submit" name="login" style="color: white"  class="btn btn-primary-white py-3 px-5">Sign In</button>
            </div>
         </div>
       </form>

         <div class="col-md-8  col-xs-12">
           <span class="text-final">
            <a href="sign-up.php">I dont have an account</a>
           </span>
          </div>
        </div>
        </div>
  </div>
 <div class="col-md-2">
 </div>
</div>
  <!-- <div class="form-1"> -->


</body>


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
    </body>

    </html>
