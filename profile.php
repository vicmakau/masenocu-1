<?php
  include 'includes/header.php';
  include 'includes/serverconnection.php';

  $user= $_SESSION['user'];
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
     // echo "0 results";

?>
<body class="body w3-center" style="margin-top:60px">
  <div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-6  pt-5" style="">
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
              <p  id="property"> <?= $membercourse ?? 'Edit to add' ?></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-wrapper">
               <label class="profile-label" for="property "> Ministry</label>
               <p  id="property"> <?= $memberteam ?? 'Edit to add' ?></p>
             </div>
             <div class="p-wrapper">
                <label   class="profile-label"for="property "> Eve team</label>
                <p   id="property"> <?= $memberteam ?? 'Edit to add' ?></p>
              </div>

          </div>

        </div>
        <div class="w3-center mt-3 ">
          <a class="nav-link " onclick="openForm()"><button  class="btn btn-outline-info w-40 btnStyle"> Edit Profile </button></a>
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
          </div>
        <!-- collapse ends herer -->

      </div>
    </div>
    <div class="col-md-3">
    </div>

  </div>

  <!-- pop up login -->
  <div class="form-popup" id="myForm">
  <form method="POST" action="includes/connection.php" autocomplete="off" enctype="multipart/form-data" class="form-container">
    <h1>Edit</h1>

    <label for="email"><b></b></label>
    <input type="file" class="form-control" name="image" required>

    <label for="course"><b>Course</b></label>
    <input type="text" placeholder="Enter your Course" name="course" required>

    <button type="submit" name="edit" class="btn btn-outline-info w-40 btnStyle">Finish</button>
    <button type="submit" class="btn btn-outline-info w-40 btnStyle" onclick="closeForm()">Close</button>
  </form>
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

<script src="js/main.js"></script>
</body>
