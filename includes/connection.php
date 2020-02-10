
<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'masenocu_db');


  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


  if(isset($_POST['activity'])){
  $actiTitle=$_POST['activityTitle'];
  $actiDate=$_POST['activityDate'];
  $actiCategory=$_POST['activityCategory'];
  $actiVenue=$_POST['activityVenue'];
  $actiSummary=$_POST['activitySummary'];
  $actiTime=$_POST['activityTime'];

  $sql = "INSERT INTO `activities`(`title`, `description`, `date`, `venue`, `category`)
   VALUES ('$actiTitle','$actiSummary','$actiDate $actiTime','$actiVenue','$actiCategory')";

  if ($conn->query($sql) === TRUE) {
    // echo "added succesfully";
      header('location:../superAdmin.php');
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  // $conn->close();
}
// sermon php


  if(isset($_POST['sermon'])){
  $sermonTitle=$_POST['sermonTitle'];
  $sermonDate=$_POST['sermonDate'];
  $sermonAudio=$_POST['sermonAudio'];
  $sermonVideo=$_POST['sermonVideo'];
  $sermonVenue=$_POST['sermonVenue'];
  $sermonDocument=$_POST['sermonDocument'];
  $sermonTime=$_POST['sermonTime'];
  $sermonSpeaker=$_POST['sermonSpeaker'];
  $sermonSummary=$_POST['sermonSummary'];
    // $date=$sermonDate . $sermonTime;
  $sermonsql = "INSERT INTO `sermons`(`title`, `summary`, `date`, `video`, `audio`, `document`, `venue`, `speaker`)
  VALUES ('$sermonTitle','$sermonSummary','$sermonDate $sermonTime','$sermonVideo','$sermonAudio','$sermonDocument','$sermonVenue','$sermonSpeaker')";

  if ($conn->query($sermonsql) === TRUE) {
    // echo "added succesfully";
      header('location:../superAdmin.php');
  } else {
      echo "Error: " . $sermonsql . "<br>" . $conn->error;
  }
  // $conn->close();
}

// Leadership
  if(isset($_POST['Leaders'])){
    $leaderGid=$_POST['leaderGid'];
    $leaderMId=(int)$_POST['leaderMId'];
    $leaderDocket=$_POST['leaderDocket'];
    $leadersql = "INSERT INTO `leaders`( `docket`, `member_id`, `group_id`)
    VALUES ('$leaderDocket',$leaderMId,$leaderGid)";

    if ($conn->query($leadersql) === TRUE) {
        header('location:../superAdmin.php');
    } else {
        echo "Error: " . $leadersql . "<br>" . $conn->error;
    }
  // $conn->close();
  }

  function testimonial($idn){
      $conne = new mysqli('localhost', 'root', '', 'masenocu_db');
      // Check connection

      if ($conne->connect_error) {
          die("Connection failed: " . $conne->connect_error);
      }
     $approve="allow".$idn;
     $disapprove="discard".$idn;
     // var_dump($conne);
     if(isset($_POST[$approve])){
     $sql = "UPDATE `testimonials` SET `state`='allowed' WHERE `id`='$idn' ";
     if ($conne->query($sql) === TRUE) {
       header('location:../superAdmin.php');
     } else {
         echo "Error updating record: " . $conne->error;
         }
       }else if(isset($_POST[$disapprove])){
         $sql = "DELETE FROM `testimonials` WHERE `id`='$idn' ";
           if ($conne->query($sql) === TRUE) {
             $message = "You have succesfully updated";
               echo "<script type='text/javascript'>alert('$message');</script>";
           }else {
               echo "Error updating record: " . $conne->error;
           }
           }
       }


       // semester theme

  if(isset($_POST['theme'])){
     $theme=$_POST['semTheme'];
     $verse=$_POST['verse'];
     $semester=$_POST['semester'];
     $themesql = "INSERT INTO `semester_theme`(`theme`, `bible_verse`, `semester`) VALUES ('$theme','$verse','$semester')";

     if ($conn->query($themesql) === TRUE) {
       // echo "added succesfully";
         header('location:../superAdmin.php');
         echo "<script type='text/javascript'>alert('successfully posted');</script>";

     } else {
         echo "Error: " . $themesql . "<br>" . $conn->error;
     }
     // $conn->close();
   }
  if(isset($_POST['signup'])){
    $memberfirstname=$_POST['memberfirstname'];
    $memberlastname=$_POST['memberlastname'];
    $memberemail=$_POST['memberemail'];
    $memberyos=$_POST['memberyos'];
    $memberphone=$_POST['memberphone'];
    $memberpassword=$_POST['memberpassword'];
    $memberpassword=$_POST['memberpassword'];
    $memberCpassword=$_POST['memberCpassword'];
    if($memberpassword == $memberCpassword){
      $membersql="INSERT INTO `members`(`first_name`, `last_name`, `email`, `phone`, `study_year`,`password`)
       VALUES ('$memberfirstname','$memberlastname','$memberemail','$memberphone','$memberyos','$memberpassword')";
      if ($conn->query($membersql) === TRUE) {
        // echo "added succesfully";
          header('location:../login.php');
      } else {
          header('location:../sign-up.php');
          echo "Error: " . $membersql . "<br>" . $conn->error;
      }
    }else{
      header('location:../sign-up.php');
      echo "Password mismatch" ;
    }
  }

  if (isset($_POST['login'])) {
     echo "0 results";
    $loginemail = $_POST['loginemail'];
    $loginpassword =  $_POST['loginpassword'];
    $loginquery = "SELECT * FROM `members` WHERE `email` = '$loginemail' AND `password` = '$loginpassword'";
    $login_result = $conn->query($loginquery);
    if ($login_result->num_rows > 0) {
     $_SESSION['user']=$loginemail;

        header('location:../index.php');
    }else {
       // echo "0 results";
    }


  }


  // edit profile
  if (isset($_POST['edit'])) {
  $email=$_SESSION['user'];
   $image = $_FILES['image']['name'];
   $course = mysqli_real_escape_string($conn,$_POST['course']);
   $target = "../images/".basename($image);
   $imagename=basename($image);
   $sql = "UPDATE `members` SET `picture`='$imagename' , `course`='$course' WHERE `email`='$email'";

   if ($conn->query($sql) === TRUE) {
     header('location:../profile.php');
     // echo "<script type='text/javascript'>alert('Record updated successfully');</script>";
   } else {
    echo "Error updating record: " . $conn->error;
    }
   if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
   $msg = "Image uploaded successfully";
   echo "<script type='text/javascript'>alert('Image uploaded successfully');</script>";

   }else{
     echo "<script type='text/javascript'>alert('Image failed upload');</script>";
   }
 }
 ?>
