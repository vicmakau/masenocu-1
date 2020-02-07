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
          <a class="nav-link " href="login.php"><button  class="btn btn-outline-info w-25 btnStyle"  > Edit </button></a>
        </div>

      </div>
    </div>
    <div class="col-md-3">
    </div>

  </div>
</body>
