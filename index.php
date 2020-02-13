<?php
include("includes/header.php");
?>
<!-- END header -->

<section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_2.jpg);">
  <div class="container">
    <div class="row align-items-center justify-content-center site-hero-inner">
      <div class="col-md-8 text-center">

        <div class="mb-5 element-animate">
          <div class="block-17"> <br><br>
            <?php
            $sem_sql = "SELECT * FROM `semester_theme` ORDER by time desc LIMIT 1";
            $sem_result = mysqli_query($db, $sem_sql);
            if (mysqli_num_rows($sem_result) > 0) :
              while($sem_row = mysqli_fetch_assoc($sem_result)):?>
            <h1 class="heading mb-4"><?= $sem_row['theme']?></h1>
            <h1 class="heading mb-4"><?= $sem_row['bible_verse']?></h1>
            <p><a href="about.php" class="btn btn-primary-white py-3 px-5">About Us</a> <br> <br> <a href="" class="text-white ml-4"> <span class="ion-ios-location mr-2"></span> Visit Our Church</a></p>
            <?php
          endwhile;
          endif;
          ?>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<?php $sql = "SELECT * FROM sermons ORDER BY date DESC LIMIT 3";
$res = mysqli_query($db, $sql);
$latest_sermons = [];
if (mysqli_num_rows($res) > 0)
  while ($row = mysqli_fetch_assoc($res))
    array_push($latest_sermons, $row); ?>
<section class="block-42 overlap">
  <div class="container">
    <div class="row">
      <div class="col-md-12 d-lg-flex">

        <div class="block-42-text">
          <div class="block-42-label">Latest Sermon:</div>
          <div class="block-42-title mx-2">
            <a href="sermon-single.php?id=<?php echo $latest_sermons[0]['id']; ?>"><strong><?php echo $latest_sermons[0]['title']; ?></strong></a>
          </div>
          <div class="block-42-meta">By  
          <strong>
              <?php 
                echo $latest_sermons[0]['speaker']; 
               ?>
              </strong> Posted on
                 <?php echo DateTime::createFromFormat('Y-m-d H:i:s', $latest_sermons[0]['date'])->format('F j, Y'); 
                  ?> 
              </div> 
        </div>
        <div class="block-42-icons ml-auto"> 
          <a href="<?php echo $latest_sermons[0]['video']; ?>" class="fa fa-video-camera pl-0"></a>
          <a href="<?php echo $latest_sermons[0]['audio']; ?>" class="fa fa-headphones"></a>
          <a href="<?php echo $latest_sermons[0]['document']; ?>" class="fa fa-book"></a>
        </div>

      </div>
    </div>
  </div>
</section>

<section class="site-section">
  <div class="container">
    <div tyle=" margin: 0px; " class="row align-items-center">
      <div class="col-md-6 order-md-2">
        <div style="height: max-content; width: max-content;"class="block-16">
          <figure>
            <img style=" height: 400px; " src="images/masenoCU.jpg" alt="Image placeholder" class="img-fluid img-shadow">
          </figure>
        </div>
      </div>
      <div class="col-md-6 order-md-1">

        <div class="block-15">
          <div class="heading">
            <h2>Welcome To Maseno University Christian Union</h2>
          </div>
          <div class="text mb-5">
            <h3 class="mb-4 text-muted">Our Motto:Pursuing Holiness</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END section -->

<section class="site-section pt-0 center">
  <div class="container w3-center">
    <div class="row ">
      <div class="col-md-6 col-lg-4 mb-5">
        <div class="block-43">
          <div class="block-43-icon">
            <!-- <span class="icon-wrapper"> -->
            <span class="w3-xxlarge  fa fa-book text-primary"></span>
            <!-- </span> -->

          </div>
          <div class="block-43-text">
            <h3 class="block-43-heading">MISSION</h3>
            <h4 class="text-muted"> Naturing beliefs and developing Christ like character amongst students and communities.</h4>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-5">
        <div class="block-43">
          <div class="block-43-icon ">
            <div class="" id="hexagon">
              <span class="w3-xxlarge fa fa-user text-primary"></span>
            </div>

          </div>
          <div class="block-43-text">
            <h3 class="block-43-heading">VISION</h3>
            <h4 class="text-muted">Living as true disciples of Jesus Christ.</h4>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-5">
        <div class="block-43">
          <div class="block-43-icon">
            <!-- <span class="icon-wrapper"> -->
            <span class="w3-xxlarge icon fa fa-heart text-primary"></span>
            <!-- </span> -->

          </div>
          <div class="block-43-text">
            <h3 class="block-43-heading">MOTTO</h3>
            <h4 class="text-muted">Pursuing Holiness.</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="site-section bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2 class="heading">Church Ministry</h2>
        </div>
      </div>
    </div>
  </div>


  <div class="block-13">
    <div class="nonloop-block-13 owl-carousel">
      <div class="item">
        <div class="block-20">
          <figure>
            <a href="#"><img src="https://z-p3-scontent.fmba2-1.fna.fbcdn.net/v/t1.0-0/p200x200/49671095_590680258043788_8824584078608039936_n.jpg?_nc_cat=111&_nc_ohc=rDCKJhB-e08AQm5pBk3d5EoDPnrbgKc7xB_sUZfsnWcO4COvL3WJniAig&_nc_ht=z-p3-scontent.fmba2-1.fna&oh=cd93cd292d7da10cb2a7d3f8bc0c4770&oe=5E4E9106" alt="Maseno Cu" class="img-fluid"></a>
          </figure>
          <div class="text text-center">
            <h3 class="heading"><a href="#">Media and IT</a></h3>
            <p> Covers technical activities including videography,photography,projection and publicity. </p>
            <!-- <p><a href="#">Read More</a></p> -->
          </div>
        </div>
      </div>
      <div class="item">
        <div class="block-20">
          <figure>
            <a href="#"><img src="https://z-p3-scontent.fmba2-1.fna.fbcdn.net/v/t1.0-0/p200x200/49575841_590680248043789_2850377306805895168_n.jpg?_nc_cat=108&_nc_ohc=_pfxAry3C_wAQmceNT40qF-SQY5VbmS5Ys-eCxYinOnb4V6dBpQioWmPQ&_nc_ht=z-p3-scontent.fmba2-1.fna&oh=6101f1751f64ee82df1f076d53557aea&oe=5E87E5FF" alt="Maseno Cu" class="img-fluid"></a>
          </figure>
          <div class="text text-center">
            <h3 class="heading"><a href="#">Praise and Worship Ministry</a></h3>
            <p> We are called to serve using our voices,leading in praise and worship. </p>
            <!-- <p><a href="#">Read More</a></p> -->
          </div>
        </div>
      </div>
      <!-- Creative Ministry -->
      <div class="item">
        <div class="block-20">
          <figure>
            <a href="#"><img src="https://z-p3-scontent.fmba2-1.fna.fbcdn.net/v/t1.0-0/c116.0.200.200a/p200x200/49664823_590680311377116_8953141232985440256_o.jpg?_nc_cat=107&_nc_ohc=JbWA7iGxSVcAQnYkwmsDfjod14J05GDtljPOzWvfYk0yaPdzbSuxqXS0Q&_nc_ht=z-p3-scontent.fmba2-1.fna&oh=343e0e66cbb6abff7f91dc66582cc7bd&oe=5E4E2C77" alt="Maseno Cu" class="img-fluid"></a>
          </figure>
          <div class="text text-center">
            <h3 class="heading"><a href="#">Creative Ministry</a></h3>
            <p> We explore the word of God, delivering our talents through arts and entertainment.</p>
            <!-- <p><a href="#">Read More</a></p> -->
          </div>
        </div>
      </div>
      <!-- Hospitality ministry -->
      <div class="item">
        <div class="block-20">
          <figure>
            <a href="#"><img src="https://z-p3-scontent.fmba2-1.fna.fbcdn.net/v/t1.0-0/c25.0.200.200a/p200x200/49778645_590289881416159_584297499955560448_n.jpg?_nc_cat=107&_nc_ohc=F-nhgCRav50AQkb6wc7XZBpV1ocUIgXMnKe7sg5d5iNnB5G0bf0TY7tSw&_nc_ht=z-p3-scontent.fmba2-1.fna&oh=194c4b109a89a5ab8dcfab426bed77b6&oe=5E43D405" alt="Maseno Cu" class="img-fluid"></a>
          </figure>
          <div class="text text-center">
            <h3 class="heading"><a href="#">Hospitality Ministry</a></h3>
            <p> Cordinates members welfare ,catering and ushering as well as nurturing into resoponsible adults.</p>
            <!-- <p><a href="#">Read More</a></p> -->
          </div>
        </div>
      </div>
      <!-- High school Ministry -->
      <div class="item">
        <div class="block-20">
          <figure>
            <a href="#"><img src="https://z-p3-scontent.fmba2-1.fna.fbcdn.net/v/t1.0-0/c25.0.200.200a/p200x200/49778645_590289881416159_584297499955560448_n.jpg?_nc_cat=107&_nc_ohc=F-nhgCRav50AQkb6wc7XZBpV1ocUIgXMnKe7sg5d5iNnB5G0bf0TY7tSw&_nc_ht=z-p3-scontent.fmba2-1.fna&oh=194c4b109a89a5ab8dcfab426bed77b6&oe=5E43D405" alt="Maseno Cu" class="img-fluid"></a>
          </figure>
          <div class="text text-center">
            <h3 class="heading"><a href="#">High School Ministry</a></h3>
            <p>We want to help middle school and high school students thrive in their spiritual journey.</p>
            <!-- <p><a href="#">Read More</a></p> -->
          </div>
        </div>
      </div>
      <!-- Instrumentalists -->
      <div class="item">
        <div class="block-20">
          <figure>
            <a href="#"><img src="https://z-p3-scontent.fmba2-1.fna.fbcdn.net/v/t1.0-0/p200x200/49620968_590680288043785_7400181088540164096_n.jpg?_nc_cat=110&_nc_ohc=uhUc6RUT5LsAQmUz7XfD_cfDJOlmImIhHPY-3MYk8VDKTnrJ40NYVB70w&_nc_ht=z-p3-scontent.fmba2-1.fna&oh=cb8abb89b17de6c7a0dec5735145e7e9&oe=5E4DBFAF" alt="Maseno Cu" class="img-fluid"></a>
          </figure>
          <div class="text text-center">
            <h3 class="heading"><a href="#">Instrumentalists Ministry</a></h3>
            <p>Participation through gospel music, training and setting up of Instruments .</p>
            <!-- <p><a href="#">Read More</a></p> -->
          </div>
        </div>
      </div>
      <!-- Sunday School -->
      <div class="item">
        <div class="block-20">
          <figure>
            <a href="#"><img src="https://z-p3-scontent.fmba2-1.fna.fbcdn.net/v/t1.0-0/c25.0.200.200a/p200x200/49778645_590289881416159_584297499955560448_n.jpg?_nc_cat=107&_nc_ohc=F-nhgCRav50AQkb6wc7XZBpV1ocUIgXMnKe7sg5d5iNnB5G0bf0TY7tSw&_nc_ht=z-p3-scontent.fmba2-1.fna&oh=194c4b109a89a5ab8dcfab426bed77b6&oe=5E43D405" alt="Maseno Cu" class="img-fluid"></a>
          </figure>
          <div class="text text-center">
            <h3 class="heading"><a href="#">Sunday School Ministry</a></h3>
            <p>Teaching, Giving, Directing and Sharing Knowledge of Jesus Christ to Children.</p>
            <!-- <p><a href="#">Read More</a></p> -->
          </div>
        </div>
      </div>
      <!--  -->
      <div class="item">
        <div class="block-20">
          <figure>
            <a href="#"><img src="https://z-p3-scontent.fmba2-1.fna.fbcdn.net/v/t1.0-0/c25.0.200.200a/p200x200/49778645_590289881416159_584297499955560448_n.jpg?_nc_cat=107&_nc_ohc=F-nhgCRav50AQkb6wc7XZBpV1ocUIgXMnKe7sg5d5iNnB5G0bf0TY7tSw&_nc_ht=z-p3-scontent.fmba2-1.fna&oh=194c4b109a89a5ab8dcfab426bed77b6&oe=5E43D405" alt="Maseno Cu" class="img-fluid"></a>
          </figure>
          <div class="text text-center">
            <h3 class="heading"><a href="#">Discipleship Ministry</a></h3>
            <p>We spread the good news,teach the word and reaching souls through missions and evangelism.</p>
            <!-- <p><a href="#">Read More</a></p> -->
          </div>
        </div>
      </div>

      <div class="item">
        <div class="block-20">
          <figure>
            <a href="#"><img src="https://z-p3-scontent.fmba2-1.fna.fbcdn.net/v/t1.0-0/c25.0.200.200a/p200x200/49778645_590289881416159_584297499955560448_n.jpg?_nc_cat=107&_nc_ohc=F-nhgCRav50AQkb6wc7XZBpV1ocUIgXMnKe7sg5d5iNnB5G0bf0TY7tSw&_nc_ht=z-p3-scontent.fmba2-1.fna&oh=194c4b109a89a5ab8dcfab426bed77b6&oe=5E43D405" alt="Maseno Cu" class="img-fluid"></a>
          </figure>
          <div class="text text-center">
            <h3 class="heading"><a href="#">Intercessory Ministry</a></h3>
            <p>We have fellowship through prayer presenting needs and petitions individually and the church as a whole.</p>
            <!-- <p><a href="#">Read More</a></p> -->
          </div>
        </div>
      </div>



    </div>
  </div>
</section>

<section class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mb-5">
        <div class="section-heading mb-5">
          <h2 class="heading">Latest Sermons</h2>
        </div>

        <?php foreach ($latest_sermons as $i => $sermon) : ?>
          <div class="block-44 d-flex mb-3">
            <div class="block-44-image"><img src="images/image_tall_<?php echo $i + 1; ?>.jpg" alt="Image placeholder"></div>
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
      <div class="col-md-6 mb-5">

        <div class="section-heading mb-5">
          <h2 class="heading">Latest Events</h2>
        </div>

        <div class="block-44 d-flex mb-3">
          <div class="block-44-image"><img src="images/image_tall_4_large.jpg" alt="Image placeholder"></div>
          <div class="block-44-text">
            <h3 class="block-44-heading"><a href="#">Leaders Training</a></h3>
            <div class="block-44-meta mb-2">November 9th 2019, The whole church: leaders</div>
            <p>A session to bring the newly selected leaders into norms and customs of the church, dedicating them unto God for service</p>
            <!-- <p><a href="#">Read More</a></p> -->
          </div>
        </div>

        <div class="block-44 d-flex mb-3">
          <div class="block-44-image"><img src="images/image_tall_5_large.jpg" alt="Image placeholder"></div>
          <div class="block-44-text">
            <h3 class="block-44-heading"><a href="#">Zions weekend</a></h3>
            <div class="block-44-meta mb-2">November 16, 2019|Zions </div>
            <p>The Zions(4th Years) to participate actively in the curch because it their weekend</p>
            <!-- <p><a href="#">Read More</a></p> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- testimonials -->

<div class="site-section bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading mb-5">
          <h2 class="heading">Change Lives</h2>
        </div>
      </div>
    </div>
    <!-- begin -->
    <div class="block-13">
      <div class="nonloop-block-13 owl-carousel">

        <div class="item">
          <div class="block-33">
            <div class="text mb-5">
              <blockquote>
                <p>&rdquo; I've been a devoted Christian all along. Coming to this Christian union has been of great impact to my life. It has helped me keeping the zeal and containment in the Lord. Its a nice place for everyone to connect with God &ldquo;</p>
              </blockquote>
            </div>
            <div class="vcard d-flex">
              <div class="image align-self-center ml-auto order-2 ml-3">
                <a data-flickr-embed="true" href="https://www.flickr.com/photos/185427252@N03/49104509532/in/dateposted-public/" title="booban"><img src="https://live.staticflickr.com/65535/49104509532_4c19dd89b7.jpg" alt="booban"></a>
                <script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8" target="_blank"></script>
              </div>
              <div class="name-text align-self-center ml-auto order-1 text-right">
                <h2 class="heading">Simon Nyongesa</h2>
                <span class="meta">WESO</span>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="block-33">
            <div class="text mb-5">
              <blockquote>
                <p>&rdquo; A friend took me to the church. Thats when I met my salvation. By the grace of the Saviour Jesus christ, I acknowldge to be saved, and this is the place I keep growing my faith. I expect to grow more in faith as days goes by. Indeed thats my quest &ldquo;</p>
              </blockquote>
            </div>
            <div class="vcard d-flex">
              <div class="image align-self-center ml-auto order-2 ml-3"><img src="images/person_1.jpg" alt="Person here" target="_blank"></div>
              <div class="name-text align-self-center ml-auto order-1 text-right">
                <h2 class="heading">Maria Nkatha</h2>
                <span class="meta">CET</span>
              </div>
            </div>
          </div>
        </div>


        <div class="item">
          <div class="block-33">
            <div class="text mb-5">
              <blockquote>
                <p>&rdquo; The CU has given me confidence. I can testify Christ wherever I am. The missions and inreaches has helped me groW to another level. I have grown alot the way I associate with other people. Even outside church. I am not as I was before. &ldquo;</p>
              </blockquote>
            </div>
            <div class="vcard d-flex">
              <div class="image align-self-center ml-auto order-2 ml-3"><img src="images/person_2.jpg" alt="Person here"></div>
              <div class="name-text align-self-center ml-auto order-1 text-right">
                <h2 class="heading">Vicky Makau</h2>
                <span class="meta">UET</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- testimonials -->

<div role="dialog" tabindex="-1" class="modal fade" id="modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:rgb(255,149,0);">
        <h4 class="modal-title">Discovery !!!!!</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>
      <div class="modal-body" style="background-color:rgb(237,188,121);">
        <p>The Computer Screen is smaller than needed. Please use a machine with a larger screen.</p>
        <p>I.e Use a Laptop to access the admin panel.</p>
      </div>
      <div class="modal-footer" style="background-color:rgb(255,149,0);"><button class="btn btn-warning" type="button" data-dismiss="modal" style="color:rgb(243,243,243);background-color:#ff0d0d;">Close</button></div>
    </div>
  </div>
</div>


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
</body>

</html>
