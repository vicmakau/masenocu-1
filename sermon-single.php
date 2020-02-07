<?php
$id = $mysqli->real_escape_string( $_GET['id']);
include 'includes/header.php';

$sql = "SELECT * FROM sermons WHERE id = $id";
$res = mysqli_query($db, $sql);
if (mysqli_num_rows($res) === 1)
  $sermon = mysqli_fetch_assoc($res);

$latest_sermons = [];
$sql = "SELECT * FROM sermons ORDER BY date DESC LIMIT 6";
$res = mysqli_query($db, $sql);
while ($row = mysqli_fetch_assoc($res))
  array_push($latest_sermons, $row);
$latest_sermon = $latest_sermons[0];
?>

<section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_2.jpg);">
  <div class="container">
    <div class="row align-items-center justify-content-center site-hero-inner">
      <div class="col-md-8 text-center">
        <div class="mb-5 element-animate">
          <div class="block-17">
            <h1 class="heading mb-4"><?php echo $sermon['title']; ?></h1>
            <span class="lead">Posted on <?php echo DateTime::createFromFormat('Y-m-d H:i:s', $sermon['date'])->format('F j, Y'); ?> by <?php echo $sermon['speaker']; ?></span>
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
      <div class="col-md-4">
        <div class="block-36">
          <h3 class="block-36-heading">Sermons Links</h3>
          <ul>
            <li class="active"><a href="sermon-single.php?id=<?php echo $latest_sermon['id']; ?>">Latest Sermon</a></li>
            <li><a href="<?php echo $latest_sermon['video']; ?>">Video</a></li>
            <li><a href="<?php echo $latest_sermon['video']; ?>">Audio</a></li>
            <li><a href="<?php echo $latest_sermon['document']; ?>">Document</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-8 pl-md-5">

        <div class="block-44 d-flex mb-3">
          <!-- <div class="block-44-image"><img src="images/image_tall_1.jpg" alt="Image placeholder"></div> -->
          <div class="block-44-text">
            <h3 class="block-44-heading"><?php echo $sermon['title']; ?></h3>
            <div class="block-44-meta">Posted on <?php echo DateTime::createFromFormat('Y-m-d H:i:s', $sermon['date'])->format('F j, Y'); ?>, <?php echo $sermon['speaker']; ?></div>
            <div class="block-44-icons">
              <a href="<?php echo $sermon['video']; ?>" class="fa fa-video-camera"></a>
              <a href="<?php echo $sermon['audio']; ?>" class="fa fa-headphones"></a>
              <a href="<?php echo $sermon['document']; ?>" class="fa fa-book"></a>
            </div>
          </div>
        </div>

        <p><img src="images/big_image_1.jpg" alt="Image placeholder" class="img-fluid"></p>
        <p><?php echo $sermon['summary']; ?></p>

        <div class="site-section">
          <div class="section-heading">
            <h2 class="heading">More Sermons</h2>
          </div>

          <?php
          $icon = 1;
          foreach ($latest_sermons as $sermon) :
            if ($icon === 5) $icon = 1;
          ?>
            <div class="block-44 d-flex mb-3">
              <div class="block-44-image"><img src="images/image_tall_<?php echo $icon++; ?>.jpg" alt="Image placeholder"></div>
              <div class="block-44-text">
                <h3 class="block-44-heading"><a href="sermon-single.php?id=<?php echo $sermon['id']; ?>"><?php echo $sermon['title']; ?>]</a></h3>
                <div class="block-44-meta">Posted on <?php echo DateTime::createFromFormat('Y-m-d H:i:s', $sermon['date'])->format('F j, Y'); ?>, <?php echo $sermon['speaker']; ?></div>
                <div class="block-44-icons">
                  <a href="<?php echo $sermon['video']; ?>" class="fa fa-video-camera"></a>
                  <a href="<?php echo $sermon['audio']; ?>" class="fa fa-headphones"></a>
                  <a href="<?php echo $sermon['document']; ?>" class="fa fa-book"></a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>

        </div>
      </div>
    </div>
  </div>
</section>



<footer class="site-footer">
  <div class="container">
    <div class="row mb-5">
      <!--   <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <p>Perferendis eum illum voluptatibus dolore tempora consequatur minus asperiores temporibus.</p>
          </div> -->
      <div class="col-md-6 col-lg-6 mb-5 mb-lg-0">
        <h3 class="heading">Church Quick Links</h3>
        <div class="row">
          <div class="col-md-4">
            <ul class="list-unstyled">
              <li><a href="#">Men's Ministry</a></li>
              <li><a href="#">Women's Ministry</a></li>
              <li><a href="#">Children's Ministry</a></li>
              <li><a href="#">Youth Ministry</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-unstyled">
              <li><a href="#">Senior Adult Ministry</a></li>
              <li><a href="#">Marriage Ministries</a></li>
              <li><a href="#">Missions & Outreach</a></li>
              <li><a href="#">Prayer Ministry</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-unstyled">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Location</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">Privacy &amp; Policy</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
        <h3 class="heading">Events</h3>
        <div class="block-21 d-flex mb-4">
          <div class="text">
            <h3 class="heading mb-0"><a href="#">Consectetur Adipisicing Elit</a></h3>
            <div class="meta">
              <div><a href="#"><span class="ion-android-calendar"></span> May 29, 2018</a></div>
              <div><a href="#"><span class="ion-android-person"></span> Admin</a></div>
              <div><a href="#"><span class="ion-chatbubble"></span> 19</a></div>
            </div>
          </div>
        </div>
        <div class="block-21 d-flex mb-4">
          <div class="text">
            <h3 class="heading mb-0"><a href="#">Dolore Tempora Consequatur</a></h3>
            <div class="meta">
              <div><a href="#"><span class="ion-android-calendar"></span> May 29, 2018</a></div>
              <div><a href="#"><span class="ion-android-person"></span> Admin</a></div>
              <div><a href="#"><span class="ion-chatbubble"></span> 19</a></div>
            </div>
          </div>
        </div>
        <div class="block-21 d-flex mb-4">
          <div class="text">
            <h3 class="heading mb-0"><a href="#">Perferendis eum illum</a></h3>
            <div class="meta">
              <div><a href="#"><span class="ion-android-calendar"></span> May 29, 2018</a></div>
              <div><a href="#"><span class="ion-android-person"></span> Admin</a></div>
              <div><a href="#"><span class="ion-chatbubble"></span> 19</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
        <h3 class="heading">Contact Information</h3>
        <div class="block-23">
          <ul>
            <li><span class="icon ion-android-pin"></span><span class="text">Maseno University Christian Union Sermon LH 15.</span></li>
            <li><a href="#"><span class="icon ion-ios-telephone"></span><span class="text">Secretary's Number.</span></a></li>
            <li><a href="#"><span class="icon ion-android-mail"></span><span class="text">cu email.</span></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row pt-5">
      <div class="col-md-12 text-center copyright">

        <p class="float-md-left">
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>
            document.write(new Date().getFullYear());
          </script> All rights reserved | This site was created and is maintained <i class="fa fa-heart" aria-hidden="true"></i> by <a href="georgekariuki.tk" target="_blank" class="text-primary">Maseno CU Media and IT dept. 2019.</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
        <p class="float-md-right">
          <a href="#" class="fa fa-facebook p-2"></a>
          <a href="#" class="fa fa-twitter p-2"></a>
          <a href="#" class="fa fa-linkedin p-2"></a>
          <a href="#" class="fa fa-instagram p-2"></a>

        </p>
      </div>
    </div>
  </div>
</footer>
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
</body>

</html>