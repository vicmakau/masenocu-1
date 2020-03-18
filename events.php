<?php
include("includes/header.php");
?>
<!-- END header -->

<section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_2.jpg);">
  <div class="container">
    <div class="row align-items-center justify-content-center site-hero-inner">
      <div class="col-md-8 text-center">

        <div class="mb-5 element-animate">
          <div class="block-17">
            <h1 class="heading mb-4">News &amp; Events</h1>
            <div class="lead">View all our Upcoming events here</div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- END section -->



      <!--<section class="site-section bg-light">-->
      <!--  <div class="container">-->
      <!--    <div class="row">-->
      <!--      <div class="col-md-12">-->
      <!--        <div class="section-heading">-->
      <!--          <h2 class="heading">Church Ministry</h2>-->
      <!--        </div>-->
      <!--      </div>-->
      <!--    </div>-->
      <!--  </div>-->


        <div class="block-13 mb-3">
          <div class="nonloop-block-13 owl-carousel">
            <?php
            $event_sql = "SELECT * FROM `activities` ORDER BY date DESC";
            $event_result = mysqli_query($db, $event_sql);
            if (mysqli_num_rows($event_result) > 0) :
              while($event_row = mysqli_fetch_assoc($event_result)):?>
                              <div class="item">
                                <div class="block-20">
                                  <figure>
                                    <a href="#"><img src="https://z-p3-scontent.fmba2-1.fna.fbcdn.net/v/t1.0-0/p200x200/49671095_590680258043788_8824584078608039936_n.jpg?_nc_cat=111&_nc_ohc=rDCKJhB-e08AQm5pBk3d5EoDPnrbgKc7xB_sUZfsnWcO4COvL3WJniAig&_nc_ht=z-p3-scontent.fmba2-1.fna&oh=cd93cd292d7da10cb2a7d3f8bc0c4770&oe=5E4E9106" alt="Maseno Cu" height"50" class="img-fluid"></a>
                                  </figure>
                                  <div class="text text-center">
                                    <h4 class="heading"><a href="#"><?=$event_row['title']?></a></h4>
                                    <p>Date <?php
                                    $d=strtotime($event_row['date']);
                                    echo date("d M ,Y ", $d);echo "Time ".date("H:i ", $d);
                                      ?>:<br>Venue <b> <?= $event_row['venue']?></b> </p>
                                    <p class="event-description"> <?=$event_row['description'] ?> </p>
                                    <!-- <p><a href="#">Read More</a></p> -->
                                  </div>
                                </div>
                              </div>
              <?php
            endwhile;
            endif;
            ?>
          </div>
        </div>
      </section>


<?php include("includes/footer.php"); ?>


<!-- loader -->
<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
    <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
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
