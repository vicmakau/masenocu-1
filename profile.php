<?php
  include 'includes/header.php';
  include 'includes/serverconnection.php';

  $user= $_SESSION['user'];
  $user_id = $_SESSION['user_id'];
  $profilquery = "SELECT * FROM `members` WHERE `email` ='$user'";
  $profil_result = $conn->query($profilquery);
  if ($profil_result->num_rows > 0) {
   while ($row=$profil_result->fetch_assoc()) {
    $memberfirstname=$row['first_name'];
    $memberlastname=$row['last_name'];
    $memberemail=$row['email'];
    $memberphone=$row['phone'];
    $membercourse=$row['course'];
    $memberteam=$row['eve_team_id'];
    $dbimage="images/".$row['picture'];
   }
  }

  $sql = "SELECT name FROM groups WHERE id = $memberteam";
  $eve_team_result = $conn->query($sql);
  if ($eve_team_result->num_rows > 0) {
    $row=$eve_team_result->fetch_assoc();
    $membereveteam=$row['name'];
  }

  $member_ministries = [];
  $member_ministry_ids = [];
  $sql = "SELECT groups.id, groups.name AS name from member_ministries LEFT JOIN groups ON member_ministries.ministry_id = groups.id WHERE member_id = $user_id"; 
  $ministries_result = $conn->query($sql);
  if ($ministries_result->num_rows > 0) {
    while($row=$ministries_result->fetch_assoc()){
      array_push($member_ministry_ids, $row['id']);
      array_push($member_ministries, $row['name']);
    }
  }
  $member_ministries = implode(', ', $member_ministries);
     // echo "0 results";

  include 'includes/editprofile.php';
?>
<body class="body w3-center" style="margin-top:60px">
  <div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-6  pt-5" >
      <div class="">
        <div class="w3-center" >
          <div class="" >
              <img src="<?= $dbimage ?? 'images/person_6.jpg' ?>"  alt="" height="150" width="150" class= "w3-card-2 profile-image ">
          </div>
         <h1 class="profile-name"><?= $memberfirstname ."  ".$memberlastname ?></h1>
         <h3 class="profile-email"><?= $memberemail ?></h3> </p>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="p-wrapper">
              <label class="profile-label" class="profile-labe1" for="property "> Phone</label>
              <p  id="property"> <?= $memberphone ?> </p>
            </div>
            <div class="p-wrapper">
              <label class="profile-label" for="property "> Course </label>
              <p  id="property"> <?= $membercourse === ''? 'Edit to add': $membercourse ?></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-wrapper">
               <label class="profile-label" for="property "> Eve Team</label>
               <p  id="property"> <?= $membereveteam ?? 'Edit to add' ?></p>
             </div>
             <div class="p-wrapper">
                <label   class="profile-label"for="property "> Ministries</label>
                <p   id="property"> <?= $member_ministries === ''? 'Edit to add': $member_ministries; ?></p>
              </div>

          </div>

        </div>
        <div class="w3-center mt-3 ">
          <a class="nav-link"><button  class="btn btn-outline-info w-40 btnStyle"  data-toggle="modal" data-target="#myModal"> Edit Profile </button></a>
        </div>

        <p>
         <button class="btn btn-outline-info w-30  mt-0" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Add Testimonial
              </button>
            </p>
            <div class="collapse" id="collapseExample">
              <form class="form" method="post" action="includes/connection.php">
              <div class="form-group">
                <label for="testimonial">Testimonial</label>
                <textarea class="form-control" name="testimonial" id="testimonial" cols="20" rows="5">
                </textarea>
              </div>
              <button class="btn btn-outline-info w-25 btnStyle" type="submit" name="sub-testimonial">Submit</button>
              </form>
          </div>        <!-- collapse ends herer -->

      </div>
    </div>
    <div class="col-md-3">
    </div>

  </div>


  <!-- pop up login -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
    <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
    <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214" /></svg></div>
<script  src="js/auth.js">

</script>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/jquery-migrate-3.0.0.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/i18n/defaults-*.min.js"></script>

<script src="js/main.js"></script>
</body>
