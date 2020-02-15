<footer style="padding-bottom: 2px;"class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-6 mb-lg-0">
        <h3 class="heading">Church Quick Links</h3>
        <div class="row">
          <div class="col-md-6">
            <ul class="list-unstyled">
              <?php foreach ($ministries as $k => $ministry) : ?>
                <li><a href="ministry.php?id=<?php echo $k; ?>"><?php echo $ministry; ?></a></li>
              <?php endforeach; ?>
              <hr width="100px">
              <li><a href="about.php">About Us</a></li>
            </ul>
            <!-- adding eve teams quick links -->

          </div>
          <div class="col-md-4">
            <ul class="list-unstyled">
              <?php foreach ($eveTeams as $k => $eve_team) : ?>
                <li><a href="eveteams.php?id=<?php echo $k; ?>"><?php echo $eve_team; ?></a></li>
              <?php endforeach; ?>
              <hr width="100px">
              <li><a href="contact.php">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 ">
        <h3 class="heading">Events</h3>
        <?php

        ?>
      </div>
      <div class="col-md-6 col-lg-3 ">
        <h3 class="heading">Contact Information</h3>
        <div class="block-23">
          <ul>
            <li><span class="icon ion-android-pin"></span><span class="text">P.O BOX 416, MASENO, KENYA</span></li>
            <li><a href="tel:+254-797-484-904"><span class="icon ion-ios-telephone"></span><span class="text">+254-797-484-904</span></a></li>

            <li><a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=masenocu015@gmail.com"><span class="icon ion-android-mail"></span><span class="text">masenocu015@gmail.com</span></a></li>

            <li><a href="login.php"><span class="icon ion-android-lock"></span><span class="text">LogIn</span></a></li>
          </ul>
          </ul>
        </div>
      </div>
    </div>
    <div class="row ">
      <div style="padding: 5px 0 0 0" class="col-md-12 text-center copyright">
        <p class="float-md-left">
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<?php echo date('Y'); ?> All rights reserved | This site was created and is maintained with <i class="fa fa-heart" aria-hidden="true"></i> by <a target="_blank" class="text-primary">Maseno CU Media and IT Ministry.</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
        <p class="float-md-right">
          <a href="https://www.facebook.com/masenocu/" target="_blank" class="fa fa-facebook w3-xxlarge p-2"></a>
          <a href="https://twitter.com/maseno_cu" target="_blank" class="fa fa-twitter w3-xxlarge p-2 "></a>
          <a href="https://youtube.com/channel/UCXdeiqhkrIENty_ejKcT-Yg" target="_blank" class="fa fa-youtube w3-xxlarge p-2"></a>
          <!-- <a href="#" class="fa fa-instagram p-2"></a> -->
        </p>
      </div>
    </div>
  </div>
</footer>