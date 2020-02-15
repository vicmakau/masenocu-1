<?php
if (!session_id()) session_start();
$db = mysqli_connect('localhost', 'root', '', 'masenocu_db');

// $db = mysqli_connect('localhost', 'id12540611_masenocu', 'masenocu', 'id12540611_masenocu_db');
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT `id` FROM `sermons` ORDER BY `date` DESC LIMIT 1";
$latest_sermon_id = mysqli_fetch_assoc(mysqli_query($db, $sql))['id'];

$ministries = array(
  "Media and IT",
  "Praise and Worship",
  "Creative",
  "Hospitality",
  "High School",
  "Instrumentalist",
  "Sunday School",
  "Discipleship",
  "Intercessory"
);

$eveTeams = array("WESO", "NET", "SORET", "CET", "MUBET", "EMUSETA", "NORET", "UET");
?>
<!doctype html>
<html lang="en">
<head>
  <title>Maseno University Christian Union.</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
  <link rel="icon" type="image/png" href="images/cu.png">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/w3.css">
  <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/pagination.css">
  <link rel="stylesheet" href="css/auth.css">
  <!-- separate css for table -->
  <link rel="stylesheet" href="css/sign.css">
  <!-- separate css for login and signup -->
  <link rel="stylesheet" href="css/additive.css">
  <!-- Theme Style -->
  <link rel="stylesheet" href="css/style.css">
</head>
<!-- Collapsible sermon notification panel -->
<div id="sermon-upcoming" class="w3-center  text-white fixed-top" style="background-color: #036d84;  margin-top: 99px; height: max-content;  position: -webkit-sticky;">
    <span>Upcoming Sermons:      </span> 
    <span> FRIDAY FELLOWSHIP: </span>
    <span></span>  <!--topic here-->
    <span>BY </span>  
    <span></span>  <!--speaker here-->
    <span>TIME</span>  
    <span></span>  <!--time here-->
    <span>  |   </span>
    <span> FRIDAY FELLOWSHIP: </span>
    <span></span>  <!--topic here-->
    <span>BY </span>  
    <span></span>  <!--speaker here-->
    <span>TIME</span>  
    <span></span>  <!--time here-->
    <span class="closeBtn ion-android-close"></span>
  </div>
  <!-- end collapsible panel -->

<body>
  
<div class="edited">
  <header role="banner">

    <nav style="float: left;" class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
      <div style="margin: 0px; padding: 0px; width: 100%;" class="container">
        <a class="navbar-brand absolute" href="index.php">
          <img src="images/cu.png" />
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="w3-animate-top collapse navbar-collapse navbar-light" id="navbarsExample05">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item dropdown" class="nav-link">
              <a class="nav-link dropdown-toggle btn-hover-style" href="ministry.php" id="dropdown04" aria-haspopup="true" aria-expanded="false">Ministries</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <?php foreach ($ministries as $k => $ministry) : ?>
                  <a class="dropdown-item" href="ministry.php?&id=<?php echo $k; ?>"><?php echo $ministry; ?></a>
                <?php endforeach; ?>
            </li>
            <li class="nav-item dropdown" class="nav-link" href="ministry.php">
              <a class="nav-link dropdown-toggle btn-hover-style" href="ministry.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Eve Teams</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <?php foreach ($eveTeams as $k => $eveTeam) : ?>
                  <a class="dropdown-item" href="eveteams.php?id=<?php echo $k; ?>"><?php echo $eveTeam; ?></a>
                <?php endforeach; ?>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="sermon.php" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sermons</a>
              <div class="dropdown-menu" aria-labelledby="dropdown05">
                <a class="dropdown-item" href="sermon-single.php?id=<?php echo $latest_sermon_id; ?>">Latest Sermon</a>
                <a class="dropdown-item" href="sermon.php">Past Sermons</a>
              </div>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="events.php">Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <?php
            if (isset($_SESSION['user'])) : ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $_SESSION['user']?></a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <a class="dropdown-item" href="profile.php">Profile</a>
                  <a class="dropdown-item" href="includes/logout.php">Logout</a>
                </div>
              </li>
            <?php else : ?>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
                <!-- <a class="nav-link " href="login.php"><button type="button" class="btn btn-outline-info" >Login</button></a> -->
              </li>
            <?php endif; ?>


          </ul>

        </div>
      </div>
    </nav>

  </header>

  </div> <!--end of edited-->
  </div>

  <!-- <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src = "new.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script> -->

  <!-- <script src="js/main.js"></script> -->