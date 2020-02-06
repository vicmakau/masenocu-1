    <?php include 'includes/header.php';
    $ministries = array(
      "mit" => "Media and IT",
      "praise" => "Praise and Worship",
      "creative" => "Creative",
      "hospitality" => "Hospitality",
      "high-school" => "High School",
      "instrumentalist" => "Instrumentalist",
      "sunday-school" => "Sunday School",
      "discipleship" => "Discipleship",
      "intercessory" => "Intercessory"
    );

    // Read ministries.json
    $filename = "ministries.json";
    $configfile = fopen($filename, 'r') or die("Unable to open config file $filename");
    $json = fread($configfile, filesize($filename));
    fclose($configfile);
    $ministry_descriptions = json_decode($json);
    ?>

    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_1.jpg);">
      <div class="container">
        <div class="row align-items-center justify-content-center site-hero-inner">
          <div class="col-md-8 text-center">

            <div class="mb-5 element-animate">
              <div class="block-17">
                <h1 class="heading mb-4">Ministries</h1>
                <div class="lead">Ministries provides service to the church through devotion. We do all the the church activities pertaining the welfare of the brethrens and all inclusions</div>
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
              <h3 class="block-36-heading">Ministries Links</h3>
              <ul>
              
                <?php foreach ($ministries as $id => $name) : ?>
                  <li <?= (isset($_GET['id'])) && ($_GET['id'] == $id) ? 'class="active disabled"' : '' ?>>
                    <a href="ministry.php?id=<?= $id; ?>"><?= $name; ?></a>
                  </li>
                <?php endforeach; ?>
              </ul>
              
            </div>
            
          </div>
          <div class="col-md-8 pl-md-5">



            <?php if (isset($_GET['id'])) :
              $ministry_id = $_GET['id'];
              $ministry = $ministry_descriptions->$ministry_id; ?>
              <div class="section-heading">
                <h2 class="heading"><?= $ministry->name; ?></h2>
              </div>

                

              <p><?= $ministry->intro; ?></p>
              <p><img src="<?= $ministry->image; ?>" alt="<?= $ministry->name; ?>" class="img-fluid"></p>
              <!-- director pics -->

              <div class="image align-self-center ml-auto order-2 ml-3">
                    <a data-flickr-embed="true" href="https://www.flickr.com/photos/185427252@N03/49104509532/in/dateposted-public/" title="booban"><img style="height: 100px; " src="https://live.staticflickr.com/65535/49104509532_4c19dd89b7.jpg"alt="booban"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8" target="_blank"></script></div>
                    <div class="name-text align-self-center ml-auto order-1 text-right">
                        <h2 class="heading">Simon Nyongesa</h2>
                        <span class="meta">WESO</span>
                    </div>

              <p><?= $ministry->text; ?></p>
            <?php endif; ?>

            <!-- table display -->

            <table class="table table-borderless table-hover">
            <tr>
                <th>Name</th>
                <th>City</th>
                <th>Company</th>
            </tr>
            <tr>
                <td>Booban Times</td>
                <td>Kisumu</td>
                <td>Perfecto designs</td>
            </tr>
            <tr>
                 <td>Steve Kings</td>
                 <td>Nairobi</td>
                 <td>Writing Channel</td>
            </tr>
            <tr>
                <td>Booban Times</td>
                <td>Kisumu</td>
                <td>Perfecto designs</td>
             </tr>
            <tr>
                <td>Steve Kings</td>
                <td>Nairobi</td>
                <td>Writing Channel</td>
            </tr>
        </table>
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

    <script src="js/main.js"></script>
    </body>

    </html>