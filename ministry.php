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
                  <li <?= (isset($_GET['id'])) && ($_GET['id'] == $id)? 'class="active disabled"' : '' ?>>
                    <a href="ministry.php?id=<?= $id; ?>"><?= $name; ?></a>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
          <div class="col-md-8 pl-md-5">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus animi explicabo asperiores accusantium laborum distinctio quos, placeat eligendi nesciunt aliquid ut corrupti id sapiente libero, quod doloremque minima odit debitis minus. Sequi enim quibusdam, doloremque iste iure? Excepturi, ad, ratione!</p>
            <p><img src="images/big_image_1.jpg" alt="Image placeholder" class="img-fluid"></p>
            <p>Deleniti asperiores delectus, nemo consequatur omnis dolorum vel voluptatem? Consequuntur doloribus iusto adipisci quam eos fugiat, hic architecto. Consequatur ipsa error architecto? Deserunt id, consectetur non labore odio accusantium veritatis incidunt? Molestias velit deserunt harum, quibusdam est minus, sapiente modi.</p>
            <p>Adipisci tempore soluta, sed aperiam consequatur error dolorem, repellendus quos minima rem ex ipsum possimus maiores reiciendis quo, accusantium officia omnis! Porro quidem ullam architecto, sapiente, a consequatur ex nostrum eos culpa vitae tenetur voluptates, nobis temporibus, fuga facilis pariatur.</p>
            <p>Rerum, molestias ipsa doloremque velit distinctio laboriosam quidem ratione minima inventore. Blanditiis quaerat ipsa nobis fugit repudiandae, at repellendus itaque odit! Quibusdam ducimus exercitationem optio dolore, modi repudiandae beatae enim incidunt, saepe atque amet suscipit, aliquam placeat pariatur ipsam facilis.</p>
            <p>A suscipit facilis minima fugiat ipsum provident pariatur, culpa! Quia fuga aperiam, error beatae vel dolorem velit eos incidunt ducimus animi nostrum, ipsa impedit praesentium libero voluptatem est magni doloribus! Atque illum, aut deleniti adipisci natus quas, beatae nihil sit!</p>
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