    <?php 
    include 'includes/header.php';

    if (isset($_GET['id'])) {
      $groups = [];
      $sql = "SELECT * FROM groups WHERE type = 'ministry'";
      $res = mysqli_query($db, $sql);
      while ($row = mysqli_fetch_assoc($res))
        array_push($groups, $row);
      $ministry = (object) $groups[$_GET['id']];

      $leaders = [];
      $sql = "SELECT leaders.id, leaders.docket, leaders.member_id, leaders.group_id, members.first_name, members.last_name, members.phone, members.email FROM leaders LEFT JOIN members on leaders.member_id = members.id WHERE group_id = {$ministry->id}";
      $res = mysqli_query($db, $sql) or die(mysqli_error($db));
      while ($row = mysqli_fetch_assoc($res))
        array_push($leaders, $row);
    }
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
              <h3 class="block-36-heading">Ministries</h3>
              <ul>

                <?php foreach ($ministries as $id => $name) : ?>
                  <li <?= (isset($_GET['id'])) && ($_GET['id'] == $id) ? 'class="active disabled"' : '' ?>>
                    <a href="ministry.php?type=ministry&id=<?= $id; ?>"><?= $name; ?></a>
                  </li>
                <?php endforeach; ?>
              </ul>

            </div>

          </div>
          <div class="col-md-8 pl-md-5">

            <?php if (isset($_GET['id'])) : ?>
              <div class="section-heading">
                <h2 class="heading"><?php echo $ministry->name; ?></h2>
              </div>

              <!-- <p><?php // echo $ministry->intro; 
                      ?></p> -->
              <!-- <p><img src="<?php // echo $ministry->image; 
                                ?>" alt="<?php // echo $ministry->name; 
                                          ?>" class="img-fluid"></p> -->
              <!-- director pics -->

              <p><?= $ministry->description; ?></p>

              <h3>Leadership</h3>
              <table class="table table-borderless table-hover">
                <tr>
                  <th>Docket</th>
                  <th>Name</th>
                  <th>Contact</th>
                </tr>
                <?php foreach ($leaders as $leader) : ?>
                  <tr>
                    <td><?php echo $leader['docket']; ?></td>
                    <td><?php echo "{$leader['first_name']} {$leader['last_name']}"; ?></td>
                    <td><?php echo $leader['phone']; ?></td>
                  </tr>
                <?php endforeach; ?>
              </table>
            <?php endif; ?>
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