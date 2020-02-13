<?php
if(!session_id()) session_start();
include 'serverconnection.php';
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
      exit();
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
          exit();
    } else {
        echo "Error: " . $leadersql . "<br>" . $conn->error;
    }
  // $conn->close();
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
    $memberpassword=md5($_POST['memberpassword']);
    $memberCpassword=md5($_POST['memberCpassword']);
    if($memberpassword == $memberCpassword){
  	$sql_e = "SELECT * FROM members WHERE email='$memberemail'";
  	$res_e = mysqli_query($conn, $sql_e);

  	if (mysqli_num_rows($res_e) > 0) {
  	  $error = "Sorry... email already taken try again!!!!";

  	}else{
      $membersql="INSERT INTO `members`(`first_name`, `last_name`, `email`, `phone`, `study_year`,`password`)
       VALUES ('$memberfirstname','$memberlastname','$memberemail','$memberphone','$memberyos','$memberpassword')";
     }
      if ($conn->query($membersql) === TRUE) {
        // echo "added succesfully";
          header('location:../login.php');
          exit();
      } else {
      echo "Error: " . $membersql . "<br>" . $conn->error;
          header('location:../sign-up.php');
          exit();
      }
    }else{
      header('location:../sign-up.php');
      echo "Password mismatch" ;
    }
  }
//  user login backend
  if (isset($_POST['login'])) {
    $loginemail = $_POST['loginemail'];
    $loginpassword =  md5($_POST['loginpassword']);
    $loginquery = "SELECT * FROM `members` WHERE `email` = '$loginemail' AND `password` = '$loginpassword'";
    $login_result = $conn->query($loginquery);
    if ($login_result->num_rows > 0) {
      while ($row = $login_result->fetch_assoc()) {
        $_SESSION['user']=$loginemail;
        $_SESSION['id'] = $row['id'];
        if(isset($_SESSION['user'])){
        header('location:../index.php');
        exit();
        }
      }
    }else {
       // echo "0 results";
    }
  }


  // admin login backend
  if (isset($_POST['adminlogin'])) {
    $adminemail = $_POST['adminemail'];
    $adminpassword =  md5($_POST['adminpassword']);
    $adminquery = "SELECT * FROM `members` WHERE `email` = '$adminemail' AND `password` = '$adminpassword' AND  `role`='admin'";
    $admin_result = $conn->query($adminquery);
    if ($admin_result->num_rows > 0) {
      while ($row = $admin_result->fetch_assoc()) {
        $_SESSION['user']=$adminemail;
        $_SESSION['id'] = $row['id'];
        if(isset($_SESSION['user'])){
        header('location:../index.php');
        exit();
        }
      }
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
// testimonials approvals
 if (isset($_GET['item']) && $_GET['item'] === 'testimonial') {
   $id = $_GET['id'];
   if ($_GET['action'] === 'allow') {
     $sql = "UPDATE testimonials SET state = 'allowed' WHERE id = $id";
   } else if ($_GET['action'] === 'decline') {
     $sql = "DELETE FROM testimonials WHERE id = $id";
   }

   if ($conn->query($sql) === TRUE) {
     header('location:superAdmin.php?tab=testimonials');
     exit();
   }
 }


// add testimonials
 if(isset($_POST['sub-testimonial'])){
   $message=$_POST['testimonial'];
   $ide =  $_SESSION['user'] ;
     $testimonialsql="INSERT INTO `testimonials`( `member_id`, `message`) VALUES ('$ide','$message')";
     if ($conn->query($testimonialsql) === TRUE) {
       echo "<script type='text/javascript'>alert('Testimonial added succesfully.Please wait for approval.');</script>";

         header('location:../profile.php');
         exit();
     } else {
     // echo "Error: " . $testimonialsql . "<br>" . $conn->error;
     echo "<script type='text/javascript'>alert('Testimonial failed to upload');</script>";
    }
   }

 ?>
