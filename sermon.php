    <?php
    include 'includes/header.php';

    $sql = "SELECT * FROM sermons ORDER BY date DESC";
    $res = mysqli_query($db, $sql);
    $sermons = [];
    $latest_id = 0;
    if (mysqli_num_rows($res) > 0)
      while ($row = mysqli_fetch_assoc($res)) {
        array_push($sermons, $row);
        $latest_id = $row['id'];
      }
    ?>
    <!-- END header -->

    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_2.jpg);">
      <div class="container">
        <div class="row align-items-center justify-content-center site-hero-inner">
          <div class="col-md-8 text-center">

            <div class="mb-5 element-animate">
              <div class="block-17">
                <h1 class="heading mb-4">Sermons</h1>
                <div class="lead">
                  Get all the previous sermons incase you missed, or you need them. Growing in the word is the desire of every believer!
                </div>
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
              <h3 class="block-36-heading">Sermon Links</h3>
              <ul>
                <li class="active"><a href="sermon-single.php?id=<?php echo $latest_sermon['id']; ?>">Latest Sermon</a></li>
                <li><a href="<?php echo $latest_sermon['video']; ?>">Video</a></li>
                <li><a href="<?php echo $latest_sermon['video']; ?>">Audio</a></li>
                <li><a href="<?php echo $latest_sermon['document']; ?>">Document</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-8 pl-md-5 paged">

            <?php
            $icon = 1;
            foreach ($sermons as $sermon) :
              if ($icon === 5) $icon = 1;
            ?>
              <div class="block-44 d-flex mb-3 item item-visible">
                <div class="block-44-image"><img src="images/image_tall_<?php echo $icon++; ?>.jpg" alt="Image placeholder"></div>
                <div class="block-44-text">
                  <h3 class="block-44-heading"><a href="sermon-single.php?id=<?php echo $sermon['id']; ?>"><?php echo $sermon['title']; ?></a></h3>
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

          <div class="row mt-5">
            <div class="col text-center">
              <div class="block-27">
                <div class="pagination-indicator"></div>
                <ul class="pagination-container"></ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php include 'includes/footer.php'; ?>
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
    <script src="js/jquery.jold.paginator.min.js"></script>

    <script src="js/main.js"></script>
    <script src="">
      $(function() {
        const myPaginator = new $('.paged').joldPaginator({
          'perPage': 10,
          'items': '.item',
          'paginator': '.pagination-container',
          'indicator': {
            'selector': '.pagination-indicator',
            'text': 'Showing item {start}-{end} of {total}',
          }
        })
      });
    </script>
    </body>

    </html>