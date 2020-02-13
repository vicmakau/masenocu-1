<?php
include 'includes/connection.php';
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MasenoChristianUnion</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Drag--Drop-Upload-Form.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/sign.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">



    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
    <!-- super admin css -->
    <link rel="stylesheet" href="css/superAdmin.css">

</head>
<?php
include 'includes/loginAdmin.php';
 ?>

<body class="super-admin-body" onLoad="document.getElementById('id01').style.display='block'" >
    <div class="div-holder">
        <nav class="navbar navbar-light navbar-expand-md fixed-top navigation-clean-button" style="background-color:#6c5b7b;height:100px;">
            <div class="container"><a class="navbar-brand" href="#" style="color:rgb(255,255,255);"><img src="assets/img/cu.png">Maseno Christian Union</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <p class="text-right ml-auto navbar-text" style="color:#ffffff;"><strong>Maseno CU | Admin Panel&nbsp;</strong></p>
                    <span class="ml-auto navbar-text actions" onclick="document.getElementById('id01').style.display='block'" > <a class="btn btn-light action-button" role="button" href="#"><strong>Login</strong></a></span>
                </div>
            </div>
        </nav>
    </div>
    <div class="container w3-border tab-View " >
        <div class="w3-center">
            <h1 id="head">Welcome to Admin section</h1>
        </div>
      <div class="row">
        <div class="col-md-3"  >
          <nav class="w3-white   w3-border " style="padding:0px;">
              <div class="w3-container w3-center w3-card-2">
                 <h5>Admin Panel</h5>

          <ul style="margin-right:10px; margin-left: 0px;">
            <li  class="tablink" onclick="openEvent(event, 'Activities')">
              Activities
            </li>
            <li  class="tablink" onclick="openEvent(event, 'sermon')">
              Sermon
            </li>
            <li class="tablink" onclick="openEvent(event, 'Leadership')">
              Leadership
            </li>
            <li  class="tablink"  onclick="openEvent(event, 'gallery')">
            Gallery
            </li>
            <li  class="tablink" onclick="openEvent(event, 'upload')">
              Upload Documents
            </li>
            <li class="tablink" onclick="openEvent(event, 'castMessage')">
              Cast Message
            </li>
            <li class="tablink" id="btn" onclick="openEvent(event, 'testimonials')">
              Review testimonials
            </li>
            <li  class="tablink" onclick="openEvent(event, 'semTheme')">
              Semesters Theme
            </li>
          </ul>
        </nav>
      </div>
      <div class="col-md-9">
        <div>

          <div id="Activities" class="w3-container event w3-animate-left">
            <div class="row">
              <div class="col-md-3">
                <div class=" w3-border">
                  <img src="images/cu.png" class="activity-image" alt="" height="300">
                </div>
              </div>
              <div class="col-md-8">
                <form action="includes/connection.php" method="post">
                  <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="activityTitle" class="form-control" placeholder="Enter Title" id="email" required>
                  </div>
                  <div class="form-group">
                    <label for="pwd">Date</label>
                    <input type="date" name="activityDate" class="form-control" placeholder="Enter Date" id="pwd" required>
                  </div>
                  <div class="form-group">
                    <label for="pwd">Time</label>
                    <input type="time" name="activityTime" class="form-control" placeholder="Enter time" id="pwd" required>
                  </div>
                  <div class="form-group">
                  <label for="groupId">Select group</label>
                  <select class="selectpicker form-control" name="activityCategory" id="groupId">
                    <option value="Christian Union">Christian Union</option>
                    <option value="Eve Teams">Eve Teams</option>
                    <option value="Ministry">Ministry</option>
                  </select>
                  </div>
                  <div class="form-group">
                    <label for="Venue">Venue</label>
                    <input type="text" class="form-control" name="activityVenue"placeholder="Entervenue" id="venue" required>
                  </div>
                  <div class="form-group">
                    <label for="Summary">Summary</label>
                  <textarea id="Summary" class="form-control" name="activitySummary" rows="3" cols="47" placeholder="something here" required></textarea>
                  </div>
                  <div class="w3-center">
                    <button type="submit" name="activity" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>

          </div>

          <div id="sermon" class="w3-container event w3-animate-left">
            <div class="row">
              <div class="col-md-3">
                <div class=" w3-border">
                  <img src="images/cu.png" class="activity-image" alt="" height="300">
                </div>
              </div>
              <div class="col-md-8">
                <form action="includes/connection.php" method="post">
                  <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="sermonTitle" class="form-control" placeholder="Enter Title" id="email" required>
                  </div>
                  <div class="form-group">
                    <label for="pwd">Date</label>
                    <input type="date" name="sermonDate"  class="form-control" placeholder="Enter Date" id="pwd" required>
                  </div>
                  <div class="form-group">
                    <label for="pwd">Time</label>
                    <input type="time" name="sermonTime"  class="form-control" placeholder="Enter Date" id="pwd" required>
                  </div>
                  <div class="form-group">
                    <label for="Venue">Venue</label>
                    <input type="text"  name="sermonVenue"  class="form-control" placeholder="Entervenue" id="venue" required>
                  </div>
                  <div class="form-group">
                    <label for="Speaker">Speaker</label>
                    <input type="text" required name="sermonSpeaker"  class="form-control" placeholder="Entervenue" id="venue" required>
                  </div>
                  <div class="form-group">
                    <label for="audio">Audio url</label>
                    <input type="text"  name="sermonAudio" class="form-control" placeholder="Enter audio url" id="audio">
                  </div>
                  <div class="form-group">
                    <label for="Video">Video url</label>
                    <input type="text" name="sermonVideo"  class="form-control" placeholder="Enter Video url" id="Video">
                  </div>
                  <div class="form-group">
                    <label for="pdf">Pdf url</label>
                    <input type="text" name="sermonDocument"  class="form-control" placeholder="Enter pdf url" id="pdf">
                  </div>
                  <div class="form-group">
                    <label for="Summary">Summary</label>
                  <textarea id="Summary"  class="form-control" name="sermonSummarry"  rows="3" cols="47" placeholder="something here" required></textarea>
                  </div>
                  <div class="w3-center">
                    <button type="" class="btn btn-primary">Preview</button>
                    <button type="submit"name="sermon" class="btn btn-primary">Submit</button>
                  </div>

                </form>
              </div>

            </div>
          </div>

          <div id="castMessage" class="w3-container  event w3-animate-left">
            <div class="row">
              <div class="col-md-8">
                <form action="">
                  <div class="form-group">
                  <label for="groupId">Select Receiver</label>
                  <select class="selectpicker form-control" data-live-search="true" id="groupId" multiple>
                    <option data-tokens="Members">Members</option>
                    <option data-tokens="Leaders">Leaders</option>
                  </select>
                  </div>

                  <div class="form-group">
                    <label for="title">Subject</label>
                    <input type="text" class="form-control" placeholder="Enter Title" id="email">
                  </div>
                  <div class="form-group">
                    <label for="message">Message</label>
                  <textarea id="message" class="form-control" name="message" rows="3" cols="47" placeholder="something here"></textarea>
                  </div>
                  <div class="w3-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div id="Leadership" class="w3-container event w3-animate-left">
            <div class="row">
              <div class="col-md-3">
                <div class=" w3-border">
                  <img src="images/cu.png" class="activity-image" alt="" height="300">
                </div>
              </div>
              <div class="col-md-8">
                <form action="includes/connection.php" method="post">
                  <div class="form-group">
                  <label for="groupId">Select group</label>
                  <select class="selectpicker form-control" id="groupId"  name="leaderGid">
                    <?php
                    $groupquery = "SELECT * FROM `groups`";
                    $group_result = $conn->query($groupquery);
                    if ($group_result->num_rows > 0) :
                        while($group_row = $group_result->fetch_assoc()) :?>
                        <option data-tokens="" value="<?= $group_row['id'] ?>"><?= $group_row['name'] ?></option>
                    <?php
                    endwhile;
                    endif;
                    ?>
                  </select>
                  </div>
                  <div class="form-group">
                  <label for="groupId">Person</label>
                  <select class="selectpicker form-control" data-live-search="true" id="groupId"  name="leaderMId">
                    <?php
                    $userquery = "SELECT * FROM `members`";
                    $user_result = $conn->query($userquery);
                    if ($user_result->num_rows > 0) :
                        while($user_row = $user_result->fetch_assoc()) :?>
                        <option data-tokens=""  value="<?= $user_row['id'] ?>"><?= $user_row['email'] ?></option>
                    <?php
                    endwhile;
                    endif;
                    ?>

                  </select>
                  </div>
                  <div class="form-group">
                  <label for="groupId">Docket</label>
                  <select class="selectpicker form-control" data-live-search="true" id="groupId" name="leaderDocket">
                    <option data-tokens="" value="chairman">Chairman</option>
                    <option data-tokens="" value="treasurer">Treasurer</option>
                    <option data-tokens="" value="hospitality">Hospitality</option>
                  </select>
                  </div>
                  <div class="w3-center">
                    <button type="submit" name="Leaders" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>

            </div>

          </div>

          <div id="gallery" class="w3-container event w3-animate-left">
            <div class="row">
              <div class="col-md-3">
                <div class=" w3-border">
                  <img src="images/cu.png" class="activity-image" alt="" height="300">
                </div>
              </div>
              <div class="col-md-8">
                <form action="">
                  <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" placeholder="Enter Title" id="email">
                  </div>
                    <div class="form-group">
                      <form class="form" enctype="multipart/form-data" method="post">
                        <label for="files">Select your files</label>
                        <input type="file"  class="form-control" placeholder="" id="files">
                      </form>
                    </div>
                  <div class="form-group">
                    <label for="Venue">Venue</label>
                    <input type="text" class="form-control" placeholder="Entervenue" id="venue">
                  </div>
                  <div class="w3-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div id="upload" class="w3-container event w3-animate-left">
            <div class="row">
              <div class="col-md-3">
                <div class=" w3-border">
                  <img src="images/cu.png" class="activity-image" alt="" height="300">
                </div>
              </div>
              <div class="col-md-8">
                <form action="">
                  <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" placeholder="Enter Title" id="email">
                  </div>
                  <div class="form-group">
                    <form class="form" enctype="multipart/form-data" method="post">
                      <label for="files">Select your files</label>
                      <input type="file"  class="form-control" placeholder="" id="files">
                    </form>
                  </div>
                  <div class="form-group">
                    <label for="Summary">Summary</label>
                  <textarea id="Summary" class="form-control" name="Summary" rows="3" cols="47" placeholder="something here"></textarea>
                  </div>
                  <div class="w3-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div id="testimonials" class="w3-container event w3-animate-left">
            <div class="row">
              <div class="col-md-10">
                <table class="w3-table w3-striped w3-bordered w3-card-4">
                    <thead>
                    <tr class="w3-blue">
                      <th>Uploaded by</th>
                      <th>Message</th>
                      <th>Admin</th>
                    </tr>
                    </thead>

                      <?php
                      $testimonialquery =  "SELECT members.first_name ,testimonials.message , testimonials.id FROM `testimonials` INNER JOIN  members ON members.email=testimonials.member_id  WHERE testimonials.state IS NULL ";
                      $testimonial_result = $conn->query($testimonialquery);
                      // include 'includes/connection.php';

                      if ($testimonial_result->num_rows > 0) :
                          while($testimonial_row = $testimonial_result->fetch_assoc()):
                             ?>
                             <tr>
                          <td id="uploadBy"><?= $testimonial_row['first_name'] ?></td>
                          <td id="message"><?= $testimonial_row['message'] ?>  </td>
                          <td id="">
                            <form class="form" action="includes/connection.php" method="post">
                             <div class="w3-center">
                               <a href="superAdmin.php?item=testimonial&action=allow&id=<?php echo $testimonial_row['id']; ?>" name="<?php echo "allow".$testimonial_row['id']; ?>" class="w3-btn w3-white w3-border w3-border-green w3-round-xlarge">Allow</a>
                               <a href="superAdmin.php?item=testimonial&action=decline&id=<?php echo $testimonial_row['id']; ?>" name="<?php echo "discard".$testimonial_row['id']; ?>" class="w3-btn w3-white w3-border w3-border-red w3-round-xlarge">Discard</a>
                             </div>
                            </form>
                          </td>
                        </tr>
                      <?php
                      endwhile;
                      endif;
                      ?>

                    </table>
              </div>

            </div>

          </div>

          <div id="semTheme" class="w3-container event w3-animate-left">
            <div class="row">
              <div class="col-md-3">
                <div class=" w3-border">
                  <img src="images/cu.png" class="activity-image" alt="" height="300">
                </div>
              </div>
              <div class="col-md-8">
                <form action="includes/connection.php" method="post">
                  <div class="form-group">
                    <label for="title">Theme</label>
                    <input type="text" name="semTheme" class="form-control" placeholder="Enter Semesters theme" id="email" required>
                  </div>
                    <div class="form-group">
                        <label for="bibleVerse">from</label>
                        <input type="text" name="verse" class="form-control" placeholder="From bible verse" id="bibleVerse" required>
                    </div>
                    <div class="form-group">
                        <label for="semester">Semester</label>
                        <input type="text" name="semester" class="form-control" placeholder="SEM 2 2020" id="semester" required>
                    </div>
                    <div class="w3-center">
                      <button type="submit"  name="theme" class="btn btn-primary">Submit</button>
                    </div>
                </form>
              </div>
            </div>
          </div>

        </div>
      </div>
      </div>
    </div>

   <?php

		   include("includes/footer.php");
		?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="js/superAdmin.js"></script>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/i18n/defaults-*.min.js"></script>
    <script src="assets/js/modalHide.js"></script>
</body>

</html>
