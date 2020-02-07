<style media="screen">
.profile-image{
  border-radius: 50%;
  border: 1px solid grey;
}
.profile-name{
  text-transform: uppercase;
  color: #4a919c;
  font-weight: bold;
}
.profile-email{
  color: #009ab2;
}#property{
  color: black;
  font: 30px;
  font-weight: bold;

}
.hr1{
  color: black;
}
.p-wrapper{
  border-bottom: 1px solid black;
}
.btnStyle
{
  color: #4a919c;
}
.btnStyle:hover
{
  color: white;
}

</style>
<?php
  include 'includes/header.php';
?>
<body>
  <div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-6  pt-5" style="">
      <div class="">
        <div class="w3-center" >
          <div class="" >
              <img src="images/person_6.jpg"  alt="" height="150" width="150" class= "w3-card-2 profile-image ">
          </div>
         <h1 class="profile-name">Booban times</h1>
         <h3 class="profile-email">example@email.com</h3> </p>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="p-wrapper">
              <label for="property "> Name</label>
              <p id="property"> John</p>
            </div>
            <div class="p-wrapper">
              <label for="property "> Name</label>
              <p id="property"> John</p>
            </div>

             <div class="p-wrapper">
                <label for="property "> Name</label>
                <p id="property"> John</p>
              </div>
          </div>
          <div class="col-md-6">
            <div class="p-wrapper">
              <label for="property "> Name</label>
              <p id="property"> John</p>
            </div>
            <div class="p-wrapper">
              <label for="property "> Name</label>
              <p id="property"> John</p>
            </div>

          </div>

        </div>
        <div class="w3-center mt-5">
          <a class="nav-link " href="login.php"><button  class="btn btn-outline-info w-25 btnStyle"  > Edit Profile </button></a>
        </div>
        <hr>

        <!-- collapse for testmial -->

                    <p>
                <button class="btn btn-outline-info w-25 btnStyle" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Add Testimonial
              </button>
            </p>
            <div class="collapse" id="collapseExample">
              <form class="form">
              <div class="form-group">
                <label for="testimonial">Testimonial</label>
                <textarea class="form-control" name="testimonial" id="testimonial" cols="20" rows="5">
                </textarea>
              </div>
              <button class="btn btn-outline-info w-25 btnStyle" type="submit" >Submit</button>
              </form>

          </div>
        <!-- collapse ends herer -->

      </div>
    </div>
    <div class="col-md-3">
    </div>

  </div>
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
