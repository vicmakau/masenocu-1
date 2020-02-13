<?php
      include 'includes/header.php';
    ?>
<!-- body -->

<div class="row " style="margin-top:50px">
  <div class="col-md-2"></div>

  <div class="col-md-8">
    <div class="form-1">
    <div class="right">
                <div class="banner">
                    <span class="sign-in-banner-2">
                      <a href="login.php">Sign In</a>

                    </span>
                    <span class="sign-up-banner-2">
                      <a href="sign-up.php">Sign up</a>
                    </span>

                </div>
                <br>
                <div class="header-label">
                    <span class="sign-up-text">
                        <a href="login.php">Sign In</a>
                     </span>
                    <span class="sign-in-text-or">or</span>
                    <span  class="sign-in-text">Sign Up</span>
                </div>
                <form class="form" action="includes/connection.php" method="post">
                <div class="forms">
                  <label class="label">FIRST NAME:</label><br>
                   <input name="memberfirstname" class="text-area" type="text" placeholder="Enter your firstname" required> <br>
                   <label class="label">LAST NAME:</label><br>
                    <input name="memberlastname" class="text-area" type="text" placeholder="Enter your lastname" required> <br>
                    <label class="label">EMAIL</label><br>
                     <input name="memberemail" class="text-area" type="email" placeholder="eg example@masenocu.com" required> <br>
                     <label class="label">PHONE</label><br>
                     <input name="memberphone" class="text-area" type="text" placeholder="eg 07-12-345-678" required> <br>
                     <div class="">
                     <label for="groupId">YEAR OF STUDY</label><br>
                     <select name="memberyos" class="selectpicker text-area" name="activityCategory" id="groupId" >
                       <option value="1" style="color:black"  >1ST</option>
                       <option value="2" style="color:black"  >2ND</option>
                       <option value="3" style="color:black"  >3RD</option>
                       <option value="4" style="color:black"  >4TH</option>
                     </select>
                     </div>
                     <label class="label">PASSWORD</label><br>
                      <input type="password" class="text-area" id="psw" name="memberpassword" >
                       <input type="checkbox" onclick="showPassword()">Show Password <br>
                     <label class="label" >CONFIRM PASSWORD</label><br>
                     <input class="text-area" name="memberCpassword" type="password" placeholder="re-type your password to comfirm" required> <br>
                </div>

                <div class="refuses">
                    <button  type="submit" name="signup" style="color: white" class="btn btn-primary-white py-3 px-5">Sign Up</button>
                    <span class="text-final">
                    <a href="login.php">I have an account</a>
                    </span>
                </div>
              </form>

            </div>
      </div>


  </div>

  <div class="col-md-2">  </div>

</div>

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214" />
      </svg></div>
<script type="text/javascript" src="js/auth.js"></script>

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
