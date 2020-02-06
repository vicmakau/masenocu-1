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


    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
    <style>
    .input{
        width:330px;
        margin:20px;
        /* border:none; */
        /* border-bottom:1px solid black; */
    }
    </style>
</head>


<body style="background-color:rgb(249,242,250);">
    <div style="margin-bottom:110px;">
        <nav class="navbar navbar-light navbar-expand-md fixed-top navigation-clean-button" style="background-color:#6c5b7b;height:100px;">
            <div class="container"><a class="navbar-brand" href="#" style="color:rgb(255,255,255);"><img src="assets/img/cu.png">Maseno Christian Union</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <p class="text-right ml-auto navbar-text" style="color:#ffffff;"><strong>Maseno CU | Admin Panel&nbsp;</strong></p><span class="ml-auto navbar-text actions"> <a class="btn btn-light action-button" role="button" href="#"><strong>Log Out</strong></a></span></div>
    </div>
    </nav>
    </div>
    <div class="container w3-border " style="margin:50px; padding: 50px;">
        <div class="w3-center">
            <h1>Welcome to Admin section</h1>
        </div>
        <div class="w3-center">
            <form action=""  method="post">

            <select name="ministry" id="">
                <option value="Media and it">Media and it</option>
                <option value="Media and it">Hospitality</option>
                <option value="Media and it">instrumentalists</option>
                <option value="Media and it"> High School</option>
            </select>
      <div class="row">
        <div class="col-md-4">
            <input type="text" class="input" name="docket" placeholder="Enter docket name">
        </div>
        <div class="col-md-4"> 
            <input type="text"  class="input" name="name" placeholder="Enter Name"> 
        </div>
        <div class="col-md-4">
            <input type="text"  class="input" name="phone" placeholder="Phone">
        </div>
      </div>
      <button type="submit" class="w3-btn w3-white w3-border-red w3-border w3-hover-purple w3-round-large " name="submit">Submit </button>
      <button type="submit" class="w3-btn w3-white w3-border-red w3-border w3-hover-purple w3-round-large " name="submit">Cancel </button>

            </form>

        </div>

    </div>

   <?php
		
		   include("includes/footer.php");
		?>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/modalHide.js"></script>
</body>

</html>