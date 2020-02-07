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
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">



    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
    <style>
.event {display:none;}
li{
  list-style-type: none;
}
.activity-image {
 width: 100px
}
    </style>
</head>


<body style="background-color:#C8C8C8;">
    <div style="margin-bottom:110px;">
        <nav class="navbar navbar-light navbar-expand-md fixed-top navigation-clean-button" style="background-color:#6c5b7b;height:100px;">
            <div class="container"><a class="navbar-brand" href="#" style="color:rgb(255,255,255);"><img src="assets/img/cu.png">Maseno Christian Union</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <p class="text-right ml-auto navbar-text" style="color:#ffffff;"><strong>Maseno CU | Admin Panel&nbsp;</strong></p><span class="ml-auto navbar-text actions"> <a class="btn btn-light action-button" role="button" href="#"><strong>Log Out</strong></a></span></div>
    </div>
    </nav>
    </div>
    <div class="container w3-border " style="margin:50px; padding: 50px; background:#E2E2E2">
        <div class="w3-center">
            <h1>Welcome to Admin section</h1>
        </div>
      <div class="row">
        <div class="col-md-3"  >
          <nav class="w3-white   w3-border " style="padding:0px;">
              <div class="w3-container w3-center">
                 <h5>Admin Panel</h5>
              <!-- </div><head>

              </head> -->
          <ul style="margin-right:10px; margin-left: 0px;">
            <li>
              <a href="#" class="tablink" onclick="openEvent(event, 'Activities')">Activities</a>
            </li>
            <li>
              <a href="#" class="tablink" onclick="openEvent(event, 'sermon')">Sermon</a>
            </li>
            <li>
              <a href="#" class="tablink" onclick="openEvent(event, 'Leadership')">Leadership</a>
            </li>
            <li  class="tablink"  onclick="openEvent(event, 'gallery')">
              <a href="#" class="">Gallery</a>
            </li>
            <li>
              <a href="#" class="tablink" onclick="openEvent(event, 'upload')">Upload Documents</a>
            </li>
            <li>
              <a href="#" class="tablink" onclick="openEvent(event, 'castMessage')">Cast Message</a>
            </li>
            <li>
              <a href="#" class="tablink" onclick="openEvent(event, 'testimonials')">Review testiomonials</a>
            </li>
            <li>
              <a href="#" class="tablink" onclick="openEvent(event, 'semTheme')">Semesters Theme</a>
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
                <form action="">
                  <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" placeholder="Enter Title" id="email">
                  </div>
                  <div class="form-group">
                    <label for="pwd">Date</label>
                    <input type="date" class="form-control" placeholder="Enter Date" id="pwd">
                  </div>
                  <div class="form-group">
                    <label for="Venue">Venue</label>
                    <input type="text" class="form-control" placeholder="Entervenue" id="venue">
                  </div>
                  <div class="form-group">
                    <label for="Summary">Summary</label>
                  <textarea id="Summary" class="form-control" name="Summary" rows="3" cols="47" placeholder="something here"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>

            </div>

          </div>

          <div id="sermon" class="w3-container event w3-animate-opaevent">
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
                    <label for="pwd">Date</label>
                    <input type="date" class="form-control" placeholder="Enter Date" id="pwd">
                  </div>
                  <div class="form-group">
                    <label for="Venue">Venue</label>
                    <input type="text" class="form-control" placeholder="Entervenue" id="venue">
                  </div>
                  <div class="form-group">
                    <label for="audio">Audio url</label>
                    <input type="text" class="form-control" placeholder="Enter audio url" id="audio">
                  </div>
                  <div class="form-group">
                    <label for="Video">Video url</label>
                    <input type="text" class="form-control" placeholder="Enter Video url" id="Video">
                  </div>
                  <div class="form-group">
                    <label for="pdf">Pdf url</label>
                    <input type="text" class="form-control" placeholder="Enter pdf url" id="pdf">
                  </div>
                  <div class="form-group">
                    <label for="Summary">Summary</label>
                  <textarea id="Summary" class="form-control" name="Summary" rows="3" cols="47" placeholder="something here"></textarea>
                  </div>
                  <div class="w3-center">
                    <button type="" class="btn btn-primary">Preview</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>

                </form>
              </div>

            </div>
          </div>

          <div id="castMessage" class="w3-container  event w3-animate-zoom">
            <div class="row">
              <div class="col-md-8">
                <form action="">
                  <label for="sel1">Select list:</label>
                    <select class="form-control" id="sel1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                    </select>
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
                <form action="">
                  <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" placeholder="Enter Title" id="email">
                  </div>
                  <div class="form-group">
                    <label for="pwd">Date</label>
                    <input type="date" class="form-control" placeholder="Enter Date" id="pwd">
                  </div>
                  <div class="form-group">
                    <label for="Venue">Venue</label>
                    <input type="text" class="form-control" placeholder="Entervenue" id="venue">
                  </div>
                  <div class="form-group">
                    <label for="Summary">Summary</label>
                  <textarea id="Summary" class="form-control" name="Summary" rows="3" cols="47" placeholder="something here"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
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

                  <button type="submit" class="btn btn-primary">Submit</button>
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
                    <tr>
                      <td id="uploadBy">Jill</td>
                      <td id="message"> Lorem ipsum dolor sit amet, consectetur  </td>
                      <td id="">
                        <form class="form" action="" method="post">
                         <div class="w3-center">
                           <button class="w3-btn w3-white w3-border w3-border-green  w3-round-xlarge">Allow</button>
                           <button class="w3-btn w3-white w3-border w3-border-red   w3-round-xlarge">Discard</button>
                         </div>
                        </form>

                      </td>
                    </tr>
                    <tr>
                      <td id="uploadBy">Jill</td>
                      <td id="message"> Lorem ipsum dolor sit amet, consectetur  </td>
                      <td id="">
                        <form class="form" action="" method="post">
                         <div class="w3-center">
                           <button class="w3-btn w3-white w3-border w3-border-green  w3-round-xlarge">Allow</button>
                           <button class="w3-btn w3-white w3-border w3-border-red   w3-round-xlarge">Discard</button>
                         </div>
                        </form>

                      </td>
                    </tr>
                    <tr>
                      <td id="uploadBy">Jill</td>
                      <td id="message"> Lorem ipsum dolor sit amet, consectetur  </td>
                      <td id="">
                        <form class="form" action="" method="post">
                         <div class="w3-center">
                           <button class="w3-btn w3-white w3-border w3-border-green  w3-round-xlarge">Allow</button>
                           <button class="w3-btn w3-white w3-border w3-border-red   w3-round-xlarge">Discard</button>
                         </div>
                        </form>

                      </td>
                    </tr>
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
                <form action="">
                  <div class="form-group">
                    <label for="title">Theme</label>
                    <input type="text" class="form-control" placeholder="Enter Title" id="email">
                  </div>
                    <div class="form-group">
                        <label for="bibleVerse">from</label>
                        <input type="text"  class="form-control" placeholder="" id="bibleVerse">
                    </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
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
    <script>
    function openEvent(evt, eventType) {
      var i, x, tablinks;
      x = document.getElementsByClassName("event");
      for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablink");
      for (i = 0; i < x.length; i++) {
         tablinks[i].classList.remove("w3-red");
      }
      document.getElementById(eventType).style.display = "block";
      evt.currentTarget.classList.add("w3-red");
    }
    </script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/i18n/defaults-*.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/modalHide.js"></script>
</body>

</html>
